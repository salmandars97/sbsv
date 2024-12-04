<head>
    <style media="screen">
        .myhide3 {
            display: none;
        }

        .myshow {
            display: block;
        }

        .pagination > li > strong{
        	    border-top-right-radius: 4px;
			    border-bottom-right-radius: 4px;
			    background-color: black;
			    color: #000;
			    position: relative;
			    float: left;
			    padding: 6px 12px;
			    margin-left: -1px;
			    line-height: 1.42857143;
			    text-decoration: none;
			    background-color: #fff;
			    border: 1px solid #ddd;
        }
        @media only screen and (max-width: 800px) {
            .myhide3 {
                display: block;
            }

            .myshow {
                display: none;
            }
        }
    </style>
</head>

<!-- start banner Area -->
<section class="banner-ar relative" id="home" style="background-image: url('https://b/img/iphone-notebook-pen-working-34123.jpeg');">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Step by Step Immigration Blogs
                </h1>
                <p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo base_url().'Blogs'?>"> Blogs</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about-top Area -->
<section class="about-top-area section-gap bg-white">
    <div class="container-fluid">
        <!-- Grid -->
        <div class="row d-flex justify-content-center">
            <!-- Blog entries -->
            <div class="col-12">
                <?php foreach ($results as $key =>
                $value) { ?>
                <div class="myhide3 container p-0 border" style="box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;">
                    <div class="row">
                        <div class="col-12">
                            <div style="background-image: url(<?php echo base_url().'./assets/web/img/blogs/'.$value->pic?>); width: 100%; height: 270px; background-size: cover; background-position: center;"></div>
                            <div class="container">
                                <h3><?= $value->title ?></h3>
                                <h5>
                                    <u>Posted by Step By Step Visas</u> <u class="text-danger float-left border"><?= $value->date ?></u>
                                </h5><br>
                            </div>

                            <div class="container">
                                <?php echo substr($value->text,0,300) . '..................'; ?>
                                <div class="row">
                                    <div class="col-8">
                                        <p><a href="https://g?id=<?= $value->id ?>" class="btn bg-dark text-white rounded-0">READ MORE »</a></p>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="myhide3" />
                <?php } ?>
				
				
                
                <?php foreach ($results as $key =>
                $value) { ?>
                <div class="container p-0 border myshow" style="box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;">
                    <div class="row">
                        <div class="col-8">
                            <div class="container-fluid" style="border-bottom: 1px solid #eee;">
                                <h3><?= $value->title ?></h3>
                                <h5>
                                    <u>Posted by Step By Step Visas</u> <u class="text-danger float-right border"><?= $value->date ?></u>
                                </h5>
                            </div>
                            <div class="container-fluid">
                                <?php echo substr($value->text,0,300) . '..................'; ?>
                                <div style="position: absolute; bottom: 0;" class="row">
                                    <div class="col-8">
                                        <p><a href="https://g?id=<?= $value->id ?>" class="btn bg-dark text-white rounded-0">READ MORE »</a></p>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="background-image: url(<?php echo base_url().'./assets/web/img/blogs/'.$value->pic?>); background-size: cover; height: 400px;">
                            <!--img style="width: 100%;height: 405px;" class="img-responsive" src="<?php //echo base_url().'./assets/web/img/blogs/'.$value->pic ?>" /-->
                        </div>
                    </div>
                </div>
                <hr />
                <?php } ?>

                <?php if (isset($links)) { ?>
				<div class="container d-flex justify-content-center" style="background-color: #dad8d8;">
					<ul class="pagination">	
						<?php echo '<li>'. $links . '</li>'; ?>
					</ul>
				</div>
				<?php } ?>

            </div>

            <!-- END GRID -->
        </div>
        <br />

        <!-- END w3-content -->
    </div>
</section>
<!-- End about-top Area -->
