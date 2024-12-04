
 <?php foreach ($contact_detail as $key => $value): ?>
          
       
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Contact Details</h3>
              </div>
                <a href="<?php echo base_url().'Contact/contact_us' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>
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
                      <?php $attributes = array('id' => 'Contact/update_contact','name' => 'Contact/update_contact' ); ?>
                     
                         <?php echo form_open_multipart(''.base_url().'Contact/updated_contact',$attributes);?>


                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="address" value="<?php if(!empty($value->address)){ echo $value->address; } ?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no1">Phone No 1 :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="phone_no1" value="<?php if(!empty($value->phone_no1)){ echo $value->phone_no1; } ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no2">Phone No 2 :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="phone_no2" value="<?php if(!empty($value->phone_no2)){ echo $value->phone_no2; } ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no3">Phone No 3 :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="phone_no3" value="<?php if(!empty($value->phone_no3)){ echo $value->phone_no3; } ?>"  >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php if(!empty($value->email)){ echo $value->email; } ?>"  >
                        </div>
                      </div>
        
     
            
                    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map">Map Location URL :
                        </label>
              <textarea name="map" rows="15">
               <?php if(!empty($value->map)){ echo $value->map; } ?>
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

    