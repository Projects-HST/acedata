<div id="contact-link" class="page-section p-60-cont bg-gray">
          <div class="container">
            <div class="row">

              <div class="col-md-3 col-sm-6">
                <div class="cis-cont">
                  <div class="cis-icon">
                    <!-- <div class="icon icon-basic-map"></div> -->
                   
                  </div>
                  <div class="cis-text">
                    <h3 class="font-josefin"><strong>Address</strong></h3>
                    <b>Head Office</b>
                    <p>28, Third Street,<br> Bharathi Colony, Peelamedu Coimbatore - 641004 , India</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                
                  
				  

   <div class="cis-cont">
                  <div class="cis-icon">
                    <!-- <div class="icon icon-basic-map"></div> -->
                   
                  </div>
                  <div class="cis-text">
                    <h3 class="font-josefin"><strong>Production Unit</strong></h3>
                  
                    <p>Door No.3/304 -F,<br>Kulathur Road,<br>
L&T Neelambur by-pass Road, 
Coimbatore 641 062, India</p>
                  </div>
                </div>

                  
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="cis-cont">
                  <div class="cis-icon">
                  
                  </div>
                  <div class="cis-text">
                    <h3 class="font-josefin"><strong>Email Us</strong></h3>
                    <p>contact@acedata-india.net <br> sales@acedata-india.net </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
			  <div class="cis-cont">
                  <div class="cis-icon">
                 
                  </div>
                  <div class="cis-text">
                    <h3 class="font-josefin"><strong>Call Us</strong></h3>
                    <p>0422 - 2561500, 2561005, 2561050, <br>98942 60106 </p>
                  </div>
                </div>
                <div class="cis-cont">
                 

                  <div class="cis-text" style="padding-top:80px;">
                   
                    <div class="footer-soc-a">
                      <a href="" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                      <a href="" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                      <!-- <a href="https://www.behance.net/abcgomel" title="Behance" target="_blank"><i class="fa fa-behance"></i></a> -->
                      <a href="" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                      <!-- <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

<!-- BACK TO TOP -->
<p id="back-top">
    <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

</div>
<!-- End BG -->
</div>
<!-- End wrap -->

<!-- JS begin -->

<!-- jQuery  -->

<!-- MAGNIFIC POPUP -->
<script src='<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js'></script>

<!-- PORTFOLIO SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/masonry.pkgd.min.js"></script>

<!-- APPEAR -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>

<!-- OWL CAROUSEL -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

<!-- PARALLAX -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>

<!-- MAIN SCRIPT -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script type="text/javascript">
(function($) {

//Function to animate slider captions
function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';

    elems.each(function() {
        var $this = $(this),
            $animationType = $this.data('animation');
        $this.addClass($animationType).one(animEndEv, function() {
            $this.removeClass($animationType);
        });
    });
}

//Variables on page load
var $myCarousel = $('#carousel-example-generic'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

//Initialize carousel
$myCarousel.carousel();

//Animate captions in first slide on page load
doAnimations($firstAnimatingElems);

//Pause carousel
$myCarousel.carousel('pause');

//Other slides to be animated on carousel slide event
$myCarousel.on('slide.bs.carousel', function(e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
});

})(jQuery);


$(function(){
    $('.carousel').carousel({
      interval: 6000
    });
});
</script>

              <!-- <script type="text/javascript">
              $("#contact").submit(function(e) {
                $.ajax({
               type: "POST",
               url: "<?php echo base_url(); ?>welcome/help",
               data: $("#contact").serialize(),
               success: function(data){
                //  alert(data);
                //  swal("Good job!", "You clicked the button!", "success");
                 alert(data);
                 if(data=="success"){
                   swal("Thank You!", "We Will Get back to you Soon", "success");
                 }
                else{
                    sweetAlert("Oops...", "Something went wrong!", "error");
                 }
               }
              });
});
function sendmessage(){
  //alert("hi");

       }

              </script> -->


</body>

</html>
