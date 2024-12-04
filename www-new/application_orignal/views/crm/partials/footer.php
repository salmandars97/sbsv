<!-- start footer Area -->	
<?php foreach ($contact_us as $key => $value) { ?>	
			<footer class="footer-area section-gap" style="padding-bottom:10px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>About Us</h4>
								<p>
									Step by Step Visas is an immigration service company  in Toronto, Canada. .
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contact Us</h4>
								<p>
									<?php echo  $value->address; ?></p>
								<p class="number">
									CAN: <?php echo  $value->phone_no1; ?><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo  $value->phone_no2; ?><br/>UAE: <?php echo  $value->phone_no3; ?>
                                </p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay up to date on Immigration policies, rules & regulations.</p>
								
                <form action="<?= base_url().'Subscriber/added_sub' ?>" method="post" class="navbar-form" enctype="multipart/form-data">
										<div class="input-group add-on align-items-center d-flex">
											<input type="hidden" name="subscription_id">
											<input class="form-control" type="email" name="subscription_email" placeholder="Email address" required="" >
											<div style="position: absolute; left: -5000px;">
											</div>
											<div class="input-group-btn">
												<button type="submit" class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info mt-20"></div>									    
									</form>
								
							</div>
						</div>						
					</div>
					<div class="footer-bottom row">
					    <div class="m-0 col-lg-6 col-md-6" style="border-right: 1px solid;">
						<p class="footer-text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | StepbyStep Immigration Services Inc.<br/>
						</p>
						</div>
						<div class=" col-lg-3 col-md-3" style="  border-right: 1px solid; text-align: center;">
						<a href="<?php echo base_url().'Privacy/privacy_policy '?>">Privacy Policy</a> | 
						<a href="<?php echo base_url().'Privacy/refund_policy '?>">Refund Policy</a>
						</div>
						
						<div class="footer-social col-lg-3 col-md-3">
							<a href="https://www.facebook.com/stepbystepvisas/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/stepbystepvisas"><i class="fa fa-twitter"></i></a>
							<a href="https://www.linkedin.com/company/step-by-step-immigration-services-inc"><i class="fa fa-linkedin"></i></a>
							<!--<a href="https://www.youtube.com/channel/UCS6TYneu9XfMj1fdPlsxnpg"><i class="fa fa-youtube"></i></a>-->
							<a href="https://www.instagram.com/stepbystepimmigration"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<div style="text-align:center; padding-top:30px;"><img src="<?php echo base_url().'assets/web/img/payment.jpg '?>" width="157" height="25" alt="Step By Step Visas"> 	</div>
				</div>
			<?php }?>
			</footer>
		
			<!-- End footer Area -->

			<script src="<?php echo base_url().'assets/web/js/vendor/jquery-2.2.4.min.js'?> " ></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url().'assets/web/js/vendor/bootstrap.min.js' ?>"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="<?php echo base_url().'assets/web/js/easing.min.js' ?>"> </script>			
			<script src="<?php echo base_url().'assets/web/js/hoverIntent.js' ?>"></script>
			<script src="<?php echo base_url().'assets/web/js/superfish.min.js'?> "></script>	
			<script src="<?php echo base_url().'assets/web/js/jquery.ajaxchimp.min.js'?> "></script>
			<script src="<?php echo base_url().'assets/web/js/jquery.magnific-popup.min.js'?> "></script>	
			<script src="<?php echo base_url().'assets/web/js/owl.carousel.min.js'?> "></script>			
			<script src="<?php echo base_url().'assets/web/js/jquery.sticky.js'?> "></script>
			<script src="<?php echo base_url().'assets/web/js/jquery.nice-select.min.js '?> "></script>			
			<script src="<?php echo base_url().'assets/web/js/parallax.min.js'?> "></script>	
			<script src="<?php echo base_url().'assets/web/js/waypoints.min.js'?> "></script>
			<script src="<?php echo base_url().'assets/web/js/jquery.counterup.min.js'?> "></script>			
			<script src="<?php echo base_url().'assets/web/js/mail-script.js'?> "></script>	
			<script src="<?php echo base_url().'assets/web/js/main.js'?> "></script>
			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url().'assets/web/js/calcul.js'?>"></script>	
			<!-- Start of HubSpot Embed Code -->
			
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134087387-1"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-134087387-1');
			</script>

		
			<script>
			   
			   function validateFloatKeyPress(el) {
    var v = parseFloat(el.value);
    el.value = (isNaN(v)) ? '' : v.toFixed(2);
}
			</script>
			
			
<script type="text/javascript">
      $("#type").on("change", function () {        
      $modal = $('#myModal');
      if($(this).val() === 'canada'){
        $modal.modal('show');
    }
 });
    </script>
    
    
    <script type="text/javascript">
      $("#type").on("change", function () {        
      $modal = $('#myMod');
      if($(this).val() === 'australia'){
        $modal.modal('show');
    }
 });
    </script>
