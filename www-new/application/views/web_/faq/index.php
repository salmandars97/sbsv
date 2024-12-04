	

			<!-- start banner Area -->
			<section class="banner-ar relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Faq's				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Faq '?>"> Faq's</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<section class="home-about-area section-gap" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img style="width: 500px" class="img-fluid" src="<?php echo base_url().'assets/web/img/pages/at1.jpg'?>" alt="Step-By-Step Visas">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>FAQ's</h1>
							<?php foreach ($faqs as $key => $value) { ?>
							<p>
								<span style="font-size: 20px"><?php echo  $value->que; ?></span>
							</p>
							<p >
							<span style="font-size: 20px"><?php echo  $value->ans; ?></span>	
							</p>
							<?php } ?>
							
						</div>
					</div>
				</div>	
			</section>	
			