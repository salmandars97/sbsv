<!-- start banner Area -->
	<section class="banner-ar relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Points Calculator				
					</h1>	
					<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Aucalculator '?>"> Calculator</a></p>
				</div>											
			</div>
		</div>
	</section>
<!-- End banner Area -->
                    
	<article class="page">
		<div class="points-calculator">
			<div class="points-calculator-progress">
				<div class="points-calculator-progress-step" id="step-0">Information </div>
				<div class="points-calculator-progress-step" id="step-1">Age </div>
				<div class="points-calculator-progress-step" id="step-2">Work Experience</div>
				<div class="points-calculator-progress-step" id="step-3">Education</div>
				<div class="points-calculator-progress-step" id="step-4">English Language Skills</div>
				<div class="points-calculator-progress-step" id="step-5">Partners skills and qualifications </div>
			</div>
			<form action="<?= base_url().'Leads/update_au_leads ' ?>" method="POST" enctype="multipart/form-data">
			<div class="points-calculator-wrapper">
				<div class="points-calculator-left">
					<div class="calculator-questions">
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>1</strong> of 6    </p>
							<h2>Information</h2>
							<div class="default-select" id="default-select">
								<input type="hidden" name="id">
								<input class="form-control required" type="hidden" name="destination" value="Australia">
							</div><br>
							<?php
								function rand_char($length=6) {
								$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
								$charactersLength = strlen($characters);
								$randomString1 = '';
								$randomString2 = '';
								for ($i = 0; $i < $length; $i++) {
									$randomString1 .= $characters[rand(0, $charactersLength - 1)];
								}
								for ($i = 0; $i < $length; $i++) {
									$randomString2 .= $characters[rand(0, $charactersLength - 1)];
								}
								return $randomString1 . $randomString2;
								}
								$max = rand_char();
								echo"<input type='hidden' name='max_id' id='max_id' value='". $max ."'/>";
							?>
							<input class="form-control required" type="text" value="<?php if(isset($_GET['name']))echo $_GET['name']; ?>" id="name" name="name" placeholder="Your name (Required)" required><br>
							<input class="form-control required" type="email" value="<?php if(isset($_GET['email']))echo $_GET['email']; ?>" id="email" name="email" placeholder="Email Address (Required)" required><br>
							<input id="phone" class="form-control required" value="<?php if(isset($_GET['phone_no']))echo $_GET['phone_no']; ?>" type="number" name="phone_no" placeholder="Phone Number (Required)" required><br>
							<input class="form-control required" type="text" value="<?php if(isset($_GET['occupation']))echo $_GET['occupation']; ?>" id="occupation" name="occupation" placeholder="Your Occupation (Required)" required><br>
							<label>Upload Your Resume (Required)</label>
							<input id="resume" class="form-control " value="<?php if(isset($_GET['resume']))echo $_GET['resume']; ?>" type="file" name="datafile"><br>
							<select id='type' name="que" class="form-control required" value="" style="display: none;" required>
								<option value="-" selected>How did you hear about us?</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Facebook" )echo "selected"; ?> value="Facebook">Facebook</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Google" )echo "selected"; ?> value="Google">Google</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Twitter" )echo "selected"; ?> value="Twitter">Twitter</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Flyers or Brochures" )echo "selected"; ?> value="Flyers or Brochures">Flyers or Brochures</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Referred by a Friend" )echo "selected"; ?> value="Referred by a Friend">Referred by a Friend</option>
								<option <?php if(isset($_GET['type1']) && $_GET['type1'] = "Others" )echo "selected"; ?> value="Others">Others</option>
							</select>							      
						</div>
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>2</strong> of 6   </p>
							<h2>Age</h2>
							<input type="radio" value="0" name="age" id="0" required>
							<label for="0">Below 18</label><br>
							<input type="radio" value="25" name="age" id="18-24" required>
							<label for="18-35">18-24</label><br>
							<input type="radio" value="30" name="age" id="24-32" required>
							<label for="36">25-32</label><br>
							<input type="radio" value="25" name="age" id="33-39" required>
							<label for="37">33-39</label><br>
							<input type="radio" value="15" name="age" id="40-44" required>
							<label for="38">40-44</label><br>
							<!--<input type="radio" value="0" name="age" id="45-49" required>-->
							<!--<label for="39">45-49</label><br>-->
						</div>
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>3</strong> of 6    </p>
							<h2>Work Experience </h2>
							<input type="radio" value="0" name="work_exprience" id="1" required >
							<label for="1">Less then 3 years</label><br>
							<input type="radio" value="5" name="work_exprience" id="2" required>
							<label for="2-3">3 Years or more</label><br>
							<input type="radio" value="10" name="work_exprience" id="3" required>
							<label for="4-5">5 Years or more</label><br>
							<input type="radio" value="15" name="work_exprience" id="4" required>
							<label for="6">8 or more years</label><br>
						</div>
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>4</strong> of 6    </p>
							<h2>Education</h2>
							<input type="radio" value="10" name="education" id="diploma" required>
							<label for="associate">Diploma (2 Years)</label><br>
							<input type="radio" value="15" name="education" id="bachelor" required>
							<label for="bachelor">Bachelors of Higher </label><br>
							<input type="radio" value="20" name="education" id="doctorate" required>
							<label for="master">Doctorate (PHD) </label><br>
						</div>
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>5</strong> of 6   </p>
							<h2>English Language Skills</h2>
							<input type="radio" value="0" name="english_language_skills" id="competent" required>
							<label for="competent">Competent User</label><br>
							<input type="radio" value="10" name="english_language_skills" id="good" required>
							<label for="good">Good User</label><br>
							<input type="radio" value="20" name="english_language_skills" id="expert" required>
							<label for="expert">Expert User</label><br>
						</div>
						<div class="calculator-question">
							<p class="calculator-question-progress">Question <strong>6</strong> of 6   </p>
							<h2>Partners skills and qualifications</h2>
							<input type="radio" value="5" name="partner_skills" id="yes" required >
							<label for="yes">Yes</label><br>
							<input type="radio" value="0" name="partner_skills" id="no" required>
							<label for="no">No</label><br>
						</div>
					</div>  
					<div class="row">
						<div class="col-12">
							<div id="alert-msg" class="alert alert-danger">
								<p>In order to submit your assetment please fill the required fields.</p>
							</div>
							<div id="email-alert-msg" class="alert alert-warning">
								<p>Email is not in proper format.</p>
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-6">
							<button id="calculator-previous">Previous</button>
						</div>
						<div class="col-6">
							<button id="calculator-next2" disabled>Next</button>
							<button id="calculator-next">Next</button>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-12">
							<button id="proceed-btn" style=" background-color: #05034d; color: #ffffff;" class="btn btn-default btn-lg btn-block text-center submit" disabled>Proceed</button>
						</div>
					</div>
				</div>
				<div class="points-calculator-right">
					<div class="points-calculator-score">
						<table class="points-calculator-score-question">
							<tbody>
								<tr>
									<td>Score for this question</td>
									<td><span class="score" id="question-score">-</span> <span class="small">Points</span></td>
								</tr>
							</tbody>
						</table>
						<table class="points-calculator-score-total">
							<tbody>
								<tr>
									<td>Your current score</td>
									<td><span class="total-score score" id="total-score">0</span><span class="small">Points</span>
									<td><span class="score">/</span></td>
									<td><span class="score" id="pass-mark">65</span><span class="small">Points</span></td>
								</tr>
							</tbody>
						</table>
						<div class="points-calculator-score-message">
							<span class="success">WOW Congratulations!! 
							You appear to be eligible, That's Awesome!!</span>
							<span class="fail">OOPS! Less than the required?
							Don't Sweat it!! We know just how to Increase your Score. It's what we do BEST!!
							.</span>
							<span class="ineligible">OOPS! Less than the required?
							Don't Sweat it!! We know just how to Increase your Score. It's what we do BEST!!
							</span>
						</div>
					</div>
				</div>
			</div><br>
			<!--<button type="submit">Submit</button>-->
			</form>
		</div>
	</article>
