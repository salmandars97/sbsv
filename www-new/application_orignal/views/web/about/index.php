<?php foreach ($about_us as $key => $value) { ?>

			<!-- start banner Area -->
			<section class="banner-ar relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us			
							</h1>
							<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'About'?>"> About Us</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start about-top Area -->
			<section class="about-top-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 about-top-left">
							<h1>
								Why Step By Step Immigration ?
							</h1>
							<p>
								<?php echo  $value->text; ?>
							</p>
						</div>
						<div class="col-lg-6 about-top-right">
							<img class="img-fluid img-thumbnail img-responsive " src="<?php echo base_url().'./assets/web/img/pages/'.$value->pic.'' ?>" alt="Step By Step Visas">
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
			<!-- End about-top Area -->
