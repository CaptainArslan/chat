<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Chat | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    @vite(['resources/js/app.js'])

    <!-- Bootstrap css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="/assets/js/head.js"></script>

    <!-- Scripts -->


</head>

<!-- body start -->

<body data-theme="light" data-layout-mode="horizontal" data-topbar-color="dark" data-menu-position="fixed">

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box dropdown">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                    <button class="btn input-group-text" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                                <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle"
                                                    src="/assets/images/users/user-2.jpg"
                                                    alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle"
                                                    src="/assets/images/users/user-5.jpg"
                                                    alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="fe-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                            href="#">
                            <i class="fe-maximize noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="fe-grid noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-end">

                            <div class="p-lg-1">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="/assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="/assets/images/flags/us.jpg" alt="user-image" height="16">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="/assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="/assets/images/flags/italy.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="/assets/images/flags/spain.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="/assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                            alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="/assets/images/users/user-4.jpg" class="img-fluid rounded-circle"
                                            alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                Geneva <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-sm.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Create New
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-briefcase me-1"></i>
                                <span>New Projects</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-user me-1"></i>
                                <span>Create Users</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-bar-chart-line- me-1"></i>
                                <span>Revenue Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-headphones me-1"></i>
                                <span>Help & Support</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown dropdown-mega d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Nestable List</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Sliders</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Masonry Items</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Treeview Page</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tour Page</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">eCommerce Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">CRM Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Team Contacts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Task Board</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email Templates</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Left Sidebar with User</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Menu Collapsed</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Small Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">New Header Style</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Search Result</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Gallery Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h3 class="text-dark">Special Discount Sale!</h3>
                                        <h4>Save up to 70% off.</h4>
                                        <button class="btn btn-primary rounded-pill mt-3">Download Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Chat</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Chat</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <!-- start chat users-->
                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex align-items-start mb-3">
                                        <img src="/assets/images/users/user-1.jpg" class="me-2 rounded-circle"
                                            height="42" alt="Brandon Smith">
                                        <div class="w-100">
                                            <h5 class="mt-0 mb-0 font-15">
                                                <a href="contacts-profile.html" class="text-reset">Geneva McKnight</a>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted font-14">
                                                <small class="mdi mdi-circle text-success"></small> Online
                                            </p>
                                        </div>
                                        <a href="javascript: void(0);" class="text-reset font-20">
                                            <i class="mdi mdi-cog-outline"></i>
                                        </a>
                                    </div>

                                    <!-- start search box -->
                                    <form class="search-bar mb-3">
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control-light"
                                                placeholder="People, groups & messages...">
                                            <span class="mdi mdi-magnify"></span>
                                        </div>
                                    </form>
                                    <!-- end search box -->

                                    <h6 class="font-13 text-muted text-uppercase">Group Chats</h6>
                                    <div class="p-2">
                                        <a href="javascript: void(0);" class="text-reset mb-2 d-block">
                                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                            <span class="mb-0 mt-1">App Development</span>
                                        </a>

                                        <a href="javascript: void(0);" class="text-reset mb-2 d-block">
                                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                            <span class="mb-0 mt-1">Office Work</span>
                                        </a>
                                    </div>

                                    <h6 class="font-13 text-muted text-uppercase mb-2">Contacts</h6>

                                    <!-- users -->
                                    <div class="row">
                                        <div class="col">
                                            <div data-simplebar style="max-height: 375px;">
                                                @forelse ($users as $user)
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start p-2">
                                                            <img src="{{ $user->avatar ? $user->avatar : '/assets/images/users/user-2.jpg' }} "
                                                                class="me-2 rounded-circle" height="42"
                                                                alt="Brandon Smith" />
                                                            <div class="w-100">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span
                                                                        class="float-end text-muted fw-normal font-12">4:30am</span>
                                                                    {{ $user->name }}
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end"><span
                                                                            class="badge badge-soft-danger">3</span></span>
                                                                    <span class="w-75">How are you today?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @empty
                                                @endforelse

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-5.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="James Z" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">5:30am</span>
                                                                James Z
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Hey! a reminder for tomorrow's
                                                                    meeting...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-7.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Maria C" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Thu</span>
                                                                Maria C
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-25 float-end text-end"><span
                                                                        class="badge badge-soft-danger">2</span></span>
                                                                <span class="w-75">Are we going to have this week's
                                                                    planning meeting today?</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start bg-light p-2">
                                                        <img src="/assets/images/users/user-10.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Rhonda D" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Wed</span>
                                                                Rhonda D
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Please check these design
                                                                    assets...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-3.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Michael H" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Tue</span>
                                                                Michael H
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Are you free for 15 min? I would
                                                                    like to discuss something...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-6.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Thomas R" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Tue</span>
                                                                Thomas R
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Let's have meeting today between
                                                                    me, you and Tony...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-8.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Thomas J" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Tue</span>
                                                                Thomas J
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Howdy?</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start p-2">
                                                        <img src="/assets/images/users/user-4.jpg"
                                                            class="me-2 rounded-circle" height="42"
                                                            alt="Ricky J" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span
                                                                    class="float-end text-muted fw-normal font-12">Mon</span>
                                                                Ricky J
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Are you interested in
                                                                    learning?</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end slimscroll-->
                                        </div>
                                        <!-- End col -->
                                    </div>
                                    <!-- end users -->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        <!-- end chat users-->

                        <!-- chat area -->
                        <div class="col-xl-9 col-lg-8">

                            <div class="card">
                                <div class="card-body py-2 px-3 border-bottom border-light">
                                    <div class="row justify-content-between py-1">
                                        <div class="col-sm-7">
                                            <div class="d-flex align-items-start">
                                                <img src="/assets/images/users/user-5.jpg" class="me-2 rounded-circle"
                                                    height="36" alt="Brandon Smith">
                                                <div>
                                                    <h5 class="mt-0 mb-0 font-15">
                                                        <a href="contacts-profile.html" class="text-reset">James
                                                            Zavel</a>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-12">
                                                        <small class="mdi mdi-circle text-success"></small> Online
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div id="tooltips-container">
                                                <a href="javascript: void(0);"
                                                    class="text-reset font-19 py-1 px-2 d-inline-block">
                                                    <i class="fe-phone-call" data-bs-container="#tooltips-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Voice Call"></i>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset font-19 py-1 px-2 d-inline-block">
                                                    <i class="fe-video" data-bs-container="#tooltips-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Video Call"></i>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset font-19 py-1 px-2 d-inline-block">
                                                    <i class="fe-user-plus" data-bs-container="#tooltips-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add Users"></i>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset font-19 py-1 px-2 d-inline-block">
                                                    <i class="fe-trash-2" data-bs-container="#tooltips-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete Chat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="conversation-list" data-simplebar style="max-height: 460px;">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-5.jpg" class="rounded"
                                                    alt="James Z" />
                                                <i>10:00</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>James Z</i>
                                                    <p>
                                                        Hello!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-1.jpg" class="rounded"
                                                    alt="Geneva M" />
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva M</i>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-5.jpg" class="rounded"
                                                    alt="James Z" />
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>James Z</i>
                                                    <p>
                                                        Yeah everything is fine
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-1.jpg" class="rounded"
                                                    alt="Geneva M" />
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva M</i>
                                                    <p>
                                                        Wow that's great
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-5.jpg" alt="James Z"
                                                    class="rounded" />
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>James Z</i>
                                                    <p>
                                                        Let's have it today if you are free
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-1.jpg" alt="Geneva M"
                                                    class="rounded" />
                                                <i>10:03</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva M</i>
                                                    <p>
                                                        Sure thing! let me know if 2pm works for you
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-5.jpg" alt="James Z"
                                                    class="rounded" />
                                                <i>10:04</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>James Z</i>
                                                    <p>
                                                        Sorry, I have another meeting scheduled at 2pm. Can we have it
                                                        at 3pm instead?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-5.jpg" alt="James Z"
                                                    class="rounded" />
                                                <i>10:04</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>James Z</i>
                                                    <p>
                                                        We can also discuss about the presentation talk format if you
                                                        have some extra mins
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="/assets/images/users/user-1.jpg" alt="Geneva M"
                                                    class="rounded" />
                                                <i>10:05</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva M</i>
                                                    <p>
                                                        3pm it is. Sure, let's discuss about presentation format, it
                                                        would be great to finalize today. I am attaching the last year
                                                        format and assets here...
                                                    </p>
                                                </div>
                                                <div class="card mt-2 mb-1 shadow-none border text-start">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-primary rounded">
                                                                        .ZIP
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">UBold-sketch.zip</a>
                                                                <p class="mb-0">2.3 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-link btn-lg text-muted">
                                                                    <i class="dripicons-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-actions dropdown">
                                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="mdi mdi-dots-vertical font-16"></i></button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy Message</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-2 bg-light p-3 rounded">
                                                <form class="needs-validation" novalidate="" name="chat-form"
                                                    id="chat-form">
                                                    <div class="row">
                                                        <div class="col mb-2 mb-sm-0">
                                                            <input type="text" class="form-control border-0"
                                                                placeholder="Enter your text" required="" />
                                                            <div class="invalid-feedback">
                                                                Please enter your messsage
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-light"><i
                                                                        class="fe-paperclip"></i></a>
                                                                <button type="submit"
                                                                    class="btn btn-success chat-send w-100"><i
                                                                        class="fe-send"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row-->
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>
                        <!-- end chat area-->

                    </div> <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; UBold theme by <a href="">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-0">
                <div class="tab-pane" id="chat-tab" role="tabpanel">

                    <form class="search-bar p-3">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>

                    <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                            <span class="mb-0 mt-1">App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                            <span class="mb-0 mt-1">Office Work</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                            <span class="mb-0 mt-1">Personal Group</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                            <span class="mb-0 mt-1">Freelance</span>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);"
                            class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-10.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-1.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To an English person, it will seem like
                                            simplified</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-9.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);"
                            class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2 pb-4">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-2.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-4.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-5.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">If several languages coalesce the grammar of the
                                            resulting.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-6.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-7.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="/assets/images/users/user-8.jpg" class="rounded-circle avatar-sm"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">One could refuse to pay expensive translators.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                <i class="mdi mdi-spin mdi-loading me-2"></i>
                                Load more
                            </a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                    <div class="px-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                    aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                    aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2 d-grid">
                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create
                            Task</a>
                    </div>

                </div>
                <div class="tab-pane active" id="settings-tab" role="tabpanel">
                    <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                        <span class="d-block py-1">Theme Settings</span>
                    </h6>

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                id="light-mode-check" checked />
                            <label class="form-check-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                id="dark-mode-check" />
                            <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                        </div>

                        <!-- Width -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-width" value="fluid"
                                id="fluid-check" checked />
                            <label class="form-check-label" for="fluid-check">Fluid</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-width" value="boxed"
                                id="boxed-check" />
                            <label class="form-check-label" for="boxed-check">Boxed</label>
                        </div>

                        <!-- Menu positions -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Layout Positon</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="menu-position" value="fixed"
                                id="fixed-check" checked />
                            <label class="form-check-label" for="fixed-check">Fixed</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="menu-position"
                                value="scrollable" id="scrollable-check" />
                            <label class="form-check-label" for="scrollable-check">Scrollable</label>
                        </div>

                        <!-- Topbar -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="dark"
                                id="darktopbar-check" checked />
                            <label class="form-check-label" for="darktopbar-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="light"
                                id="lighttopbar-check" />
                            <label class="form-check-label" for="lighttopbar-check">Light</label>
                        </div>


                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                            <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3"
                                target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                        </div>

                    </div>

                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>
