
         
        
         <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
      
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab"><i class="fa fa-user"></i> Data Operator</a></li>
                     <li><a href="#tab_1" data-toggle="tab"><i class="fa fa-gear"></i> Data Admin</a></li>
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input User Operator</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_user/tambah_operator" id="form_sample_3" class="form-horizontal" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" autocomplete="off" name="username" class="form-control" placeholder="Username">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="password" autocomplete="off" name="password" class="form-control" placeholder="Password">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-inbox"></i>
												</span>
												<input type="text" autocomplete="off" name="nama" class="form-control" placeholder="Nama">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</span>
												<input type="text" autocomplete="off" name="alamat" class="form-control" placeholder="Address">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" autocomplete="off"  name="telp" class="form-control" placeholder="Phone Number">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="email" autocomplete="off" name="email" class="form-control" placeholder="Email Address">
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
                              <th><i class="fa fa-user"></i> Username</th>
                              <th><i class="fa fa-lock"></i> Password</th>
                              <th><i class="fa fa-inbox"></i> Nama</th>
                              <th><i class="fa fa-map-marker"></i> Alamat</th>
                              <th><i class="fa fa-phone"></i> No Telp</th>
                              <th><i class="fa fa-envelope"></i> Email</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
								<?php foreach($user_operator as $row) { ?>
							<tr>
								
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->password; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo $row->telp; ?></td>
								<td><?php echo $row->email; ?></td>	
								<td><a href="<?php echo site_url('Manage_user/update_operator/'.$row->username); ?>"class="btn default btn-xs red"><i class="fa fa-edit"></i>Edit</a> &nbsp
									<a href="<?php echo site_url('Manage_user/delete_operator/'.$row->username); ?>"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default btn-xs red"><i class="fa fa-trash-o"></i>Hapus</a></td>
							</tr>
								<?php } ?>
								 
						</tbody>
                     </table>
						
                 
							</div>
                        
						
                     </div>
                     <div class="tab-pane" id="tab_1">
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input User Administrator</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="Manage_user/tambah_admin" class="form-horizontal" id="form_sample_1" method="post">						
						<div class="form-body">
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="username" class="form-control" placeholder="Username">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="password" autocomplete="off" name="password" class="form-control" placeholder="Password">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-inbox"></i>
												</span>
												<input type="text"autocomplete="off" name="nama" class="form-control" placeholder="Nama">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</span>
												<input type="text" autocomplete="off" name="alamat" class="form-control" placeholder="Address">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" autocomplete="off" name="telp" class="form-control" placeholder="Phone Number">
											</div>
										</div>
							</div>
							<div class="form-group">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="email" autocomplete="off" name="email" class="form-control" placeholder="Email Address">
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
                              <th><i class="fa fa-user"></i> Username</th>
                              <th><i class="fa fa-lock"></i> Password</th>
                              <th><i class="fa fa-inbox"></i> Nama</th>
                              <th><i class="fa fa-map-marker"></i> Alamat</th>
                              <th><i class="fa fa-phone"></i> No Telp</th>
                              <th><i class="fa fa-envelope"></i> Email</th>
                              <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                           </tr>
                        </thead>
                       <tbody>
				
								
								<?php foreach($user_admin as $row) { ?>
							<tr>
								
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->password; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo $row->telp; ?></td>
								<td><?php echo $row->email; ?></td>	
								<td><a href="<?php echo site_url('Manage_user/update_admin/'.$row->username); ?>"class="btn default btn-xs blue"><i class="fa fa-edit"></i>Edit</a> &nbsp
									<a href="<?php echo site_url('Manage_user/delete_admin/'.$row->username); ?>"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default btn-xs blue"><i class="fa fa-trash-o"></i>Hapus</a></td>
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
