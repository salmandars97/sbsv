
 <?php foreach ($faq_detail as $key => $value): ?>
          
       
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update FAQ's Details</h3>
              </div>
                <a href="<?php echo base_url().'Faq/faqs' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
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
                      <?php $attributes = array('id' => 'Faq/update_faq','name' => 'Contact/update_contact' ); ?>
                     
                         <?php echo form_open_multipart(''.base_url().'Faq/updated_faq',$attributes);?>


                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="que">Question :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="que" value="<?php if(!empty($value->que)){ echo $value->que; } ?>" >
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ans">Answer : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="ans" value="<?php if(!empty($value->ans)){ echo $value->ans; } ?>" >
                        </div>
                      </div> -->

                      <div class="form-group">
                            <label for="testimonial_text">Answer:</label>
 <textarea name="ans" id="editor1" rows="10" cols="80">
               <?php if(!empty($value->ans)){ echo $value->ans; } ?>
            </textarea>
            </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!--button type="" class="btn btn-primary">Cancel</button-->
                          <input type="hidden" name="id" value="<?php echo $value->id ?>">
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





 <?php endforeach ?>

    