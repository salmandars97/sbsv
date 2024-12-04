<?php
if(strtolower($_SESSION['user_name']) != 'admin' || isset($_SESSION['crmo'])){
	echo '<script language="javascript">';
	echo 'alert("Access denied");';
	echo 'window.history.go(-1);';
	echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <style media="screen">
  .scrollable-menu {
    height: auto;
    width: 400px;
    max-height: 500px;
    overflow-x: hidden;
  }

  .n_li{
    list-style: none;
    padding: 0 0 0px 16px;
  }

	.margin-top-2 {
		margin-top:2% !important;
	}
</style>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Admin Panel</title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url().'assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo base_url().'assets/admin/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?php echo base_url().'assets/admin/vendors/nprogress/nprogress.css' ?>" rel="stylesheet">
		<!-- iCheck -->
		<link href="<?php echo base_url().'assets/admin/vendors/iCheck/skins/flat/green.css' ?>" rel="stylesheet">
		<!-- bootstrap-progressbar -->
		<link href="<?php echo base_url().'assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css' ?>" rel="stylesheet">
		<!-- JQVMap -->
		<link href="<?php echo base_url().'assets/admin/vendors/jqvmap/dist/jqvmap.min.css' ?>" rel="stylesheet"/>
		<!-- bootstrap-daterangepicker -->
		<link href="<?php echo base_url().'assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css' ?>" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="<?php echo base_url().'assets/admin/build/css/custom.css' ?>" rel="stylesheet">
		<!-- Sweet Alerts Plugin Installation -->
		<script src="<?php echo base_url().'assets/web/js/sweetalert.js' ?>"></script>
		<!-- DataTables Installation -->
		<link href="<?php echo base_url().'assets/plugins/datatables/css/buttons.dataTables.min.css' ?>" rel="stylesheet">
		<link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
		<link href="<?php echo base_url().'assets/plugins/datatables/css/responsive.bootstrap.min.css' ?>" rel="stylesheet">

	</head>

  <body class="nav-md">
		<audio id="myAudio" >
		<source src="<?php echo base_url().'assets/piece-of-cake.mp3' ?>" type="audio/mpeg">
		Your browser does not support the audio element.
		</audio>      
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url().'main' ?>" class="site_title"><i class="fa fa-hashtag"></i>  <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
				<div class="profile_pic">
					<img src="<?php echo base_url().'assets/admin/images/logostepbystepvisas.png'?>" alt="..." class="img-circle profile_img">
				</div>
				<div class="profile_info">
					<h2></h2>
					<h2>Welcome,</h2>
					<h2><?php echo $_SESSION['user_name'];?></h2>
				</div>
				<br>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
					<li><a href="<?php echo base_url().'Main' ?>"><i class="fa fa-home"></i>Home</a></li>
					<li><a><i class="fa fa-bullhorn"></i>Consultancy <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="<?php echo base_url();?>Consultancy/consultants_list">Consultants</a></li>
						  <li><a href="<?php echo base_url();?>Consultancy/consultanting_program_list">Programs</a></li>
						  <li><a href="<?php echo base_url();?>Consultancy/consultanting_meeting_list">Meetings</a></li>
						</ul>
					</li>
					<!--<li><a href="<?php echo base_url()?>Main/send_newsletter"><i class="fa fa-envelope"></i>Send Newsletters </a>-->
					<li><a href="<?php echo base_url().'blogs/display_blogs' ?>"><i class="fa fa-newspaper-o"></i> Blogs </a></li>
					
					<li><a href="<?php echo base_url().'blogs/display_comments' ?>"><i class="fa fa-comment"></i> Blogs Comments </a></li>
					<li><a href="<?php echo base_url().'Leads/ca_pending_consultations' ?>"><i class="fa fa-bullhorn"></i>Pending Canada Consultations</a></li>
					<li><a href="<?php echo base_url().'Leads/ca_consultations' ?>"><i class="fa fa-bullhorn"></i>Canada Consultations</a></li>			
					<li><a><i class="fa fa-bullhorn"></i>Pending Leads <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="<?php echo base_url();?>Leads/pending_cec_leads">Cec Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads/pending_leads">Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads/ca_pending_leads">Canada Leads</a></li>
						  <li><a href="<?php echo base_url();?>Leads/au_pending_leads">Australia Leads</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-bullhorn"></i>Leads <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="<?php echo base_url();?>Leads/cec_leads">Cec Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads">Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads/selected_leads">Anthony Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads/ca_assessment">Canada Leads</a></li>
						  <li><a href="<?php echo base_url();?>Leads/au_assessment">Australia Leads</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-bullhorn"></i>Old Leads <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="<?php echo base_url();?>Leads/old_assessment">Assessments</a></li>
						  <li><a href="<?php echo base_url();?>Leads/old_ca_assessment">Canada Leads</a></li>
						  <li><a href="<?php echo base_url();?>Leads/old_au_assessment">Australia Leads</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url()?>Admin/display_user"><i class="fa fa-user"></i> Users </a></li>
					<li><a href="<?php echo base_url()?>Admin/display_program_user"><i class="fa fa-user"></i> CRM Users </a></li>
					<li><a href="<?php echo base_url().'Main/display_clients' ?>"><i class="fa fa-users"></i> Clients </a></li>
					<li><a href="<?php echo base_url().'Main/display_clients1' ?>"><i class="fa fa-users"></i> Clients1 </a></li>
					<li><a><i class="fa fa-phone"></i> Contact <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="<?php echo base_url();?>Contact/contact_form">Contact Form</a></li>
						  <li><a href="<?php echo base_url();?>Contact/contact_us">Contact Us Page</a></li>
						</ul>
					</li>
                    <li><a href="<?php echo base_url().'Main/addslider' ?>"><i class="fa fa-home"></i>Home Banners</a></li>
                        <li><a href="<?php echo base_url()?>About/about_us"><i class="fa fa-book"></i> About Us Page </a>
                  </li>

                        <li><a href="<?php echo base_url()?>Testimonials/testimonial"><i class="fa fa-quote-left"></i> Testimonials </a>
                  </li>
                  

                  <li><a href="<?php echo base_url()?>Faq/faqs"><i class="fa fa-question-circle"></i> FAQ's </a>
                  </li>

                   <li><a><i class="fa fa-file"></i> Inner Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>Canada/canada">Canada Page</a></li>
                      <li><a href="<?php echo base_url();?>Australia/australia">Australia Page</a></li>
                      <li><a href="<?php echo base_url();?>US/us">United-state Page</a></li>
                      <li><a href="<?php echo base_url();?>UK/uk">United Kingdom Page</a></li>
                      <li><a href="<?php echo base_url();?>NZ/nz">New Zeland Page</a></li>
                      <li><a href="<?php echo base_url();?>Schengen/schengen">Schengen Page</a></li>


                      </ul></li>



                    <li><a href="<?php echo base_url()?>Subscriber"><i class="fa fa-users"></i> Subscribers </a>
                  </li>

                    <li><a href="<?php echo base_url();?>Admin/backup" type="submit" onclick="return confirm('Are you sure you want backup?')"><i class="fa fa-database"></i> Database Backup </a> </li>


                    <li><a href="<?php echo base_url().'Admin/resetPassword' ?>"><i class="fa fa-key"></i>Reset Password </a>
                    </li>
 </div>


            </div>
            <!-- /sidebar menu -->
			<!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url() ?>Auth/logout"">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
			<div class="nav_menu">
				<nav>
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<img src="<?php echo base_url().'assets/admin/images/logostepbystepvisas.png'?>" alt="">Step By Step Visas
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
							<li><a href="<?= base_url() ?>Auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
							</ul>
						</li>
						<li>
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
							?>
							<!-- Right(Notification) -->
              <ul class="nav navbar-nav navbar-right">

              <li class="hidden-xs" style="margin-top: 0%;">
                <a href="#" id="ndropdown-toggle" class="dropdown-toggle" data-toggle="dropdown">
									<?php
									$status_query = "SELECT COUNT(nstatus) FROM files WHERE nstatus=0";
									$result_query = mysqli_query($mysqli, $status_query);
									$count = mysqli_num_rows($result_query);
									 ?>
                  <span id="ncount" class="label label-pill label-primary count" style="border-radius:10px;"></span>
                  <span class="glyphicon glyphicon-bell" style="font-size: 1.7em;color: #d9534f;"></span></a>
                <ul class="dropdown-menu scrollable-menu"  id="ndropdown-menu">
									<?php
									$query = "SELECT f.c_id,f.uploaded_on as date,(select c.user_name from crm c WHERE c.id = f.c_id) as name FROM files f WHERE f.nstatus = 1 ORDER BY id DESC LIMIT 30";
									$result = mysqli_query($mysqli, $query);

													if(mysqli_num_rows($result) > 0)
													{
														while($row = mysqli_fetch_array($result))
														{
															echo '<li><p></p><a href="http://sbsv.test/Main/display_clients?id=' . $row['c_id'] .'"><strong style="color: #000;font-family: inherit;">'.$row["name"].'</strong><br /><p style="color: #000;font-family: inherit;"><em>uploaded new document.</em></p><small><em style="color: #000;font-family: inherit;">'.$row["date"].'</em></small></a></li><hr style="margin: 0;">';
														}
													}
											?>
                   
                </ul>
               </li>



              </ul> <!-- end navbar-right -->
						</li>

					</ul>
				</nav>
			</div>
		</div>
        <!-- /top navigation -->
        </div>

        <!-- /page content -->
