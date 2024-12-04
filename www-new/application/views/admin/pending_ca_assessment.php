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
			<div class="page-title"></div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<div class="col-md-6">
								<h2>Canda Leads<small></small></h2>
							</div>

							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table id="datatable" class="table table-bordered table-striped" width="100%">
							<thead>
								<tr>
									<th>Id</th>
									<th>Destination</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone No</th>
									<th>Occupation</th>
									<th>Date</th>
									<th>Work Experience</th>
									<th>Age</th>
									<th>Education</th>
									<th>English Language Skills</th>
									<th>Spouse English Language Skills</th>
									<th>Imidiate Relative in Canada</th>
									<th>Reference</th>
									<th>File</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($ca_leads as $key => $value) { ?>
								<tr>
									<td><?= $value->id ?></td>
									<td><?= $value->destination ?></td>
									<td><?= $value->name ?></td>
									<td><?= $value->email ?></td>
									<td><?= $value->phone_no ?></td>
									<td><?= $value->occupation ?></td>
									<td><?= $value->date_added ?></td>
									<td><?= $value->work_exprience ?></td>
									<td><?= $value->age ?></td>
									<td><?= $value->education ?></td>
									<td><?= $value->english_language_skills ?></td>
									<td><?= $value->spouse_english_language_skills ?></td>
									<td><?= $value->imediate_relative_canada ?></td>
									<td><?= $value->que ?></td>
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
										<form action="<?php echo base_url().'Leads/delete_caassessment' ?>" method="post">
											<input type="hidden" name="id" value="<?php echo $value->id; ?>">
											<input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Reject" />
										</form>
										<a href="<?php echo base_url().'Leads/assign_assessment?aid=' . $value->id . '&atype=imc&page=' . $page; ?>" class="btn btn-primary btn-sm">
											Assign
										</a>
									</td>
									<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>