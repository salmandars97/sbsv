
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
                    <h2>Blogs<small></small></h2>
                    </div>
					<div class="col-md-2">
						<!-- Welcome Admin! -->
						<form method="post" action="<?= base_url().'Blogs/add_blog' ?>">
							<input type="submit" name="Submit" value="Add Blog" class="btn btn-block btn-info"> 
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
				<th>Title</th>
                <th>Content</th>
                <th>Featured Image</th>
				<th>Created On</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($about_us as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
				<td><?= $value->title ?></td>
                <td><?= $value->text ?></td>
                <td><img style="max-width:200px;max-height:150px;" src="<?php echo base_url().'./assets/web/img/blogs/'.$value->pic.'' ?>" ></td>
                <td><?= $value->date ?></td>
				<td>
				    <form action="<?php echo base_url().'Blogs/update_blog' ?>" method="get">
                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                    <input type="submit" class="btn btn-primary btn-space" value="Update" />
                    </form>
                    <form action="<?php echo base_url().'Blogs/delete' ?>" method="get">
                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                    <input type="submit" class="btn btn-danger btn-space" value="Delete" />
                    </form>
                    <a target="_blank" href="http://sbsv.test/sbs.blog/blog.php?b_code=<?= $value->id ?>" class="btn btn-info btn-space">View</a>
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

        
