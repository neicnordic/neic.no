if(document.getElementById("frontpage-events-summary")) {

  var frontpageEventsSummaryVue = new Vue({
    el: '#frontpage-events-summary',
    data: {
      events: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var myVue = this;
      $.getJSON(GCal.apiURL(), response => {
        myVue.events = GCal.getMatchingEvents(response);
        Vue.nextTick(function(){ anchors.add() });
      });
    }
  });

}

if(document.getElementById("upcoming-events-list")) {

  var upcomingEventsVue = new Vue({
    el: '#upcoming-events-list',
    data: {
      events: [],
      highlights: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var myVue = this;
      $.getJSON(GCal.apiURL(), response => {
        myVue.events = GCal.getMatchingEvents(response, []);
        myVue.highlights = []
        for (var i in myVue.events) {
          if (myVue.events[i].hashtags.indexOf("highlight") != -1) {
            myVue.highlights.push(myVue.events[i])
          }
        }
        Vue.nextTick(function(){ anchors.add() });
      });
    }
  });

}

if(document.getElementById("past-events-list")) {

  var pastEventsVue = new Vue({
    el: '#past-events-list',
    data: {
      events: [],
      highlights: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var myVue = this;
      $.getJSON(GCal.apiURL(true), response => {
        myVue.events = GCal.getMatchingEvents(response, []).reverse();
        myVue.highlights = []
        for (var i in myVue.events) {
          if (myVue.events[i].hashtags.indexOf("highlight") != -1) {
            myVue.highlights.push(myVue.events[i])
          }
        }
        console.log(myVue.highlights);
        Vue.nextTick(function(){ anchors.add() });
      });
    }
  });

}

if(document.getElementById("activity-outreach")) {

  var activityOutreachVue = new Vue({
    el: '#activity-outreach',
    data: {
      upcoming: [],
      past: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var outreachTags = this.$el.dataset.outreachTags.replace(/\s/g,'').toLowerCase().split(",");
      var myVue = this;
      $.getJSON(GCal.apiURL(), response => {
        myVue.events = GCal.getMatchingEvents(response, outreachTags);
        Vue.nextTick(function(){ anchors.add() });
      });
      $.getJSON(GCal.apiURL(true), response => {
        myVue.past = GCal.getMatchingEvents(response, outreachTags).reverse();
        Vue.nextTick(function(){ anchors.add() });
      });
    }
  });

}

if(document.getElementById("publications-list")) {

  var publicationsVue = new Vue({
    el: '#publications-list',
    data: {
      publications: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var myVue = this;
      var cal = GCal.calendars["neic-events"]
      $.getJSON(GCal.formatApiURL(cal.id, cal.key), response => {
        myVue.publications = GCal.getMatchingEvents(response, ["publication", "highlight"]);
        Vue.nextTick(function(){ anchors.add() });
      });
    }
  });

}
