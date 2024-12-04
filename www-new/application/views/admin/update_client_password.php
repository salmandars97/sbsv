<?php foreach ($clients as $key => $value): ?>
   <!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Update Client Details</h3>
				</div>
				<a href="<?php echo base_url().'Main/display_clients' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
				</div>
			<div class="clearfix"></div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">

						<div class="x_content">

							<div class="form-horizontal form-label-left" >
								<?php $attributes = array('id' => 'Main/update_client_password','name' => 'Main/update_client_password' ); ?>
				 
								<?php echo form_open_multipart(''.base_url().'Main/updated_client_password',$attributes);?>
			  

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="text" name="user_name" value="<?php if(!empty($value->user_name)){ echo $value->user_name; } ?>" disabled>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="email" name="u_email" value="<?php if(!empty($value->u_email)){ echo $value->u_email; } ?>" disabled>
									</div>
								</div>		

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_password">Password :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input  class="form-control col-md-7 col-xs-12" type="text" name="user_password" value="" required>
									</div>
								</div> 
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-3">
									  <input type="hidden" name="id" value="<?php echo $value->id ?>">
									  <button id="send" type="submit" class="btn btn-danger">Change Password</button>
									  
							  
									</div>
								</div>
								</form>
							 </div>
			</div>
			</div>
			</div>
		</div>
	</div>





<?php endforeach ?>

    