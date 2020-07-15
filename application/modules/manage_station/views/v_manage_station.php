
         
        
         <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
      
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab"><i class="fa fa-building-o"></i> Data Station</a></li>
                     <li><a href="#tab_1" data-toggle="tab"><i class="fa fa-map-marker"></i> Data City</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane" id="tab_1">     
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data City</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_station/tambah_city" id="form_sample_3" class="form-horizontal" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="text" autocomplete="off" name="CityCode" class="form-control" placeholder="CityCode">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-home"></i>
												</span>
												<input type="text" autocomplete="off" name="CityName" class="form-control" placeholder="CityName">
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
                              <th><i class="fa fa-lock"></i> City Code</th>
                              <th><i class="fa fa-home"></i> City Name</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
								<?php foreach($data_city as $row) { ?>
							<tr>
								
								<td><?php echo $row->CityCode; ?></td>
								<td><?php echo $row->CityName; ?></td>	
								<td><a href="<?php echo site_url('Manage_station/update_city/'.$row->CityCode); ?>"class="btn default btn-xs red"><i class="fa fa-edit"></i>Edit</a> &nbsp
									<a href="<?php echo site_url('Manage_station/delete_city/'.$row->CityCode); ?>"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default btn-xs red"><i class="fa fa-trash-o"></i>Hapus</a></td>
							</tr>
								<?php } ?>
								 
						</tbody>
                     </table>
						
                 
							</div>
                        
						
                     </div>
                     <div class="tab-pane active" id="tab_0">
						<!-- tabel untuk menampilkan data -->
                     
						   <div class="portlet-body">
								<div class="table-toolbar">
								<div class="btn-group">
									<button id="" class="btn blue" data-toggle="modal" href="#baik">
									Tambah Data <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="modal fade" id="baik" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data Station</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_station/tambah_station" class="form-horizontal" id="form_sample_1" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="StationID" class="form-control" placeholder="Station ID">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-home"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="StationName" class="form-control" placeholder="Station Name">
											</div>
										</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
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
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-plus"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Address" class="form-control" placeholder="Address">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="UserStationDb" class="form-control" placeholder="User Station">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="PassStationDb" class="form-control" placeholder="Password Station">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-dot-circle-o"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Latitude" class="form-control" placeholder="Latitude">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-dot-circle-o"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="Longitude" class="form-control" placeholder="Longitude">
											</div>
										</div>
							</div>
					
				
					<!-- END FORM-->
								</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn blue"><i class="fa fa-save"></i> Submit</button>
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
							
						<table class="table" id="sample_2">
                        <thead>
                           <tr style="align:center">
                              <th><i class="fa fa-map-marker"></i> Station ID</th>
                              <th><i class="fa fa-home"></i> Station Name</th>
                              <th><i class="fa fa-building-o"></i> City</th>
                              <th><i class="fa fa-plus"></i> Address</th>
                              <th><i class="fa fa-user"></i> User Station</th>
                              <th><i class="fa fa-lock"></i> Password Station</th>
                              <th><i class="fa fa-dot-circle-o"></i> Latitude</th>
                              <th><i class="fa fa-dot-circle-o"></i>Longitude</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
				
								
								<?php foreach($data_station as $row) { ?>
							<tr>
								
								<td><?php echo $row->StationID; ?></td>
								<td><?php echo $row->StationName; ?></td>
								<td><?php echo $row->CityName; ?></td>
								<td><?php echo $row->Address; ?></td>
								<td><?php echo $row->UserStationDb; ?></td>
								<td><?php echo $row->PassStationDb; ?></td>	
								<td><?php echo $row->Latitude; ?></td>	
								<td><?php echo $row->Longitude; ?></td>
								<td><a href="<?php echo site_url('Manage_station/update_station/'.$row->StationID); ?>"class="btn default btn-xs blue"><i class="fa fa-edit"></i> Edit</a> <br><br>
									<a href="<?php echo site_url('Manage_station/delete_station/'.$row->StationID); ?>"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default btn-xs blue"><i class="fa fa-trash-o"></i> Hapus</a></td>		
							
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
