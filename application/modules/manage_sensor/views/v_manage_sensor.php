
   
        
         <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
      
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab"><i class="fa fa-video-camera"></i> Data Sensor</a></li>
                    
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data Sensor</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_sensor/tambah_sensor" id="form_sample_3" class="form-horizontal" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" autocomplete="off" name="sensorid" class="form-control" placeholder="Sensors ID">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-flask"></i>
												</span>
												<input type="text" autocomplete="off" name="variable" class="form-control" placeholder="Variable">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-dot-circle-o"></i>
												</span>
												<input type="text" autocomplete="off" name="unit" class="form-control" placeholder="Unit">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-gear"></i>
												</span>
												<input type="text" autocomplete="off" name="manufacture" class="form-control" placeholder="Manufacture">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-list"></i>
												</span>
												<input type="text" autocomplete="off" name="spec" class="form-control" placeholder="Spesifikasi">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-files-o"></i>
												</span>
												<input type="text" autocomplete="off" name="sensor_detail" class="form-control" placeholder="Sensors Detail">
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
                              <th><i class="fa fa-user-md"></i> SensorID</th>
                              <th><i class="fa fa-flask"></i> Variable</th>
                              <th><i class="fa fa-dot-circle-o"></i> Unit</th>
                              <th><i class="fa fa-gear"></i> Manufacture</th>
                              <th><i class="fa fa-list"></i> Spec</th>
                              <th><i class="fa fa-files-o"></i> Sensor Detail</th>
                              <th><i class="fa fa-user"></i> Created By</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
								<?php foreach($sensor as $row) { ?>
							<tr>
								
								<td><?php echo $row->SensorID; ?></td>
								<td><?php echo $row->Variable; ?></td>
								<td><?php echo $row->Unit; ?></td>
								<td><?php echo $row->Manufacture; ?></td>
								<td><?php echo $row->Spec; ?></td>
								<td><?php echo $row->Sensors_Detail; ?></td>	
								<td><?php echo $row->CreatedBy; ?></td>	
								<td><a href="<?php echo site_url('Manage_sensor/update_sensor/'.$row->SensorID); ?>"class="btn default btn-xs red"><i class="fa fa-edit"></i>Edit</a> &nbsp
									<a href="<?php echo site_url('Manage_sensor/delete_sensor/'.$row->SensorID); ?>"
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
