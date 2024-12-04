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
							<h2>Home Banner Images<small></small></h2>
						</div>
						<div class="clearfix"></div>
					</div> 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-bordered table-striped" width="100%">
						<thead class="bg-dark text-white">
							<tr>
								<th>Id</th>
								<th>Image</th>
								<th>Change Image</th>
								<th>Remove Image</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $key => $value) { ?> 
							<tr>
								<td><?= $value->id ?></td>
								<td>
									<?php
										if ($value->path == '') {
											echo 'banner inactive';
										}
										else {
											echo "<img src='".base_url(). 'assets/slider/' .$value->path."' width='200px' alt='banner'/>";
										}
									?>
								</td>
								<td>
									<form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Main/update_slider' ?>" enctype="multipart/form-data" >
										<input type="hidden" name="id" value="<?= $value->id ?>">
										<input type="file" name="pic" class="validate[required]"  onchange="readURL(this);" required><br>
										<button id="send" type="submit" class="btn btn-success btn-sm">Submit</button>
									</form>
								</td>
								<td>
									<a class="btn btn-danger" href="<?php echo base_url().'Main/remove_slider?id=' . $value->id ?>">Remove Image</a>
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