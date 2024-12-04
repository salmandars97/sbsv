<head>
	<link href="https://unpkg.com/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<style>
		.tab-content {
			height: auto! Important;
		}
		/*the container must be positioned relative:*/
		:root {
			--radius: 2px;
			--baseFg: dimgray;
			--baseBg: white;
			--accentFg: #006fc2;
			--accentBg: #bae1ff;
			}

			.theme-pink {
			--radius: 2em;
			--baseFg: #c70062;
			--baseBg: #ffe3f1;
			--accentFg: #c70062;
			--accentBg: #ffaad4;
			}

			.theme-construction {
				--radius: 0;
				--baseFg: white;
				--baseBg: #dc3545;
				--accentFg: #f9f9ff;
				--accentBg: #007bff;
			}

			select {
				width: 100% !important;
    			height: 40px !important;
			/* font: 400 12px/1.3 sans-serif; */
				-webkit-appearance: none;
				appearance: none;
				color: var(--baseFg);
				border: 1px solid var(--baseFg);
				line-height: 1;
				outline: 0;
				padding: 0.65em 2.5em 0.55em 0.75em;
				border-radius: var(--radius);
				background-color: var(--baseBg);
				background-image: linear-gradient(var(--baseFg), var(--baseFg)),
				linear-gradient(-135deg, transparent 50%, var(--accentBg) 50%),
				linear-gradient(-225deg, transparent 50%, var(--accentBg) 50%),
				linear-gradient(var(--accentBg) 42%, var(--accentFg) 42%);
				background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
				background-size: 1px 100%, 20px 22px, 20px 22px, 20px 100%;
				background-position: right 20px center, right bottom, right bottom, right bottom;   
			}

			select:hover {
			background-image: linear-gradient(var(--accentFg), var(--accentFg)),
				linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
				linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
				linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
			}

			select:active {
			background-image: linear-gradient(var(--accentFg), var(--accentFg)),
				linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
				linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
				linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
			color: var(--accentBg);
			border-color: var(--accentFg);
			background-color: var(--accentFg);
			}

		/* List group */
		.list-group-item:hover {
			background-color: #dc3545;
    		color: white;
		}

		/* Date Picker */
		#datepicker {
			width: 80%;
			height: 50px !important;
		}
	</style>
