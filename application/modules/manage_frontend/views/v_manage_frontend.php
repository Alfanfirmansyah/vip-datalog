
          
        
         <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
      
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab"><i class="fa fa-picture-o"></i> Data Slider</a></li>
                     <li><a href="#tab_1" data-toggle="tab"><i class="fa fa-bookmark-o"></i> Data Technical Article</a></li>
                      <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-file-text-o"></i> Data News Article</a></li>
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data Sliders</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					 <!-- BEGIN FORM-->
                                            <form action="Manage_frontend/tambah_slider" id="form_sample_3" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-pencil"></i>
                                                                </span>
                                                                <input type="text" autocomplete="off" name="title" class="form-control" placeholder="Judul">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-quote-right"></i>
                                                                </span>
																<textarea autocomplete="off" name ="description" placeholder="Deskripsi...." class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-picture-o"></i>
                                                                </span>
                                                                <input type="file" autocomplete="off" name="image" class="form-control" placeholder="Input menu top">
                                                            </div>
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
					
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
								
							</div>
						<table class="table" id="sample_editable_1">
                  <thead>
                        <tr style="align:center">
                           <th><i class="fa fa-pencil"></i> Judul</th>
                            <th><i class="fa fa-quote-right"></i> Deskripsi</th>
                            <th><i class="fa fa-picture-o"></i> Gambar</th>
                            <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($slider as $row) { ?>
                        <tr>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->description; ?></td>
                            <td style="color: #2d3436" class="col-md-2 text-center"><img style="width: 200px;height: 200px" src="<?php echo base_url().'assets/frontend/img/'.$row->image;?>"></td>
                            <td><a href="<?php echo site_url('Manage_frontend/update_slider/'.$row->id_slider); ?>" class="btn default btn-xs red"><i class="fa fa-edit"></i>Edit</a> &nbsp <br><br>
                                <a href="<?php echo site_url('Manage_frontend/delete_slider/'.$row->id_slider); ?>"
                                    onClick="return confirm('Are you sure you want to delete?')
                                    " class="btn default btn-xs red"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
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
									<button id="" class="btn blue" data-toggle="modal" href="#baikk">
									Tambah Data <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="modal fade" id="baikk" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data Technical Article</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					 <!-- BEGIN FORM-->
                                            <form action="Manage_frontend/tambah_tech" id="form_sample_3" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                <div class="form-body">
                                                     <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-pencil"></i>
                                                                </span>
                                                                <input type="text" autocomplete="off" name="title" class="form-control" placeholder="Judul">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-quote-right"></i>
                                                                </span>
																<textarea autocomplete="off" name ="description" placeholder="Deskripsi...." class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-picture-o"></i> 
                                                                </span>
                                                                <input type="file" autocomplete="off" name="image" class="form-control" placeholder="Input menu top">
                                                            </div>
                                                        </div>
                                                    </div>
													 <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i> 
                                                                </span>
                                                                <input type="text" autocomplete="off" name="tgl" class="form-control" value="<?php echo $tgl_sekarang;?>" readonly>
                                                            </div>
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
                            <th><i class="fa fa-pencil"></i> Judul</th>
                            <th><i class="fa fa-quote-right"></i> Deskripsi</th>
                            <th><i class="fa fa-picture-o"></i> Gambar</th>
                            <th><i class="fa fa-calendar"></i> Tgl Posting</th>
                            <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tech as $row) { ?>
                        <tr>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->description; ?></td>
                            <td style="color: #2d3436" class="col-md-2 text-center"><img style="width: 200px;height: 200px" src="<?php echo base_url().'assets/frontend/img/'.$row->image;?>"></td>
                            <td><?php echo $row->tgl; ?></td>
							<td><a href="<?php echo site_url('Manage_frontend/update_tech/'.$row->id_technical); ?>" class="btn default btn-xs red"><i class="fa fa-edit"></i> Edit</a> &nbsp <br><br>
                                <a href="<?php echo site_url('Manage_frontend/delete_tech/'.$row->id_technical); ?>"
                                    onClick="return confirm('Are you sure you want to delete?')
                                    " class="btn default btn-xs red"><i class="fa fa-trash-o"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                     </table>
							
                  
							
                        </div>
						  <div class="tab-pane" id="tab_2">
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
											<h4 class="modal-title"><i class="fa fa-edit"></i> Form Input Data News Article</h4>
										</div>
										<div class="modal-body">
											 <div class="portlet-body form">
					 <!-- BEGIN FORM-->
                                            <form action="Manage_frontend/tambah_news" id="form_sample_3" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-pencil"></i>
                                                                </span>
                                                                <input type="text" autocomplete="off" name="title" class="form-control" placeholder="Judul">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-quote-right"></i>
                                                                </span>
																<textarea autocomplete="off" name ="description" placeholder="Deskripsi...." class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                 <i class="fa fa-picture-o"></i> 
                                                                </span>
                                                                <input type="file" autocomplete="off" name="image" class="form-control" placeholder="Input menu top">
                                                            </div>
                                                        </div>
                                                    </div>
													 <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i> 
                                                                </span>
                                                                <input type="text" autocomplete="off" name="tgl" class="form-control" value="<?php echo $tgl_sekarang;?>" readonly>
                                                            </div>
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
                            <th><i class="fa fa-pencil"></i> Judul</th>
                            <th><i class="fa fa-quote-right"></i> Deskripsi</th>
                            <th><i class="fa fa-picture-o"></i> Gambar</th>
                            <th><i class="fa fa-calendar"></i> Tgl Posting</th>
                            <th><i class="fa fa-hand-o-right"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($news as $row) { ?>
                        <tr>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->description; ?></td>
                            <td style="color: #2d3436" class="col-md-2 text-center"><img style="width: 200px;height: 200px" src="<?php echo base_url().'assets/frontend/img/'.$row->image;?>"></td>
                            <td><?php echo $row->tgl; ?></td>
							<td><a href="<?php echo site_url('Manage_frontend/update_news/'.$row->id_news); ?>" class="btn default btn-xs red"><i class="fa fa-edit"></i> Edit</a> &nbsp
                                <a href="<?php echo site_url('Manage_frontend/delete_news/'.$row->id_news); ?>"
                                    onClick="return confirm('Are you sure you want to delete?')
                                    " class="btn default btn-xs red"><i class="fa fa-trash-o"></i> Hapus</a>
                            </td>
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
