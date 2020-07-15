<div class="row">
		<!-- BEGIN PAGE HEADER-->
      
         
</div>			
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->	 
				<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-edit"></i>Form Edit Data Admin
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('Manage_user/update_admin/'.$user_admin->username,array('class'=>'form-horizontal')); ?>		
						 <div class="form-body">
							<div class="form-group">
							 <label class="control-label col-md-2">Username</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="username" class="form-control" placeholder="Username" value="<?php echo $user_admin->username; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Password</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="password" class="form-control" placeholder="Password" value="<?php echo $user_admin->password; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Nama</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-inbox"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="nama" class="form-control" placeholder="Nama" value="<?php echo $user_admin->nama; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Address</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="alamat" class="form-control" placeholder="Address" value="<?php echo $user_admin->alamat; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">No Telp</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="telp" class="form-control" placeholder="No Telp" value="<?php echo $user_admin->telp; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Email</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="email" data-required="1" autocomplete="off" name="email" class="form-control" placeholder="Email" value="<?php echo $user_admin->email; ?>">
											</div>
										</div>
							</div>
							<div class="form-group">
							 <label class="control-label col-md-2">Status</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user-md"></i>
												</span>
												<input type="text" data-required="1" autocomplete="off" name="nama" class="form-control" placeholder="Nama" value="<?php echo $user_admin->status; ?>" readonly>
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