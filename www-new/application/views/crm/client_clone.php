<script src="https://b/js/sweetalert.js"></script>
<?php
if (isset($_GET['msg']) && $_GET['msg'] === 'as') {
    echo '<script>
        swal.fire({
            icon: "success",
            title: "Processed",
            text: "Documents uploaded successfully."
        });
    </script>';
}
?>

<?php 
$username = $this->session->userdata('user_name');
$id = $this->session->userdata('id');
?>

<style>
    .fixed-height {
        height: 450px;
        overflow: hidden;
    }

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

    .form-control {
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: all 0.3s ease;
    }

    .form-control:focus {
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
        .form-control {
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
                <h2 class="wptb-item--title">Client</h2>
                <div class="wptb-breadcrumb-wrap">
                    <ul class="wptb-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><span>Client Area</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <h1>Client Area</h1>
        </div>
    </div>

    <?php foreach ($display_clients as $client): ?>
    <div class="container bg-white section-gap">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-hover" style="width:100%">
                    <tr>
                        <th>Name:</th>
                        <td><?= htmlspecialchars($username) ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?= htmlspecialchars($client->u_email) ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td><?= htmlspecialchars($client->phone_no) ?></td>
                    </tr>
                    <tr>
                        <th>Immigration Country:</th>
                        <td><?= htmlspecialchars($client->immigration_country) ?></td>
                    </tr>
                    <tr>
                        <th>File Number:</th>
                        <td><?= htmlspecialchars($client->file_no) ?></td>
                    </tr>
                    <tr>
                        <th>Job Skills:</th>
                        <td><?= htmlspecialchars($client->job_skills) ?></td>
                    </tr>
                </table>

                <hr>

                <!-- File Upload Form -->
                <form method="post" action="<?= base_url() . 'Crm/doc_uplo' ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Upload new documents</label>
                        <input type="hidden" name="id" value="<?= htmlspecialchars($client->id) ?>" required/>
                        <input type="hidden" name="name" value="<?= htmlspecialchars($username) ?>" required/>
                        <input type="file" class="btn btn-danger" name="files[]" multiple required/>
                        <blockquote class="blockquote">
                            <b>(Once uploaded, documents cannot be removed or edited)</b>
                        </blockquote>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit"/>
                    </div>
                </form>

                <hr>
            </div>
        </div>
    </div>

    <hr style="border: 1px solid black;">

    <div class="container">
        <div class="row section-gap">
            <div class="col-md-6 text-center">
                <img src="../assets/web/img/client/total.png"> 
                <span style="padding-left: 50px; font-size: 20px">Total Payment:</span>
            </div>
            <div class="col-md-6">
                <h3>CAD <?= htmlspecialchars($client->total_payment) ?> $</h3>
            </div>
        </div>

        <div class="row section-gap">
            <div class="col-md-6 text-center">
                <img src="../assets/web/img/client/bill.png"> 
                <span style="padding-left: 50px; font-size: 20px">Payment Status:</span>
            </div>
            <div class="col-md-6">
                <h3><?= htmlspecialchars($client->payment_status) ?></h3>
            </div>
        </div>

        <div class="row section-gap">
            <div class="col-md-6 text-center">
                <img src="../assets/web/img/client/diagram.png"> 
                <span style="padding-left: 50px; font-size: 20px">Current Status:</span>
            </div>
            <div class="col-md-6">
                <p class="h3"><?= nl2br(htmlspecialchars($client->current_stage)) ?></p>
            </div>
        </div>

        <div class="row section-gap">
            <div class="col-md-6 text-center">
                <img src="../assets/web/img/client/business.png"> 
                <span style="padding-left: 50px; font-size: 20px">Document File:</span>
            </div>
            <div class="col-md-6">
                <h3><a href="#success" data-toggle="modal">View Documents</a></h3>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Modal -->
    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <h4>Document Files</h4>
                </div>
                <div class="modal-body">
                    <h5>
                        <a target="_blank">Name</a>
                        <a class="float-right">Uploaded on</a>
                    </h5>
                    <hr style="border: 1px solid #00aef2">
                    <?php foreach ($display_uplo as $upload): ?>
                        <?php if ($upload->c_id == $client->id): ?>
                            <h5>
                                <a target="_blank" href="<?= base_url() . 'assets/upload/files/' . htmlspecialchars($upload->file_name) ?>">
                                    <?= htmlspecialchars($upload->file_name) ?>
                                </a>
                                <p class="float-right"><?= date('Y-m-d', strtotime($upload->uploaded_on)) ?></p>
                            </h5>
                            <hr style="border: 1px solid #00aef2">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>
