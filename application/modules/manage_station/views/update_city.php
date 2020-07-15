<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
             
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Data City
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('Manage_station/update_city/'.$data_city->CityCode,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							 <label class="control-label col-md-2">City Code</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="CityCode" class="form-control" value="<?php echo $data_city->CityCode; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">City Name</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-home"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="CityName" class="form-control" value="<?php echo $data_city->CityName; ?>">
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