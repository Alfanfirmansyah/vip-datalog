<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
         
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Data Station
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('Manage_station/update_station/'.$data_station->StationID,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							 <label class="control-label col-md-2">Station ID</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="StationID" class="form-control" placeholder="Username" value="<?php echo $data_station->StationID; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Station Name</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-inbox"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="StationName" class="form-control" value="<?php echo $data_station->StationName; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">City</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building-o"></i>
												</span>
									
										<select class="form-control" name="CityCode">

											<option value="CityCode">-- Select City --</optiop>

			                                 <?php foreach ($data_city as $row) { ?>
			                                		<option value='<?php echo $row->CityCode;?>'>
			                                			<?php echo $row->CityName;?></option>
			                             	<?php
           									 }
            									?> 
										</select>
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Address</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Address" class="form-control"  value="<?php echo $data_station->Address; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">User Station</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="UserStationDb" class="form-control" value="<?php echo $data_station->UserStationDb; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Password Station</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="PassStationDb" class="form-control" value="<?php echo $data_station->PassStationDb; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Latitude</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Latitude" class="form-control" value="<?php echo $data_station->Latitude; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Longitude</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Longitude" class="form-control" value="<?php echo $data_station->Longitude; ?>">
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