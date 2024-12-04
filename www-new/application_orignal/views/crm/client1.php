<script src="https://b/js/sweetalert.js"></script>
<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		if($msg == "as"){
			echo '<script language="javascript">';
			echo 'swal.fire({
			icon: "success",
			title: "Processed",
			text: "Documents uploaded successfully."
			})';
			echo '</script>';
		}
	}
?>
<?php  $username = $this->session->userdata('user_name');
$id = $this->session->userdata('id');
$cid;
?>

<section class="banner-ar relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Welcome <?= $username ?>			
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Crm/client '?>"> welcome</a></p>
			</div>											
		</div>
	</div>
</section>

<div class="container">
	<div class="row d-flex align-items-center justify-content-center">
		<h1>Client Area</h1>
	</div>
</div>

<?php foreach ($display_clients as $key => $value) { ?>
<div class="container bg-white section-gap">
	<div class="row">
		<div class="col-md-6">
			<?php $cid = $value->id; ?>
			
			<table class="table table-bordered table-hover" style="width:100%">
			<tr>
			<th>Name:</th>
			<td><?= $username ?></td>
			</tr>
			<tr>
			<th>Email:</th>
			<td><?= $value->u_email ?></td>
			</tr>
			<tr>
			<th>Phone Number:</th>
			<td><?= $value->phone_no ?></td>
			</tr>
			<tr>
			<th>Immigration Country:</th>
			<td><?= $value->immigration_country ?></td>
			</tr>
			<tr>
			<th>File Number:</th>
			<td><?= $value->file_no ?></td>
			</tr>
			<tr>
			<th>Job Skills:</th>
			<td><?= $value->job_skills ?></td>
			</tr>
			</table>
			<hr>
			<!--file upload form -->
			<form method="post" action="<?= base_url().'Crm/doc_uplo1?'?>" enctype="multipart/form-data">
						<div class="form-group">
							<label>Upload new documents</label>
							<input type="hidden" name="id" value="<?php echo $cid;  ?>" required/>
							<input type="hidden" name="name" value="<?php echo $username;  ?>" required/>
							<input type="file" class="btn btn-danger" id="resume2" name="files[]" multiple required/>
							<blockquote class="blockquote"><b>(Once uploaded can not be removed or edited)</b></blockquote>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="fileSubmit" value="Submit"/>
						</div>
			</form>
			<hr>
		</div>
		<?php } ?>
		<?php foreach ($display_clients as $key => $value) { ?>
	</div>
	<hr style="border: 1px solid black;">
	
	<div class="row section-gap">
		<div class="col-md-6" style="text-align: center;">
			<img src="../assets/web/img/client/total.png"> <span style=" padding-left: 50px; font-size: 20px">Total Payment :</span>
		</div>
		<div class="col-md-6" style="text-align: left;">
			<h3>CAD <?= $value->total_payment ?> $</h3>
		</div>
	</div>
	
	<div class="row section-gap">
		<div class="col-md-6" style="text-align: center;">
			<img src="../assets/web/img/client/bill.png"> <span style=" padding-left: 50px; font-size: 20px">Payment Status :</span>
		</div>
		<div class="col-md-6" style="text-align: left;">
			<h3>CAD <?= $value->payment_status ?> $</h3>
		</div>
	</div>

	<div class="row section-gap">
		<div class="col-md-6" style="text-align: center;">
			<img src="../assets/web/img/client/diagram.png"> <span style="padding-left: 50px; font-size: 20px">Current Status :</span>
		</div>
		<div class="col-md-6" style="text-align: left;">
			<p style="line-height: 1.5;" class="h3"><?= preg_replace('/$\R?^/m', '<br />', $value->current_stage) ?></p>
		</div>
	</div>

	<div class="row section-gap">
		<div class="col-md-6" style="text-align: center;">
			<img src="../assets/web/img/client/business.png"> <span style="padding-left: 50px; font-size: 20px">Document File :</span>
		</div>
		<div class="col-md-6" style="text-align: left;">
			<h3><a href="#success" data-toggle="modal"> View Documents</a></h3>
		</div>
	</div>
</div>
<?php } ?>
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header modal-header-success">
				<h4> Document Files</h4>
			</div>
			<div class="modal-body">
				<h5>
					<a target="blank">Name</a>
					<a class="float-right">Uploaded on</a>
				</h5>
				<hr style="border: 1px solid #00aef2">
				<?php
				foreach ($display_uplo as $key => $value) {
					if($value->c_id == $cid) {	?>
						<h5>
							<a target="blank" href="<?php echo base_url().'assets/upload/files/'?><?= $value->file_name ?>"><?= $value->file_name ?></a>
							<p class="float-right"><?= date('Y-m-d', strtotime($value->uploaded_on)) ?></p>
						</h5>
						<hr style="border: 1px solid red">
				<?php } } ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->