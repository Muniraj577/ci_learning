<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Item</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary rounded-0" href="<?php echo base_url('category');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('category/store');?>">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control">
                <?php echo form_error('title'); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>