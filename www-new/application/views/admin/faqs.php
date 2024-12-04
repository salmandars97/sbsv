
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
                    <h2>FAQ's<small></small></h2>
                    </div>
                    <div class="col-md-2">
             <!-- Welcome Admin! -->
             <form method="post" action="<?= base_url().'Faq/add_faq' ?>">
              <input type="submit" name="Submit" value="Add FAQ's" class="btn btn-primary"> 
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
                <th>Question</th>
                <th>Answer</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($faqs as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->que ?></td>
                <td><?= $value->ans ?></td>
                <td> <form action="<?php echo base_url().'Faq/delete_faq' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" />
                                                    </form>

                                                    <form action="<?php echo base_url().'Faq/Update_faq' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="Update FAQ's" />
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

        
