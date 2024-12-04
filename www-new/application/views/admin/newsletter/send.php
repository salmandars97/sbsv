<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		if($msg == "as"){
			echo '<script language="javascript">';
			echo 'Swal.fire({
			icon: "success",
			title: "Newsletter send successfully."
			})';
			echo '</script>';
		}
		else if($msg == "afe"){
			echo '<script language="javascript">';
			echo 'Swal.fire({
			  icon: "error",
			  title: "An error occured please try again."
			})';
			echo '</script>';
		}
		else if($msg == "va"){
			echo '<script language="javascript">';
			echo 'Swal.fire({
			  icon: "warning",
			  title: "Please Enter your Message."
			})';
			echo '</script>';
		}
	}
?>
<head>
  <!-- Ck Editor -->
    <script type="text/javascript" src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/ckfinder/ckfinder.js"></script>
  <!-- Ck Editor -->
</head>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="x_panel">
					<div class="x_title">
						<div class="col-md-10">
							<h2>Send Newsletter<small></small></h2>
						</div>
            <div class="col-md-2">
								<!-- Welcome Admin! -->
								<form method="post" action="<?php echo base_url().'Main/test_news' ?>" enctype="multipart/form-data">
									<input type="submit" name="Submit" value="Send" class="btn btn-block btn-danger">
							</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>

        <div class="row">
            <div class="col-md-12">
                    <div class="x_content">
                             <div class="form-group">
      								           <input type="text" name="subject" class="form-control" id="email" placeholder="Type Subject Here" required />
            							  </div>
                            <div class="form-group">
                              <?php
                                echo $this->ckeditor->editor("message","");
                              ?>
                            </div>
                            <div class="form-group">
                                <label for="pic">Featured Image <span class="text-danger">*</span></label>
                                    <input id="imgInp" accept="image/*" class="btn btn-primary" type="file" name="pic" required />	
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
