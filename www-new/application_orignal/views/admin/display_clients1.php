<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    if($msg == "as") {
        echo '<script language="javascript">';
        echo 'Swal.fire({
			icon: "success",
			title: "Processed",
			text: "Client user added successfully."
			})';
        echo '</script>';
    } elseif($msg == "afe") {
        echo '<script language="javascript">';
        echo 'Swal.fire({
			  icon: "error",
			  title: "Failed",
			  text: "An error occured please try again."
			})';
        echo '</script>';
    }
}
?>

<style>
	.processing-spinner {
            top: 0% !important;
            background-color: #000;
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 2000;
            padding-top: 25%;
            opacity: 0.60;
            filter: alpha(opacity=50);
        }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>


<!-- Processing Spinner -->
<div class="processing-spinner" id="processing-spinner" style="display: none">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="spinner-border text-success" role="status"
                    style="width: 4rem;margin-left: 0%;height: 4rem;z-index: 20;">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h1 style="text-align: center;color:#ffffff;">Processing... Please Wait...</h1>
            </div>
        </div>
    </div>

<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title"></div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<div class="col-md-10">
								<h2>Display Clients1<small></small></h2>
                            <h2 class="text-danger">Please Disable adblocker. before downloading files.</h2>
							</div>

							<div class="col-md-2">
								<!-- Welcome Admin! -->
								<form method="post" action="<?= base_url().'Main/add_client1' ?>">
									<input type="submit" name="Submit" value="Add Client Data" class="btn btn-info"> 
								</form> 
							</div>
							<div class="clearfix"></div>
						</div>  
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="table-responsive">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Id</th>
									<th>File No.</th>
									<th>Name</th>								
									<th>Email</th>							
									<th>Job Skills</th>
									<th>Phone No</th>
									<th>Immigration Country</th>
									<th>Total Payment</th>
									<th>Status</th>
									<th>Stage</th>
									<th>Attachment File</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($display_clients as $key => $value) { ?> 
								<tr>
									<td><?= $value->id ?></td>
									<td><?php
                                    if($value->file_no == null) {
                                        echo "Not Entered";
                                    } else {
                                        echo $value->file_no;
                                    } ?></td>
									<td><?= $value->user_name ?></td>
									<td><?= $value->u_email ?></td>
									<td><?php
                                    if($value->job_skills == null) {
                                        echo "Not Entered";
                                    } else {
                                        echo $value->job_skills;
                                    } ?></td>
									<td><?= $value->phone_no ?></td>
									<td><?= $value->immigration_country ?></td>
									<td><?php
                                    if($value->total_payment == null) {
                                        echo "Not Entered";
                                    } else {
                                        echo $value->total_payment;
                                    } ?></td>
									<td><?= $value->payment_status ?></td>
									<td><?= $value->current_stage ?></td>
									<td>
										<a href="#success<?php echo $value->id; ?>" data-toggle="modal"> View Document</a>
										<form action="<?php echo base_url().'Main/display_document1?id=' . $value->id ?>" method="post">
											<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											<input type="submit" class="btn btn-block btn-success btn-sm" value="Update Document" />
										</form>
									</td>                                                  
									<td> 
										<form action="<?php echo base_url().'Main/updateState1' ?>" method="post" >  
											<div class="form-group">
												<select class="form-control" name="state" onchange="this.form.submit()">
													<?php if($value->visible == 1) { ?>
													<option value="1">Active</option>
													<option value="0">InActive</option>
													<?php } else {?>
													<option value="0">InActive</option>
													<option value="1">Active</option>
													<?php } ?>
												</select>
												<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											</div>					  
										</form>
										<form action="<?php echo base_url().'Main/delete_client1' ?>" method="post">
											<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											<input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-block btn-danger btn-sm" value="Delete" />
										</form>							  
										<form action="<?php echo base_url().'Main/update_client1' ?>" method="get">
											<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											<input type="submit" class="btn btn-block btn-success btn-sm" value="Edit" />
										</form>						  
										<form action="<?php echo base_url().'Main/update_client_password1' ?>" method="get">
											<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											<input type="submit" class="btn btn-block btn-info btn-sm" value="Change Password" />
										</form>
									</td>
                                </tr>
                                <?php } ?>
							</tbody>
						</table>
						<?php foreach ($display_clients as $key => $value) { ?>
							<?php
                            $randomName = "aa" . rand();
						    ?>
						<div class="modal fade" id="success<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header modal-header-success">
										<h4> Document Files</h4>
										<div class="row">
											<div class="col-sm-6 text-center bg-info">
												<h4>Name</h4>
											</div>
											<div class="col-sm-6 text-center bg-info">
												<h4>Uploaded On</h4>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<?php

						                $i =1;
						    foreach ($display_uplo as $key => $value1) {
						        if($value1->c_id == $value->id) {
						            ?>
										<div class="row">
											<div class="col-sm-6 h4">
											<a target="blank" class="<?= $randomName ?>" href="<?php echo base_url().'assets/upload/files/'?><?= $value1->file_name ?>"><?= $value1->file_name ?></a>
											</div>
											<div class="col-sm-6 text-right h4">
												<b><?= date('Y-m-d', strtotime($value1->uploaded_on)) ?></b>
											</div>
										</div>
										<form action="<?php echo base_url().'Main/delete_docu1' ?>" method="post">
											<input type="hidden" name="id" value="<?php echo $value1->id; ?>">
											<input class="btn-sm btn-danger btn-block" type="submit" onclick="return confirm('Are you sure you want to delete?');"  value="Delete" />
										</form>
										<hr style="border: 1px sloid red">
										<?php }
						        } ?>
									</div>
									<div class="modal-footer">
										<form target="_blank" action="<?= base_url().'assets/upload/files/abc.php'?>" method="post">
										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											<input type="hidden" name="cid" value="<?= $value->id ?>">
											<input type="button" onclick="download_my_zip('<?= $randomName ?>')"
                                                name="ZIP" class="btn btn-primary pull-right" value="Download Zip" />
											<!-- <input type="submit" name="ZIP" class="btn btn-primary pull-right" value="Download Zip" /> -->
										</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<?php } ?>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<a href="#" id="zip_anchor"></a>

