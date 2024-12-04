<!-- start footer Area -->
<?php foreach ($contact_us as $key => $value) { ?>
	<footer class="footer-area section-gap" style="padding-bottom:10px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>About Us</h4>
						<p>
							Step by Step Visas is an immigration service company  in Toronto, Canada.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Contact Us</h4>
						<p style="width: 92%;">
							<?php echo  $value->address; ?></p>
						<p class="number">
							<!--CAN: <a class="phonetrack" href="tel:+1 (289) 928-1694">+1 (289) 928-1694</a>-->
						</p>
						<p class="number">
							CAN: <a class="phonetrack" href="tel:+1 (647) 825-1394">+1 (647) 825-1394</a>
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay up to date on Immigration policies, rules & regulations.</p>


		<form action="<?= base_url().'Subscriber/added_sub' ?>" method="post" class="navbar-form" enctype="multipart/form-data">
								<div class="input-group add-on align-items-center d-flex">
									<input type="hidden" name="subscription_id">
									<input class="form-control" type="email" name="subscription_email" placeholder="Email address" required="" >
									<div style="position: absolute; left: -5000px;">
									</div>
									<div class="input-group-btn">
										<button type="submit" class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									</div>
								</div>
								<div class="info mt-20"></div>
							</form>

					</div>
				</div>
			</div>
			<div class="footer-bottom row">
				<div class="m-0 col-lg-6 col-md-6" style="border-right: 1px solid;">
				<p class="footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<?= date('Y'); ?> All rights reserved | StepbyStep Immigration Services Inc.<br/>
				</p>
				</div>
				<div class=" col-lg-3 col-md-3" style="  border-right: 1px solid; text-align: center;">
				<a href="<?php echo base_url().'Privacy/privacy_policy '?>">Privacy Policy</a> |
				<a href="<?php echo base_url().'Privacy/refund_policy '?>">Refund Policy</a>
				</div>

				<div class="footer-social col-lg-3 col-md-3">
					<a target="blank" href="https://www.facebook.com/stepbystepvisas/"><i class="fa fa-facebook"></i></a>
					<a target="blank" href="https://twitter.com/stepbystepvisas"><i class="fa fa-twitter"></i></a>
					<a target="blank" href="https://linkedin.com/company/step-by-step-immigration-services-inc/"><i class="fa fa-linkedin"></i></a>
					<!--<a href="https://www.youtube.com/channel/UCS6TYneu9XfMj1fdPlsxnpg"><i class="fa fa-youtube"></i></a>-->
					<a target="blank" href="https://instagram.com/stepbystepimmigration/"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			<div style="text-align:center; padding-top:30px;"><img src="<?php echo base_url().'assets/web/img/payment.jpg '?>" width="157" height="25" alt="Step By Step Visas"> 	</div>
		</div>
	<?php }?>
	</footer>

	<!-- End footer Area -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134087387-1"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>

	<script src="<?php echo base_url().'assets/web/js/osamabootjquery.min.js' ?>"></script>
	<script src="https://call.adtracks.com/adtracks/tracking.js" defer></script>
	<!-- Sweet Alerts Plugin Installation Start -->
	<script src="<?php echo base_url().'assets/web/js/sweetalert.min.js' ?>"></script>
	<!-- Sweet Alerts Plugin Installation End -->
	<script src="<?php echo base_url().'assets/web/js/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/web/js/vendor/jquery-2.2.4.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/web/js/popper.min.js' ?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?php echo base_url().'assets/web/js/vendor/bootstrap.min.js' ?>"></script>
	<!--script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script-->
	<script src="<?php echo base_url().'assets/web/js/osamaboot.min.js' ?>"></script>
	<!--script src="<?php //echo base_url().'assets/web/js/easing.min.js' ?>"> </script-->
	<!--script src="<?php //echo base_url().'assets/web/js/hoverIntent.js' ?>"></script-->
	<script src="<?php echo base_url().'assets/web/js/superfish.min.js'?> "></script>
	<script src="<?php echo base_url().'assets/web/js/jquery.ajaxchimp.min.js'?> "></script>
	<script src="<?php echo base_url().'assets/web/js/jquery.magnific-popup.min.js'?> "></script>
	<script src="<?php echo base_url().'assets/web/js/owl.carousel.min.js'?> "></script>
	<script src="<?php echo base_url().'assets/web/js/jquery.sticky.min.js'?> "></script>
	<!--script src="<?php //echo base_url().'assets/web/js/jquery.nice-select.min.js '?> "></script-->
	<script src="<?php echo base_url().'assets/web/js/parallax.min.js'?> "></script>
	<!--script src="<?php //echo base_url().'assets/web/js/waypoints.min.js'?> "></script-->
	<script src="<?php echo base_url().'assets/web/js/jquery.counterup.min.js'?> "></script>
	<script src="<?php echo base_url().'assets/web/js/main.min.js'?> "></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!--script type="text/javascript" src="<?php //echo base_url().'assets/web/js/calcul.js'?>"></script-->
	<!-- Start of HubSpot Embed Code -->
	<script src="<?php echo base_url().'assets/web/tel/build/js/intlTelInput.min.js'?> "></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-134087387-1');
	</script>
	
	<script>
		function count_view() {
			$.ajax({
				type: "POST",
				url: "https://view_count",
				dataType: "json",
				data: {pagetitle: document.title}
       		 });
		}
		count_view();
		if ($('#submitAssessmentFirst').length > 0) {
			$("#submitAssessmentFirst").on('click', function() {
				var name = $("#dName").val();
				var type = $("#dType").val();
				if(name != "" && type != null) {
					console.log(type);
					$("#name").val(name);
					$("#type").val(type);
					$("#assessmentModal").show();
				}
				else {
					Swal.fire({
					icon: 'warning',
					title: 'Warning',
					text: "Fields can't left empty."
					});
				}
				
			});
		}
	</script>

	<script defer>
		function ValidateSize(file) {
				var FileSize = file.files[0].size / 1024 / 1024; // in MB
				if (FileSize > 5) {
					Swal.fire({
					icon: 'error',
					title: 'File size exceeds 5 MB'
					});
				   $("#resume").val('');
				}
		}

		if( $('#resume').length )         // use this if you are using id to check
		{
			$('#resume').on( 'change', function() {
			   myfile= $( this ).val();
			   var ext = myfile.split('.').pop().toLowerCase();
			   if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=="jpg" || ext=="png" || ext=="jpeg"){
				   ValidateSize(this);
			   } else{
				   Swal.fire({
						icon: 'error',
						title: 'Only pdf,word and image formats allowed with a maximum size of 5 MB'
						});
				   $("#resume").val('');
			   }
			});
		}
		
		if( $('#resume2').length )         // use this if you are using id to check
		{
			$('#resume2').on( 'change', function() {
			   myfile= $( this ).val();
			   var ext = myfile.split('.').pop().toLowerCase();
			   if(ext != "bat"){
				   ValidateSize(this);
			   } else if(ext == "bat"){
				   Swal.fire({
						icon: 'error',
						title: 'Warning bat file.'
						});
				   $("#resume2").val('');
			   }
			   else {
			        Swal.fire({
						icon: 'error',
						title: 'Only pdf,word and image formats allowed with a maximum size of 5 MB'
						});
				   $("#resume2").val('');
			   }
			});
		}

		function immigration(pagetype) {
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var phone_no = document.getElementById("phone").value;
			var occupation = document.getElementById("occupation").value;
			var resume = document.getElementById("resume").files[0];
			localStorage.setItem("resume",resume);
			var type1 = document.getElementById("type1").value;
			if(pagetype == "ca"){
				window.location.href= "/sbsv/Calculator?name=" + name + "&email=" + email + "&phone_no=" + phone_no + "&occupation=" + occupation + "&type1=" + type1 + "&resume=" + resume;
			}
			else if(pagetype == "au"){
				window.location.href="/sbsv/Aucalculator?name=" + name + "&email=" + email + "&phone_no=" + phone_no + "&occupation=" + occupation + "&type1=" + type1 + "&resume=" + resume;
			}
		}

		// Add the following code if you want the name of the file appear on select
		if( $('.custom-file-input').length )         // use this if you are using id to check
		{
			$(".custom-file-input").on("change", function() {
			  var fileName = $(this).val().split("\\").pop();
			  if(fileName == ""){
				  fileName = "Upload Your Resume (optional)";
			  }
			  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
		}

		function myFunction(x) {
  if (x.matches) { // If media query matches
    document.getElementById("rciclogo").src = "https://b/img/stepbystepvisas.png";
  } else {
   document.getElementById("rciclogo").src = "https://b/img/CICC Logo.jpg";
  }
}

var x = window.matchMedia("(max-width: 1024px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
	</script>

	<script defer>
		function validateFloatKeyPress(el) {
			//alert(el.value);
			if(el.value == 0){
				$("#amount-error-msg").removeClass("clod");
				$("#proceed-btn").prop('disabled', true);
			}
			else {
				$("#amount-error-msg").addClass("clod");
				$("#proceed-btn").prop('disabled', false);
				var v = parseFloat(el.value);
				el.value = (isNaN(v)) ? '' : v.toFixed(2);
			}
		}
	</script>


	<script>
	
			var imgArray = $("input[name='pname[]']")
              .map(function(){return $(this).val();}).get();
			curIndex = 0;
			imgDuration = 10000;

		function slideShow() {
			//alert(imgArray);
		    if ($(window).width() < 745) {
               document.getElementById("bslider").src = "https://wallpapercave.com/wp/wp2831956.png";
            }
            else {
				if(imgArray.length > 1){
					document.getElementById('bslider').className += "fadeOut";
					setTimeout(function() {
						document.getElementById('bslider').src = 'assets/slider/' + imgArray[curIndex];
						document.getElementById('bslider').className = "";
					},1000);
					curIndex++;
					if (curIndex == imgArray.length) { curIndex = 0; }
					setTimeout(slideShow, imgDuration);
				}
				else {
					document.getElementById('bslider').src = 'assets/slider/' + imgArray[0];
				}
					
    		}
		}
		slideShow();
		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
		//   allowDropdown: false,
		//   autoHideDialCode: false,
		//   autoPlaceholder: "off",
		//   dropdownContainer: document.body,
		//   excludeCountries: ["us"],
		//   formatOnDisplay: false,
		//   geoIpLookup: function(callback) {
		//      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		//       var countryCode = (resp && resp.country) ? resp.country : "";
		//       callback(countryCode);
		//      });
		//   },
		//   hiddenInput: "full_number",
		//   initialCountry: "auto",
		//   localizedCountries: { 'de': 'Deutschland' },
		   nationalMode: false,
		//   onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		   placeholderNumberType: "MOBILE",
		//   preferredCountries: ['cn', 'jp'],
		//   separateDialCode: true,
		  utilsScript: "<?php echo base_url().'assets/web/tel/build/js/utils.js'?> ",
		});
	
		function submitUserForm() {
			var response = grecaptcha.getResponse();
			if(response.length == 0) {
				document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
				return false;
			}
			return true;
		}

		function verifyCaptcha() {
			document.getElementById('g-recaptcha-error').innerHTML = '';
		}
	
		var sep_client_id = 885;
		var sep_phone_class = 'phonetrack';
		var sep_form_id = '';
	
		$(document).ready(function($) {
		  if ($("#google-reviews").length == 0) {
			return
		  }
		  // Find a placeID via https://developers.google.com/places/place-id
		  $("#google-reviews").googlePlaces({
			placeId: 'ChIJIfjcb8TR1IkRW41up2JEnkY'
		  });
		});
	</script>
</body>
</html>
