<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		if($msg == "as"){
			echo '<script language="javascript">';
			echo 'Swal.fire({
			icon: "success",
			title: "Processed",
			text: "Client Documents added successfully."
			})';
			echo '</script>';
		}
	}
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Client Data</h3>
              </div>
                <a href="<?php echo base_url().'Main/display_clients' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form method="post" action="<?= base_url().'Main/doc_uplo?'?>" enctype="multipart/form-data">
    <div class="form-group">
        <label>Upload Your Document*</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" required/>
        <input type="file" name="files[]" multiple required/>
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




