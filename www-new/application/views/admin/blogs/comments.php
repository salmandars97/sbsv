
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
                    <div class="col-md-12">
                    <h2>Blogs Comments<small></small></h2>
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
                <th>Email</th>
                <th>Comment</th>
				<th>Date</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($about_us as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?php
                if($value->email != '') { echo $value->email; } 
                else { echo 'None'; }
                ?></td>
                <td><?= $value->text ?></td>
                <td><?= $value->date ?></td>
				<td>
                    <form action="<?php echo base_url().'Blogs/delete_comments' ?>" method="get">
                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                    <input type="submit" class="btn btn-danger btn-space" value="Delete" />
                    </form>
                </td>
                
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

        
