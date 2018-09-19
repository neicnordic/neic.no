
/*
  Retrieve, filter and preprocess events from a google calendar, return list of objects.

  You probably want to do something like this:
  $.getJSON(GCal.apiURL(...), response => {
    var events = GCal.getMatchingEvents(...);
    // Do somthing sensible with the events.
  )}

  See eventInfo() for more info on events returned.
*/

var GCal = {

  /*
    Return the api url to get (optionally past) events from a calendar of choice.

    See this.calendars for accepted calendar names.
  */
  apiURL(past = false, calendarName = "neic-events") {
    return this.formatApiURL(
      this.calendars[calendarName].id,
      this.calendars[calendarName].key,
      past ? null : new Date(),
      past ? new Date() : null
    )
  },

  /*
    Google now supports HTML in event descriptions, whether you want it or not,
    allows pasting of arbitrary format html content (<section>, <span style=...>,
    <p> etc) and introduces re-parsing errors upon multiple edits (text urls
    become <a href="theurl"> tags, which then become
    <a href="google.com/clicksnoop?url=theurl"> etc).

    This deletes everything except visible text, and does minimal effort to
    preserve line breaks.
  */
  sanitizeGoogleEventDescription(description) {
    var d = description || "";
    if (d.indexOf('<') >= 0) {
      d = d.replace(/<br>/g, '\n').replace(/<p>/g, '').replace(/<\/p>/g, '\n\n')
      d = $("<div>" + d + "</div>").text();
    }
    return d;
  },

  eventInfo(event, hashtags, linkPrefs = this.defaultLinkPrefs) {
    var eventDescriptionHTML = this.linkify(this.sanitizeGoogleEventDescription(event.description));
    return {
      title: this.title(event),
      hashtags: this.hashtags(event),
      dates: this.dates(event),
      url: this.url(event, linkPrefs),
      calendarUrl: this.googleCalendarEventURL(event),
      blurb: this.blurb(eventDescriptionHTML),
      details: this.details(eventDescriptionHTML)

    }
  },

  calendars: {
    "neic-events": {
      id: "sdmmpsbtk54hdvob60rjhfnnvo%40group.calendar.google.com",
      key: "AIzaSyCgPT9r5VFeFpxFkcPNCR7ae-wAnGE9684",
    },
    "neic-training": {
      id: "ouebfn9g5muu6l7vjd9hhf0lp4%40group.calendar.google.com",
      key: "AIzaSyCgPT9r5VFeFpxFkcPNCR7ae-wAnGE9684",
    },
    "neic-holidays": {
      id: "di1668kvlsi4trgvru4nf97oh0@group.calendar.google.com",
      key: "AIzaSyCgPT9r5VFeFpxFkcPNCR7ae-wAnGE9684",
    },
  },

  defaultLinkPrefs: [
    'webpage',
    'website',
    'homepage',
    'more information',
    'more info',
    'site',
    'event',
    'info',
    'wikipage',
    'wiki',
    'googlecalendar'
  ],

  /*
    Return a list of the hashtags given in the event description.
  */
  hashtags(event) {
    var tags = [];
    var match;
    var r = /(^|\s)#(\w[\w-]*)(?=\s|$)/g;
    while (match = r.exec(event.description || "")) {
      tags.push(match[2].toLowerCase());
    }
    return tags
  },

  /*
    Return true if event has all the given hashtags.
  */
  hasHashtags(event, hashtags) {
    var eventTags = this.hashtags(event);
    for (var i in hashtags) {
      if (eventTags.indexOf(hashtags[i]) == -1) {
        return false
      }
    }
    return true
  },

  title(event) {
    return event.summary;
  },

  /*
    Return preferred URL (if given in the description) to more info on the event.

    URLS must be given in the event description, on the form:
    <keyword or expression in linkPrefs> <COLON> <url> (any additional text ignored)

    URLs must start with the protocol http:// or https://.

    Examples:
    more info: https://neic.no
    MORE INFO: https://neic.no/training/upcoming including dates!
    Website: http://neic.no/tryggve
  */
  url(event, linkPrefs = this.defaultLinkPrefs) {
    for (var j in linkPrefs) {
      var pref = linkPrefs[j];
      if (pref == "googlecalendar") {
        return event.htmlLink;
      }
      var r = new RegExp('^\\s*' + pref + '\\s*:\\s*(https?:\\/\\/\\S+?)\\.?([\\s\\n]|$)', 'mi');
      match = (event.description || "").match(r);
      if (match) {
        return match[1];
      }
    }
  },

  googleCalendarEventURL(event) {
    return event.htmlLink;
  },

  /*
    Return the event description as HTML with URLs replaced by clickable links.

    Use repl to define how links will be generated ($1 is the url).
  */
  linkify(eventDescription) {
    var http_s = /(https?:\/\/\S+?)(\.?([\s\n]|$))/gi;
    var email = /([A-Za-z1-9-._]+@[A-Za-z1-9-._]+\.[A-Za-z1-9]+)/gi;
    return eventDescription
      .replace(http_s, '<a href="$1" target="_blank">$1</a>$2')
      .replace(email, '<a href="mailto:$1">$1</a>');
  },

  /*
    Return first line of the event description.
  */
  blurb(eventDescription) {
    return eventDescription.split('\n')[0];
  },

  /*
    Return remaining lines of the description (if any).
  */
  details(eventDescription) {
    m = eventDescription.match(/(.*(\n+([\s\S]+))?)/m);
    if (m && m[3]) {
      return m[3].replace(/\n/g, '<br/>\n')
        .replace(/^ +/gm, function(x){ return new Array(x.length + 1).join('&nbsp;') });
    }
    return ""
  },

  /*
    Return start and end dates as an object:
    {
      start: "YYYY-MM-DD",
      end: "YYYY-MM-DD" or null (if same as start)
    }
  */
  dates(event) {
    var date = {
      start: (event.start.date || event.start.dateTime).split('T')[0],
      end: (event.end.date || event.end.dateTime).split('T')[0],
    };
    var d = new Date(date.end);
    d.setDate(d.getDate() - 1);
    if (d <= new Date(date.start)) {
      date.end = null;
    } else {
      date.end = d.toISOString().split('T')[0];
    }
    return date
  },

  formatApiURL(calendarId, key, timeMin, timeMax) {
    var url = "https://www.googleapis.com/calendar/v3/calendars/" + calendarId
      + "/events?key=" + (key || this.defaultAuthKey)
      + "&orderBy=startTime&singleEvents=true"

    if (timeMax) {
      url = url + "&timeMax=" + timeMax.toISOString(); //new Date().toISOString();
    }
    if (timeMin) {
      url = url + "&timeMin=" + timeMin.toISOString();
    }

    return url
  },

  getMatchingEvents(response, hashtags) {
    var matchingEvents = [];
    for (var i in response.items) {
      if (this.hasHashtags(response.items[i], hashtags)) {
        matchingEvents.push(this.eventInfo(response.items[i]));
      }
    }
    return matchingEvents
  },


}
