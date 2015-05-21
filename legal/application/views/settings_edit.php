<div id="content">
	<div class="container">
		<div class="page-header">
			<div class="page-title">
				<h3>Settings Management</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget box">
					<div class="widget-header">
						<h4>Settings</h4>
					</div>					
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo site_url();?>/settings/updatedata?id=<?php echo $id;?>" id="validate-1" method="post" novalidate="novalidate" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-md-2 control-label">Title <span
									class="required">*</span>
								</label>
								<div class="col-md-4">
									<input type="text" name="title" class="form-control required" value="<?php echo $title;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Image <span
									class="required">*</span>
								</label>
								<div class="col-md-2 fileupload fileupload-new"
									data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 180px;">
										<img src="<?php if($image!=''){ echo base_url().$image;}else{echo base_url().'assets/img/no-image.gif';}?>"	style="width: 170px;" />
									</div>
									<div class="fileupload-preview fileupload-exists thumbnail"></div>
									<div>
										<span class="btn btn-file"><span class="fileupload-new">Select Image</span>
										<span class="fileupload-exists"	style="padding: 6px;">Change</span>
										<input type="file" <?php if($image==''){echo 'class="required"';}?>	name='image' accept="image/*" /> </span> 
										<a href="#"	class="btn fileupload-exists" style="padding: 4px 7px !important;" data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<label class="col-md-2">&nbsp;</label>								
								<input class="btn btn-info pull-left" type="submit"	name="submit" value="Update" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>