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
							<h2>Investment Assessment<small></small></h2>
						</div>
						<div class="clearfix"></div>
					</div> 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-bordered table-striped" width="100%">
						<thead class="bg-dark text-white">
							<tr>
								<th>Code</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone No</th>
								<th>Occupation</th>
								<th>Reference</th>
								<th>File</th>
								<th>Date</th>
								<th>Message</th>
								<?php if(!$this->session->userdata('user_id')){ ?>
								<th>Action</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($leads as $key => $value) { ?> 
							<tr id="<?= $value->id ?>">
								<td><?= $value->id ?></td>
								<td><?= $value->name ?></td>
								<td><?= $value->email ?></td>
								<td><?= $value->phone_no ?></td>
								<td><?php
									if($value->occupation != "") {
									    echo $value->occupation;
									}
									else{
									    echo "Not filled";
									}
									?></td>
								<td><?= $value->que ?></td>
								<td>
									<?php
									if($value->datafile != "") {
									?>
									<a target="blank" href="<?php echo base_url().'assets/admin/images/file/'?><?= $value->datafile ?>"><?= 'download' ?></a>
									<?php }
									else
									{
									echo "No Document Was Uploaded";
									}
									?>
								</td>    
								<td><?= $value->date_added ?></td>
								<td>
									<?php
										if($value->message != "") {
										?>
										<div><?= $value->message ?></div>
										<?php }
										else
										{
											echo "No Message";
										}
									?>
								</td>     
							    
							        <?php
							        if(!$this->session->userdata('user_id')){
							            echo "<td>";
							        if($value->e_id != "0" && $value->e_id != ""){
							        ?>
							        <a href="<?php echo base_url().'Leads/assign_assessment?aid=' . $value->id . '&atype=a&page=' . $page; ?>" class="btn btn-success btn-sm">
												Re-Assign
									</a>
									<?php } 
									else { ?>
									<a href="<?php echo base_url().'Leads/assign_assessment?aid=' . $value->id . '&atype=a&page=' . $page; ?>" class="btn btn-primary btn-sm">
												Assign
									</a>
									<?php } ?>
									<button onclick="reject(<?= $value->id ?>)" class="btn btn-danger btn-sm">
									Reject
									</button>
									<?php
									echo "</td>";
									} ?>
							    
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

<script language="javascript" type="text/javascript">
    function reject(id){
        document.getElementById(id).style.display='none';
        var win = window.open('http://sbsv.test/Leads/rej_inv?id='+id, '_blank');
        win.focus();
    }
</script>
