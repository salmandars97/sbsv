<style>
/* General Styling */
.wrapper {
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Page Heading */
.wptb-page-heading {
    background-size: cover;
    background-position: center;
    padding: 60px 0;
    color: #fff;
    text-align: center;
}

.wptb-page-heading h2 {
    font-size: 36px;
    margin-bottom: 10px;
}

.wptb-breadcrumb {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-block;
}

.wptb-breadcrumb li {
    display: inline;
    margin-right: 10px;
}

.wptb-breadcrumb a {
    color: #fff;
    text-decoration: none;
}

.wptb-breadcrumb li span {
    color: #ddd;
}

/* Map Section */
.map-wrap {
    margin-bottom: 30px;
}

.mapouter {
    position: relative;
    text-align: right;
    height: 450px;
    width: 100%;
}

.gmap_canvas {
    overflow: hidden;
    background: none!important;
    height: 450px;
    width: 100%;
}

/* Address Section */
.address-wrap {
    margin-top: 30px;
}

.single-contact-address {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.icon {
    font-size: 24px;
    margin-right: 15px;
    color: #00aef2;
}

.contact-details h5 {
    font-size: 18px;
    margin-bottom: 5px;
}

.contact-details p {
    margin: 0;
    font-size: 14px;
    color: #555;
}

/* Form Section */
form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form h4 {
    text-align: center;
    color: #05034d;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
}

.form-control {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.custom-file-label {
    padding: 10px;
}

.btn-default {
    background-color: #00aef2;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.btn-default:hover {
    background-color: #008dc0;
}

.g-recaptcha {
    margin: 15px 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .address-wrap, .form-group {
        margin-bottom: 20px;
    }

    .col-lg-8, .col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .wptb-item--title {
        font-size: 28px;
    }
}
</style>

<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading" style="background-image: url('assets_clone/img/background/page-header-bg.jpg');">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title">Contact Us</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <!-- Google Map -->
                <div class="map-wrap">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="450" src="https://maps.google.com/maps?q=140%20Pedwell%20Street,%20New%20castle,%20Ontario&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="col-lg-4 address-wrap">
                    <div class="single-contact-address d-flex">
                        <div class="icon"><span class="lnr lnr-home"></span></div>
                        <div class="contact-details">
                            <h5>Canada</h5>
                            <p><?php echo htmlspecialchars($value->address); ?></p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex">
                        <div class="icon"><span class="lnr lnr-phone-handset"></span></div>
                        <div class="contact-details">
                            <h5>CAN: <a class="phonetrack" href="tel:+1(647)825-1394">+1 (647) 825-1394</a></h5>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex">
                        <div class="icon"><span class="lnr lnr-envelope"></span></div>
                        <div class="contact-details">
                            <h5><a href="mailto:<?php echo htmlspecialchars($value->email); ?>"><?php echo htmlspecialchars($value->email); ?></a></h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?= base_url().'Leads/added_leads' ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitUserForm();">
                                <h4>Consultation</h4>
                                <input class="form-control required" type="text" name="name" placeholder="Your Name" required>
                                <input class="form-control required" type="email" name="email" placeholder="Email Address" required>
                                <input class="form-control required" type="text" name="phone_no" placeholder="Phone Number" required>
                                <input class="form-control required" type="text" name="occupation" placeholder="Your Occupation" required>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="resume" name="datafile">
                                        <label class="custom-file-label" for="resume">Upload Your Resume</label>
                                    </div>
                                </div>
                                <select name="que" class="form-control" required>
                                    <option value="" disabled selected>How did you hear about us?</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Google">Google</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Flyers or Brochures">Flyers or Brochures</option>
                                    <option value="Referred by a Friend">Referred by a Friend</option>
                                    <option value="Others">Others</option>
                                </select>
                                <select name="destination" class="form-control" required>
                                    <option value="" disabled selected>Destination</option>
                                    <option value="uk">UK</option>
                                    <option value="usa">USA</option>
                                    <option value="canada">Canada</option>
                                    <option value="new-zealand">New Zealand</option>
                                    <option value="australia">Australia</option>
                                    <option value="schengen">Schengen</option>
                                </select>
                                <textarea class="form-control" rows="3" name="message" placeholder="Your Message (Optional)"></textarea>
                                <div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
                                <button class="btn btn-default" type="submit">Request a Consultation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
