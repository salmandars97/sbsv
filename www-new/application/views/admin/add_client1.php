<script>
function showpass() {
  var x = document.getElementById("user_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Client Data</h3>
              </div>
                <a href="<?php echo base_url().'Main/display_clients1' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Main/added_client1' ?>" enctype="multipart/form-data" >
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file_no">File No. <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="file_no" class="form-control col-md-7 col-xs-12" type="number" name="file_no" required >
                        </div>
                      </div>
					  
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user_name" class="form-control col-md-7 col-xs-12" type="text" name="user_name" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="u_email" class="form-control col-md-7 col-xs-12" type="email" name="u_email" required >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job_skills">Job Skills <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="job_skills" class="form-control col-md-7 col-xs-12" type="text" name="job_skills" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user_password" class="form-control col-md-7 col-xs-12" type="password" name="user_password" required >
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" onclick="showpass()" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                              Show Password
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no">Phone No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone_no" class="form-control col-md-7 col-xs-12" type="tel" name="phone_no" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="immigration_country">Immigration Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="immigration_country" class="form-control col-md-7 col-xs-12" type="text" name="immigration_country" required >
                        </div>
                      </div>
					
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_payment">Total Payment <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="total_payment" class="form-control col-md-7 col-xs-12" type="text" name="total_payment" required >
                        </div>
                      </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_status">Payment Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="payment_status" class="form-control col-md-7 col-xs-12" type="text" name="payment_status" required >
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_stage">Current Stage <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="current_stage" class="form-control col-md-7 col-xs-12" type="text" name="current_stage" required >
                        </div>
                      </div>

                      <!--div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="doc_file">Attachment File <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="doc_file" class="form-control col-md-7 col-xs-12" type="file" name="doc_file" >
                        </div>
                      </div-->


                      

                     
                    
     
            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!--button type="" class="btn btn-primary">Cancel</button-->
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                          
                  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




