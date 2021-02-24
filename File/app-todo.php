<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>To-Do - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/pages/app-todo.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar todo-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                    <i class="ficon feather icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-plus-square font-medium-5 primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6>
                                                <small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-alert-triangle font-medium-5 danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6>
                                                <small class="notification-text">Server have 99% CPU usage.</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-check-circle font-medium-5 info"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6>
                                                <small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-file font-medium-5 warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6>
                                                <small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">John Doe</span>
                                    <span class="user-status">Available</span>
                                </div>
                                <span>
                                    <img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-login.html">
                                    <i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none"> 
        <li class="d-flex align-items-center">
            <a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/xls.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p>
                        <small class="text-muted">Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/jpg.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/pdf.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/doc.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p>
                        <small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a>
        </li>
        <li class="d-flex align-items-center">
            <a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p>
                        <small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75 feather icon-alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="../index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">BIC</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class="active nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                    <ul class="menu-content">
                        <li><a href="card-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a href="card-advance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a href="card-statistics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a href="card-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="card-actions.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>pages</span>
                </li>
                <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Profile</span></a>
                </li>
                <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
                </li>
                <li class=" nav-item"><a href="page-faq.html"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
                </li>
                <li class=" nav-item"><a href="page-knowledge-base.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
                </li>
                <li class=" nav-item"><a href="page-search.html"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
                </li>
                <li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a href="auth-login.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="auth-register.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="auth-forgot-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="auth-reset-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                        </li>
                        <li><a href="auth-lock-screen.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                        </li>
                        <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                        <li><a href="chart-echarts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Echarts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
               
               
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content todo-sidebar d-flex">
                        <span class="sidebar-close-icon">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="todo-app-menu">
                            <div class="form-group text-center add-task">
                                <button type="button" class="btn btn-primary btn-block my-1" data-toggle="modal" data-target="#addTaskModal">Add Task</button>
                            </div>
                            <div class="sidebar-menu-list">
                                <div class="list-group list-group-filters font-medium-1">
                                    <a href="#" class="list-group-item list-group-item-action border-0 pt-0 active">
                                        <i class="font-medium-5 feather icon-mail mr-50"></i> All
                                    </a>
                                </div>
                                <hr>
                                <h5 class="mt-2 mb-1 pt-25">Filters</h5>
                                <div class="list-group list-group-filters font-medium-1">
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i> Starred</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i> Important</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-check mr-50"></i> Completed</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i> Trashed</a>
                                </div>
                                <hr>
                                <h5 class="mt-2 mb-1 pt-25">Labels</h5>
                                <div class="list-group list-group-labels font-medium-1">
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Frontend</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Backend</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> Doc</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> Bug</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                            <div class="modal-content">
                                <section class="todo-form">
                                    <form id="form-add-todo" class="todo-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="todo-item-action ml-auto">
                                                <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                <div class="dropdown todo-item-label">
                                                    <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel" data-toggle="dropdown">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoLabel">
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="primary" data-value="Frontend">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Frontend</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="warning" data-value="Backend">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Backend</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="success" data-value="Doc">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Doc</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="danger" data-value="Bug">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Bug</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <input type="text" class="new-todo-item-title form-control" placeholder="Title">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <textarea class="new-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn btn-primary add-todo-item" data-dismiss="modal"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">Add Task</span></button>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">Cancel</span></button>
                                            </fieldset>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="app-content-overlay"></div>
                        <div class="todo-app-area">
                            <div class="todo-app-list-wrapper">
                                <div class="todo-app-list">
                                    <div class="app-fixed-search">
                                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                        <fieldset class="form-group position-relative has-icon-left m-0">
                                            <input type="text" class="form-control" id="todo-search" placeholder="Search..">
                                            <div class="form-control-position">
                                                <i class="feather icon-search"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="todo-task-list list-group">
                                        <ul class="todo-task-list-wrapper media-list">
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Fix Responsiveness 💻</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Jelly topping toffee bear claw. Sesame snaps lollipop macaroon croissant cheesecake pastry cupcake.</p>
                                            </li>
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Meet Jane ❤️</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                                </div>
                                                            </div>
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                                </div>
                                                            </div>
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Toffee sugar plum oat cake tiramisu tart bonbon gingerbread cheesecake cake.</p>
                                            </li>
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Pick up Natasha 😁</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Sweet roll toffee dragée cotton candy jelly beans halvah gingerbread jelly-o. Ice cream bear claw sugar plum powder.</p>
                                            </li>
                                            <li class="todo-item completed" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Skype Tommy</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Bug"><span class="bullet bullet-danger bullet-xs"></span> Bug</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Tart oat cake sesame snaps lollipop croissant cake biscuit.</p>
                                            </li>
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Send PPT 🎁</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                                </div>
                                                            </div>
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Dragée gummi bears tiramisu brownie cookie. Jelly beans pudding marzipan fruitcake muffin. Wafer gummi bears lollipop pudding lollipop biscuit.</p>
                                            </li>
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Submit Report</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                                </div>
                                                            </div>
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Donut tart toffee cake cookie gingerbread. Sesame snaps brownie sugar plum candy canes muffin cotton candy.</p>
                                            </li>
                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">Refactor Code</h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                                </div>
                                                            </div>
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right todo-item-action d-flex">
                                                        <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                        <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                                    </div>
                                                </div>
                                                <p class="todo-desc truncate mb-0">Pie liquorice wafer cotton candy danish. Icing topping jelly-o halvah pastry lollipop.</p>
                                            </li>
                                        </ul>
                                        <div class="no-results">
                                            <h5>No Items Found</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTodoTask" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                                <div class="modal-content">
                                    <section class="todo-form">
                                        <form id="form-edit-todo" class="todo-input">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editTodoTask">Edit Task</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="todo-item-action ml-auto">
                                                    <a class='edit-todo-item-info todo-item-info'><i class="feather icon-info"></i></a>
                                                    <a class='edit-todo-item-favorite todo-item-favorite'><i class="feather icon-star"></i></a>
                                                    <div class="dropdown todo-item-label">
                                                        <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoEditLabel" data-toggle="dropdown">
                                                        </i>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoEditLabel">
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="primary" data-value="Frontend">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Frontend</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="warning" data-value="Backend">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Backend</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="success" data-value="Doc">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Doc</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="danger" data-value="Bug">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Bug</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <input type="text" class="edit-todo-item-title form-control" placeholder="Title">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <textarea class="edit-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="button" class="btn btn-primary update-todo-item" data-dismiss="modal"><i class="feather icon-edit d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">Update</span></button>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="button" class="btn" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">Cancel</span></button>
                                                </fieldset>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    

</body>
<!-- END: Body-->
   <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS-->
</html>