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
								<h2>Canada Consultations<small></small></h2>
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
									<th>Name</th>
									<th>Email</th>
									<th>Phone No</th>
									<th>Permanent resident/citizen</th>
									<th>Date</th>
									<th>Message</th>
									<th>Reference</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($leads as $key => $value) { ?>
								<tr>
									<td><?= $value->id ?></td>
									<td><?= $value->name ?></td>
									<td><?= $value->email ?></td>
									<td><?= $value->contact_no ?></td>
									<td><?= $value->permanent ?></td>
									<td><?= $value->date_added ?></td>
									<td><?= $value->message ?></td>
									<td><?= $value->reference ?></td>
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
