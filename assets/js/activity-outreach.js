if(document.getElementById("activity-outreach")) {

  var activity_outreach = new Vue({
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
