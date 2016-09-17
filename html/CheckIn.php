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

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i> 4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i> 8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i> Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i> 5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span> Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
												</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span> Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
												</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span> Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
												</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span> Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
												</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span> Vestibulum id penatibus et auctor ...
												</span>

												<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
												</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.php">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
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
										<i class="ace-icon fa fa-power-off" ></i> Logout
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
						<li class="active">ChecIN</li>
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
									<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" id="ciForm">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="cname"> 客户姓名 </label>

										<div class="col-sm-9">
											<input type="text" id="cname" placeholder="Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
                						<label class="col-sm-3 control-label no-padding-right" for="csex"> 客户性别 </label>
                						<div class="col-sm-9">
                    						<select class="col-xs-10 col-sm-5" id="csex" style="width: 80px;" name="sex">
													<option value="男">男</option>
													<option value="女">女</option>
                    						</select>
                						</div>
            						</div>
										
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="idcard"> 客户身份证 </label>

										<div class="col-sm-9">
											<input type="text" id="idcard" placeholder="IDCard" class="col-xs-10 col-sm-5" />
										</div>
									</div>	
									<div class="form-group">
                						<label class="col-sm-3 control-label no-padding-right" for="zsphone"> 客户预留电话 </label>
                						<div class="col-sm-9 ">
                    						<div class="input-group">
												<span class="input-group-addon">
													<i class="ace-icon fa fa-phone"></i>
												</span>
												<input class="form-control input-mask-phone "  type="text" name="telephone"  id="zsphone" style="width:316px"/>
											</div>
                						</div>
            						</div>

									<div class="space-4"></div>
									<div class="form-group">
                						<label class="col-sm-3 control-label no-padding-right" for="room_type"> 房间类型 </label>
                						<div class="col-sm-9">
                    						<select class="col-xs-10 col-sm-5" id="room_type" onchange="getRoomNumber();"  name="room_type" style="width: 100px;">
													<option value="单人间" selected>单人间</option>
													<option value="双人间">双人间</option>
													<option value="三人间">三人间</option>
                    						</select>
                						</div>
            						</div>
            						
									<div class="space-4"></div>
									<div class="form-group">
                						<label class="col-sm-3 control-label no-padding-right" for="room_number"> 房间号 </label>
                						<div class="col-sm-9">
                    						<select class="col-xs-10 col-sm-5" id="room_number" name="room_number" style="width: 100px">
													<option value="301">301</option>
													<option value="302">302</option>
                    						</select>
                						</div>
    								</div>			
    								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="deposit"> 房间押金  </label>

										<div class="col-sm-9">
											<input readonly="" type="text" id="deposit" class="col-xs-10 col-sm-5" value="100" />
										</div>
									</div>
									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"> 房间费用</label>
										<div class="col-sm-9">
											<!-- #section:elements.form.input-icon -->
											<span class="input-icon">
												<input type="text" id="money" />
												<i class="ace-icon fa fa-leaf blue"></i>
											</span>
											<!-- /section:elements.form.input-icon -->
										</div>
									</div>
									
									<div class="form-group">
                						<div class="col-sm-9" style="left: 20px;">
                							<p id="tip" style="text-align: center;font: '微软雅黑';font-size: 16px;left: 180px;"></p>
                						</div>
            						</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9" style="left: -20px;">
											<button class="btn btn-info" type="button" id="checkin" style="margin: auto;">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset" style="left: 90px;">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>
							
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
		
		<script src="../assets/js/chosen.jquery.js"></script>
		<script src="../assets/js/jquery.autosize.js"></script>
		<script src="../assets/js/jquery.inputlimiter.1.3.1.js"></script>
		<script src="../assets/js/jquery.maskedinput.js"></script>

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
		
		<script type="text/javascript">
			jQuery(function($) {
				$.mask.definitions['1']='[1]';
				$('.input-mask-idnumber').mask('999999-99999999-9999',{placeholder:" ",completed:function(){art.dialog.alert('格式不正确！'+this.val());}});
				$('.input-mask-phone').mask('199-9999-9999',{placeholder:" ",completed:function(){}});
				$('.input-mask-bankid').mask('9999-9999-9999-9999-999',{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			});
		</script>
		<script type="text/javascript" src="./js/logout.js" ></script>
		<script type="text/javascript" src="./js/checkIn.js" ></script>
		<script type="text/javascript" src="./js/session.js" ></script>
	</body>

</html>