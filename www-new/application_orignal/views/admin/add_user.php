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
                <h3>Add User</h3>
              </div>
                <a href="<?php echo base_url().'Admin/display_user' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a> 
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Admin/added_user' ?>" enctype="multipart/form-data" >



                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user_name" class="form-control col-md-7 col-xs-12" type="text" name="user_name" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user_email" class="form-control col-md-7 col-xs-12" type="email" name="user_email" required >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
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
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
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




