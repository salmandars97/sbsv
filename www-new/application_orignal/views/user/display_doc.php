

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Client Data</h3>
              </div>
                <a href="<?php echo base_url().'User/display_clients' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form method="post" action="<?= base_url().'User/doc_uplo'?>" enctype="multipart/form-data">
    <div class="form-group">
        <label>Upload Your Document*</label>
        <input type="file" name="files[]" multiple/>
    </div>
    <div class="form-group">
        <input type="submit" name="fileSubmit" value="Upload"/>
    </div>
</form>
		
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




