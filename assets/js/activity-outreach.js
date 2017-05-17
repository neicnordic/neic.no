if(document.getElementById("activity-outreach")) {

  var activity_outreach = new Vue({
    el: '#activity-outreach',
    data: {
      events: []
    },
    delimiters: ["{[", "]}"],
    mounted: function () {
      var outreachTags = this.$el.dataset.outreachTags.replace(/\s/g,'').toLowerCase().split(",");
      var apiURL = GCal.apiURL(
        "sdmmpsbtk54hdvob60rjhfnnvo%40group.calendar.google.com",
        "AIzaSyCgPT9r5VFeFpxFkcPNCR7ae-wAnGE9684",
        new Date(),
        null);
      var myVue = this;
      $.getJSON(apiURL, response => {
        myVue.events = GCal.getMatchingEvents(response, outreachTags);
      });
    }
  });

}
