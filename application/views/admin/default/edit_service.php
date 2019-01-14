<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Services</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('fronts/service/update_service')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="post_name">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo $service['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="post_body">Desc</label>
                        <textarea name="descr" class="form-control txteditor" id="descr" placeholder="Desc" rows="10"><?php echo $service['descr'];?></textarea>
                    </div>
                     <div class="control-group">
                            <label class="control-label" for="fileInput">Icon</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="icon" id="fileInput" type="file"  >
                            </div><br>
                            <img src="<?php echo base_url('uploads/'.$service['icon']);?>" style="width:200px;height:75px" alt=  "No image" /><br>
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
    $('.txteditor').Editor("setText", "<?php echo !empty($service['descr']) ? addslashes($service['descr']) :'';?>");        
})
    
</script>
