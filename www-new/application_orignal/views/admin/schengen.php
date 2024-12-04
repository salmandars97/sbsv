
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
                    <h2>Schengen Page<small></small></h2>
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
                <th>Text</th>
                <th>Featured Image</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($schengen as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->text ?></td>
                <td><img style="max-width:200px;max-height:150px;" src="<?php echo base_url().'./assets/web/img/'.$value->pic.'' ?>" ></td>
                <td><form action="<?php echo base_url().'Schengen/update_schengen' ?>" method="get">
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

        
