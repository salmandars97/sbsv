<style>
    .fixed-height {
        height: 450px;
        overflow: hidden;
    }
    
    /* Form Styling */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #fff;
    }

    .card-header {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group .form-control {
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ccc;
        transition: all 0.3s ease;
    }

    .input-group .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .input-group-addon {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px 0 0 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .gcontainer {
        display: flex;
        justify-content: center;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .input-group .form-control {
            font-size: 14px;
        }

        .btn-primary {
            font-size: 14px;
            padding: 8px 16px;
        }

        .card-header {
            font-size: 20px;
        }
    }
</style>

<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading" style="background-image: url('assets_clone/img/background/page-header-bg.jpg');">
        <div class="container">
            <div class="wptb-item--inner">
                <h2 class="wptb-item--title">CRM Login</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>CRM Login</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <section class="home-about-area section-gap" id="about">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="mainbox col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            CRM Login
                        </div>

                        <div class="card-body">
                            <form name="form" id="frm_login" class="form-horizontal formd" enctype="multipart/form-data"
                                action="<?php echo base_url() ?>Crm/login" method="POST" onsubmit="return submitUserForm();">
                                
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="u_email" placeholder="Email" required>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="user_password" placeholder="Password" required>
                                </div>

                                <div class="input-group">
                                    <div class="gcontainer">
                                        <div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-sign-in"></i> Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>