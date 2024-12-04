<?php
  if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    if($msg == "as"){
      echo '<script language="javascript">';
      echo 'Swal.fire({
        icon: "success",
        title: "Processed",
        text: "Assessment submitted successfully."
      })';
      echo '</script>';
      }
  }
?>
	<!-- page content -->
        <div class="right_col" role="main">
			<div class="">
				<div class="page-title"> </div>
				<div class="clearfix"></div>
  				<form method="post" action="<?php echo base_url(); ?>Leads/assign_bulk_leads">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<div class="col-md-6">
									<h2>Assessment<small></small></h2>
								</div>
								<div class="col-md-6 text-right">
									<button class="btn btn-success" type="submit">
									<span class="fa fa-check pr-3"></span>Bulk Assign Lead </button>
									<button class="btn btn-danger" id="bulkReject" type="button">
									<span class="fa fa-close pr-3"></span>Bulk Reject Lead </button>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select id="user" name="user" class="form-control" required>
											<option value="0">Select User</option>
											<?php foreach ($users as $key => $value): ?>
												<option value="<?php echo $value->user_id; ?>"><?php echo $value->user_name; ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table id="datatable" class="table table-bordered table-striped" width="100%">
								<thead>
									<tr>
									    <th></th>
										<th width="50px"><input type="checkbox" id="master" onClick="masterCheckBox(this)"></th>
										<th>Sno.</th>
										<th>Destination</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone No</th>
										<th>Occupation</th>
										<th>Message</th>
										<th>Reference</th>
										<th>Date</th>
										<th>File</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($leads as $key => $value) { ?>
									<tr>
										<td></td>
                                        <td><input type="checkbox" class="sub_chk" name="ids[]" value=<?= $value->id ?>></td>
										<td><?= $value->id ?></td>
										<td><?= $value->destination ?></td>
										<td><?= $value->name ?></td>
										<td><?= $value->email ?></td>
										<td><?= $value->phone_no ?></td>
										<td><?= $value->occupation ?></td>
										<td>
											<?php
												if($value->message != "") {
												?>
												<textarea class="form-control" rows="4" style="margin: 0px; height: 158px; width: 387px;"><?= $value->message ?></textarea>
												<?php }
												else
												{
													echo "No Message";
												}
											?>
										</td>
										<td><?= $value->que ?></td>
										<td><?= $value->date_added ?></td>
										<td>
											<?php
											if($value->datafile != "") {
											?>
											<a target="blank" href="<?php echo base_url().'assets/admin/images/file/'?><?= $value->datafile ?>"><?= 'download' ?></a>
											<?php }
											else
											{
												echo "No Document Found";
											}
											?>
										</td>
										<td>
											<form action="<?php echo base_url().'Leads/delete_assessment' ?>" method="post">
												<input type="hidden" name="id" value="<?php echo $value->id; ?>">
												<input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Reject" />
											</form>
											<a href="<?php echo base_url().'Leads/assign_assessment?aid=' . $value->id . '&atype=visa&page=' . $page; ?>" class="btn btn-primary btn-sm">
												Assign
											</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url().'assets/admin/vendors/jquery/dist/jquery.min.js ' ?>"></script>
<script>
	// Select all rows in report
function masterCheckBox(element) {
	if($(element).is(':checked',true))  
	{
		$(".sub_chk").prop('checked', true);  
	} else {  
		$(".sub_chk").prop('checked',false);  
	}
}

$("#bulkReject").click(function(){
  	ids =[];
  	$('.sub_chk:checked').map(function(){
	  	// alert($(this).val());
        return ids.push($(this).val());
    }).get();
    if(ids == "") {
    	alert("Please select leads.");
    }
    else {
      $.post("bulk_reject",
      {
      ids: ids
      },
      function(data){
         alert("Leads rejected successfully");
		 location.reload();
      });
    }
  });
</script>