	    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
					<br><br><br><br><br>
					<div class="alert alert-success alert-dismissable">
						 <span>Selamat Datang Administrator di Website <strong>Science</strong> </span>		
					</div>  
				 
               <!-- END PAGE TITLE & BREADCRUMB-->
         
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
				<div class="col-md-12">
					<div class="col-md-8">
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-map-marker"></i> Map Station 
							</div>
							
						</div>
						<div class="portlet-body">
							<?php echo $map['html']; ?>
							<?php echo $map['js']; ?>
							</div>
							
						</div>
					</div>
					
					<div class="col-md-4">
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa  fa-building-o"></i> Site List
							</div>
							
						</div>
						<div class="portlet-body">
							<?php foreach($data_station as $row) { ?>
							<table>
								<tr>
								<td><a href="<?php echo site_url('dashbaord/detail_station/'.$row->StationID); ?>"><i class="fa fa-edit"></i> <?php echo $row->StationName;?>
								</a><br><br>
									</td>
								</tr>
							</table>
							<?php } ?>
						</div>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<!-- BEGIN BASIC CHART PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Basic Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_1" class="chart">
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<!-- END BASIC CHART PORTLET-->
					<!-- BEGIN TRACKING CURVES PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Tracking Curves
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_3" class="chart">
							</div>
						</div>
					</div>
					</div>
					<!-- END TRACKING CURVES PORTLET-->
					<!-- BEGIN DYNAMIC CHART PORTLET-->
					<div class="col-md-6">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Dynamic Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_4" class="chart">
							</div>
						</div>
					</div>
					</div>
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="col-md-6">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Interactive Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_2" class="chart">
							</div>
						</div>
					</div>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					<!-- END DYNAMIC CHART PORTLET-->
					<!-- BEGIN STACK CHART CONTROLS PORTLET-->
					
					<!-- END STACK CHART CONTROLS PORTLET-->
					
					
					
				</div>
			</div>
			
	
	



               