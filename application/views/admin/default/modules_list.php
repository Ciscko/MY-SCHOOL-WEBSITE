<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">All Modules</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<h4><strong>Contacts</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($contacts)):?>
                    	<?php $contact  =  $contacts ?>
                    		 <tr>
		                    	<td><?php echo $contact['id'] ;?></td>
		                        <td><?php echo $contact['title']; ?></td>
		                        <td><?php echo $contact['desc'] ;?></td>
		                         <td><?php echo $contact['email'] ;?></td>
                                <td><?php echo $contact['phone'] ;?></td>
		                        <td><?php echo $contact['location'] ;?></td>
                                <td class="center"><img src="<?php echo base_url('uploads/'.$contact['image']);?>" style="width:200px;height:75px" alt=  "no image" /></td>
                               
		                        <td>
		                        	<a href="<?php echo site_url('fronts/contact/edit_contact/'.$contact['id']);?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/module/delete_contact')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	
		                   
                    	
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
<br>
                <h4><strong>Clients</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Description</th>
                        
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($clients)):?>
                    	<?php foreach ($clients as  $client) : ?>
                    		 <tr>
		                    	<td><?php echo $client['id']?></td>
		                        <td><?php echo $client['name']?></td>
		                        <td><?php echo $client['state']?></td>
		                        
                                <td><?php echo $client['body']?></td>
                                <td class="center"><img src="<?php echo base_url('uploads/'.$client['img']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
		                        <td>
		                        	<a href="<?php echo site_url('fronts/client/edit_client/'.$client['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/client/delete_client')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
                	<br>
                 <h4><strong>About</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Image</th>
                        
                        
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($about)):?>
                    	
                    		 <tr>
		                    	<td><?php echo $about['id']?></td>
		                        <td><?php echo $about['title']?></td>
		                        <td><?php echo $about['desc']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$about['img']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
                                
                                
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_about/'.$about['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/client/delete_client')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
<br>
                <h4><strong>Header</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Logo</th>
                        
                        
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($headerz)):?>
                    	
                    		 <tr>
		                    	<td><?php echo $headerz['id']?></td>
		                        <td><?php echo $headerz['title']?></td>
		                        <td><?php echo $headerz['slug']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$headerz['logo']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
                                
                                
		                        <td>
		                        	<a href="<?php echo site_url('fronts/head/edit_header/'.$headerz['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/delete_header')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
                
<br>
                 <h4><strong>Our Team</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        
                        <th>Contact</th>
                        <th>Image</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($team)):?>
                    	<?php foreach ($team as  $teams) : ?>
                    		 <tr>
		                    	<td><?php echo $teams['id']?></td>
		                        <td><?php echo $teams['name']?></td>
		                        <td><?php echo $teams['descr']?></td>
                                 <td><?php echo $teams['link']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$teams['img']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
		                        <td>
		                        	<a href="<?php echo site_url('fronts/team/edit_team/'.$teams['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/team/delete_client')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
    			<br>
    			<h4><strong>Our Courses</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($courses)):?>
                    	<?php foreach ($courses as  $course) : ?>
                    		 <tr>
		                    	<td><?php echo $course['id']?></td>
		                        <td><?php echo $course['title']?></td>
		                        <td><?php echo $course['slug']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$course['img']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
                                <td><?php echo $course['descr']?></td>
                                
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_course/'.$course['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/team/delete_course')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
   				

   				<br>
    			<h4><strong>Our Insiders/Teachers/Students/Workers</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Total Number</th>
                        
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($insiders)):?>
                    	<?php foreach ($insiders as  $insider) : ?>
                    		 <tr>
		                    	<td><?php echo $insider['id']?></td>
		                        <td><?php echo $insider['title']?></td>
		                        <td><?php echo $insider['total']?></td>
		                        
                                
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_insider/'.$insider['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/team/delete_client')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>

                <br>
    			<h4><strong>Our Achievements</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Period</th>
                        <th>Description</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($achievements)):?>
                    	<?php foreach ($achievements as  $achievement) : ?>
                    		 <tr>
		                    	<td><?php echo $achievement['id']?></td>
		                        <td><?php echo $achievement['title']?></td>
		                        <td><?php echo $achievement['period']?></td>
		                        
                                <td><?php echo $achievement['descr']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_achievement/'.$achievement['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/team/delete_achievement')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>

                 <br>
    			<h4><strong>Our Services</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Description</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($services)):?>
                    	<?php foreach ($services as  $service) : ?>
                    		 <tr>
		                    	<td><?php echo $service['id']?></td>
		                        <td><?php echo $service['title']?></td>
                                <td><?php echo $service['descr']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$service['icon']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
                                
		                        <td>
		                        	<a href="<?php echo site_url('fronts/module/edit_service/'.$service['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/module/delete_service')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>


                  <br>
    			<h4><strong>Our Gallery</strong></h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($gallery)):?>
                    	<?php foreach ($gallery as  $pic) : ?>
                    		 <tr>
		                    	<td><?php echo $pic['id']?></td>
		                        <td><?php echo $pic['title']?></td>
		                        <td class="center"><img src="<?php echo base_url('uploads/'.$pic['img']);?>" style="width:200px;height:75px" alt=  "No image" /></td>
                               
		                        
                                <td><?php echo $pic['descr']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('fronts/gallery/edit_pic/'.$pic['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('fronts/gallery/delete_pic')?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach; ?>
		           <?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                		
                
            </div>
        </div><!-- /.box -->
	</div>
</div>