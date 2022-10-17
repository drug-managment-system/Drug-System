<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 20:00:23 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Drug Management system</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href='index-2'>
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Drugs</span> </a>
				</div>
				<!-- logo end -->
		 
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
			 
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->

				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
				 
						
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="../assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Selab </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href='About'>
										<i class="icon-user"></i> About Me </a>
								</li>
								 
							 
								<li class="divider"> </li>
								<li>
									<a href="Lock">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
 
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="quick-setting slimscroll-style">
				<ul id="themecolors">
					<li>
						<p class="sidebarSettingTitle">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="sidebarSettingTitle">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="sidebarSettingTitle">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
            </div>
          </div>
        </div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="../assets/img/dp.jpg" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> Selab</p>
									 
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Home</span>
									<span class="selected"></span>
									 
								</a>
							 
							</li>
							 
							 
						
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">delete</i>
									<span class="title">Trash</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='TrashCustomer' class="nav-link "> <span class="title"> 
												Customers Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashEmployee' class="nav-link "> <span class="title">
												Employees Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashStock' class="nav-link "> <span class="title">
												Stocks Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashBill' class="nav-link "> <span class="title">
												Bills Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashExpenses' class="nav-link "> <span class="title">
												Expensess Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashAddCompany' class="nav-link "> <span class="title"> 
												AddCompany Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashDrug' class="nav-link "> <span class="title">
												Drugs Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashDepartement' class="nav-link "> <span class="title">
												Departement Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashMoney' class="nav-link "> <span class="title">
												Money Trash</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='TrashNote' class="nav-link "> <span class="title">
												Notes Trash</span>
										</a>
									</li>
									 
								 
									 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Customers</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Customer' class="nav-link "> <span class="title">All
												Customers</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddCustomer' class="nav-link "> <span class="title">Add
												Customer</span>
										</a>
									</li>
									 
								 
									 
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i
										class="material-icons">description</i>
									<span class="title">Bills</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Bills' class="nav-link "> <span class="title">All
												Bills</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddBill' class="nav-link "> <span class="title">Add
												Bill</span>
										</a>
									</li>
									 
								 
									 
								</ul>
							</li>
								 
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i
										class="material-icons">airline_seat_individual_suite</i>
									<span class="title">Stocks</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Stocks' class="nav-link "> <span class="title">All
												Stocks</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddStock' class="nav-link "> <span class="title">Add
												Stock</span>
										</a>
									</li>
							 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">store</i>
									<span class="title">drugs</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Drugs' class="nav-link "> <span class="title">All
												Drugs</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddDrugs' class="nav-link "> <span class="title">Add
												Drugs</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Employees</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Employees' class="nav-link "> <span class="title">All
										Employees</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddEmployee' class="nav-link "> <span class="title">Add
										Employee</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Expenses</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Expensess' class="nav-link "> <span class="title">All
										Expenses</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddExpenses' class="nav-link "> <span class="title">Add
										Expensess</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
						<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dvr</i>
									<span class="title">Notes</span>
									 
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Notes' class="nav-link "> <span class="title">All
										Notes</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddNotes' class="nav-link "> <span class="title">Add
										Note</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Departments</span> <span class="arrow"></span> 
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Departement' class="nav-link "> <span class="title">All
										Departementes</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddDepartement' class="nav-link "> <span class="title">Add
										Departement</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Money</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='Money' class="nav-link "> <span class="title">All
										Money</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddMoney' class="nav-link "> <span class="title">Add
										Money</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">store</i>
									<span class="title">AddCompany</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href='AddCompany' class="nav-link "> <span class="title">All
										AddCompany</span>
										</a>
									</li>
									<li class="nav-item">
										<a href='AddCompany1' class="nav-link "> <span class="title">Add
										Company</span>
										</a>
									</li>
							  	 
								</ul>
							</li>
							 
							  
								 
						 
				</div>
			</div>
			<!-- end sidebar menu -->

			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href='index'>Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Bills</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Customers</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Expenses</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Bills Collection</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->
					<div class="row">
						<div class="col-sm-8">
							<div class="card card-box">
								<div class="card-head">
									<header>Medical Survey</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="canvas1"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card-box">
								<div class="card-head">
									<header>Medical Survey</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="chartjs_pie"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Chart end -->
				

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>New Customer List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Name</th>
														<th>Assigned Professor</th>
														<th>Date Of Admit</th>
														<th>Fees</th>
														<th>Branch</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Jens Brincker</td>
														<td>Kenny Josh</td>
														<td>27/05/2016</td>
														<td>
															<span class="label label-sm label-success">paid</span>
														</td>
														<td>Mechanical</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>2</td>
														<td>Mark Hay</td>
														<td> Mark</td>
														<td>26/05/2017</td>
														<td>
															<span class="label label-sm label-warning">unpaid </span>
														</td>
														<td>Science</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>3</td>
														<td>Anthony Davie</td>
														<td>Cinnabar</td>
														<td>21/05/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>Commerce</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>4</td>
														<td>David Perry</td>
														<td>Felix </td>
														<td>20/04/2016</td>
														<td>
															<span class="label label-sm label-danger">unpaid</span>
														</td>
														<td>Mechanical</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>5</td>
														<td>Anthony Davie</td>
														<td>Beryl</td>
														<td>24/05/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>M.B.A.</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>6</td>
														<td>Alan Gilchrist</td>
														<td>Joshep</td>
														<td>22/05/2016</td>
														<td>
															<span class="label label-sm label-warning ">unpaid</span>
														</td>
														<td>Science</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>7</td>
														<td>Mark Hay</td>
														<td>Jayesh</td>
														<td>18/06/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>Commerce</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
													<tr>
														<td>8</td>
														<td>Sue Woodger</td>
														<td>Sharma</td>
														<td>17/05/2016</td>
														<td>
															<span class="label label-sm label-danger">unpaid</span>
														</td>
														<td>Mechanical</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
																title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse"
																title="Delete" data-toggle="tooltip"><i
																	class="fa fa-trash"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end new student list -->
				</div>
			</div>
			<!-- end page content -->
			 
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2022 &copy; Smart Drug Management system By Group of
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">4 Enginners</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="../assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="../assets/plugins/chart-js/utils.js"></script>
	<script src="../assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<script src="../assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 20:02:51 GMT -->
</html>