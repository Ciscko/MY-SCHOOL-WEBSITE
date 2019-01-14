<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Insiders</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('fronts/updates/update_insider')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="post_name">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo $insider['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="post_name">Total Number</label>
                        <input type="text" name="total" class="form-control" id="total" placeholder="How Many" value="<?php echo $insider['total'];?>">
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
    $('.txteditor').Editor("setText", "<?php echo !empty($insider['title']) ? addslashes($insider['title']) :'';?>");        
})
    
</script>