<script>
	function hasClass(element, cls) {
		return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	}

	function savePhoto(method){
		var form_data = new FormData();
		form_data.append("max_id", document.getElementById('max_id').value);
		form_data.append("name", document.getElementById('name').value);
		form_data.append("email", document.getElementById('email').value);
		form_data.append("phone", document.getElementById('phone').value);
		form_data.append("occupation", document.getElementById('occupation').value);
		form_data.append("type", document.getElementById('type').value);
		if(document.getElementById('resume').files[0] != ''){
			form_data.append("resume", document.getElementById('resume').files[0]);
		}
		$.ajax({
			url:"a-hideinsert.php?method="+method,
			method:"POST",
			data: form_data,
			contentType: false,
			cache: false,
			processData: false,   
			success:function(data)
			{ }
		});
	};
	
	var insert = true;
	$("#alert-msg").addClass("d-none"); 
	$("#email-alert-msg").addClass("d-none");
	$("input[name='age'], input[name='work_exprience'], input[name='education'], input[name='english_language_skills'], input[name='partner_skills']").change(function() {
		$('#calculator-next').prop('disabled', false);
	});
	window.setInterval(fields_validation, 1000);
	function IsEmail(email) {
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!regex.test(email)) {
		   return false;
		}else{
		   return true;
		}
	}
	$("#yes, no").click( function() {
		if($("input[name='age']").is(':checked') && $("input[name='work_exprience']").is(':checked') && $("input[name='education']").is(':checked') && $("input[name='english_language_skills']").is(':checked') && $("input[name='partner_skills']").is(':checked') ){
			$('#proceed-btn').prop('disabled', false);
		}
	});
	$("#calculator-previous").click( function() {
		$('#calculator-next').prop('disabled', false);
	});
	$("#calculator-next").click( function() {
		var el = hasClass(document.getElementById('calculator-previous'), 'hidden');
		if(el === true){
			if(insert === true) {
				savePhoto('insert');
				insert = false;
			}
			else {
				savePhoto('update');
			}
		}
		if($("input[name='age']").is(':checked') && $("input[name='work_exprience']").is(':checked') && $("input[name='education']").is(':checked') && $("input[name='english_language_skills']").is(':checked') && $("input[name='partner_skills']").is(':checked')){
			$('#calculator-next').prop('disabled', false);
			$('#proceed-btn').prop('disabled', false);
		}
		else {
			$('#calculator-next').prop('disabled', true);
			$('#proceed-btn').prop('disabled', true);
		}
	});
	function fields_validation() {
		if($("#name").val() != "" && $("#email").val() != "" && $("#phone").val() != "" && $("#occupation").val() != "") {
			if(IsEmail($("#email").val())==false) {
				$("#email-alert-msg").removeClass("d-none");
				$("#calculator-next").addClass('d-none');
				$("#calculator-next2").removeClass('d-none');
				$('#proceed-btn').prop('disabled', true);			
			}
			else if(IsEmail($("#email").val())==true && $("input[name='age']").is(':checked') && $("input[name='work_exprience']").is(':checked') && $("input[name='education']").is(':checked') && $("input[name='english_language_skills']").is(':checked') && $("input[name='partner_skills']").is(':checked')) {
				$("#email-alert-msg").addClass("d-none"); 
				$("#calculator-next").removeClass('d-none');
				$("#calculator-next2").addClass('d-none');
				$('#proceed-btn').prop('disabled', false);			
			}
			else {
				$("#email-alert-msg").addClass("d-none"); 
				$("#calculator-next").removeClass('d-none');
				$("#calculator-next2").addClass('d-none');
			}	
		}
		else {
			$('#proceed-btn').prop('disabled', true);
			$('#calculator-next2').removeClass("d-none");
			$('#calculator-next').addClass("d-none");
		}
	}

	function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 50) {
			Swal.fire({
			icon: 'error',
			title: 'File size exceeds 50 MB'
			});
           $("#resume").val('');
        }
    }
	
	$('#resume').on( 'change', function() {
	   myfile= $( this ).val();
	   var ext = myfile.split('.').pop().toLowerCase();
	   if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=="jpg" || ext=="png" || ext=="jpeg"){
		   ValidateSize(this);
	   } else{
		   Swal.fire({
				icon: 'error',
				title: 'Only pdf,word and image formats are allow with maximum size of 50 MB'
				});
		   $("#resume").val('');
	   }
	});
</script>