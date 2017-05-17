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