<script>
    function request(url) {
        return new Promise(function (resolve) {
            var httpRequest = new XMLHttpRequest();
            httpRequest.open("GET", url);
            httpRequest.onload = function () {
                zip.file(url, this.responseText);
                resolve()
            }
            httpRequest.send()
        })
    }

    function download_my_zip(className) {
        // var zip = new JSZip();
        // var a = document.getElementById("zip_anchor");
		$("#zip_anchor").click();
		$('#processing-spinner').show();
        var urls = [];

        var elemnt = document.querySelectorAll('.' + className);
        for (var i = 0, len = elemnt.length; i < len; i++) {
            // if (i == 1) {
                urls.push(elemnt[i].getAttribute("href"));
            // }
        }

        var zip = new JSZip();
        var count = 0;
        var zipFilename = "clients_docs.zip";

        urls.forEach(async function (imgURL, i) {
            let filename = '';
            try {
                filename = new URL(imgURL).pathname.split('/').pop();
            } catch (e) {
                console.error(e);
                // alert(e);
				$('#processing-spinner').hide();
            }
            console.log(filename);
            try {
            // var filename = "image" + i + '.jpg'
            setTimeout(function() {
			var image = await fetch(imgURL);
            var imageBlog = await image.blob();
            var img = zip.folder("files");
            // loading a file and add it in a zip file
            img.file(filename, imageBlog, { binary: true });
            count++
            if (count == urls.length) {
                zip.generateAsync({ type: 'blob' }).then(function (content) {
                    saveAs(content, zipFilename);
                });
				$('#processing-spinner').hide();
            }
		}, 1000);
        } catch (e) {
                console.error(e);
                // alert(e);
				// $('#processing-spinner').hide();
            }
        });
    }
</script>
