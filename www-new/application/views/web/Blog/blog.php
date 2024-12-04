<head>
	<style media="screen">
		.myhide3 {
			display: none;
		}

		.myshow {
			display: block;
		}
		@media only screen and (max-width: 800px) {
		.myhide3 {
			display: block;
		}

		.myfullw{
		    max-width: 100%;
            flex: 100%;
		}

		.myshow {
			display: none;
		}
	}
	</style>
</head>
<?php foreach ($about_detail as $key => $value) { ?>
<!-- start banner Area -->
<section class="banner-ar relative" id="home" style="background-image:url(../assets/web/img/iphone-notebook-pen-working-34123.jpg);">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12" style="padding: 13px;">
				<h1 class="text-white">
					Step-by-Step Immigration Blogs
				</h1>
				<p class="text-white link-nav"><a href="<?php echo base_url().'Home '?>">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url().'Blogs'?>"> Blogs</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start about-top Area -->
<section id='divVZITab' class="about-top-area section-gap" style="margin-top: 7%;">
	<div class="container-fluid">
		<div class="row justify-content-left">
		    <div class="col-8 myfullw">
		        Posted Date: <u><?= $value->date ?></u>
		        <h3 style="font-weight: 700;"><?= $value->title ?></h3>
		        <?= $value->text ?>
		  </div>
			<div class="col-4 myshow"  >
			    <img class="myshow" style="width: 400px;margin-bottom: 40%;" src="<?php echo base_url().'./assets/web/img/blogs/'.$value->pic.'' ?>" />
			</div>
		</div>
		<div class="row bg-white">
		    <div class="col-8">
		        <?php
		        if(!empty($comments)){ ?>
		        <h4 style="margin-top: 5%;" class="display-4 text-danger" >Comments</h4>
                <?php foreach ($comments as $key => $value1) { ?>
                 <u> <?= $value1->date ?></u>
                 <blockquote><?= $value1->text ?></blockquote>
                 <hr>
                <?php } } ?>
            </div>
        </div>
		<hr>
		<div class="row">
		    <div class="col-8">
		        <form id="ff" method="post" action="comments" enctype="multipart/form-data" onsubmit="return submitUserForm();">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $value->id ?>"/>
                  <label for="comment">Add Your Comment:</label>
				  <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" value="" required> <br>
                  <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Your Comment" required></textarea><br>
                  <div class="form-group">
					<div class="gcontainer">
						<div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
						<div id="g-recaptcha-error"></div>
					</div>
				  </div>
					<button class="btn btn-success">Submit</button>	
												<p><script>function fun1(){return jQuery('#ff').form('validate');}</script></p>
                </div>
              </form>
		    </div>
		</div>
	</div>
</section>
<?php } ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>
    $(document).ready(function () {
        document.getElementById("header").style.position = "relative";
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#divVZITab').offset().top
    }, 'slow');

});

$('#ff').submit(function() {
    var message = $("textarea").val();
    if(message.includes('http')){
        return false;
    }
    else {
        return true; // return false to cancel form action
    }
});
</script>
