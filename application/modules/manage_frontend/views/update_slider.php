<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
           
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Slider
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open_multipart('Manage_frontend/update_slider/'.$slider->id_slider,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							 <label class="control-label col-md-2">Title</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
														  <i class="fa fa-pencil"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="title" class="form-control" value="<?php echo $slider->title; ?>" required="required">
											</div>
										</div>
							</div>

							<div class="form-group">
							 <label class="control-label col-md-2">Description</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
														<i class="fa fa-quote-right"></i>
												</span>
												<textarea autocomplete="off" name ="description" placeholder="Deskripsi...." class="form-control" rows="3" required="required"><?php echo $slider->description; ?></textarea>
												</div>
										</div>
							</div>
					
							<div class="form-group">
							 <label class="control-label col-md-2">Image</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-picture-o"></i> 
												</span>
												<input type="file" data-required="1" autocomplete="off" name="image" class="form-control" placeholder="Manufacture" value="<?php echo $slider->image; ?>" required="required">
											</div>
										</div>
							</div>
						</div>
							<div class="form-actions fluid">
							<div class="col-md-offset-3 col-md-9">
								<?php echo form_submit('submit', 'Update', " class = 'btn blue' "); ?>
							</div>
						</div> 
					<?php echo form_close(); ?>
						
			</div>	
</div>	