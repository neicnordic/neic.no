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
        <div class="left-bar"><p class="c-head">The Team</p></div>
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
      <div class="team-list-block">
      <div class="col-md-6">
      <div class="row">
      <div class="left-team">
          <h4>DENMARK</h4>
          <ul>
          <li><div class="left-text">Ali Syed</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Bartlomiej Wilkowski</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Christian Ulrik Søttrup</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Erland Hochheim</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Gerd Behrmann</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Henrik Pedersen</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Jeppe Klok Due</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Jørgen Beck Hansen</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Josva Kleist</div><div class="right-text">Sigma2</div></li>
          <li><div class="left-text">Kurt Gammelgaard Nielsen</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Lene Krøl Andersen</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Peter Løngreen</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Petter Urkedal</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Piotr Chmura</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Steen Pedersen</div><div class="right-text">CCS</div></li>
          </ul>
          <h4>FINLAND</h4>
          <ul>
          <li><div class="left-text">Antti Pursula</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Dan Still</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Erik Edelmann</div><div class="right-text">Sigma2</div></li>
          <li><div class="left-text">Ilkka Lappalainen</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Jaakko Leinonen</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Juha Tornroos</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Jussi Enkovaara</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Jussi Heikonen</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Marjut Salokannel</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Matti Kankainen</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Pekka Lehtovuori</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Stina Westman</div><div class="right-text">Sigma2</div></li>
          <li><div class="left-text">Tomas Lindén</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Tomasz Malkiewicz</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Tommi Nyrönen</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Ulf Tigerstedt</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Ville Savolainen</div><div class="right-text">CPR</div></li>
          </ul>
          <h4>ICELAND</h4>
          <ul>
          <li><div class="left-text">Baldur Eiríksson</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Jon Ingi Einarsson</div><div class="right-text">NordForsk</div></li>
          </ul>
          <h4>USA</h4>
          <ul>
          <li><div class="left-text">Rob Pennington</div><div class="right-text">UiO</div></li>
          </ul>
      </div>
      </div>
      </div>
      <div class="col-md-6">
      <div class="row">
      <div class="right-team">
          <h4>NORWAY</h4>
          <ul>
          <li><div class="left-text">Abdulrahman Azab</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Andreas Jaunsen</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Dmytro Karpenko</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Eivind Hovig</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Farid Ould Saada</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Francesca Iozzi</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Gard Thomassen</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Gudmund Høst</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Gunnar Bøe</div><div class="right-text">Sigma2</div></li>
          <li><div class="left-text">Hans A. Eide</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Håvard Helstrup</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Inge Jonassen</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Kine Nordstokkå</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Maiken Pedersen</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Pål Pettersen</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Radovan Bast</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Vigdis Guldseth</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Xiaxi Li</div><div class="right-text">Sigma2</div></li>
          </ul>
          <h4>SWEDEN</h4>
          <ul>
          <li><div class="left-text">Anders Larsson</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Ann-Charlotte Sonnhammer</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Bengt Persson </div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Dejan Vitlacil</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Frédéric Haziza</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Hans Karlsson</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Jens Larsson</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Joachim Hein</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Joel Hedlund</div><div class="right-text">Sigma2</div></li>
          <li><div class="left-text">Johan Viklund</div><div class="right-text">CBS</div></li>
          <li><div class="left-text">Jonas Hagberg</div><div class="right-text">SSI</div></li>
          <li><div class="left-text">Karin Sundström</div><div class="right-text">NBI</div></li>
          <li><div class="left-text">Maria Nilsson</div><div class="right-text">KU</div></li>
          <li><div class="left-text">Mathias Lindberg</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Mattias Wadenstein</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Michaela Barth</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Mikael Rännar</div><div class="right-text">UiO</div></li>
          <li><div class="left-text">Niclas Jareborg</div><div class="right-text">CPR</div></li>
          <li><div class="left-text">Oxana Smirnova</div><div class="right-text">CCS</div></li>
          <li><div class="left-text">Pontus Freyhult</div><div class="right-text">NordForsk</div></li>
          <li><div class="left-text">Richard Brenne</div><div class="right-text">UiO</div></li>
          </ul>
      </div>
      </div>
      </div>
      <div class="clearfix"></div>
      </div>

    </div>

        </div>
  </section>
</div>
<?php include "footer.php"; ?>