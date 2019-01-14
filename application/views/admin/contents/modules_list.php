<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">All Modules</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<h4>Contacts</h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($contacts)):?>
                    	<?php foreach($contacts as $contact):?>
		                    <tr>
		                        <td><?php echo $contact['title']?></td>
		                        <td><?php echo $contact['desc']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/contacts'.$contact->image);?>" style="width:200px;height:75px"/></td>
                                <td><?php echo $contact['email']?></td>
                                <td><?php echo $contact['phone']?></td>
		                        <td><?php echo $contact['location']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_contact')?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/module/delete_contact')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>

                

            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php  ?>
            </div>
        </div><!-- /.box -->
	</div>
</div>