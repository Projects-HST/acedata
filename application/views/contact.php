<div class="page-title-large2-cont-hidden-xs bg-gray back" style="background-image: url(<?php echo base_url(); ?>assets/page/contact.jpg);background-size:100%;height:450px;    background-repeat: no-repeat;">
        <div class="relative container align-left">
          <div class="row">

            <div class="col-md-8">
              <h1 class="page-title2"></h1>
            </div>

            <div class="col-md-4">
              <div class="breadcrumbs2 font-poppins">
                <a class="a-inv" href="<?php echo base_url(); ?>"></a><span class="slash-divider"></span><span class="bread-current"></span>
              </div>
            </div>

          </div>
        </div>
      </div>





          <div id="blockquotes2" class="page-section p-50-cont-hidden-xs bg-gray">
            <div class="container">
              <blockquote class="bq2-cont text-center ls-1 font-20 pb-0">
                <span class="test-quote-before">“</span>Get in touch if you want to make a contact, please fill the contact form below or alternatively call us on the numbers given.<span class="test-quote-after">”</span>

              </blockquote>
            </div>
          </div>


      <div id="contact-link" class="page-section p-140-cont">
          <div class="container">



            <div class="row">

              <!-- CONTACT INFO -->
              <?php if($this->session->flashdata('msg')): ?>
                  <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button> <?php echo $this->session->flashdata('msg'); ?>
          </div>

          <?php endif; ?>

              <!-- CONTACT FORM -->
              <div class="col-md-12">
                <div class="relative">
                  <form id="contact" action="<?php echo base_url(); ?>welcome/help" method="POST" >

                    <div class="row">

                      <div class="col-md-offset-1">
                        <div class="row">

                          <div class="col-md-4 mb-23">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value=""  maxlength="100" class="form-control " name="name" id="" placeholder="Name" required >
                          </div>
                          <div class="col-md-4 mb-23">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value=""  maxlength="100" class="form-control " name="phone" id="" placeholder="Phone Number" required>
                          </div>

                          <div class="col-md-4 mb-23">
                            <!-- <label>Your email address *</label> -->
                            <input type="email" value=""   maxlength="100" class="form-control " name="email" id="" placeholder="Email" required>
                          </div>

                        </div>
                      </div>


                      <div class="col-md-offset-1">
                        <!-- <label>Message *</label> -->
                        <textarea maxlength="5000"  rows="4" class="form-control " name="message" id="" placeholder="Message" required></textarea>

                        <div class="text-center text-xxs-center">
                          <input type="submit" value="SEND MESSAGE" class="button medium rounded gray font-open-sans mt-40"  >
                        </div>

                      </div>
                      <div class="col-md-4 col-sm-6">
                <!-- <div class="cis-cont">
                  <div class="cis-icon">
                    <!-- <div class="icon icon-basic-map"></div> -->
                    <!-- <div class="icon icon-basic-geolocalize-01"></div>
                  </div>
                  <div class="cis-text">
                    <h3 class="font-josefin"><strong>Production Unit</strong></h3>
                    <p>Door No. 3/304 - F, Kulathur Road,<br> L&T Neelambur by-pass Road, <br>Coimbatore 641 062, India</p>
                  </div>
                </div> -->
              </div>



                    </div>

                  </form>



                </div>
              </div>

            </div>
          </div>
        </div>



      <div class="page-section">
                <div class="container-fluid">
                  <div class="row row-sm-fix">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1FilcSdZmgoh88-qeV9UzBqxB7dY&hl=en" width="100%" height="480"></iframe>
                    </div>
                </div>
              </div>
              <script>
              $("#contactmenu").addClass("current");
              </script>
