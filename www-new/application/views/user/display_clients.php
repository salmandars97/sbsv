
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              
            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="col-md-10">
                    <h2>Display Clients<small></small></h2>
                    </div>

                    <div class="col-md-2">
             <!-- Welcome Admin! -->
             <form method="post" action="<?= base_url().'User/add_client' ?>">
              <input type="submit" name="Submit" value="Add Client Data" class="btn btn-primary"> 
            </form> 
          </div>

                    <div class="clearfix"></div>
                    </div> 
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                <th>Client Id</th>
                <th>Client Name</th>
                <th>Client Email</th>
                <th>Password</th>
                <th>Client Phone No</th>
                <th>Client Immigration Country</th>
                <th>Payment Status</th>
                <th>Current Stage</th>
                <th>Attachment File</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($display_clients as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->user_name ?></td>
                <td><?= $value->u_email ?></td>
                <td>
                    <?= $value->user_password ?>
                </td>
                <td><?= $value->phone_no ?></td>
                <td><?= $value->immigration_country ?></td>
                <td><?= $value->payment_status ?></td>
                <td><?= $value->current_stage ?></td>
                <td>
                    <a href="#success" data-toggle="modal"> View Document</a><br><br>
                     <form action="<?php echo base_url().'User/display_document' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input type="submit" class="btn btn-info btn-sm" value="Update Document" />
                                                    </form>
                    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                    <h4> Document Files</h4>
                </div>
                <div class="modal-body">
                    <?php foreach ($display_uplo as $key => $value) { ?>
                    <h5><a target="blank" href="<?php echo base_url().'assets/upload/files/'?><?= $value->file_name ?>"><?= $value->file_name ?></a> <form action="<?php echo base_url().'User/delete_docu' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input style="float: right; color: red;background: transparent;
    border: transparent;" type="submit" onclick="return confirm('Are you sure you want to delete?');"  value="Delete" />
                                                    </form><hr style="border: 1px sloid red"></h5> <br>
                    <?php } ?>
                    
                   <!--<a target="blank" href="<?php echo base_url().'assets/admin/images/userfile/'?><?= $value->doc_file ?>">View Your Documents</a>-->
                   
                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

                    </td>
                    
                    
                    
                <td> 

                  <form action="<?php echo base_url().'User/updateState' ?>" method="post" >  
                                   <div class="form-group">
                                    
                                     <select class="form-control" name="state" onchange="this.form.submit()">
                                     
                                       <?php if($value->visible == 1) { ?>
                                     
                                       <option value="1">Active</option>
                                       <option value="0">InActive</option>
                                     
                                       <?php }else {?>
                                     
                                       <option value="0">InActive</option>
                                       <option value="1">Active</option>
                                     
                                       <?php } ?>
                                     
                                     </select>

                                     <input type="hidden" name="id" value="<?php echo $value->id; ?>">

                                    </div>
                                                                   
                                    <!--input type="hidden" name="id" value="<?php echo $value->user_id; ?>"-->
                             
                              </form>

                              
  

  
                  <form action="<?php echo base_url().'User/delete_client' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" />
                                                    </form>
                                                   

                                                   
                  <form action="<?php echo base_url().'User/update_client' ?>" method="get">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Update" />
                                                    </form>
                                                   
  

                                                  </td>
                                                </tr>
                
                                   <?php } ?>

                             

                       
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

          
                               </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              

        
