<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Blog</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Blogs/add' ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
									<label for="pic">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title" required /><br><br>
									<label for="pic">Featured Image <span class="text-danger">*</span></label>
                                    <input id="imgInp" accept="image/*" class="btn btn-danger" type="file" name="pic" required onchange="readURL(this);" />									
                                </div>
                            </div>
							<img id="bhal" class="img-responsive" src="" style="max-width: 450px; max-height: 400px;" />
							<br>
                            <div class="form-group">
                                <textarea name="text" id="editor1" rows="10" cols="80"> </textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace("editor1");
                                </script>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button id="send" type="submit" class="btn btn-block btn-success">Create</button>
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

<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#bhal').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>