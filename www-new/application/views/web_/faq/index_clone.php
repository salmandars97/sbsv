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
                        <h2 class="wptb-item--title ">FAQ</h2>
                        <div class="wptb-breadcrumb-wrap">
                            <ul class="wptb-breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><span>FAQ</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

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
									
        </main>
