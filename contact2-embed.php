<?php include_once("includes/base.php"); ?>
<?php include_once("includes/header.php"); ?>
					
					<!-- SEARCH READ DOCUMENTATION -->
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
					</ul> <!-- cd-header-buttons -->
					<div id="cd-search" class="cd-search">
						<form class="form-search" id="searchForm" action="page-search-results.html" method="get">
							<input type="text" value="" name="q" id="q" placeholder="Search...">
						</form>
					</div>
					
				  </div>
				  <!-- END header-wrapper -->
				  
				</header>

        <!-- PAGE TITLE -->
        <div class="page-title-cont page-title-big grey-light-bg">
          <div class="relative container align-left">
            <div class="row">
               
              <div class="col-md-8">
                <h1 class="page-title">CONTACT</h1>
                <div class="page-sub-title">
                  Lorem ipsum dolor sit amet, consectetur elit
                </div>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES</a><span class="slash-divider">/</span><span class="bread-current">CONTACT</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
          <!-- GOOGLE MAP & CONTACT FORM -->
          <div class="page-section">
            <div class="container-fluid">
              <div class="row">
              
                <div class="col-md-6">
                  <div class="row">
                    <div class="google-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.8738357257325!2d-122.40630728431469!3d37.79299637975601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a52e9373d%3A0x9c2dff1cdf2bd440!2s580+California+Street%2C+580+California+St%2C+San+Francisco%2C+CA+94104%2C+%D0%A1%D0%A8%D0%90!5e0!3m2!1sru!2sby!4v1549462634166" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                      <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                    </div>
                                  
                    <!-- CONTACT FORM -->
                    <div>
                      <form id="contact-form" action="php/contact-form.php" method="POST">
                      
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                          </div>
                        </div>
                        
                        <div class="row">    
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your email address *</label> -->
                            <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                            </div>
                        </div>
                    
                        <div class="row">
                          <div class="col-md-12 mb-40">
                            <!-- <label>Message *</label> -->
                            <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12 text-center-xxs">
                            <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox small">
                              <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                            </div>
                          </div>
                        </div>
                        
                      </form>	
                      <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                        Thanks, your message has been sent to us.
                      </div>
                    
                      <div class="alert alert-danger hidden animated shake" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
            </div>
          </div>
          
          <!-- DIVIDER -->
          <hr class="mt-0 mb-0">          
          
          <!-- CONTACT INFO SECTION 1 -->
          <div id="contact-link" class="page-section p-110-cont grey-light-bg">
            <div class="container">
              <div class="row">
              
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-map"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">ADDRESS</span></h3>
                      <p>790 FOLSOM AVE, SAN FRANCISCO</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-mail"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">EMAIL</span></h3>
                      <p><a href="mailto:info@haswell.com">INFO@HASWELL.COM</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-smartphone"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">CALL US</span></h3>
                      <p>1-800-312-212, 1-800-311-101</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>        
          </div>        

          <!-- CLIENTS 1 & TESTIMONIALS 1 -->
          <div id="clients-link" class="page-section p-110-cont">
            <div class="container">
              <div class="row">
                <!-- CLIENTS 1 -->
                <div class="col-md-7">
                  <div class="row client-row border-bot">

                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/1.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/2.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/3.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/4.png">
                      </div>

                  </div>
                  
                  <div class="row client-row">

                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/5.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/6.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/7.png">
                      </div>
                    
                      <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="images/clients/8.png">
                      </div>

                  </div>
                  
                </div>
                <!-- TESTIMONIALS 1 -->
                <div class="col-md-5">
                  <blockquote class="quote mb-0 pl-50-min-1169">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, maiores esse temporibus accusantium quas soluta quis sed rerum.</p>
                    <footer>John Doe, Google Inc.</footer>
                   </blockquote>
                </div>
                
              </div>
            </div>
          </div>
          
        <!-- NEWS LETTER -->
        <div class="page-section nl-cont">
          <div class="container">
            <div class="relative" >
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
          
                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"  ></div>
              </div>
            </div>
          </div>
        </div>

        <?php include_once("includes/footer.php"); ?>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			

	
	</body>
</html>		