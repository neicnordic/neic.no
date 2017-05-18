
if(document.getElementById("calendar-events-list")) {

  var calendarEventsVue = new Vue({
    el: '#calendar-events-list',
    data: {
      events: [],
      highlights: [],
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var myVue = this;
      var calendarName = '';
      var hashtags = [];
      var past = false;
      if (this.$el.dataset) {
        calendarName = this.$el.dataset.calendarName;
        past = this.$el.dataset.past;
        if (this.$el.dataset.hashtags) {
          hashtags = this.$el.dataset.hashtags.replace(/\s/g,'').toLowerCase().split(",");
        }
      }
      $.getJSON(GCal.apiURL(past, calendarName), response => {
        myVue.events = GCal.getMatchingEvents(response, hashtags);
        if (past){
          myVue.events.reverse()
        }
        myVue.highlights = []
        for (var i in myVue.events) {
          if (myVue.events[i].hashtags.indexOf("highlight") != -1) {
            myVue.highlights.push(myVue.events[i])
          }
        }
        Vue.nextTick(function(){
          $("#" + myVue.$el.id + " .read-more-block").readmore({
            speed: 500,
            collapsedHeight: 0,
          });
          anchors.add();
        });
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
        myVue.upcoming = GCal.getMatchingEvents(response, outreachTags);
        Vue.nextTick(function(){
          $("#" + myVue.$el.id + " .read-more-block").readmore({speed: 500, collapsedHeight: 0});
          anchors.add();
        });
      });
      $.getJSON(GCal.apiURL(true), response => {
        myVue.past = GCal.getMatchingEvents(response, outreachTags).reverse();
        Vue.nextTick(function(){
          $("#" + myVue.$el.id + " .read-more-block").readmore({speed: 500, collapsedHeight: 0});
          anchors.add();
        });
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
        Vue.nextTick(function(){
          $("#" + myVue.$el.id + " .read-more-block").readmore({speed: 500, collapsedHeight: 0});
          anchors.add();
        });
      });
    }
  });

}
