<style>
.fixed-height {
    height: 450px; 
    overflow: hidden; 
}
</style>

        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <!-- Page Header -->
            <div class="wptb-page-heading" style="background-image: url('assets_clone/img/background/page-header-bg.jpg');">
                <div class="container">
                    <div class="wptb-item--inner">
                        <h2 class="wptb-item--title ">About Us</h2>
                        <div class="wptb-breadcrumb-wrap">
                            <ul class="wptb-breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><span>About Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

            <?php 



foreach ($about_us as $key => $value) { ?>

			<!-- Start about-top Area -->
			<section class="about-top-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 about-top-left">
							<h1>
								Why Step-By-Step Immigration ?
							</h1>
							<p>
								<?php echo  $value->text; ?>
							</p>
						</div>
						<div class="col-lg-6 about-top-right">
						<img class="img-fluid img-thumbnail img-responsive " src="<?php echo base_url().'./assets/web/img/pages/'.$value->pic.'' ?>" alt="Step-By-Step Visas">
						</div>
					</div>
				</div>
			</section>
<?php } ?>
									
        </main>
