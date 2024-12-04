<!--script type="text/javascript">
	  window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer1", {
        theme: "theme2",
        title: {
          text: "Users - per month"
        },
        animationEnabled: true,
        axisX: {
          valueFormatString: "MMM",
          interval: 1,
          intervalType: "month"

        },
        axisY: {
          includeZero: false

        },
        data: [{
          type: "line",
          //lineThickness: 3,
          dataPoints: [
        
          <?php foreach ($get_all_registered_users as $key => $value) { $month = $value->month-1; ?> 
          
          { x: new Date(<?= $value->year ?>, <?= $month  ?>, 1), y: <?= $value->total ?> },
           
          <?php } ?>

          // { x: new Date(2017, 00, 1), y: 450 },
          // { x: new Date(2017, 01, 1), y: 414 },
          // { x: new Date(2017, 02, 1), y: 520, indexLabel: "highest", markerColor: "red", markerType: "triangle" },
          // { x: new Date(2017, 03, 1), y: 460 },
          // { x: new Date(2017, 04, 1), y: 450 },
          // { x: new Date(2017, 05, 1), y: 500 },
          // { x: new Date(2017, 06, 1), y: 480 },
          // { x: new Date(2017, 07, 1), y: 480 },
          // { x: new Date(2017, 08, 1), y: 410, indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
          // { x: new Date(2017, 09, 1), y: 500 },
          // { x: new Date(2017, 10, 1), y: 480 },
          // { x: new Date(2017, 11, 1), y: 510 }
          ]
        }
        ]
      });
	  
      chart.render();
      var chart = new CanvasJS.Chart("chartContainer2", {
        title: {
          text: "Total Sales"
        },
        theme: "theme2",
        animationEnabled: true,
        axisX: {
          valueFormatString: "MMM"
        },
        axisY: {
          valueFormatString: "#0$"
        },
        data: [{
          type: "line",
          dataPoints: [
          { x: new Date(2017, 04, 1), y: 71, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
          // { x: new Date(2017, 02, 1), y: 55, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
          // { x: new Date(2017, 03, 1), y: 50, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
          // { x: new Date(2017, 04, 1), y: 65, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
          // { x: new Date(2017, 05, 1), y: 85, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
          // { x: new Date(2017, 06, 1), y: 68, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
          // { x: new Date(2017, 07, 1), y: 28, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
          // { x: new Date(2017, 08, 1), y: 34, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
          // { x: new Date(2017, 09, 1), y: 24, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 }
          ]
        }
        ]
      });
      chart.render();
    }
