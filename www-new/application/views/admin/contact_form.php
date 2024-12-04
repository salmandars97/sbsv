
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
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php foreach ($contact_form as $key => $value) { ?> 
                      
                        <tr>

                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><?= $value->email ?></td>
                <td><?= $value->phone_no ?></td>
                <td>
					<textarea class="form-control" rows="4" style="margin: 0px; height: 158px; width: 387px;"><?= $value->message ?></textarea>
				</td>
                <td><?= $value->data_added ?></td>
                <td><form action="<?php echo base_url().'Contact/delete_contact' ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value->id ; ?>">
                                                    <input type="submit" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" />
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

        
