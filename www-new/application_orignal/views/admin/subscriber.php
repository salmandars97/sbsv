<!-- page content -->
        <div class="right_col" role="main">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph" style="padding: 40px">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Subscriber</h3>
                  </div>
                  <div class="col-md-6">
                   <!-- Welcome Admin! -->
                  </div>
                </div>


                <div class="container">
                  
                  <div class="row">


                                   <!-- Table -->
                      
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sno.</th>
                <th>Subscriber Email</th>
                <th>Added Date</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
             <?php foreach ($subscriber as $key => $value): ?>
               
             
                <td><?= $value->subscription_id ?></td>
                <td><?= $value->subscription_email ?></td>
                <td><?= $value->date_added ?></td>
              

                <td>
                            <form action="<?= base_url().'Subscriber/delete_subscriber' ?>" method="post"> 
                               <input type="hidden" name="subscription_id" value="<?= $value->subscription_id; ?>"></input>
                               <input type="submit"  onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm" value="Delete" >
                            </form>

                </td>
               


                               
            </tr>

            <?php endforeach ?>
        </tbody>
    </table>

                                  <!-- Close table -->
                  
                    
                   
                  </div>

                </div>



          


                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

       


       

                         </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


