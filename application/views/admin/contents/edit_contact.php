<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Contact</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/Module/edit_contact')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="post_name">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo set_value('title');?>">
                    </div>
                    <div class="form-group">
                        <label for="post_body">Desc</label>
                        <textarea name="desc" class="form-control txteditor" id="desc" placeholder="Desc" rows="10"><?php echo set_value('desc');?></textarea>
                    </div>
                     <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="image" id="fileInput" type="file"  >
                            </div>
                    </div> 
                    <div class="form-group">
                        <label for="post_name">Email</label>
                        <input type="text" name="email" class="form-control"  id="email" placeholder="email" value="<?php echo set_value('email');?>">
                    </div>
                    <div class="form-group">
                        <label for="post_name">Phone</label>
                        <input type="text" name="phone" class="form-control"  id="phone" placeholder="email" value="<?php echo set_value('phone');?>">
                    </div>
                    <div class="form-group">
                        <label for="post_name">Location</label>
                        <input type="text" name="location" class="form-control"  id="location" placeholder="location" value="<?php echo set_value('location');?>">
                    </div>
                    <?php endif;?>
                    

                    
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                    <button type="button" class="btn btn-default" onclick="javascript:history.back()">Back</button>
                </div>
            </form>
        </div><!-- /.box -->
	</div>
</div>

<!-- Modal -->

<!-- Line Control WYSIWYG -->
<script src="<?php echo $base_assets_url;?>plugins/line_control_editor/editor.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("button:submit").click(function(){
        $('.txteditor').text($('.txteditor').Editor("getText"));
    });

    var editor = $(".txteditor").Editor();
    $('.txteditor').Editor("setText", "<?php echo !empty($contact['desc']) ? addslashes($contact['desc']) :'';?>");        
})
    
</script>
