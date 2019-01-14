<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Client</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('fronts/client/update_client')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="post_name">Name</label>
                        <input type="text" name="name" class="form-control" id="title" placeholder="Name" value="<?php echo $client['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="post_body">Position/Post</label>
                        <textarea name="state" class="form-control txteditor" id="state" placeholder="Post" rows="10"><?php echo $client['state'];?></textarea>
                    </div>
                     <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="img" id="fileInput" type="file"  >
                            </div><br>
                            <img src="<?php echo base_url('uploads/'.$client['img']);?>" style="width:200px;height:75px" alt=  "no image" /><br>
                    </div> 
                    
                    <div class="form-group">
                        <label for="post_body">Detail</label>
                        <textarea name="body" class="form-control txteditor2" id="body" placeholder="Detail" rows="10"><?php echo $client['body'];?></textarea>
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
    $('.txteditor').Editor("setText", "<?php echo !empty($client['state']) ? addslashes($client['state']) :'';?>");   


      $("button:submit").click(function(){
        $('.txteditor2').text($('.txteditor2').Editor("getText"));
    });

    var editor2 = $(".txteditor2").Editor();
    $('.txteditor2').Editor("setText", "<?php echo !empty($client['body']) ? addslashes($client['body']) :'';?>");  
          
})
    
</script>
