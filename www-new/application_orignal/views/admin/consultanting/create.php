
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title ?></h3>
            </div>
            <a href="<?php echo base_url().'Consultancy/consultanting_program_list' ?>"><input type="submit" class="btn btn-info btn-md" style="float:right;" value="Back"></a>  
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'Consultancy/consultanting_program_store' ?>" enctype="multipart/form-data" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 margin-top-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required/>
                                    </div>
                                    <div class="col-md-5 margin-top-2">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter description" required/></textarea>
                                    </div>
                                    <div class="col-md-5 margin-top-2">
                                        <label>Price</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required/>
                                    </div>
                                    <div class="col-md-5 margin-top-2">
                                        <label>Currency</label>
                                        <select name="currency" id="currency" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="CAD">CAD</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 margin-top-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Available Timings (From - To)</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="time" class="form-control" id="available_timings1" name="available_timings1[]" placeholder="Enter available timings" required/>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="time" class="form-control" id="available_timings2" name="available_timings2[]" placeholder="Enter available timings" required/>
                                            </div>
                                            <div class="col-md-2">
                                                <button onClick="add_more()" class="btn btn-primary">Add More</button>
                                            </div>
                                        </div>
                                        <div class="mt-2" id="timings_div"></div>
                                        
                                        
                                    </div>

                                    <hr>
                                    <div class="col-md-12 text-right margin-top-2">
                                        <a href="<?php echo base_url().'Consultancy/consultanting_program_list' ?>" class="btn btn-danger">Back</a>
                                        <input type="submit" class="btn btn-success" value="Save"/>
                                    </div>
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
    function removeDiv(element) {
        $('#' + element).remove();
    }

    function add_more() {
    var id = "timings_div_" + Math.floor(Math.random() * 77) + 1777;
    var html = '';
    html += '<div class="row" id="'+id+'">';
    html += '<div class="col-md-5">';
    html += '<input type="time" class="form-control" id="available_timings1" name="available_timings1[]" placeholder="Enter available timings" required/>';
    html += '</div>';
    html += '<div class="col-md-5">';
    html += '<input type="time" class="form-control" id="available_timings2" name="available_timings2[]" placeholder="Enter available timings" required/>';
    html += '</div>';
    html += '<div class="col-md-2">';
    html += '<a type="button" class="btn btn-danger" onclick="removeDiv('+ "'" + id + "'" +')">Remove</a>';
    html += '</div>';
    html += '</div>';
    $('#timings_div').append(html);
  }
</script>



