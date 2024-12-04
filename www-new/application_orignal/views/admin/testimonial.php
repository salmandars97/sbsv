
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
                    <h2>Testimonials<small></small></h2>
                    </div>
                    <div class="col-md-2">
             <!-- Welcome Admin! -->
             <form method="post" action="<?= base_url().'Testimonials/add_testimonial' ?>">
              <input type="submit" name="Submit" value="Add Testimonial" class="btn btn-primary"> 
            </form> 
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
                <th>Name</th>
                <th>Testimonials Text</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($testimonial as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><?= $value->testimonial_text ?></td>
                <td> <form action="<?php echo base_url().'Testimonials/delete_testimonial' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id ; ?>">
                                                    <input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" />
                                                    </form>

                                                    <form action="<?php echo base_url().'Testimonials/update_testimonial' ?>" method="get">
                                                <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                <input type="submit" class="btn btn-primary btn-space" value="Update " />
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

        
