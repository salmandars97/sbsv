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
								<?php $attributes = array('id' => 'Main/update_client','name' => 'Main/update_client' ); ?>
				 
								<?php echo form_open_multipart(''.base_url().'Main/updated_client',$attributes);?>
			  

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="file_no">File No. :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="number" name="file_no" value="<?php if(!empty($value->file_no)){ echo $value->file_no; } ?>" >
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="text" name="user_name" value="<?php if(!empty($value->user_name)){ echo $value->user_name; } ?>" >
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="email" name="u_email" value="<?php if(!empty($value->u_email)){ echo $value->u_email; } ?>" >
									</div>
								</div>
								
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Job Skills :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="text" name="job_skills" value="<?php if(!empty($value->job_skills)){ echo $value->job_skills; } ?>" >
									</div>
								</div>

								<div class="item form-group" style="display:none;">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_password">Password :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input  class="form-control col-md-7 col-xs-12" type="hidden" name="user_password" value="<?php if(!empty($value->user_password)){ echo sha1($value->user_password); } ?>" >
									</div>
								</div> 

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no">Phone No  :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="tel" name="phone_no" value="<?php if(!empty($value->phone_no)){ echo $value->phone_no; } ?>" >
									</div>
								</div>

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="immigration_country">Immigration Country  :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="tel" name="immigration_country" value="<?php if(!empty($value->immigration_country)){ echo $value->immigration_country; } ?>" >
									</div>
								</div>

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_status">Payment Status :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="text" name="payment_status" value="<?php if(!empty($value->payment_status)){ echo $value->payment_status; } ?>"  >
									</div>
								</div>
								
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_status">Total Payment :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input class="form-control col-md-7 col-xs-12" type="number" name="total_payment" value="<?php if(!empty($value->total_payment)){ echo $value->total_payment; } ?>"  >
									</div>
								</div>

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_stage">Current Stage :
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <textarea class="form-control col-md-7 col-xs-12" style="height: 100px;" name="current_stage" ><?php if(!empty($value->current_stage)){ echo $value->current_stage; } ?></textarea>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-3">
									  <input type="hidden" name="id" value="<?php echo $value->id ?>">
									  <button id="send" type="submit" class="btn btn-success">Submit</button>
									  
							  
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

    