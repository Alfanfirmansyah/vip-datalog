<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
            
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Station Sensor 
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php foreach ($sensor as $row){ ?>
					<?php echo form_open('Manage_station_sensor/update_station_sensor/'.$row->StationSensorID,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							<div class="col-md-6">
							</div>
							<div class="col-md-6">
								 <label>Data Awal :</label>
							</div>
							</div>
							<div class="form-group">
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building-o"></i>
												</span>
												<select class="form-control" name="station" class="select2me">
													<option value="">-- Select Station --</option>
													<?php foreach ($station as $row1) { ?>
														<option value="<?php echo $row1->StationID;?>"><?php echo $row1->StationName;?></option>
													<?php }?>	
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building-o"></i>
												</span>
												<input type="text" autocomplete="off" name="data1" class="form-control" readonly value="<?php echo $row->StationName;?>">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-video-camera"></i>
												</span>
												<select class="form-control" name="sensor" class="select2me">
													<option value="">-- Select Sensor --</option>
													<?php foreach ($sensors as $row2) { ?>
														<option value="<?php echo $row2->SensorID;?>"><?php echo $row2->Manufacture;?></option>
													<?php }?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-video-camera"></i>
												</span>
												<input type="text" autocomplete="off" name="data2" class="form-control" readonly value="<?php echo $row->Manufacture;?>">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-briefcase"></i>
												</span>
												<input type="text" autocomplete="off" name="station_sensor_name" class="form-control" placeholder="Station Sensor Name" value="<?php echo $row->StationSensorName;?>">
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
					<?php } ?>	
			</div>	
</div>	