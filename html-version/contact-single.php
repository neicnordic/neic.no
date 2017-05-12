<?php include "header.php"; ?>
<div class="body">   
  <section class="contact">
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
         var myLatLng = {lat: 59.921442, lng: 10.736181};
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 17,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          streetViewControl: false,
          mapTypeControl: false,
          styles: [{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]}]

        });
         var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeiE2rX4QPPoAfyW26GIdInRHDPmTBymU&callback=initMap"
    async defer></script>
    <div class="contact-map-box">
      <div class="container">
        <div class="col-md-9">
        <div class="row">
          <div class="address">STENSBERGGATA 25, 0170 OSLO</div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="row">
          <a href="#" class="map-btn white-hover-btn">Go to map</a>
        </div>
        </div>
      </div>
    </div>
  	<div class="container">
    <div class="contact-details-block">
      <h2>NEIC TEAM AND CONTACT</h2>
      <p>We are a distributed organisation consisting of administration and technical experts working at NordForsk, university IT-centres, and national e-infrastructure centers in the Nordics.university IT-centres, and national e-infrastructure centers in the Nordics.</p>
      <h6>FIND US</h6>
      <p>Find the entrance with NordForsk signage, door 25A, 8<sup>th</sup> floor.</p>
    </div>
    <div class="team">
      <div class="team-nav-bar">
        <div class="left-bar"><a href="#" class="back-btn">Back to all</a></div>
        <div class="right-bar">
          <form>
            <div class="form-group">
              <label for="sel1">Filter by:</label>
              <select class="form-control custom" id="sel1">
                <option>All</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="contact-persion">
        <div class="contact-photo">
          <img src="images/user.png" />
        </div>
        <div class="contact-persion-data">
          <p class="name">GUDMUND HØST</p>
          <p class="location">NordForsk Norway</p>
          <p class="email"><a href="mailto:Gudmund.Host@nordforsk.org">Gudmund.Host@nordforsk.org</a></p>
          <p class="phone"><a href="tel:4795816846">+47 95 81 68 46</a></p>
          <hr>
          <p class="head">ENGAGEMENTS</p>
          <p class="top">NeIC office</p>
          <p class="no-space"><span class="color">Executive team, Director</span></p>
          <p class="no-space"><span class="color">Board, Ex officio, non-voting</span></p>
          <p class="no-space"><span class="color">Provider forum, Observer</span></p>
          <p class="top">NeIC 2017 Conference</p>
          <p class="no-space"><span class="color">Steering group, Project owner, Chair</span></p>
          <p class="top">Project analysis</p>
          <p class="no-space"><span class="color">Governance</span></p>
          <p class="no-space"><span class="color">Management, Project owner</span></p>
          <p class="head-p">Post Engagements</p>
          <p class="top">NeIC office</p>
          <p class="no-space"><span class="color">Executive team, Director</span></p>
          <p class="no-space"><span class="color">Board, Ex officio, non-voting</span></p>
          <p class="no-space"><span class="color">Provider forum, Observer</span></p>
          <p class="top">NeIC 2017 Conference</p>
          <p class="no-space"><span class="color">Steering group, Project owner, Chair</span></p>
          <p class="top">Project analysis</p>
          <p class="no-space"><span class="color">Governance</span></p>
          <p class="no-space"><span class="color">Management, Project owner</span></p>
        </div>
      </div>
      
    </div>
  		
  	</div>
  </section>
</div>
<?php include "footer.php"; ?>