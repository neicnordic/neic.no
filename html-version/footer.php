<!--   <section class="cookies">
	<div class="container">
		<div class="col-md-10">
		<div class="row"><p>NeIC uses cookies to give you the best experience on our website.</p></div>
		</div>
		<div class="col-md-2">
		<div class="row">
		<a href="#" class="cookies-ok white-hover-btn">OK</a>
		</div>
		</div>
	</div>
  </section> -->
  <footer>
	<div class="container">
		<div class="col-md-6 col-sm-8">
		<div class="row">
			<div class="col-md-6 col-sm-6"><div class="row">
				<h4>CONTACT US</h4>
				<p><a href="tel:4747614400">+47 476 14 400</a></p>
				<p><a href="mailto:paal.pettersen@nordforsk.org">paal.pettersen@nordforsk.org</a></p>
				<p><a href="mailto:gudmund.host@nordforsk.org">gudmund.host@nordforsk.org</a></p>
			</div></div>
			<div class="col-md-6 col-sm-6"><div class="row">
				<h4>ADDRESS</h4>
				<p>NeIC</p>
				<p>c/o NordForsk</p>
				<p>Stensberggata 25</p>
				<p>NO-0170 Oslo</p>
			</div></div>
		</div>
		</div>
		<div class="col-md-6 col-sm-4">
		<div class="row">
			<div class="footer-img"><a href="#"><img src="images/footer-logo.png" alt="footer" /></a></div>
		</div>
		</div>
		
	</div>
	<div class="footer-bottom">
		&copy; NeIC 2017
	</div>
  </footer>

    
    <script>
    $('.read-more-block').readmore({speed: 500});
    $('.read-more-block.closename').readmore({
  lessLink: '<a href="#" class="btn">close</a>',
  collapsedHeight: 200
});
    $('.read-more-block.readless').readmore({
  collapsedHeight: 165
});
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a.smooth").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
  </body>
</html>