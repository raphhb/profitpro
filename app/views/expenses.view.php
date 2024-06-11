<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE HERE -->
	<title>Admin</title>
	
	<link href="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/style.css">

    <!-- CHANGED OR ADDED CSS FROM STYLE.CSS -->
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/modal.css">
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/datatable.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">L</span>
		   <span style="--i:2">o</span>
		   <span style="--i:3">a</span>
		   <span style="--i:4">d</span>
		   <span style="--i:5">i</span>
		   <span style="--i:6">n</span>
		   <span style="--i:7">g</span>
		   <span style="--i:8">.</span>
		   <span style="--i:9">.</span>
		   <span style="--i:10">.</span>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
					<path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5"/>
					<path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5"/>
				</svg>
                
				<p class="brand-title" width="124px" height="33px"  style="font-size: 30px;">Admin</p>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Expenses 
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#4f7086"/> 
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
								
							</li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#4f7086"/>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                              
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0);">
                                 <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M27 7.88883C27 5.18897 24.6717 3 21.8 3C17.4723 3 10.5277 3 6.2 3C3.3283 3 1 5.18897 1 7.88883V23.7776C1 24.2726 1.31721 24.7174 1.80211 24.9069C2.28831 25.0963 2.8473 24.9912 3.2191 24.6417C3.2191 24.6417 5.74629 22.2657 7.27769 20.8272C7.76519 20.3688 8.42561 20.1109 9.11591 20.1109H21.8C24.6717 20.1109 27 17.922 27 15.2221V7.88883ZM24.4 7.88883C24.4 6.53951 23.2365 5.44441 21.8 5.44441C17.4723 5.44441 10.5277 5.44441 6.2 5.44441C4.7648 5.44441 3.6 6.53951 3.6 7.88883V20.8272L5.4382 19.0989C6.4132 18.1823 7.73661 17.6665 9.11591 17.6665H21.8C23.2365 17.6665 24.4 16.5726 24.4 15.2221V7.88883ZM7.5 15.2221H17.9C18.6176 15.2221 19.2 14.6745 19.2 13.9999C19.2 13.3252 18.6176 12.7777 17.9 12.7777H7.5C6.7824 12.7777 6.2 13.3252 6.2 13.9999C6.2 14.6745 6.7824 15.2221 7.5 15.2221ZM7.5 10.3333H20.5C21.2176 10.3333 21.8 9.7857 21.8 9.11104C21.8 8.43638 21.2176 7.88883 20.5 7.88883H7.5C6.7824 7.88883 6.2 8.43638 6.2 9.11104C6.2 9.7857 6.7824 10.3333 7.5 10.3333Z" fill="#4f7086"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">5</span>
                                </a>
							</li>
                            <li class="nav-item">
								<a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="<?=ROOT?>/assets/Dashboard/images/ion/man (1).png" width="20" alt=""/>
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>AC</b></span>
                                <small class="text-end font-w400">xyz@gmail.com</small>
                            </div>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-money-bill-wave"></i> <!-- Updated icon for Expenses -->
                            <span class="nav-text">Expenses</span>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i> <!-- Updated icon for Sales -->
                            <span class="nav-text">Sales</span>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-exchange-alt"></i> <!-- Updated icon for Transactions -->
                            <span class="nav-text">Transactions</span>
                        </a>
                    </li>
                    <li><a href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-boxes"></i> <!-- Updated icon for Inventory -->
                            <span class="nav-text">Inventory</span>
                        </a>
                    </li>
                    <li><a href="<?=ROOT?>/signout" class="ai-icon" aria-expanded="false">
                            <i class="fas fa-sign-out-alt"></i> <!-- Updated icon for Sign Out -->
                            <span class="nav-text">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid ">

				<div class="row ">
					<div class="col-xl-9 col-xxl-12">
                        <div class="card coin-card">
							<div class="card-body d-sm-flex d-block align-items-center">
								<span class="coin-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="83" viewBox="0 0 16 16">
                                        <g fill="currentColor"><path d="M11 6a3 3 0 1 1-6 0a3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></g>
                                    </svg>
								</span>
							    <div>
									<h3 class="text-white">Welcome back, Administrator</h3>
									<p>These are your expenses. Keep them low. </p>
									<a class="text-white" href="javascript:void(0);">Learn more >></a>
								</div>
							</div>
						</div>
					</div>
                    
					<div class="col-xl-3 col-xxl-6">
						<div class="card">
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2">Activity</h4>
									<h2 class="mb-0">$78120</h2>
								</div>
								<ul class="card-list">
									<li class="justify-content-end">Income<span class="bg-success circle me-0 ms-2"></span></li>
									<li class="justify-content-end">Outcome<span class="bg-danger circle me-0 ms-2"></span></li>
								</ul>
							</div>
							<div class="card-body pb-0 pt-3">
								<div id="chartBar" class="bar-chart"></div>
							</div>
						</div>
					</div>

                    <div class="col-xl-3 col-xxl-6">
                        <div class="card coin-card">
                            <div class="card-header border-1">
                                <h3 class="text-white">Profit Status</h3>
                            </div>
							<div class="card-body align-items-center text-center">
								<div>
                                    <h3 class="text-white">Good progress, Admin!</h3>
									<p>Lorem ipsum</p>
									<a class="text-white" href="javascript:void(0);">Learn more >></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-9 col-xxl-12 mb-6">
                        <div>
                            <div class="d-flex">       
                                <a href="javascript:void(0)" class="btn btn-rounded btn-md btn-primary me-3 me-3 mb-3" style="width: 50%;">
                                    <i class="las la-download scale5 me-3"></i>Download Report</a>
                                <a href="javascript:void(0)" class="btn btn-rounded btn-md btn-primary me-3 me-3 mb-3" style="width: 50%;"
                                data-bs-toggle="modal" data-bs-target="#addExpense"><i class="las la-plus scale5 me-3"></i>Add Expense</a>
                            </div>

                            <div class="card">
                                <div class="card-header d-block d-sm-flex border-0">
                                    <div class="me-3">
                                        <h4 class="card-title mb-2">Expense Record</h4>
                                        <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                    </div>

                                    <div class="card-tabs mt-3 mt-sm-0">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- <div class="input-group exp-search-area mt-3 mt-sm-0">
                                        <input type="date" class="form-control" placeholder="Select Date">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                    </div> -->
                                </div>
                                <div class="card-body tab-content p-0">
                                    <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-monthly" class="table table-responsive-md card-table expenses-table">
                                                <thead>
                                                    <tr>
                                                        <th>Exp.ID</th>
                                                        <th>Category</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">XYZ Store ID</a></h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                                            <span class="fs-14">05:34:45 AM</span>
                                                        </td>
                                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                                        <td><span class="fs-16 text-black font-w600">Sample Description1</span></td>
                                                        <td>
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ViewExpense">
                                                                    View Info</a></li>
                                                            </ul>
                                                        </td>   
                                                    </tr>
                                                    

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Weekly" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-weekly" class="table table-responsive-md card-table expenses-table">

                                                <thead>
                                                    <tr>
                                                        <th>Exp.ID</th>
                                                        <th>Category</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">XYZ Store ID</a></h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                                            <span class="fs-14">05:34:45 AM</span>
                                                        </td>
                                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                                        <td><span class="fs-16 text-black font-w600">Sample Description2</span></td>
                                                        <td>
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ViewExpense">
                                                                    View Info</a></li>
                                                            </ul>
                                                        </td>   
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Today" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-today" class="table table-responsive-md card-table expenses-table">

                                                <thead>
                                                    <tr>
                                                        <th>Exp.ID</th>
                                                        <th>Category</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">XYZ Store ID</a></h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                                            <span class="fs-14">05:34:45 AM</span>
                                                        </td>
                                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                                        <td><span class="fs-16 text-black font-w600">Sample Description3</span></td>
                                                        <td>
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ViewExpense">
                                                                    View Info</a></li>
                                                            </ul>
                                                        </td>   
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="addExpense" tabindex="-1" aria-labelledby="addExpenseModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="post">

                                        <div class="row">
                                            <div class="col-md-12 col-xxl-12">
                                                <div class="form-group">
                                                    <label>Expense Category</label>
                                                    <select class="form-control select2" name="main_category" id="categorySelect">
                                                        <option selected disabled>Choose category</option>
                                                        <option value="01">Utilities Expenses</option>
                                                        <option value="02">Logistics Expenses</option>
                                                        <option value="03">Rent</option>
                                                        <option value="04">Government/Compliance</option>
                                                        <option value="05">Store Supplies</option>
                                                        <option value="06">Product Expenses</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="UtiLog" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="number" class="form-control" name="amount" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="products" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-12 col-xxl-12">
                                                    <div class="form-group">
                                                        <label>Subcategory</label>
                                                        <select class="form-control select2" name="product_subcategory" id="prod-subcategory">
                                                            <option selected disabled>Choose Category</option>
                                                            <option value="01">Shoes</option>
                                                            <option value="02">Clothing</option>
                                                            <option value="03">Merch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="shoeShirt" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Size</label>
                                                            <input type="text" class="form-control" name="size">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Color</label>
                                                            <input type="text" class="form-control" name="color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="merch" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Brand Name</label>
                                                            <input type="text" class="form-control" name="brand">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Quantity</label>
                                                            <input type="number" class="form-control" name="qty">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Unit Price</label>
                                                            <input type="number" class="form-control" name="unitPrice">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-xxl-12">
                                                        <div class="form-group">
                                                            <label>Product Image</label>
                                                            <input type="file" class="form-control" name="productImg" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;">Add Expense</button>
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ViewExpense" tabindex="-1" aria-labelledby="viewExpenseModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Expenses Info</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Expense Category</label>
                                                <input type="text" class="form-control" name="category" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" class="form-control" name="amount" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Category</label>
                                                <input type="text" class="form-control" name="productcategory" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input type="text" class="form-control" name="brand" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" name="size" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" name="color" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" name="qty" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Unit Price</label>
                                            <input type="number" class="form-control" name="unitPrice" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file" class="form-control" name="productImg" accept="image/*">
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
   
				        </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
  <script src="<?=ROOT?>/assets/Dashboard/vendor/global/global.min.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="<?=ROOT?>/assets/Dashboard/vendor/apexchart/apexchart.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/vendor/wnumb/wNumb.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="<?=ROOT?>/assets/Dashboard/js/dashboard/dashboard-1.js"></script>

    <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/js/dlabnav-init.js"></script>
	<script src="<?=ROOT?>/assets/Dashboard/js/demo.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/styleSwitcher.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>     -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- ADDED JS FOR DATATABLES -->
    <script src="<?=ROOT?>/assets/Dashboard/js/datatable.js"></script>

    <script>
        document.getElementById("categorySelect").addEventListener("change", function() {
            var selectedValue = this.value;
            var UtiLogDiv = document.getElementById("UtiLog");
            var productsDiv = document.getElementById("products");

            if ((selectedValue === "01") || (selectedValue === "02") || (selectedValue === "03") 
                || (selectedValue === "04") || (selectedValue === "05")) {
                UtiLogDiv.style.display = "block";
                productsDiv.style.display = "none";
            } else if (selectedValue === "06") {
                UtiLogDiv.style.display = "block";
                productsDiv.style.display = "block";

            } else {
                UtiLogDiv.style.display = "none";
                productsDiv.style.display = "none";
            }
        });

        document.getElementById("prod-subcategory").addEventListener("change", function() {
            var selectedValue = this.value;
            var shoeShirtDiv = document.getElementById("shoeShirt");
            var merchDiv = document.getElementById("merch");

            if ((selectedValue === "01") || (selectedValue === "02")) {
                shoeShirtDiv.style.display = "block";
                merchDiv.style.display = "block";
            } else if (selectedValue === "03") {
                shoeShirtDiv.style.display = "none";
                merchDiv.style.display = "block";
            }else{
                shoeShirtDiv.style.display = "none";
                merchDiv.style.display = "none";
            }
        });
    </script>
	
</body>

</html>
