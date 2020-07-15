
         
        
         <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
      
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab"><i class="fa fa-credit-card"></i> Data Station Sensor</a></li>
                    
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_0">     
						<div class="portlet-body">
						   <div class="table-toolbar">
								<div class="btn-group">
									<button id="" class="btn red" data-toggle="modal" href="#basik">
									Tambah Data <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data Station Sensor</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_station_sensor/tambah_station_sensor" id="form_sample_3" class="form-horizontal" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building-o"></i>
												</span>
												<select class="form-control" name="station" class="select2me">
													<option value="">-- Select Station --</option>
													<?php foreach ($station as $row) { ?>
														<option value="<?php echo $row->StationID;?>"><?php echo $row->StationName;?></option>
													<?php }?>
													
												</select>
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-video-camera"></i>
												</span>
												<select class="form-control" name="sensor" class="select2me">
													<option value="">-- Select Sensor --</option>
													<?php foreach ($sensors as $row) { ?>
														<option value="<?php echo $row->SensorID;?>"><?php echo $row->Manufacture;?></option>
													<?php }?>
												</select>
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-briefcase"></i>
												</span>
												<input type="text" autocomplete="off" name="station_sensor_name" class="form-control" placeholder="Station Sensor Name">
											</div>
										</div>
							</div>
							
							
				
					<!-- END FORM-->
								</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn red"><i class="fa fa-save"></i> Submit</button>
										</div>
								</form>
									</div>
									</div>
								</div>	
					
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
								
							</div>
						<table class="table" id="sample_editable_1">
                        <thead>
                           <tr style="align:center">
                              <th><i class="fa fa-user-md"></i> Station SensorID</th>
                              <th><i class="fa fa-building-o"></i> Station Name</th>
                              <th><i class="fa fa-gear"></i> Manufacture</th>
                              <th><i class="fa fa-list"></i> Spec</th>
                              <th><i class="fa fa-home"></i> Station Sensor Name</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
								<?php foreach($sensor as $row) { ?>
							<tr>
								
								<td><?php echo $row->StationSensorID; ?></td>
								<td><?php echo $row->StationName; ?></td>
								<td><?php echo $row->Manufacture; ?></td>
								<td><?php echo $row->Spec; ?></td>
								<td><?php echo $row->StationSensorName; ?></td>
								
								<td><a href="<?php echo site_url('Manage_station_sensor/update_station_sensor/'.$row->StationSensorID); ?>"class="btn default btn-xs red"><i class="fa fa-edit"></i>Edit</a> &nbsp
									<a href="<?php echo site_url('Manage_station_sensor/delete_station_sensor/'.$row->StationSensorID); ?>"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default btn-xs red"><i class="fa fa-trash-o"></i>Hapus</a></td>
							</tr>
								<?php } ?>
								 
						</tbody>
                     </table>
						
                 
							</div>
                        
						
                     </div>
                 
					

						
						
                     </div>  
               
                  </div>
               </div>
            </div>
