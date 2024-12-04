

			<!-- start banner Area -->

			<section class="banner-ar relative" id="home">	

				<div class="overlay overlay-bg"></div>

				<div class="container">

					<div class="row d-flex align-items-center justify-content-center">

						<div class="about-content col-lg-12">

							<h1 class="text-white">

								Contact Us				

							</h1>	

							<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Contact '?>"> Contact Us</a></p>

						</div>											

					</div>

				</div>

			</section>

			<!-- End banner Area -->	

<?php foreach ($contact_us as $key => $value) { ?>



			<!-- Start contact-page Area -->

			<section class="contact-page-area section-gap">

				<div class="container">

					<div class="row">

						<div class="map-wrap" style="width:100%; height: 445px;">

							<div class="mapouter">
							<div class="gmap_canvas">
							<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=140%20Pedwell%20Street,%20New%20castle,%20Ontario&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://google-map-generator.com">google map generator</a></div>
							<style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>

							

						</div>

						<div class="col-lg-4 d-flex flex-column address-wrap">

							<div class="single-contact-address d-flex flex-row">

								<div class="icon">

									<span class="lnr lnr-home"></span>

								</div>

								<div class="contact-details">

									<h5>Canada</h5>

									<p><?php echo  $value->address; ?></p>

								</div>

							</div>

							<div class="single-contact-address d-flex flex-row">

								<div class="icon">

									<span class="lnr lnr-phone-handset"></span>

								</div>

								<div class="contact-details">

									<!--<h5>CAN: <a class="phonetrack" href="tel:+1 (289) 928-1694">+1 (289) 928-1694</a> </h5>-->
									<h5>CAN: <a class="phonetrack" href="tel:+1 (647) 825-1394">+1 (647) 825-1394</a> </h5>

									<!--<p>Mon to Fri 9am to 6 pm</p>-->

								</div>

							</div>

							<div class="single-contact-address d-flex flex-row">

								<div class="icon">

									<span class="lnr lnr-envelope"></span>

								</div>

								<div class="contact-details">

									<h5><?php echo '<a target="_blank" href="mailto:'. $value->email .'">'. $value->email .'</a>'; ?></h5>

									<p>Send us your query anytime!</p>

								</div>

							</div>														

						</div>

						<div class="col-lg-8">
									<div class="row">
										<div class="col-lg-3 form-group"></div>
										<div class="col-lg-6 form-group">
											<div class="row formDv">
											<div class="col-md-12 col-sm-12 col-xs-12 booking-right ">
											<h4 style=" text-align: center; color: #05034d; font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 600;" >Consultation</h4>
											<form action="<?= base_url().'Leads/added_leads ' ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitUserForm();">
												<input class="form-control required" type="text" id="name" name="name" placeholder="Your Name"  required />
												<input class="form-control required" type="email" id="email" name="email" placeholder="Email Address"  required />
												<input id="phone" class="form-control required" type="text" style="padding: 0 50px !important;" name="phone_no" placeholder="Phone Number" required />
												<input class="form-control required" type="text" id="occupation" name="occupation" placeholder="Your Occupation" required />
												<!--span>Upload Your Resume (optional)</span>
												<input id="resume" placeholder="Upload Your Resume (optional)" class="form-control " type="file" name="datafile" /-->
												<div class="form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="resume" name="datafile" required>
														<label class="custom-file-label" for="resume">Upload Your Resume</label>
													</div>
												</div>
													<select id="type1" name="que" class="form-control form-control-lg" required>
														<option value="" disabled="" selected="">How did you hear about us?</option>
														<option value="Facebook">Facebook</option>
														<option value="Google">Google</option>
														<option value="Twitter">Twitter</option>
														<option value="Flyers or Brochures">Flyers or Brochures</option>
														<option value="Referred by a Friend">Referred by a Friend</option>
														<option value="Others">Others</option>
													</select>
												<input type="hidden" name="id" />
													<select id='type' name="destination" class="form-control form-control-lg" required>
														<option value="" disabled="" selected="">Destination</option>
														<option value="uk">UK</option>
														<option value="usa">USA</option>
														<option value="canada">Canada</option>
														<option value="new-zealand">New Zealand</option>
														<option value="australia">Australia</option>
														<option value="schengen">Schengen</option>
													</select>
												<div class="form-group">
													<textarea class="form-control" rows="2" id="message" name="message" placeholder="Your Message (Optional)"></textarea>
												</div>
												<div class="form-group">
													<div class="gcontainer">
														<div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
														<div id="g-recaptcha-error"></div>
													</div>
												</div>
												<button class="btn btn-default btn-lg btn-block text-center submit" >Request a Consultation</button>
												<div class="msg"></div>
												<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
											</form>
										</div>
										</div>
										</div>
										<div class="col-lg-3 form-group"></div>

									</div>

						</div>

					</div>

				</div>	

			</section>

			<?php } ?>
<script>
		<!-- recaptcha scaling function start -->
		function scaleCaptcha(elementWidth) {
		  // Width of the reCAPTCHA element, in pixels
		  var reCaptchaWidth = 304;
		  // Get the containing element's width
			var containerWidth = $('.gcontainer').width();
		  
		  // Only scale the reCAPTCHA if it won't fit
		  // inside the container
		  if(reCaptchaWidth > containerWidth) {
			// Calculate the scale
			var captchaScale = containerWidth / reCaptchaWidth;
			// Apply the transformation
			$('.g-recaptcha').css({
			  'transform':'scale('+captchaScale+')'
			});
		  }
		}

		$(function() { 
		 
		  // Initialize scaling
		  scaleCaptcha();
		  
		  // Update scaling on window resize
		  // Uses jQuery throttle plugin to limit strain on the browser
		  //$(window).resize( $.throttle( 100, scaleCaptcha ) );
		  
		});	
 </script>			