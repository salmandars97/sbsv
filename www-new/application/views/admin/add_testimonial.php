

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Testimonials</h3>
              </div>
                <a href="<?php echo base_url().'Main' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate method="post" action="<?php echo base_url().'Testimonials/added_testimonial' ?>" enctype="multipart/form-data" >



                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" type="text" name="name" required >
                        </div>
                      </div>

                     
                    
     
            
                    <div class="form-group">
                            <label for="testimonial_text">Description:</label>
 <textarea name="testimonial_text" id="editor1" rows="10" cols="80">
               <?php if(!empty($value->testimonial_text)){ echo $value->testimonial_text; } ?>
            </textarea>
            </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!--button type="" class="btn btn-primary">Cancel</button-->
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                          
                  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




