
<?php  $username = $this->session->userdata('user_name'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Step-By-Step Visas | User Panel</title>

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
	<link href="<?php echo base_url().'assets/admin/build/css/custom.min.css' ?>" rel="stylesheet">
	<!-- Sweet Alerts Plugin Installation -->
	<script src="<?php echo base_url().'assets/web/js/sweetalert.js' ?>"></script>
	<!-- DataTables Installation -->
	<link href="<?php echo base_url().'assets/plugins/datatables/css/buttons.dataTables.min.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/plugins/datatables/css/responsive.bootstrap.min.css' ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url().'User' ?>" class="site_title"><i class="fa fa-hashtag"></i>  <span>User Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url().'assets/admin/images/logostepbystepvisas.png'?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>Welcome,</h2>
                <h2><?= $username ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
					          <li><a href="<?php echo base_url().'User' ?>"><i class="fa fa-home"></i>Home</a></li>
					          <li><a href="<?php echo base_url().'User/consultations' ?>"><i class="fa fa-chevron-down"></i>Canada Consultation</a></li>
                    <!--li><a href="<?/*php echo base_url().'User/display_clients' */?>"><i class="fa fa-user"></i>Display Clients </a></li-->
                    <li><a><i class="fa fa-bullhorn"></i> Leads <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>User/leads">Assessment</a></li>
                      <li><a href="<?php echo base_url();?>User/inv_leads">Investment Assessment</a></li>
                      <li><a href="<?php echo base_url();?>User/ca_assessment">Canada Leads</a></li>
                      <li><a href="<?php echo base_url();?>User/au_assessment">Australia Leads</a></li>
                    </ul></li>
                    <li><a href="<?php echo base_url().'UserAuth/resetPassword' ?>"><i class="fa fa-key"></i>Reset Password </a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url() ?>UserAuth/logout"">
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
                    <img src="<?php echo base_url().'assets/admin/images/logostepbystepvisas.png'?>" alt="">Step-By-Step Visas
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?= base_url() ?>UserAuth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->



        </div>

        <!-- /page content -->
