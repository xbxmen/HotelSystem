<!DOCTYPE html>
<html lang="en">
	<?php session_start();?>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Empty Page - Ace Admin</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		
		
		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try {
					ace.settings.check('navbar', 'fixed')
				} catch(e) {}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Hotel System
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

						</li>
							<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="./img/pangzi.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['account'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="EmployeeInfo.php">
										<i class="ace-icon fa fa-user"></i> Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#" id="logOut">
										<i class="ace-icon fa fa-power-off"></i> Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div>
			<!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try {
					ace.settings.check('main-container', 'fixed')
				} catch(e) {}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try {
						ace.settings.check('sidebar', 'fixed')
					} catch(e) {}
				</script>

				<ul class="nav nav-list">
					<li class="active">
						<a href="HomePage.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> HomePage </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								宾馆管理
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="elements.php" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i> 订单管理
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="PreserveView.php">
											<i class="menu-icon fa fa-eye pink"></i> 查看订单
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="PreserveAdd.php">
											<i class="menu-icon fa fa-plus purple"></i> 添加订单
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="CheckIn.php">
									<i class="menu-icon fa fa-caret-right"></i> 登记入住
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="CheckOut.php">
									<i class="menu-icon fa fa-caret-right"></i> 办理退房
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> 职工信息 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="profile.php">
									<i class="menu-icon fa fa-caret-right"></i> 个人简介
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="" id="admin" style="display: none;">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> 管理员 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i> 职工管理
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="EmployeeView.php">
											<i class="menu-icon fa fa-leaf green"></i> 查看职工
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="EmployeeAdd.php">
											<i class="menu-icon fa fa-pencil orange"></i> 添加职工
											<b class="arrow"></b>
										</a>

										<b class="arrow"></b>
									</li>
								</ul>

							</li>

							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i> 宾馆管理
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="HotelView.php">
											<i class="menu-icon fa fa-eye pink"></i> 查看房间类型
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="HotelAdd.php">
											<i class="menu-icon fa fa-plus purple"></i> 添加房间信息
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>

				</ul>
				<!-- /.nav-list -->
				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try {
						ace.settings.check('sidebar', 'collapsed')
					} catch(e) {}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try {
							ace.settings.check('breadcrumbs', 'fixed')
						} catch(e) {}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="HomePage.php">Home</a>
						</li>
						<li class="active">HotelAdd</li>
					</ul>
					<!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div>
					<!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							
							<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal" role="form" id="book_rome">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="name"> 房间号 </label>
												<div class="col-sm-9">
													<input type="text" id="pproomnumber" name="name" placeholder="房间号" class="col-xs-10 col-sm-5" />
												</div>
											</div>
											
											<div class="form-group">
		                						<label class="col-sm-3 control-label no-padding-right" for="room_id"> 房间类型 </label>
		                						<div class="col-sm-9">
		                    						<select class="col-xs-10 col-sm-5" id="pptype" name="room_id">
															<option value="单人间">单人间</option>
															<option value="双人间">双人间</option>
															<option value="三人间">三人间</option>
		                    						</select>
		                						</div>
		            						</div>
										
											
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="name"> 房间价格 </label>
												<div class="col-sm-9">
													<input type="text" id="ppprice" name="money" placeholder="房间价格" class="col-xs-10 col-sm-5" />
												</div>
											</div>
		            						
		            						<div class="form-group">
		                						<div class="col-sm-9" style="left: 50px;">
		                							<p id="tip" style="text-align: center;font: '微软雅黑';font-size: 16px;left: 180px;"></p>
		                						</div>
		            						</div>
											
											<div class="clearfix form-actions">
		                						<div class="col-md-offset-3 col-md-9">
		                    						<button class="btn btn-info" type="button" id="submit" style="left: -30px;">
		                        						<i class="ace-icon fa fa-check bigger-110"></i>
		                        						SUBMIT
		                    						</button>
		                    						&nbsp; &nbsp; &nbsp;
		                    						<button class="btn" type="reset" id="reset" style="left: 20px;">
		                        						<i class="ace-icon fa fa-undo bigger-110"></i>
		                        						RESET
		                    						</button>
		                    						&nbsp; &nbsp; &nbsp;
								                </div>
		            						</div>
										</form>
									</div><!-- /.col -->
								
							</div><!-- /.row -->
							
							<!-- PAGE CONTENT ENDS -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.page-content -->
			</div>
			<!-- /.main-content -->
		</div>
		<!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>" + "<" + "/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
		</script>
		<script src="../assets/js/bootstrap.js"></script>
		
		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../assets/js/ace/elements.scroller.js"></script>
		<script src="../assets/js/ace/elements.colorpicker.js"></script>
		<script src="../assets/js/ace/elements.fileinput.js"></script>
		<script src="../assets/js/ace/elements.typeahead.js"></script>
		<script src="../assets/js/ace/elements.wysiwyg.js"></script>
		<script src="../assets/js/ace/elements.spinner.js"></script>
		<script src="../assets/js/ace/elements.treeview.js"></script>
		<script src="../assets/js/ace/elements.wizard.js"></script>
		<script src="../assets/js/ace/elements.aside.js"></script>
		<script src="../assets/js/ace/ace.js"></script>
		<script src="../assets/js/ace/ace.ajax-content.js"></script>
		<script src="../assets/js/ace/ace.touch-drag.js"></script>
		<script src="../assets/js/ace/ace.sidebar.js"></script>
		<script src="../assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="../assets/js/ace/ace.submenu-hover.js"></script>
		<script src="../assets/js/ace/ace.widget-box.js"></script>
		<script src="../assets/js/ace/ace.settings.js"></script>
		<script src="../assets/js/ace/ace.settings-rtl.js"></script>
		<script src="../assets/js/ace/ace.settings-skin.js"></script>
		<script src="../assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="../assets/js/ace/ace.searchbox-autocomplete.js"></script>
		<script src="../assets/js/date-time/bootstrap-datepicker.js"></script>
		<!-- inline scripts related to this page -->

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="../assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="../docs/assets/js/themes/sunburst.css" />

		<script type="text/javascript">
			ace.vars['base'] = '..';
		</script>
		<script src="../assets/js/ace/elements.onpage-help.js"></script>
		<script src="../assets/js/ace/ace.onpage-help.js"></script>
		<script src="../docs/assets/js/rainbow.js"></script>
		<script src="../docs/assets/js/language/generic.js"></script>
		<script src="../docs/assets/js/language/html.js"></script>
		<script src="../docs/assets/js/language/css.js"></script>
		<script src="../docs/assets/js/language/javascript.js"></script>
		
		<script type="text/javascript" src="./js/logout.js" ></script>
		<script type="text/javascript" src="./js/HotelAdd.js" ></script>
		<script type="text/javascript" src="./js/session.js" ></script>
	</body>

</html>