
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
                    <div class="col-md-6">
                    <h2>Contact<small></small></h2>
                    </div>

                    <div class="clearfix"></div>
                    </div> 
                    <?php if(isset($_SESSION['success_msg'])) {  ?>
                      
                        <div class="alert alert-success">
                        
                            <?php echo $_SESSION['success_msg'];  ?>
                        
                        </div>  
                      
                        <?php } else if(isset($_SESSION['failure_msg'])) {  ?>
                      
                        <div class="alert alert-danger">
                           
                            <?php echo $_SESSION['failure_msg'];  ?>
                        
                        </div>  
                      
                        <?php } ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                <th>Id</th>
                <th>Address</th>
                <th>Phone No 1</th>
                <th>Phone No 2</th>
                <th>Phone No 3</th>
                <th>Email Adderess</th>
                <th>Map Location</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($contact_us as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->address ?></td>
                <td><?= $value->phone_no1 ?></td>
                <td><?= $value->phone_no2 ?></td>
                <td><?= $value->phone_no3 ?></td>
                <td><?= $value->email ?></td>
                <td><?= $value->map ?></td>
                <td>
                  <form action="<?php echo base_url().'Contact/update_contact' ?>" method="get">
                                                <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                <input type="submit" class="btn btn-primary btn-space" value="Update" />
                                           </form></td>
                
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

        
