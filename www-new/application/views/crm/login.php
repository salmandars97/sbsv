<section class="banner-ar relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Client Login 				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Crm '?>"> Client Login</a></p>
						</div>											
					</div>
				</div>
			</section>
			<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">CRM Login</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="frm_login" class="form-horizontal formd" enctype="multipart/form-data" action="<?php echo base_url() ?>Crm/login" method="POST" onsubmit="return submitUserForm();">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input  type="email" class="form-control" name="u_email" value="" placeholder="Email" required="">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" name="user_password" placeholder="Password" required="">
                    </div>
                    
                    <div class="input-group">
						<div class="gcontainer">
							<div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
							<div id="g-recaptcha-error"></div>
						</div>
					</div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Log in</button>                          
                        </div>
                    </div>
                <p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
                </form>     

            </div>                     
        </div>  
    </div>
</div>

<div id="particles"></div>

<script>

		<!-- recaptcha scaling function start -->
		function scaleCaptcha(elementWidth) {
		  // Width of the reCAPTCHA element, in pixels
		  var reCaptchaWidth = 304;
		  // Get the containing element's width
			var containerWidth = $('.gcontainer').width();
		  
		  // Only scale the reCAPTCHA if it won't fit
		  // inside the container
		  if(reCaptchaWidth > containerWidth) {
			// Calculate the scale
			var captchaScale = containerWidth / reCaptchaWidth;
			// Apply the transformation
			$('.g-recaptcha').css({
			  'transform':'scale('+captchaScale+')'
			});
		  }
		}

		
       /* $(document).ready(function (){

            $("#frm_login").submit(function (e){

                e.preventDefault();

                var url = $(this).attr('action');

                var method = $(this).attr('method');

                var data = $(this).serialize();

                

                $.ajax({

                   url:url,

                   type:method,

                   data:data

                }).done(function(data){

                   if(data !=='')

                    {

                        $("#response").show('fast');

                        $("#response").effect( "shake" );

                        $('#frm_login')[0].reset();

                    }

                    else

                    {

                    window.location.href='<?php echo base_url() ?>Crm/client';

                    throw new Error('go');

                    } 

                });

            });

            

            $( "div" ).each(function( index ) {

            var cl = $(this).attr('class');

            if(cl =='')

                {

                    $(this).hide();

                }

            });

            

        });*/

      </script>