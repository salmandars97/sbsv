<!-- page content -->
<?php foreach ($lead as $key => $value): ?>
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Assign Lead</h3>
			</div>
			<a href="<?php echo base_url().'Leads' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">

					<div class="x_content">

						<div class="form-horizontal form-label-left" >


							<input type="text" id="atype" class="hidden" value="<?php echo $_GET['atype']; ?>"/>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input class="form-control col-md-7 col-xs-12" type="text" name="user_name" value="<?php if(!empty($value->name)){ echo $value->name; } ?>" disabled>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input class="form-control col-md-7 col-xs-12" type="email" name="u_email" value="<?php if(!empty($value->email)){ echo $value->email; } ?>" disabled>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input  class="form-control col-md-7 col-xs-12" type="text" name="occupation" value="<?php if(!empty($value->occupation)){ echo $value->occupation; } ?>" disabled>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no">Phone No  :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input class="form-control col-md-7 col-xs-12" type="tel" name="phone_no" value="<?php if(!empty($value->phone_no)){ echo $value->phone_no; } ?>" disabled>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="immigration_country">Country  :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input class="form-control col-md-7 col-xs-12" type="tel" name="immigration_country" value="<?php if(!empty($value->destination)){ echo $value->destination; } ?>" disabled>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_added">Submit Date :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input class="form-control col-md-7 col-xs-12" type="date" name="date_added" value="<?php if(!empty($value->date_added)){ echo $value->date_added; } ?>"  disabled>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="datafile">Resume :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<a class="form-control col-md-7 col-xs-12" target="blank" name="datafile" href="<?php if(!empty($value->datafile)){ echo base_url() ."assets/admin/images/file/". $value->datafile; } ?>"  >
										<?php
										if(!empty($value->datafile)){
											echo "View Document";
										}
										else{
											echo "No Document Found";
										}
										?>
									</a>
								</div>
							</div>
<?php endforeach ?>
						<hr>
						<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="datafile">Select User  :
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select id="user" class="form-control">
										<option value="0">-----------------------------------------------------------</option>
										<?php foreach ($users as $key => $value): ?>
											<option value="<?php echo $value->user_id; ?>"><?php echo $value->user_name; ?></option>
										<?php endforeach ?>
									</select>
								</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
							  <button id="send" onclick="assign()" class="btn btn-success">Submit</button>
							</div>
						</div>

					 </div>
		</div>
		</div>
		</div>
	</div>
</div>

<script>
function assign(){
	if($("#user").val() != '0')
	{
		var url = new URL(window.location.href);
		var c = "submit_assessment?aid=" + url.searchParams.get("aid");
		var r =  c + "&user_id=" + $("#user").val() + "&page="+ url.searchParams.get("page") + "&atype=" + $("#atype").val();
		window.location.href= r;
	}
	else {
		Swal.fire({
			icon: 'warning',
			title: 'No User Selecled',
			text: 'Inorder to continue please select user.'
			});
	}
}
</script>