<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Ace Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							MAC MIS
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
	

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<!--Vinit Patel -->
									<?php echo $_SESSION['username']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								

								<li>
									<a href="login.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="Dashboard.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="AddUser.php">
						 

							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Add User </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-leaf"></i>
							<span class="menu-text"> Students </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="AddStudentInfo.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Student Info
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="AddStudentEducation.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Student Education
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="AddSemester.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Semester
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					
					<li class="">
						<a href="Internship.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Internship </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> Jobs </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="AddJobGroup.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Job Group
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="AddNewJob.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Job
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="AddNewCompany.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Company
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-folder-open"></i>
							<span class="menu-text"> Assets </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="AddNewCountry.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Country
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="AddNewState.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New State
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="AddNewCity.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New City
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cog"></i>
							<span class="menu-text"> Manage Data </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="viewUser.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Users
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="viewStudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Students
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="viewStudentEducation.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Student Education
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewSemester.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Semesters
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewInternship.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Internship
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewJobGroup.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Job Group
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewJob.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Jobs
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewCompany.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Company
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewCountry.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Country
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewState.php">
									<i class="menu-icon fa fa-caret-right"></i>
									State
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="viewCity.php">
									<i class="menu-icon fa fa-caret-right"></i>
									City
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>					
					
					
					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Reports </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="viewStudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Students
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="rptStudentGPA.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Student Average GPA
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="rptStudentCountry.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Student from Specific Country
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="rptStudentJob.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Student With / Without Job
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="rptStudentYear.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Student from Specific Year
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="rptAllEmployer.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Employers
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="rptEmployerCity.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employer from Specific City
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="rptOpenJob.php">
									<i class="menu-icon fa fa-caret-right"></i>
									All Open Positions
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>					
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Students</li>
							<li class="active">Add Student Education</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Add Student Education
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
						
							<br/>						
							<form class="form-horizontal" action="AddStudentEducation.php" role="form" method="POST">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student ID </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" name="stuId" id="form-field-select-1">
														
															
															<?php
																$con=mysqli_connect("localhost","root","");
																mysqli_select_db($con,"MACMIS");
																$sql = mysqli_query($con, "SELECT StudentId FROM tblStudent");
																
																while ($row = $sql->fetch_assoc()){
																	echo "<option value='" . $row['StudentId'] . "'>" . $row['StudentId'] . "</option>";
																	 
																}
																
															?>
															
															</select>
										</div>

									</div>
	
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree </label>

										<div class="radio">
													<label>
														<input name="rb1" type="radio" class="ace" value="Undergraduate" />
														<span class="lbl"> Undergraduate</span>
													</label>
													<label>
														<input name="rb1" type="radio" class="ace" value="Graduate" />
														<span class="lbl"> Graduate</span>
													</label>
										</div>
									</div>


									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree Title </label>

										<div class="col-sm-9">
											<input type="text" name="Dtitle" id="form-field-1" placeholder="Degree Title" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree CGPA </label>

										<div class="col-sm-9">
											<input type="text" name="Dcgpa" id="form-field-1" placeholder="Degree CGPA" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> University Name </label>

										<div class="col-sm-9">
											<input type="text" name="Uname" id="form-field-1" placeholder="University Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> University Country </label>

											<div class="col-sm-3 widget-body">
											
															<select class="form-control" name="couId" id="form-field-select-1">
														
															
															<?php
																$con=mysqli_connect("localhost","root","");
																mysqli_select_db($con,"MACMIS");
																$sql = mysqli_query($con, "SELECT * FROM tblCountry");
																
																while ($row = $sql->fetch_assoc()){
																	echo "<option value='" . $row['CountryId'] . "'>" . $row['CountryName'] . "</option>";
																	 
																}
																
															?>
															
															</select>
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Certifications </label>

										<div class="col-sm-9">
											<input type="text" name="certi" id="form-field-1" placeholder="Certifications" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Certification Body </label>

										<div class="col-sm-9">
											<textarea id="form-field-1" name="certibody" placeholder="Certification Body" class="col-xs-10 col-sm-5">
											</textarea>
										</div>
									</div>
									
									<div class="space-4"></div>
									
									
									
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" value="submit" class="btn btn-info">

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
									</form>
						
							
							
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">MAC-MIS</span>
							System &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>









<?php

if(!empty($_POST))
{
	$stu_id=$_POST['stuId'];
	$rb_1=$_POST['rb1'];
	$D_title=$_POST['Dtitle'];
	$D_cgpa=$_POST['Dcgpa'];
	$U_name=$_POST['Uname'];
	$cou_Id=$_POST['couId'];
	$c_erti=$_POST['certi'];
	$certi_body=$_POST['certibody'];
	
	
	

	$con=mysqli_connect("localhost","root","");
	//mysql_connect("localhost","root","");
	mysqli_select_db($con,"MACMIS");
	//mysql_select_db("MACMIS");
	//$result=mysqli_query($con,"select * from tblRegisterUser") or die("Failed to Query Database".mysqli_error());
	$result=mysqli_query($con,"INSERT INTO tblEducation (StudentId,EducationDegree,EducationDegreeTitle,EducationDegreeCGPA,EducationUniversityName,CountryId,EducationCertificationTitle,EducationCertificationBody) VALUES ('$stu_id','$rb_1','$D_title','$D_cgpa','$U_name','$cou_Id','$c_erti','$certi_body')") or die("Failed to Query Database".mysql_error());
	//echo "Inserted Successfully...!!!";
	$success='<div class="form-group">
				<center><h3>Inserted Successfully...!!!</h3></center>
				
			</div>';
}
?>

