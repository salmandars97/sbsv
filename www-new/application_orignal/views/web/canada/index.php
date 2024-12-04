
			<!-- Start about-top Area -->
			<section class="">
				<div class="container-fluid">
					<div class="row bg-light" style="margin-top:12%;">
						<div class="col-lg-8">
                            <h1><?= $title ?></h1>
							<?php echo  $text; ?>
							<img class="img-responsive img-rounded" style="height: 260px;" src="<?php echo base_url(). 'assets/web/img/' . $img; ?>" />
						</div>
						<div class="col-lg-3">
						    <div class="row formDv" style="top:133px;">
			<div class="col-md-12 col-sm-12 col-xs-12 booking-right" style="background-color:#05034d;">
				<h4 class="text-white" style=" text-align: center; font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 600;" >Consultation</h4>
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
					<button class="bg-light btn btn-default btn-lg btn-block text-center submit" ><span class="text-primary">Request a Consultation</span></button>
					<div class="msg"></div>
					<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
				</form>
			</div>
		</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End about-top Area -->
