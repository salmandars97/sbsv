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
                        <h2 class="wptb-item--title ">Testimonials</h2>
                        <div class="wptb-breadcrumb-wrap">
                            <ul class="wptb-breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><span>Testimonials</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

            	
<section class="review-area section-gap" id="review">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-9 pb-40 header-text text-center">
				<h2 class="pb-10 ba">How Our Customers Treat Us</h2>
				
			</div>
		</div>	
		<div class="row">
			<!-- the plugin needs an id to interact with, best with an empty div -->			
			<div id="google-reviews"></div>
			</br>
			<?php  foreach ($testimonial as $key => $value) { ?>
			
				<div class="single-review item">
					
					<div class="title justify-content-start d-flex">
						<h4><?php echo  $value->name; ?></h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
					<?php echo  $value->testimonial_text; ?>
					</p>
					<hr>
				</div>
				
																							
			
			<?php } ?>
			<h4><a target="_blank" class="btn btn-primary btn-default btn-lg btn-block text-center submit" href="https://www.google.com/search?client=opera&q=stepbystepvisas&sourceid=opera&ie=UTF-8&oe=UTF-8#lrd=0x89d4d1c46fdcf821:0x469e4462a76e8d5b,1,,,">More Reviews</a></h4>
			
		</div>				
	</div>	
</section>	

<!-- load the plugin/script -->
<script src="<?php echo base_url().'assets/node_modules/jquery-google-reviews/jquery-google-reviews.js' ?>" defer></script>		
									
        </main>
