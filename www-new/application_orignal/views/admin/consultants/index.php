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
                            <a href="<?php echo base_url().'Consultancy/consultants_create' ?>" class="btn btn-success">Create</a>
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
								<th>Email</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($consultants as $key => $value) { ?> 
							<tr>
								<td><?= $key + 1?></td>
								<td><?= $value->name ?></td>
								<td><?= $value->email ?></td>
								<td><?= $value->created_at ?></td>          
								<td>
									<form action="<?php echo base_url().'Consultancy/consultant_delete' ?>" method="post">
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