<head>
    <style>
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
		footer{
		    display:none;
		}
    </style>
</head>
<!-- Start booking Area -->
			<!-- Start booking Area -->
			<section class="booking-area section-gap relative style1" id="consultancy" style="background-image: none;">
			
			<img id="" src="https://ider/banner-cec-min.jpg"  style="position:absolute;margin-top: -21px;height: 100%;width: 100%;">
			
				<div id="h-padding" class="container-fluid">
					<div class="row justify-content-between align-items-center">
						<div class=" col-md-8 booking-left" style="margin-bottom: 15%;">
							

								
						</div>

						<div class=" col-md-3 booking-right" style="background-color: #05034d;padding: 6px;">
								<h4 style="text-align: center;color: #ffffff;font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif;font-size: 20px;font-weight: 600;">FREE Assessment!</h4>
								<form style="background-color: #fff;padding: 7px;" action="<?= base_url().'Leads/added_cec_leads' ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitUserForm();">
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
									<button class="btn btn-default btn-lg btn-block text-center submit" >Request a Free Assessment</button>
									<div class="msg"></div>
									<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
								</form>
						</div>
					</div>
				</div>
			</section>
			
<!-- Sweet Alerts Plugin Installation Start -->
<script src="<?php echo base_url().'assets/web/js/sweetalert.min.js' ?>"></script>
<?php
  if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    if($msg == "as"){
      echo '<script language="javascript">';
      echo 'Swal.fire({
        icon: "success",
        title: "Assessment Submitted",
        text: "Thank you for your Information! A specialist will contact you shortly."
      })';
      echo '</script>';
      }
  }
?>			