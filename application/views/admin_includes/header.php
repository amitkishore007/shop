<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Admin panel</title>
	<?php echo link_tag('assets/css/vendor.bundle.css','stylesheet'); ?>
	<?php echo link_tag('assets/css/app.bundle.css','stylesheet'); ?>
	<?php echo link_tag('assets/css/theme-a.css','stylesheet'); ?>
	<?php echo link_tag('assets/css/style.css','stylesheet'); ?>
</head>

<body>
	<div id="app_wrapper">
		<header id="app_topnavbar-wrapper">
			<nav role="navigation" class="navbar topnavbar">
				<div class="nav-wrapper">
					<ul class="nav navbar-nav pull-left left-menu">
						<li class="app_menu-open">
							<a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
								<i class="zmdi zmdi-menu"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav left-menu hidden-xs">
						<li>
							<a href="javascript:void(0)" class="nav-link">
								<span>Home</span>
							</a>
						</li>
						
						
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown avatar-menu">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="meta">
									<span class="avatar">
										<img src="<?php echo base_url('assets/img/user.png'); ?>" alt="" class="img-circle max-w-35">
										<i class="badge mini success status"></i>
									</span>
									<span class="name">Mike Jones</span>
									<span class="caret"></span>
								</span>
							</a>
							<ul class="dropdown-menu btn-primary dropdown-menu-right">
								<li>
									<a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
								</li>
								<li>
									<a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
								</li>
							</ul>
						</li>
					
						<li>
							<a href="javascript:void(0)" data-navsearch-open>
								<i class="zmdi zmdi-search"></i>
							</a>
						</li>
						<li class="dropdown hidden-xs hidden-sm">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="badge mini status danger"></span>
								<i class="zmdi zmdi-notifications"></i>
							</a>
							<ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
								<li class="dropdown-menu-header">
									<ul class="card-actions icons  left-top">
										<li class="withoutripple">
											<a href="javascript:void(0)" class="withoutripple">
												<i class="zmdi zmdi-settings"></i>
											</a>
										</li>
									</ul>
									<h5>NOTIFICATIONS</h5>
									<ul class="card-actions icons right-top">
										<li>
											<a href="javascript:void(0)">
												<i class="zmdi zmdi-check-all"></i>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="<?php echo base_url('assets/img/user.png'); ?>" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Dakota Johnson</div>
														<div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="<?php echo base_url('assets/img/user.png'); ?>" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Todd Cook</div>
														<div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="<?php echo base_url('assets/img/user.png'); ?>" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Jennifer Ross</div>
														<div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown-menu-footer">
									<a href="javascript:void(0)">
										All notifications
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
				<form role="search" action="" class="navbar-form" id="navbar_form">
					<div class="form-group">
						<input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
						<i data-navsearch-close class="zmdi zmdi-close close-search"></i>
					</div>
					<button type="submit" class="hidden btn btn-default">Submit</button>
				</form>
			</nav>
		</header>
		<aside id="app_sidebar-left">
			<div id="logo_wrapper">
				<ul>
					<li class="logo-icon">
						<a href="<?php base_url('admin/dashboard'); ?>">
							<div class="logo">
								<img src="<?php echo base_url('assets/img/user.png'); ?>assets/img/logo/logo-icon.png" alt="Logo">
							</div>
							<h1 class="brand-text">Admin Area</h1>
						</a>
					</li>
					<li class="menu-icon">
						<a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
							<i class="mdi mdi-backburger"></i>
						</a>
					</li>
				</ul>
			</div>
			<nav id="app_main-menu-wrapper" class="scrollbar">
				<div class="sidebar-inner sidebar-push">
					<ul class="nav nav-pills nav-stacked">
						<li class="sidebar-header">NAVIGATION</li>
						
						
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-shopping-cart"></i>Shop</a>
							<ul class="nav-sub">
								<li><a href="ecommerce-dashboard.html">Dashboard</a></li>
								<li><?php echo anchor('admin/products_list','Manage product'); ?>
								<!-- <a href="ecommerce-products.html">Products</a> -->
								</li>
								
								<!-- <li><a href="ecommerce-customers.html">Customers</a></li> -->
								<li><a href="ecommerce-settings.html">Settings</a></li>
							</ul>
						</li>

						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-account"></i>Users</a>
							<ul class="nav-sub">
								<li><a href="ecommerce-customers.html">Manage user</a></li>
								<li><a href="ecommerce-customers.html">Manage vandor</a></li>
								
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-widgets"></i>Category</a>
							<ul class="nav-sub">
								<li><a href="ecommerce-dashboard.html">Manage category</a></li>
								<li><?php echo anchor('admin/create_category','Create new category'); ?>
								<!-- <a href="ecommerce-products.html"></a></li> -->
								
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-chart"></i>Orders</a>
							<ul class="nav-sub">
								<li><a href="ecommerce-dashboard.html">Manage Orders</a></li>
								
								
							</ul>
						</li>

						</ul>
					</div>
				</nav>
			</aside>
			<section id="content_outer_wrapper" class="">
				<div id="content_wrapper" class="rightnav_v2 toggle-right">
			