<script src="<?php echo base_url().'assets/web/tel/build/js/intlTelInput.js'?> "></script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
    //   allowDropdown: false,
    //   autoHideDialCode: false,
    //   autoPlaceholder: "off",
    //   dropdownContainer: document.body,
    //   excludeCountries: ["us"],
    //   formatOnDisplay: false,
    //   geoIpLookup: function(callback) {
    //      $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //       var countryCode = (resp && resp.country) ? resp.country : "";
    //       callback(countryCode);
    //      });
    //   },
    //   hiddenInput: "full_number",
    //   initialCountry: "auto",
    //   localizedCountries: { 'de': 'Deutschland' },
       nationalMode: false,
    //   onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
    //   preferredCountries: ['cn', 'jp'],
    //   separateDialCode: true,
      utilsScript: "<?php echo base_url().'assets/web/tel/build/js/utils.js'?> ",
    });
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
<script type="text/javascript">
	!function(a){function b(b,d){function e(){if(w){$canvas=a('<canvas class="pg-canvas"></canvas>'),v.prepend($canvas),p=$canvas[0],q=p.getContext("2d"),f();for(var b=Math.round(p.width*p.height/d.density),c=0;b>c;c++){var e=new l;e.setStackPos(c),x.push(e)}a(window).on("resize",function(){h()}),a(document).on("mousemove",function(a){y=a.pageX,z=a.pageY}),B&&!A&&window.addEventListener("deviceorientation",function(){D=Math.min(Math.max(-event.beta,-30),30),C=Math.min(Math.max(-event.gamma,-30),30)},!0),g(),o("onInit")}}function f(){p.width=v.width(),p.height=v.height(),q.fillStyle=d.dotColor,q.strokeStyle=d.lineColor,q.lineWidth=d.lineWidth}function g(){if(w){s=a(window).width(),t=a(window).height(),q.clearRect(0,0,p.width,p.height);for(var b=0;b<x.length;b++)x[b].updatePosition();for(var b=0;b<x.length;b++)x[b].draw();E||(r=requestAnimationFrame(g))}}function h(){for(f(),i=x.length-1;i>=0;i--)(x[i].position.x>v.width()||x[i].position.y>v.height())&&x.splice(i,1);var a=Math.round(p.width*p.height/d.density);if(a>x.length)for(;a>x.length;){var b=new l;x.push(b)}else a<x.length&&x.splice(a);for(i=x.length-1;i>=0;i--)x[i].setStackPos(i)}function j(){E=!0}function k(){E=!1,g()}function l(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*p.width),y:Math.ceil(Math.random()*p.height)},this.speed={},d.directionX){case"left":this.speed.x=+(-d.maxSpeedX+Math.random()*d.maxSpeedX-d.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*d.maxSpeedX+d.minSpeedX).toFixed(2);break;default:this.speed.x=+(-d.maxSpeedX/2+Math.random()*d.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?d.minSpeedX:-d.minSpeedX}switch(d.directionY){case"up":this.speed.y=+(-d.maxSpeedY+Math.random()*d.maxSpeedY-d.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*d.maxSpeedY+d.minSpeedY).toFixed(2);break;default:this.speed.y=+(-d.maxSpeedY/2+Math.random()*d.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?d.minSpeedY:-d.minSpeedY}}function m(a,b){return b?void(d[a]=b):d[a]}function n(){v.find(".pg-canvas").remove(),o("onDestroy"),v.removeData("plugin_"+c)}function o(a){void 0!==d[a]&&d[a].call(u)}var p,q,r,s,t,u=b,v=a(b),w=!!document.createElement("canvas").getContext,x=[],y=0,z=0,A=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),B=!!window.DeviceOrientationEvent,C=0,D=0,E=!1;return d=a.extend({},a.fn[c].defaults,d),l.prototype.draw=function(){q.beginPath(),q.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,d.particleRadius/2,0,2*Math.PI,!0),q.closePath(),q.fill(),q.beginPath();for(var a=x.length-1;a>this.stackPos;a--){var b=x[a],c=this.position.x-b.position.x,e=this.position.y-b.position.y,f=Math.sqrt(c*c+e*e).toFixed(2);f<d.proximity&&(q.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),d.curvedLines?q.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):q.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}q.stroke(),q.closePath()},l.prototype.updatePosition=function(){if(d.parallax){if(B&&!A){var a=(s-0)/60;pointerX=(C- -30)*a+0;var b=(t-0)/60;pointerY=(D- -30)*b+0}else pointerX=y,pointerY=z;this.parallaxTargX=(pointerX-s/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(pointerY-t/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}switch(d.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=v.width()-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>v.width()&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>v.width()||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(d.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=v.height()-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>v.height()&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>v.height()||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},l.prototype.setStackPos=function(a){this.stackPos=a},e(),{option:m,destroy:n,start:k,pause:j}}var c="particleground";a.fn[c]=function(d){if("string"==typeof arguments[0]){var e,f=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){a.data(this,"plugin_"+c)&&"function"==typeof a.data(this,"plugin_"+c)[f]&&(e=a.data(this,"plugin_"+c)[f].apply(this,g))}),void 0!==e?e:this}return"object"!=typeof d&&d?void 0:this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})},a.fn[c].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}}}(jQuery),/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();

$(function(){
            
    $('#particles').particleground({
        minSpeedX: 0.1,
        maxSpeedX: 0.7,
        minSpeedY: 0.1,
        maxSpeedY: 0.7,
        directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges
        directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
        density: 10000, // How many particles will be generated: one particle every n pixels
        dotColor: '#eee',
        lineColor: '#eee',
        particleRadius: 7, // Dot size
        lineWidth: 1,
        curvedLines: true,
        proximity: 100, // How close two dots need to be before they join
        parallax: false
    });

});
</script>
<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
		</body>
		</html>



