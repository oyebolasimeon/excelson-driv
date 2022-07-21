<?php

session_start();
 require("../headerFiles/connection.php");
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Excelson - Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
<nav class="pcoded-navbar menu-light " style="margin-top: 100px; padding-top:20px">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">


                <ul class="nav pcoded-inner-navbar ">

                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-layout"></i></span><span
                                class="pcoded-mtext">Bookings</span></a>
                                <ul class="pcoded-submenu">
					        <li><a href="driving_lesson.php" >Driving Lesson</a></li>
					    
					    </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-pie-chart"></i></span><span
                                class="pcoded-mtext">Resources</span></a>
                                <ul class="pcoded-submenu">
					        <li><a href="video_resources.php" >Video Resources</a></li>
                            <li><a href="pdfresources.php" >PDF Material</a></li>
                            <li><a href="#" >MPI Knowledge Test</a></li>
                            <li><a href="#" >MPI Road Safety</a></li>
					    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="subscribers.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span
                                class="pcoded-mtext">Subscribers</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">User
                                Feedbacks</span></a>

                    </li>
                    <li class="nav-item">
                        <a href="landmark.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Landmarks</span></a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">

                <img src="assets/images/icon.png" alt="" class="logo">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                    <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i> Log Out
                                </a>
                       
                    </div>
                </li>
            </ul>
        </div>


    </header>