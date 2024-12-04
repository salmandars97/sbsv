      <?php foreach ($canada_detail as $key => $value) { ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Canada Page</h3>
              </div>

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

                    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Canada/updated_canada' ?>" enctype="multipart/form-data" >


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pic">Picture <span class="required">*</span></label>
                        <img id="currentImg" class="img-responsive" src="<?php echo base_url().'/assets/web/img/'.$value->pic.' ' ?>" style="max-width:450px;  max-height:400px;"> 
                        
                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-left:150px;">
                        <input type="file" name="pic" class="validate[required]"  onchange="readURL(this);">

                        <img id="blah" style="margin:10px 0 0 0px;" />
                        </div>

                        
                      </div>










                    <div class="form-group">
                            <label for="tag">Text:</label>
 <textarea name="text" id="editor1" rows="10" cols="80">
               <?php if(!empty($value->text)){ echo $value->text; } ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
                            </div> 




                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="hidden" name="id" value="<?php echo $value->id ?>">
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                          <!--button type="submit" class="btn btn-primary">Cancel</button-->
                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>




