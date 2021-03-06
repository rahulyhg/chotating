<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15">Create Config</h4>
    </div>
    <form class='col s12' method='post' action='<?php echo site_url("site/edittestimonialsubmit");?>' enctype='multipart/form-data'>
           <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
        <div class="row">
            <div class="input-field col s6">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value='<?php echo set_value('name',$before->name);?>'>
            </div>
        </div>

       <div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big image1">
								                    	<?php if ($before->image == '') {
} else {
    ?><img src="<?php echo base_url('uploads').'/'.$before->image;
    ?>">
															<?php
} ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate image1" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image', $before->image);?>">
				</div>
			</div>

		</div>
        <div class="row">
            <div class="col s12 m6">
                <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
                <a href="<?php echo site_url("site/viewtestimonial"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
            </div>
        </div>
    </form>
</div>