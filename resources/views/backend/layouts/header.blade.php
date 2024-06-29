<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('backend/imgs/theme/favicon.svg') }}">
    <link href="{{ url('backend/css/main.css') }}" rel="stylesheet" type="text/css" />
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}
    <script src="{{ url('backend/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor5/build/ckeditor.js') }}" type="text/javascript"></script>
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="{{ url('/admin') }}" class="brand-wrap">
                <img src="{{ url('backend/imgs/theme/logo.svg') }}" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item {{ Request::is('admin') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/admin') }}"> <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('products/list') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/products/list') }}"> <i
                            class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Product</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('products/add') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/products/add') }}"> <i
                            class="icon material-icons md-add_box"></i>
                        <span class="text">Add product</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/blogs') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('blogs.list') }}"> <i
                            class="icon material-icons md-local_library"></i>
                        <span class="text">Blogs</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('categories/list') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/categories/list') }}"> <i
                            class="icon material-icons md-category"></i>
                        <span class="text">Categories</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('team/list') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/team/list') }}"> <i class="icon material-icons md-groups"></i>
                        <span class="text">Team Member</span>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('persona/list') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ url('/persona/list') }}"> <i
                            class="icon material-icons md-comment"></i>
                        <span class="text">Personas</span>
                    </a>
                </li>
                {{-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                        <span class="text">Account</span>
                    </a>
                    <div class="submenu">
                        <a href="page-account-login.php">User login</a>
                        <a href="page-account-register.php">User registration</a>
                        <a href="page-error-404.php">Error 404</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-reviews.php"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Reviews</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-brands.php"> <i class="icon material-icons md-stars"></i>
                        <span class="text">Brands</span> </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li> --}}
            </ul>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"> <i
                                class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i
                        class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i
                                class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i
                                class="material-icons md-cast"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage"
                            aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img
                                    src="{{ url('backend/imgs/theme/flag-us.png') }}" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ url('backend/imgs/theme/flag-fr.png') }}" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ url('backend/imgs/theme/flag-jp.png') }}" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ url('backend/imgs/theme/flag-cn.png') }}" alt="Français">中国人</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount"
                            aria-expanded="false"> <img class="img-xs rounded-circle"
                                src="{{ url('backend/imgs/people/avatar2.jpg') }}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account
                                Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ url('/admin/logout') }}"><i
                                    class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
