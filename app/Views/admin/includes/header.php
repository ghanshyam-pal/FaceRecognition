<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?? 'Hotels Planet' ?></title>

    <link href="<?=base_url()?>adminmaster/css/bootstrap-select.min.css" rel="stylesheet">

    <link href="<?=base_url()?>adminmaster/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="<?=base_url()?>adminmaster/css/style.css" rel="stylesheet">

    <link href="<?=base_url()?>adminmaster/css/zebra_datepicker.css" rel="stylesheet">



</head>



<body>



    <div id="preloader">

        <div class="lds-ripple">

            <div></div>

            <div></div>

        </div>

    </div>



    <div id="main-wrapper">

        <div class="nav-header">

            <a href="<?=base_url()?>" class="brand-logo">

                <img src="<?=base_url()?>adminmaster/img/logo22.png" alt="#">

            </a><span style="height:5px;"></span>

            <div class="nav-control">

                <div class="hamburger">

                    <span class="line"></span><span class="line"></span><span class="line"></span>

                </div>

            </div>

        </div>



        <div class="header">

            <div class="header-content">

                <nav class="navbar navbar-expand">

                    <div class="collapse navbar-collapse justify-content-between">

                        <div class="header-left">

                            <div class="dashboard_bar">

                            <?= $nav_heading ?? 'Hotels Planet' ?>

                            </div>

                            <!-- <div class="nav-item d-flex align-items-center">

                                <div class="input-group search-area">

                                    <input type="text" class="form-control" placeholder="Search">

                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>

                                </div>

                                <div class="plus-icon">

                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fas fa-plus"></i></a>



                                </div>

                            </div> -->

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">

                                <!-- <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

                                    <img src="<?=base_url()?>adminmaster/img/pic1.jpg" width="20" alt="">

                                </a> -->

                                <div class="dropdown-menu dropdown-menu-end">

                                    <a href="#" class="dropdown-item ai-icon">

                                        <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                                        <span class="ms-2">Profile </span>

                                    </a>

                                    <a href="<?=base_url()?>admin/logout" class="dropdown-item ai-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>

                                        <span class="ms-2">Logout </span>

                                    </a>

                                </div>

                            </li>

                            <li class="nav-item">



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

                <div class="dropdown header-profile2 ">



                    <div class="dropdown-menu dropdown-menu-end">

                        <a href="app-profile.html" class="dropdown-item ai-icon ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                            <span class="ms-2">Profile </span>

                        </a>

                        <a href="email-inbox.html" class="dropdown-item ai-icon">

                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>

                            <span class="ms-2">Inbox </span>

                        </a>

                        <a href="page-register.html" class="dropdown-item ai-icon">

                            <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>

                            <span class="ms-2">Logout </span>

                        </a>

                    </div>

                </div>

                <ul class="metismenu" id="menu">

                    <li>

                        <ul aria-expanded="false">

                            <li><a href="<?=base_url()?>dashboard">Dashboard</a></li>
                            <li><a href="<?=base_url()?>add-missing">Add Missing</a></li>

                            <li><a href="<?=base_url()?>add-found">Add Found</a></li>

                            <li><a href="<?=base_url()?>missing-list">Missing List</a></li>

                            <li><a href="<?=base_url()?>found-list">Found List</a></li>

                            
                             <?php if(session('admin')): ?>

                                <li><a href="<?=base_url()?>admin-missing">Delete Missing</a></li>

                                <li><a href="<?=base_url()?>admin-found">Delete Found</a></li>

                                <?php endif?>

                            <li><a href="<?=base_url()?>tandc">Terms & Cnndidtions</a></li> 
                           

                            <!-- <li><a href="<?=base_url()?>department">Department List</a></li>

                            <li><a href="<?=base_url()?>position">Position List</a></li> -->

                            

                            <li><a href="<?=base_url()?>logout">Log Out</a></li>

                        </ul>



                    </li>



                </ul>

                </li>

                </ul>

            </div>

        </div>