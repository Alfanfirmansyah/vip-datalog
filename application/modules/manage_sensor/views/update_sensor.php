<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
          
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Sensor
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('Manage_sensor/update_sensor/'.$sensor->SensorID,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							 <label class="control-label col-md-2">SensorID</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="sensorid" class="form-control" placeholder="SensorID" value="<?php echo $sensor->SensorID; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Variable</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
														<i class="fa fa-flask"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="variable" class="form-control" placeholder="Variable" value="<?php echo $sensor->Variable; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Unit</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-dot-circle-o"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="unit" class="form-control" placeholder="Unit" value="<?php echo $sensor->Unit; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Manufacture</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-gear"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="manufacture" class="form-control" placeholder="Manufacture" value="<?php echo $sensor->Manufacture; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Spec</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-list"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="spec" class="form-control" placeholder="Spesifikasi" value="<?php echo $sensor->Spec; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Sensor Detail</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-files-o"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="sensor_detail" class="form-control" placeholder="Sensor Detail" value="<?php echo $sensor->Sensors_Detail; ?>">
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