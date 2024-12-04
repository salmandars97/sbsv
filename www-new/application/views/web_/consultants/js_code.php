<script src="https://unpkg.com/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

<script>
$(document).ready(function(){
	// SmartWizard initialize
	$('#smartwizard').smartWizard({
		
		goToStep: '1', // Initial selected step, 0 = first step
		theme: 'arrows', // theme for the wizard, related css need to include for other than default theme
		toolbarSettings: {
			toolbarPosition: 'bottom', // none, top, bottom, both
			toolbarButtonPosition: 'right', // left, right, center
			showNextButton: false, // show/hide a Next button
			showPreviousButton: false, // show/hide a Previous button
			toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
		},
	});
	// $('#step_1').trigger("click");

	setTimeout(function() {
		$('#smartwizard').data('smartWizard')._showStep(0); // go to step 3....
	}, 50);

//Form steps check
	$("#first_form").submit(function(e){
		e.preventDefault();
		var country = $("#country").val();
		var program = $("#program").val();
		
		if(country == "" || program == "") {
			Swal.fire({
			icon: 'warning',
			title: 'Warning',
			text: 'Inorder to continue please select country and program.'
			});
		}
		else {
			$('#smartwizard').smartWizard("next");
		}
	});
	
	$("#second_form").submit(function(e){
		e.preventDefault();
		var consultant = $("#consultant").val();
		
		if(consultant == "") {
			Swal.fire({
			icon: 'warning',
			title: 'Warning',
			text: 'Inorder to continue please select consultant.'
			});
		}
		else {
			$('#smartwizard').smartWizard("next");
		}
	});
	
	$("#third_form").submit(function(e){
		e.preventDefault();
		var timings = $("#timings").val();
		var date = $("#datepicker").val();
		
		if(timings == "" || date == "") {
			Swal.fire({
			icon: 'warning',
			title: 'Warning',
			text: 'Inorder to continue please select date and available timings.'
			});
		}
		else {
			$('#smartwizard').smartWizard("next");
		}
	});

	$("#fourth_form").submit(function(e){
		e.preventDefault();
		$.ajax({
          url:"book_appointment",
          method:"POST",
          data: $('form').serialize(),
          success:function(response) {
            if(response.success == true) {
				var url = "thanks";
              	window.location.replace(url);
            }
            else {
				Swal.fire({
				icon: 'warning',
				title: 'Error',
				text: 'Opps! something went wrong try again.'
				});
            }
          }
        });
	});

	$(".select-consultant").click(function(e) {
		var value = $(this).data('value');
		$("#consultant").val(value);
		document.querySelectorAll('.select-consultant').forEach(function (element, index) {
			// element.innerHTML = 'Testimonial ' + (index + 1);
			$(element).removeClass("active");
		});
		$(this).addClass("active");
	});
	
	
	
	$(".previous").click(function() {
		$('#smartwizard').smartWizard("prev");
	});

	$("#program").change(function(){      
		var program = $(this).val().toLowerCase();
		if(program != "") {
			$.ajax({
				url: "get_program_timings",
				type: 'post',
				data: {id:program},
				dataType: 'json',
				success:function(response){
					var len = response.length;
					$("#timings_list").empty();
					$("#amount").val(response[0].price + response[0].currency);
					$("#program_name").val(response[0].name);
					const obj = JSON.parse(response[0].available_timings);
					for (var i = 0; i < obj.length; i++) {
						var html = "";
						html += '<li class="list-group-item d-flex justify-content-between align-items-center select-timings" onClick="setTimings(this)" data-value="'+obj[i]+'">';
						html += obj[i];
						html += '</li>';
						$('#timings_list').append(html);
					}
				}
			});
		}  
	});
});

$(function() {
    $("#datepicker").datepicker({
        // altField:"#selectedDate",
		uiLibrary: 'bootstrap4',
    });
	$("#datepicker").trigger('click');
	
});

function setTimings(e) {
	var value = $(e).data('value');
	$("#timings").val(value);
	document.querySelectorAll('.select-timings').forEach(function (element, index) {
		// element.innerHTML = 'Testimonial ' + (index + 1);
		$(element).removeClass("active");
	});
	$(e).addClass("active");
}
</script>