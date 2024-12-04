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
							<h2>Display Users<small></small></h2>
						</div>
						<div class="col-md-2">
							<!-- Welcome Admin! -->
							<form method="post" action="<?= base_url().'Admin/add_c_user' ?>">
								<input type="submit" name="Submit" value="Add User" class="btn btn-primary"> 
							</form> 
						</div>
						<div class="clearfix"></div>
					</div> 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
                                <th>Program</th>
								<th>User Email</th>
								<th>Change Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i=0;
							foreach ($display_user as $key => $value) {
							$i++;	?> 
						<tr>
							<td><?= $value->user_id ?></td>
							<td><?= $value->user_name ?></td>
                            <td>
                                <?php
                                    if ($value->clients_type == 'all') {
                                        echo strtoupper("Immigration");
                                    }
                                    else {
                                        echo strtoupper($value->clients_type);
                                    }
                                ?>
                            </td>
							<td><?= $value->user_email ?></td>
							<td id="upass<?php echo $i; ?>">
							<div class="rows">
								<div class="col-md-12">
									<form action="<?php echo base_url().'Admin/change_c_password' ?>" method="post" >  
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Type password to change" name="password" id="password<?php echo $i; ?>" required>
											<input type="hidden" name="user_id" value="<?php echo $value->user_id; ?>">
											<button class="btn btn-success btn-sm" type="submit">Submit</button>
										</div>   
									</form>
									</div>
								</div>
							</td>
							<td> 
								<div class="rows">
									<div class="col-md-12">
									<form action="<?php echo base_url().'Admin/updateState2' ?>" method="post" >  
										<div class="form-group">
											<select class="form-control" name="state" onchange="this.form.submit()">
											<?php if($value->is_active == 1) { ?>
											<option value="1">Active</option>
											<option value="0">InActive</option>
											<?php }else {?>
											<option value="0">InActive</option>
											<option value="1">Active</option>
											<?php } ?>
											</select>
											<input type="hidden" name="user_id" value="<?php echo $value->user_id; ?>">
										</div>   
									</form>
									</div>
								</div>
								<form action="<?php echo base_url().'Admin/updateState3' ?>" method="post">
									<input type="hidden" name="user_id" value="<?php echo $value->user_id; ?>">
									<button class="btn btn-danger btn-btn" type="submit">Delete</button>
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
</div>
</div>
</div>
</div>		