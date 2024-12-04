<!-- footer content -->
	<footer>
	  <div class="pull-right">
		Developed By<a href="http://sbsv.test/"> Step By Step Visas</a>
	  </div>
	  <div class="clearfix"></div>
	</footer>
	<!-- /footer content -->
  </div>
</div>

   <!-- jQuery -->
    <script src="<?php echo base_url().'assets/admin/vendors/jquery/dist/jquery.min.js ' ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js ' ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'assets/admin/vendors/fastclick/lib/fastclick.js ' ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'assets/admin/vendors/nprogress/nprogress.js ' ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url().'assets/admin/vendors/iCheck/icheck.min.js ' ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.dataTables.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/dataTables.buttons.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/buttons.flash.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/jszip.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/buttons.html5.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/buttons.print.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/responsive.bootstrap.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/dataTables.responsive.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/datatables/js/buttons.colVis.min.js' ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'assets/admin/build/js/custom.js ' ?>"></script>
	
	<script type="text/javascript">

	  $(document).ready(function(){

	    var li = '';
	  // updating the view with notifications using ajax

	  function load_unseen_notification(view = '')

	  {

	  $.ajax({

	  url:"<?php echo base_url().'assets/fetch.php' ?>",
	  method:"POST",
	  data:{view:view},
	  dataType:"json",
	  success:function(data)

	  {
			//alert(data.notification);
	    var mydiv = document.getElementById("ndropdown-menu");
	    if(data.notification != ''){
	      var newcontent = document.createElement('div');
	      newcontent.className += "n_li";
	      newcontent.innerHTML = data.notification;
	      //mydiv.appendChild(newcontent);
	      mydiv.insertBefore(newcontent, mydiv.firstChild);
	    }
	    else {
	      //alert('error');
	    }


	   if(data.unseen_notification > 0)
	   {
	     var x = document.getElementById("myAudio");
	     x.play();
			 $('#ncount').html(data.unseen_notification);
	   }

	  }

	  });

	  }

	  load_unseen_notification();

	  // load new notifications

	  $(document).on('click', '#ndropdown-toggle', function(){

	  $('#ncount').html('');

		<?php
				//date_default_timezone_set("Asia/Karachi");
				$dbhost = 'localhost';
				$dbuser = 'root'; // Password & username must be encoded
				$dbpass = '';
				$dbname = 'osama';

				//Connect
				$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
				if (mysqli_connect_errno()) {
					printf("MySQLi connection failed: ", mysqli_connect_error());
					//exit();
				}
		$update_query = "UPDATE files SET nstatus = 1 WHERE nstatus=0";
		mysqli_query($mysqli, $update_query);
		 ?>
	  load_unseen_notification('yes');

	  });

	  setInterval(function(){

	  load_unseen_notification();;

	  }, 600000);

	  });
	</script>
	
	<script type="text/javascript">
		$( "#manufacturerForm" ).on( "submit", function( event ) {
			event.preventDefault();
			$.ajax({
			url: "<?php echo base_url().'UserAuth/addedManufacturer' ?>",
			type:'POST',
			data:$('#manufacturerForm').serialize()
			}).done(function (data){
			$("#notificationRegister").show('fast');
			$("#notificationRegister").html(data);
			document.getElementById("manufacturerForm").reset();  
			});                                                  
		});
		
		$( "#coachForm" ).on( "submit", function( event ) {
			event.preventDefault();
			$.ajax({
			url: "<?php echo base_url().'UserAuth/addedCoach' ?>",
			type:'POST',
			data:$('#coachForm').serialize()
			}).done(function (data){
			$("#notificationRegister1").show('fast');
			$("#notificationRegister1").html(data);
			document.getElementById("coachForm").reset();  
			});                                                  
		});

		$( "#groundForm" ).on( "submit", function( event ) {
			event.preventDefault();
			$.ajax({
			url: "<?php echo base_url().'UserAuth/addedGround' ?>",
			type:'POST',
			data:$('#groundForm').serialize()
			}).done(function (data){
			$("#notificationRegister2").show('fast');
			$("#notificationRegister2").html(data);
			document.getElementById("groundForm").reset();  
			});                                                  
		});

		$( "#teamForm" ).on( "submit", function( event ) {
			event.preventDefault();
			$.ajax({
			url: "<?php echo base_url().'UserAuth/addedTeam' ?>",
			type:'POST',
			data:$('#teamForm').serialize()
			}).done(function (data){
			$("#notificationRegister3").show('fast');
			$("#notificationRegister3").html(data);
			document.getElementById("teamForm").reset();  
			});                                                  
		});
	</script>

    <!-- Ck Editor -->
    <script src="<?= base_url() ?>assets/admin/plugin/ckeditor/plugin.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugin/ckeditor/ckfinder.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugin/ckeditor/ckeditor.js"></script>
    <script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'editor1', {
  extraPlugins: 'imageuploader'
});
        //CKFinder.setupCKEditor( editor );
    </script>  
	<!-- Ck Editor -->    
  </body>
</html>
