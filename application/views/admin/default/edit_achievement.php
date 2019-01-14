<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Achievements</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('fronts/updates/update_achievement')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="post_name">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo $achievement['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="post_body">Desc</label>
                        <textarea name="descr" class="form-control txteditor" id="descr" placeholder="Desc" rows="10"><?php echo $achievement['descr'];?></textarea>
                    </div>
                     <div class="form-group">
                        <label for="post_body">Period</label>
                        <textarea name="period" class="form-control txteditor" id="period" placeholder="Period" rows="10"><?php echo $achievement['period'];?></textarea>
                    </div>
                    
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
    $('.txteditor').Editor("setText", "<?php echo !empty($achievement['descr']) ? addslashes($achievement['descr']) :'';?>");        
})
    
</script>
