<!-- Start booking Area -->
			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class=" col-md-8 booking-left">
                        <h3 class="text-white" style="font-size: 35px;">
								A Canadian company providing exceptional</h3>
							<h4 class="text-white">
								services to clients all over the world.
							</h4>
							
							
						</div>
						
						
	<!--Canada Modal >
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog"-->

         <!--Modal content
        <div class="modal-content">
          <div class="modal-header">
            <h2>Your Preference?</h2>
          </div>
          <div class="modal-body ">
            <form style="text-align: center;">
              <input class="btn btn-default" style="background: #05034d; color: white;" type="button" value="Immigration" onclick="immigration('ca')">
              <input style="background: #05034d; color: white;" type="button" value="Other Visa Types" class="btn btn-default " data-dismiss="modal">
            </form>
          </div>
          </div>
        </div>

      </div-->

      <!--Australia Modal 
    <div id="myMod" class="modal fade" role="dialog">
      <div class="modal-dialog">

         <!--Modal content
        <div class="modal-content">
          <div class="modal-header">
            <h2>Your Preference?</h2>
          </div>
          <div class="modal-body ">
                <form style="text-align: center;">
                    <input style="background: #05034d; color: white;" class="btn btn-default" type="button" value="Immigration" onclick="immigration('au')">
                    <input style="background: #05034d; color: white;" type="button" value="Other Visa Types" class="btn btn-default " data-dismiss="modal">
                </form>
          </div>
          </div>
        </div>
    </div-->
						
						<div class=" col-md-4 booking-right">
								<h4 style="padding-bottom: 15px; text-align: center; color: #05034d; font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 600;" >Consultation</h4>
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
									<button class="btn btn-default btn-lg btn-block text-center submit" >Request a consultation</button>
									<div class="msg"></div>
									<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
								</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->
			<!-- End booking Area -->
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

		/*$(function() { 
		 
		  // Initialize scaling
		  scaleCaptcha();
		  
		  // Update scaling on window resize
		  // Uses jQuery throttle plugin to limit strain on the browser
		  $(window).resize( $.throttle( 100, scaleCaptcha ) );
		  
		});	*/
 </script>
				