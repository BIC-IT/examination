<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="../index.php">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">BIC</h2>
                </a>
            </li>


        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!-- <li class=" nav-item"><a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class=" nav-item"><a href="app-email.php"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.php"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.php"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="app-calender.php"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
            </li> -->
            <li class="<?php if ($activepage == "app-user-list") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-list.php"><i class="feather icon-users"></i><span class="menu-item" data-i18n="List"> المستخدمينٍ</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-university") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-university.php"><i class="feather icon-home"></i><span class="menu-item" data-i18n="List"> الجامعه</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-college") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-college.php"><i class="feather icon-book"></i><span class="menu-item" data-i18n="List"> الكليات</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-departments") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-departments.php"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List"> الاقسام</span></a>
            </li>


            <!-- <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                <ul class="menu-content">
                    <li><a href="card-basic.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a href="card-advance.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                    </li>
                    <li><a href="card-statistics.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                    </li>
                    <li><a href="card-analytics.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li><a href="card-actions.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                    </li>
                </ul>
            </li> -->
            <li class=" navigation-header"><span>pages</span>
            </li>
            <li class=" nav-item"><a href="page-user-profile.php"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Profile</span></a>
            </li>
            <li class=" nav-item"><a href="page-account-settings.php"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
            </li>
            <li class=" nav-item"><a href="page-faq.php"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="page-knowledge-base.php"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
            </li>
            <li class=" nav-item"><a href="page-search.php"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
            </li>
            <li class=" nav-item"><a href="page-invoice.php"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                <ul class="menu-content">
                    <li><a href="auth-login.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                    </li>
                    <li><a href="auth-register.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                    </li>
                    <li><a href="auth-forgot-password.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                    </li>
                    <li><a href="auth-reset-password.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                    </li>
                    <li><a href="auth-lock-screen.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                <ul class="menu-content">
                    <li><a href="page-coming-soon.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                        <ul class="menu-content">
                            <li><a href="error-404.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                            </li>
                            <li><a href="error-500.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="page-not-authorized.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                    </li>
                    <li><a href="page-maintenance.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Charts &amp; Maps</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a href="chart-apex.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                    </li>
                    <li><a href="chart-chartjs.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                    </li>
                    <li><a href="chart-echarts.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Echarts</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="maps-google.php"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>



        </ul>
    </div>
</div>