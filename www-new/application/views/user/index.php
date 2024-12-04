
<script type="text/javascript">
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
  </script>
    <script src="<?= base_url().'assets/canvas/canvasjs.min.js' ?>"></script>
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

                <div class="row">
                  <div class="row x_title">

                  <div class="text-center">
                    <div class="col-md-12" style="background-color:#ed143d;color:white;padding-top:10px;padding-bottom:10px;">

                      <h3>Total Leads</h3>

                    </div>
                  </div>
                </div>





                  <div class="row">

                  <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_assessment as $key => $value) { ?>
                    <a href="<?= base_url().'User/leads' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>Assessments</b></h4>

                  </div>
                  
                  <?php if($_SESSION['user_id'] == 13) { ?>
                  
                  <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

                    <?php foreach ($no_of_aipp_assessment as $key => $value) { ?>
                    <a href="<?= base_url().'User/aipp_leads' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>AIPP Assessments</b></h4>

                  </div>
                  
                  <?php } ?>

                  <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_ca_assessment as $key => $value) { ?>
                    <a href="<?= base_url().'User/inv_leads' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_ca_assessments; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>Invesment Assessment</b></h4>

                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

                    <!-- <div id="circle"><span class="countt"><?php echo $value->no_of_out_of_pro; ?></span></div> -->

                    <?php foreach ($no_of_cec_assessment as $key => $value) { ?>
                    <a href="<?= base_url().'User/cec_leads' ?>">
                      <div class="text-center">
                        <div id="circle">
                          <span class="countt" style="font-size:40px;"><?php echo $value->no_of_assessments; ?></span>
                        </div>
                      </div>
                    </a>
                    <?php } ?>



                    <h4 style="text-align: center"><b>CEC Assessment</b></h4>

                  </div>



                  </div>



                

                  </div>









                  </div>
                  





               