        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Reset Password</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                       <div id="notification3"></div>   

                    <form id="resetPassword" class="form-horizontal form-label-left">
                    
                      


                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Enter your current password: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12 validate[required]" type="text" id="Cpass" name="Cpass" placeholder="current password" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Enter new password: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12 validate[required]" id="Npass" name="Npass" placeholder="new password" required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Repeat password: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Rpass" name="Rpass" required="required" class="form-control col-md-7 col-xs-12 validate[required]" placeholder="repeat password">
                        </div>
                      </div>
        
     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!--button type="submit" class="btn btn-primary">Cancel</button-->
                          <button type="button" class="btn btn-success" id="request" onclick="myfunction()">Submit</button>

                          <span class="error"> <?php if(isset($error)) echo $error; ?> </span>

                        </div>
                      </div>
                    </form>




                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <script type="text/javascript">

      $("#notification3").hide();



         jQuery(document).ready(function(){

             // binds form submission and fields to the validation engine

             jQuery("#resetPassword").validationEngine();

         });

           function myfunction(){   
              var cPass = document.getElementById("Cpass").value;

              var nPass = document.getElementById("Npass").value;

              var rPass = document.getElementById("Rpass").value;

              if (cPass == '' || nPass == '' || rPass == ''){

                alert("Please fill all the fields");

              }else{

                    $.ajax({

                    url: "<?php echo base_url(); ?>UserAuth/verifyResetPassword",

                    type:'POST' ,

                    data:'cPass='+cPass+'&nPass='+nPass+'&rPass='+rPass

                    }).done(function (data){  

                      $("#notification3").show();

                    $("#notification3").html(data);

                    document.getElementById("resetPassword").reset();

                    });

              }

           }

    </script>