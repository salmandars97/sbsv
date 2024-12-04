<section class="service-area section-gap" id="immigration">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<div class="col-md-7 pb-40 header-text text-center">
				<h2 class="pb-10 ba">How Our Customers Treat Us</h2>

			</div>
		</div>

		<div class="immigrantsSlider">
			<?php foreach ($testimonial as $key => $value) { ?>
				<div class="item" style="width:100%">
					<div class="single-service" >
								<div class="single-review item" >
								<!--<img src="/img/r1.png" alt="Step By Step Visas">-->
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
							</div>
						</div>
					</div>
							<?php }?>

		</div>
	</div>
</section>