</head>
<!-- start banner Area -->
<section class="banner-ar relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<?= $title ?>				
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Consultancy/book_online '?>"> Online Booking</a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->
 
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div id="smartwizard">
				<ul class="nav">
				<li>
					<a class="nav-link" href="#step-1" id="step_1">
						Select Program
					</a>
				</li>
				<li>
					<a class="nav-link" href="#step-2">
						Schedule a Consultation
					</a>
				</li>
				<li>
					<a class="nav-link" href="#step-3">
						Date & Time
					</a>
				</li>
				<li>
					<a class="nav-link" href="#step-4">
						Your Details
					</a>
				</li>
				</ul>
			
				<div class="tab-content">
				<div id="step-1" class="tab-pane" role="tabpanel" style="display: block;">
					<div class="row justify-content-md-center p-5">
						<div class="col-md-12 mt-5">
							<p class="text-justify">
							Have Questions?  Book a consultation to Get the Right Answers.
							Our Lawyers have extensive experience helping clients with difficult cases, refused applications, procedural fairness letters, IAD appeals, Judicial Review and Federal Court.
							* If you decide to retain our firm for any file work after your consultation, credit for the consultation fee will be applied towards your file.
							</p>
							<p class="text-justify text-danger">In efforts to combat the spread of COVID-19 (Coronavirus), our firm will only be offering Phone Consultations for the near future.</p>
						</div>
						<div class="col-lg-8 p-5">
							<form action="" method="post" id="first_form">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="" style="width:100%;">
											<select name="country" id="country"  class="theme-construction">
												<option value="">Choose Country</option>
												<option value="Canada">Canada</option>
												<option value="United States">United States</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="Australia">Australia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Schengen Area">Schengen Area</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 mt-5">
									<div class="form-group">
										<div class="" style="width:100%;">
											<select name="program" id="program" class="theme-construction">
												<option value="">Choose Program</option>
												<?php foreach($programs as $value) { ?>
													<option value="<?= $value->id ?>"><?= $value->name . " - " . $value->price . $value->currency?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-md-12 mt-5 text-right">
									<button type="submit" id="first_step" class="btn btn-success">Next</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
				<div id="step-2" class="tab-pane" role="tabpanel">
					<h3 class="text-center">Schedule a Consultation</h3>
					<form action="" method="post" id="second_form">
					<div class="container-fluid">
						<div class="row h-100 justify-content-center align-items-center">
							<div class="col-12 col-sm-8 col-lg-6">
								<h6 class="text-muted">Available Consultants</h6> 
								<ul class="list-group">
									<?php foreach($consultants as $value) { ?>
										<li class="list-group-item d-flex justify-content-between align-items-center select-consultant" data-value="<?= $value->name ?>">
										<?= $value->name ?> 
										<div class="image-parent">
											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" style="width:100px" class="img-fluid" alt="quixote">
										</div>
										</li>
									<?php } ?>
								</ul>
								<input type="text" class="d-none" name="consultant" id="consultant">
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-12 mt-5 text-right">
							<button type="submit" class="previous btn btn-danger">Previous</button>
							<button type="submit" id="second_step" class="btn btn-success">Next</button>
						</div>
					</div>
					</form>
				</div>
				<div id="step-3" class="tab-pane h-100" role="tabpanel">
					<div class="container-fluid">
						<form action="" method="post" id="third_form">
						<div class="row h-100 p-5">
							<div class="col-md-12">
								<h3 class="text-center">Select Your Available Date & Time</h3>
							</div>
							<div class="col-4 mt-3">
								<h6 class="text-muted">Date</h6> 
								<input id="datepicker" name="appointment_date" autocomplete="off"/>
							</div>
							<div class="col-8 mt-3">
								<h6 class="text-muted">Timings</h6> 
								<ul class="list-group" id="timings_list">
									<li class="list-group-item d-flex justify-content-between align-items-center select-timings">
									-------
									</li>
								</ul>
								<input type="text" class="d-none" name="timings" id="timings">
								<input type="text" class="d-none" name="amount" id="amount">
								<input type="text" class="d-none" name="program_name" id="program_name">
							</div>
							<div class="col-12">
								<div class="row mt-5">
									<div class="col-md-12 mt-5 text-right">
										<button type="submit" class="previous btn btn-danger">Previous</button>
										<button type="submit" id="third_step" class="btn btn-success">Next</button>
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>	
				</div>
				<div id="step-4" class="tab-pane" role="tabpanel">
					<div class="container-fluid">
						<div class="row p-5">
							<div class="col-md-12">
								<h3 class="text-center"></h3>
							</div>
							<div class="col-md-12 booking-area pb-3">
								<div class=" col-md-6 booking-right">
									<h4 style="padding-bottom: 15px; text-align: center; color: #05034d; font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 600;" >Your details!</h4>
									<form action="" id="fourth_form">
										<input class="form-control required" type="text" id="name" name="name" placeholder="Full Name"  required />
										<input class="form-control required" type="email" id="email" name="email" placeholder="Email Address"  required />
										<input id="contact_no" class="form-control required" type="number" name="contact_no" placeholder="Phone Number" required />					
										<div class="form-group">
											<textarea class="form-control" rows="2" id="note" name="note" placeholder="Note"></textarea>
										</div>
										<button class="btn btn-default btn-lg btn-block text-center submit">Confirm appointment</button>
										<div class="msg"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-md-12 mt-5 text-right">
								<button type="submit" class="previous btn btn-danger">Previous</button>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>

		</div>
	</div>
</div>