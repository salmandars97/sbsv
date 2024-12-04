
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title ?></h3>
            </div>
            <a href="<?php echo base_url().'Consultancy/consultants_list' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>  
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Consultancy/consultant_store' ?>" enctype="multipart/form-data" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 margin-top-2">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required/>
                                    </div>
                                    <div class="col-md-5 margin-top-2">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
                                    </div>

                                    <div class="col-md-5 margin-top-2">
                                        <select name="user_id" id="user_id" class="form-control" required>
                                            <option value="">Select Agent</option>
                                            <?php foreach($users as $user) { ?>
                                                <option value="<?= $user->user_id ?>"><?= $user->user_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <hr>
                                    <div class="col-md-12 text-right margin-top-2">
                                        <input type="submit" class="btn btn-success" value="Save"/>
                                        <a href="<?php echo base_url().'Consultancy/consultants_list' ?>" class="btn btn-danger">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




