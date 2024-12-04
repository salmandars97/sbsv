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
							<h2><?= $title ?><small></small></h2>
						</div>
                        <div class="col-md-6 text-right">
                            <!-- <a href="<?php echo base_url().'Consultancy/consultanting_program_create' ?>" class="btn btn-success">Create</a> -->
                        </div>
						<div class="clearfix"></div>
					</div> 
					<div class="clearfix"></div>
				</div>

				<div class="x_content">
					<table id="datatable" class="table table-bordered table-striped" width="100%">
						<thead class="bg-dark text-white">
							<tr>
								<th>Sr#</th>
								<th>Name</th>
								<th>Consultant</th>
								<th>Email</th>
								<th>Contact#</th>
								<th>Note</th>
								<th>Country</th>
								<th>Amount</th>
								<th>Program</th>
								<th>Appointment Date</th>
								<th>Timings</th>
								<th>Total Minutes</th>
								<th>Status</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($consultants as $key => $value) { ?> 
							<tr>
								<td><?= $key + 1?></td>
								<td><?= $value->name ?></td>
								<td><?= $value->consultant ?></td>
								<td><?= $value->email ?></td>
								<td><?= $value->contact_no ?></td>
								<td><?= $value->note ?></td>
								<td><?= $value->country ?></td>
								<td><?= $value->amount ?></td>
								<td><?= $value->program ?></td>
								<td><?= $value->appointment_date ?></td>
								<td><?= $value->timings ?></td>
								<td><?= $value->total_timings ?></td>
								<td><?php if($value->status == "1") { echo "Approved"; } if($value->status == "2") { echo "Rejected"; } if($value->status == "0") { echo "Pending"; } ?></td>
								<td><?= $value->created_at ?></td>          
								<td>
									<?php if($value->status == 0) { ?>
									<form action="<?php echo base_url().'Consultancy/consultanting_meeting_reject' ?>" method="post">
										<input type="hidden" name="id" value="<?php echo $value->id; ?>">
										<input type="submit" onclick="return confirm('Are you sure you want to reject?');" class="btn btn-primary btn-sm" value="Reject" />
									</form>
									<form action="<?php echo base_url().'Consultancy/consultanting_meeting_approve' ?>" method="post">
										<input type="hidden" name="id" value="<?php echo $value->id; ?>">
										<input type="submit" onclick="return confirm('Are you sure you want to approve?');" class="btn btn-success btn-sm" value="Approve" />
									</form>
									<?php } ?>
									<form action="<?php echo base_url().'Consultancy/consultanting_meeting_delete' ?>" method="post">
										<input type="hidden" name="id" value="<?php echo $value->id; ?>">
										<input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" />
									</form>
								</td>
							</tr>	
							<?php } ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>