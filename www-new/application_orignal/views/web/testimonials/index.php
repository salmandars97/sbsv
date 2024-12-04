<section class="banner-ar relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Testimonials				
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Testimonials '?>"> Testimonials</a></p>
			</div>											
		</div>
	</div>
</section>

		
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