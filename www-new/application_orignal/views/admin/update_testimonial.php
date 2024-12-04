
 <?php foreach ($testimonial_detail as $key => $value): ?>
          
       
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Testimonial Details</h3>
              </div>
                <a href="<?php echo base_url().'Testimonials/testimonial' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
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

                    <div class="form-horizontal form-label-left" >
                      <?php $attributes = array('id' => 'Testimonials/update_testimonial','name' => 'Testimonials/update_testimonial' ); ?>
                     
                         <?php echo form_open_multipart(''.base_url().'Testimonials/updated_testimonial',$attributes);?>


                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="name" value="<?php if(!empty($value->name)){ echo $value->name; } ?>" >
                        </div>
                      </div>
                
     
            
                    <div class="form-group">
                            <label for="testimonial_text">Testimonial Text:</label>
 <textarea name="testimonial_text" id="editor1" rows="10" cols="80">
               <?php if(!empty($value->testimonial_text)){ echo $value->testimonial_text; } ?>
            </textarea>
            </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!--button type="" class="btn btn-primary">Cancel</button-->
                          <input type="hidden" name="id" value="<?php echo $value->id ?>">
                          <button id="send" type="submit" class="btn btn-success">Update</button>
                          
                  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





 <?php endforeach ?>

    