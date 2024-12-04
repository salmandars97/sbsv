

			<!-- start banner Area -->
			<section class="banner-ar relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Online Payments				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Payment '?>">Online Payment</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<section class="home-about-area section-gap" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="<?php echo base_url().'assets/web/img/online-payment-tem.jpg'?>" alt="Step-By-Step Visas">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Online Payments</h1>
							<p>Secured And Confidential</p>
							<form id="ff" action="https://www3.moneris.com/HPPDP/index.php" method="post" onsubmit="return submitUserForm();">
								<input name="ps_store_id" type="HIDDEN" value=" 68CPA09850">
<input name="hpp_key" type="HIDDEN" value="hpAEKI7V452T"><p></p>
<table style="margin-bottom: 25px;">
<tbody>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input id="fname" class="easyui-validatebox validatebox-text form-control"  name="fname" required="" type="text" placeholder="First Name" style="margin-bottom:8px;"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input id="lname" class="easyui-validatebox validatebox-text form-control"  name="lname" required="" type="text"  placeholder="Last Name" style="margin-bottom:8px;"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input class="easyui-validatebox validatebox-text form-control"  name="email" required="" type="text"  placeholder="Email" style="margin-bottom:8px;"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input class="easyui-validatebox validatebox-text form-control"  name="mobile" required="" type="number"  placeholder="Phone Number"  style="margin-bottom:8px;"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input class="easyui-validatebox validatebox-text form-control"  name="charge_total" id="aninput" type="text" onchange="validateFloatKeyPress(this);" required="" placeholder="Amount CAD$"  style="margin-bottom:8px;">
<span id="amount-error-msg" class="text-danger font-weight-normal clod">Amount should be greater then 0.</span>
</td>
</tr>
<tr>
<td>
	<div class="col-12 form-group">
<div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
<div id="g-recaptcha-error"></div>
</td>
</tr>
<tr>
<td><input id="proceed-btn" class="btn btn-default" name="SUBMIT" type="SUBMIT" value="Click to proceed to Secure Page" style="background-color: #05034d; color: #fff; font-size: 14px;
    text-transform: capitalize; cursor:pointer; padding:10px 20px"></td>
</tr>
</tbody>
</table>
<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
</form>
		<p>All Payments will be charged in CAD$ (Canadian Dollar) and the exchange rate will be applied by the card issuing bank in case of any foreign currency transactions.</p>
		<p><img src="<?php echo base_url().'assets/web/img/payment.jpg'?>" width="157" height="25" class="img-thumbnail img responsive" alt="Step-By-Step Visas"></p>
		</div>
					</div>
				</div>	
			</section>	