</script-->
<!--script src="<?= base_url().'assets/canvas/canvasjs.min.js' ?>"></script-->
	<!-- CLose Graph -->
	<!-- page content -->
	<div class="right_col" role="main">
	<style type="text/css">
	   .center_img{
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
	  
		span .countt{
			font-size: 40px;
			color: #5A738E;
		}

		.tile_countt .tile_stats_countt .countt{
			font-size: 40px;
			color: #5A738E;
		}
		@media (min-width: 768px){.tile_countt .tile_stats_countt .countt{font-size:40px}}
	</style>
	
	    <div class="row x_title">
			<div class="text-center">
				<div class="col-md-12" style="background-color:#05034d;color:white;padding-top:10px;padding-bottom:10px;">
					<h3>Consultancy Meetings</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($consultancy_pending as $key => $value) { ?>
				<a href="<?= base_url().'Consultancy/consultanting_meeting_list' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->count; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Pending</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($consultancy_rejected as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->count; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Rejected</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($consultancy_approved as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->count; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Approved</b></h4>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($consultancy_total as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->count; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Total</b></h4>
			</div>
		</div>

	    <div class="row x_title">
			<div class="text-center">
				<div class="col-md-12" style="background-color:#3386ce;color:white;padding-top:10px;padding-bottom:10px;">
					<h3>Site Traffic</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($web_visitors_filtert as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->web_visitors; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Today</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($web_visitors_filteryy as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->web_visitors; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Yesterday</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($web_visitors_filterm as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->web_visitors; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>This Month</b></h4>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<?php foreach ($web_visitors_filtery as $key => $value) { ?>
				<a href="#">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->web_visitors; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>This Year</b></h4>
			</div>
		</div>

		<div class="row x_title">
			<div class="text-center">
				<div class="col-md-12" style="background-color:#05034d;color:white;padding-top:10px;padding-bottom:10px;">
					<h3>Pending Leads</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_pending_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/pending_leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Assessments</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_pending_aipp_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/pending_aipp_leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Aipp Assessments</b></h4>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_investment_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/inv_leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_investment_assessment; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Investment Assessments</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_r_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/rej_inv_leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_r_assessment; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Rejected Investment Assessments</b></h4>
			</div>

			
		</div>
			

		<div class="row x_title">
			<div class="text-center">
				<div class="col-md-12" style="background-color:#3386ce;color:white;padding-top:10px;padding-bottom:10px;">
					<h3>Total Leads</h3>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Assessments</b></h4>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			 <?php
			 $rrr = 0;
			 foreach ($no_of_anthony_assessment2 as $key => $value) {
			     $rrr = $value->no_of_assessments;
			 }
			 ?>
				<?php foreach ($no_of_anthony_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/ann_leads' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments + $rrr; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Assessments of Anthony</b></h4>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_ca_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/ca_assessment' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_ca_assessments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Canada Leads</b></h4>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_au_assessment as $key => $value) { ?>
				<a href="<?= base_url().'Leads/au_assessment' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_au_assessments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Australia Leads</b></h4>
			</div>
		</div>	
		
		<div class="row x_title">
			<div class="text-center">
				<div class="col-md-12" style="background-color:#05034d;color:white;padding-top:10px;padding-bottom:10px;">
					<h3>Blogs / Comments</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_blogs as $key => $value) { ?>
				<a href="<?= base_url().'blogs/display_blogs' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_blogs; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Total Blogs</b></h4>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
			<!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->
				<?php foreach ($no_of_comments as $key => $value) { ?>
				<a href="<?= base_url().'blogs/display_comments' ?>">
				  <div class="text-center">
					<div id="circle">
					  <span class="countt" style="font-size:40px;"><?php echo $value->no_of_comments; ?></span>
					</div>
				  </div>
				</a>
				<?php } ?>
				<h4 style="text-align: center"><b>Total Comments</b></h4>
			</div>

		</div>



                  <div class="row x_title">

                  <div class="text-center">
                    <div class="col-md-12" style="background-color:#3386ce;color:white;padding-top:10px;padding-bottom:10px;">

                      <h3>Users / Contact Us / Subscribers</h3>

                    </div>
                  </div>



                </div>


                <div class="row">



                  <div class="col-md-4 col-sm-4 col-xs-4 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_user as $key => $value) { ?>
                    <a href="<?= base_url().'Admin/display_user ' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_users; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>Users</b></h4>

                  </div>


                  <div class="col-md-4 col-sm-4 col-xs-4 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_contact as $key => $value) { ?>
                    <a href="<?= base_url().'Contact/contact_form ' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_contacts; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>Contact Form</b></h4>

                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_subscribers as $key => $value) { ?>
                    <a href="<?= base_url().'Subscriber' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_subscribes; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>Subscribers</b></h4>

                  </div>

                  


                  </div>


                  <div class="text-center">
                    <div class="col-md-12" style="background-color:#05034d;color:white;padding-top:10px;padding-bottom:10px;">

                      <h3>Modify Website</h3>

                    </div>
                  </div>

                  <div class="row">

                  <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">

                    <a href="<?php echo base_url();?>Contact/contact_us">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/letter.png' ?>" >



                    <h4 style="text-align: center"><b>Contact Form</b></h4></a>

                  </div>

                  <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">

                    <a href="<?php echo base_url();?>Testimonials/testimonial">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/customer-review.png' ?>" >



                    <h4 style="text-align: center"><b>Testimonials</b></h4></a>

                  </div>

                  <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">

                    <a href="<?php echo base_url();?>About/about_us">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/resume.png' ?>" >



                    <h4 style="text-align: center"><b>About Us</b></h4></a>

                  </div>


                  <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">

                    <a href="<?php echo base_url();?>Faq/faqs">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/conversation.png' ?>" >



                    <h4 style="text-align: center"><b>FAQ's</b></h4></a>

                  </div>

                  <div class="text-center">
                    <div class="col-md-12" style="background-color:#3386ce;color:white;padding-top:10px;padding-bottom:10px;">

                      <h3>Modify Website Inner Pages</h3>

                    </div>
                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>Canada/canada">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/canada.png' ?>" >



                    <h4 style="text-align: center"><b>Canada</b></h4></a>

                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>Australia/australia">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/australia.png' ?>" >



                    <h4 style="text-align: center"><b>Australia</b></h4></a>

                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>US/us">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/united-states.png' ?>" >



                    <h4 style="text-align: center"><b>United States</b></h4></a>

                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>UK/uk">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/united-kingdom.png' ?>" >



                    <h4 style="text-align: center"><b>United Kingdom</b></h4></a>

                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>NZ/nz">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/new-zealand.png' ?>" >



                    <h4 style="text-align: center"><b>New Zealand</b></h4></a>

                  </div>

                  <div class="col-md-2 col-sm-2 col-xs-3 tile_stats_count">

                    <a href="<?php echo base_url();?>Schengen/schengen">
                    <img style="padding-top: 20px;" class="img-reponsive center_img" src="<?php echo base_url().'assets/admin/images/web/schengen.png' ?>" >



                    <h4 style="text-align: center"><b>Schengen</b></h4></a>

                  </div>

              

                  


                  </div>



                













                  </div>
                  





               