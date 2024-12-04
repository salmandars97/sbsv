<head>
    <style>
		.modal {
			position: absolute;
			top: -1%;
			right: 100px;
			bottom: 0;
			left: 0;
			z-index: 10040;
			overflow: auto;
			overflow-y: auto;
		}
        .overlay{
			
		}
        .h-padding {
            width:100%;
            padding: 0 69px 0 65px;
        }
        @media screen and (min-width: 1025px) {
            .h-padding {
                width:100%;
                padding: 0 0 0 0;
            }
        }
        .style1 {
			position: relative;
			margin-top: 10%;
			overflow: hidden;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		.hvideo {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  min-width: 100%;
		  min-height: 100%;
		  width: auto;
		  height: auto;
		  z-index: 0;
		  -ms-transform: translateX(-50%) translateY(-50%);
		  -moz-transform: translateX(-50%) translateY(-50%);
		  -webkit-transform: translateX(-50%) translateY(-50%);
		  transform: translateX(-50%) translateY(-50%);
		}
		
		#bslider {
    		opacity:1;
	    	transition: opacity 3s; 
		}

		#bslider.fadeOut {
			opacity:0;
		}
    </style>
</head>
<!-- Start booking Area -->
			<!-- Start booking Area -->
			<section class="booking-area section-gap relative style1" id="consultancy" style="background-image: none;">
			
			<img id="bslider" src="https://wallpapercave.com/wp/wp2831956.png"  style="position:absolute;margin-top: -21px;height: 100%;width: 100%;">
			
				<div id="h-padding" class="container-fluid">
					<div class="row mt-5 mb-5 pt-5 pb-5 justify-content-between align-items-center">
						<div class=" col-md-8 booking-left" style="margin-bottom: 0%;">
								<h1 class="text-white">Canadian Immigration 2024</h1>
								<h1 class="text-white">Do you meet the following requirements?</h1>
								<table class="table table-bordered" style="border:1px solid white;font-size: 15px;color: white;width: 60%;">
									<thead>
										<tr>
										<th>Education Requirements</th>
										<th>Bachelors Degree or Higher</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td><b style="color:white;">Work Experience</b></td>
											<td><b style="color:white;">Minimum 1 year</b></td>
										</tr>
										<tr>
											<td><b style="color:white;">Minimum Age</b></td>
											<td><b style="color:white;">18 years or above</b></td>
										</tr>
									</tbody>
								</table>
							<h3 class="text-white">If yes, speak to a Canadian Immigration Consultant today.</h3>
						</div>

						<div class=" col-md-3 booking-right" style="background-color: #05034d;padding: 6px;">
							<h4 style="text-align: center;color: #ffffff;font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif;font-size: 20px;font-weight: 600;">Consultation</h4>
							<div style="background-color: #fff;padding: 7px;">
									<select id='dType' name="destination" class="form-control form-control-lg" required>
										<option value="" disabled="" selected="">Destination</option>
										<option value="uk">UK</option>
										<option value="usa">USA</option>
										<option value="canada">Canada</option>
										<option value="new-zealand">New Zealand</option>
										<option value="australia">Australia</option>
										<option value="schengen">Schengen</option>
									</select>
									<input class="form-control required" type="text" id="dName" name="name" placeholder="Your Name"  required />
								<button type="button" id="submitAssessmentFirst" class="btn btn-default btn-lg btn-block text-center submit">Request a consultation</button>
								<div class="msg"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- The Modal -->
			<div class="modal" id="assessmentModal">
				<div class="modal-dialog">
					<div class="modal-content bg-main p-3">
			
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Fill required fields.</h4>
							<button type="button" class="close bg-white" data-dismiss="modal" data-toggle="modal" data-target="#assessmentModal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
				
						<!-- Modal body -->
						<div class="modal-body p-0">
							<form class="booking-right" style="background-color: #fff;3px 7px 3px 7px;" action="<?= base_url().'Leads/added_leads ' ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitUserForm();">
								<input class="form-control required" type="text" id="name" name="name" placeholder="Your Name"  required />
								<input class="form-control required" type="email" id="email" name="email" placeholder="Email Address"  required />
								<input id="phone" class="form-control required" type="text" style="padding: 0 50px !important;" name="phone_no" placeholder="Phone Number" required />
								<input class="form-control required" type="text" id="occupation" name="occupation" placeholder="Your Occupation" required />
								<!--span>Upload Your Resume (optional)</span>
								<input id="resume" placeholder="Upload Your Resume (optional)" class="form-control " type="file" name="datafile" /-->
								<div class="form-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="resume" name="datafile">
									<label class="custom-file-label" for="resume">Upload Your Resume (optional)</label>
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
								<button class="btn bg-danger btn-lg btn-block text-center submit" data-dismiss="modal" data-toggle="modal" data-target="#assessmentModal">Cancel</button>
								<div class="msg"></div>
								<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End banner Area -->
			<!-- Start service Area -->
			<section class="service-area section-gap" id="immigration">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-7 pb-40 header-text text-center">
							<h2 class="pb-10 ba">Step-By-Step Immigration and Visa Services</h2>

						</div>
					</div>
					<div class="row d-none">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="assets/web/img/US.jpg" alt="step by step immigration United States" class="img-thumbnail img-responsive">
								</div>
								<a class="tag" href="<?php echo base_url().'US '?>">United States</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="assets/web/img/Canada.jpg" alt="step by step immigration Canadian" class="img-thumbnail img-responsive">
								</div>
								<a class="tag" href="<?php echo base_url().'Canada '?>">Canada</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="assets/web/img/UK.jpg" alt="step by step immigration United Kingdom" class="img-thumbnail img-responsive">
								</div>
								<a class="tag" href="<?php echo base_url().'UK '?>">United Kingdom</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="assets/web/img/Australia.jpg" alt="step by step immigration Australia" class="img-thumbnail img-responsive">
								</div>
								<a class="tag" href="<?php echo base_url().'Australia '?>">Australia</a>
							</div>
						</div>
					</div>
					<div class="immigrantsSlider">
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'US '?>" class="thumb" >
									<img src="assets/web/img/US.jpg" alt=" step by step immigration United State" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'US '?>">United States</a>
							</div>
						</div>
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'Canada '?>" class="thumb">
									<img src="assets/web/img/Canada.jpg" alt="step by step immigration Canadian" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'Canada '?>">Canada</a>
							</div>
						</div>
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'UK '?>" class="thumb">
									<img src="assets/web/img/UK.jpg" alt=" step by step immigration United Kingdom" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'UK '?>">United Kingdom</a>
							</div>
						</div>
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'Australia '?>" class="thumb">
									<img src="assets/web/img/Australia.jpg" alt="step by step immigration Australia" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'Australia '?>">Australia</a>
							</div>
						</div>
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'NZ '?>" class="thumb">
									<img src="assets/web/img/NZ.jpg" alt=" step by step immigration New Zealand" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'NZ '?>">New Zealand</a>
							</div>
						</div>
						<div class="item">
							<div class="single-service">
								<a href="<?php echo base_url().'Schengen '?>" class="thumb">
									<img src="assets/web/img/Schengen.jpg" alt="step by step immigration Schengen" class="img-thumbnail img-responsive">
								</a>
								<a class="tag" href="<?php echo base_url().'Schengen '?>">Schengen</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->
			<!-- Start callto Area -->
			<!-- Test -->
			<!-- div class="container-fluid" style="background-color: #f9f9ff;">
				<section>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-4 call-left no-padding">
							<p>
								Step <span>By</span> Step <br>
								Immigration <span>Services Inc.</span>
							</p>
						</div>
						<div class="col-md-5 call-middle">
							<p>
								Step-by-Step Visas is an immigration service company  in Toronto, Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant, a member of the Immigration Consultants of Canada Regulatory Authority (ICCRC) and Canadian Association of Professional Immigration Consultants (CAPIC).
							</p>
						</div>
						<div class="col-md-3">
							<a href="<?php //echo base_url().'About '?>" class="">Read More</a>
						</div>
					</div>
			</section></div-->
			<!-- Test -->
			<div style="background-color: #f9f9ff;" class="container-fluid">
			<section class="calltotop-area pt-66 pb-66">
				<div class="container">
					<div class="callto-section">
						<div class="row justify-content-center align-items-center">
							<div style="padding-top: 4%;" class="col-lg-4 call-left no-padding">
								<p>
									Step <span>By</span> Step <br>
									Immigration <span>Services Inc.</span>
								</p>
							</div>
							<div style="padding-top: 4%;" class="col-lg-5">
								<p>
									Step-by-Step Visas is an immigration service company  in Toronto, Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant, a member of the College of Immigration and Citizenship Consultants (CICC).
								</p>
							</div>
							<div style="padding-top: 4%;" class="col-lg-3 call-right justify-content-end d-flex">
								<a href="<?php echo base_url().'About '?>" class="call-btn">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			</div>
			<!-- End callto Area -->
			<!-- Start booking Area -->
			<section class="booking-area max-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-12 col-md-12 booking-left2">
							<h3 class="text-white" style="font-size: 40px;">
							A Canadian Company providing  exceptional</h3>
							<h4 class="text-white">
								step by step immigration services to clients all over the world.
							</h4>

							<a class="primary-btn" style="text-transform: capitalize;" href="<?php echo base_url().'Contact '?>">View Details</a>
						</div>

					</div>
				</div>
			</section>
			<!-- End booking Area -->
<?php
foreach($slider as $value)
{
	echo '<input type="hidden" name="pname[]" value="'.$value->path.'" />';
}
?>


<script async>
		<!-- recaptcha scaling function start -->
		/*function scaleCaptcha(elementWidth) {
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
		  $(window).resize( $.throttle( 100, scaleCaptcha ) );

		});	
		if ($(window).width() < 1025) {
           document.getElementById("h-padding").style.padding = "0px";
        } else{
            document.getElementById("h-padding").style.padding = "padding: 0 69px 0 65px";
        }*/
 </script>
