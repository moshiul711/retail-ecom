<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="https://wsc.com.bd/website/assets/images/logo1.png" type="image/png" />
    <!--plugins-->
    <link href="<?php echo e(asset('/')); ?>website/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/')); ?>website/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" />
    <link href="<?php echo e(asset('/')); ?>website/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('/')); ?>website/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>website/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>website/assets/css/app.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>website/assets/css/icons.css" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <a href="<?php echo e(route('website')); ?>">
                <div class="sidebar-header">
                    <div class="text-center">
                        <img src="<?php echo e(asset('/')); ?>website/assets/images/logo-email.png" class="logo-icon"
                            alt="logo icon">
                    </div>
                </div>
            </a>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">eCommerce</div>
                    </a>
                    <ul>
                        <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                        </li>
                        <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product
                                Details</a>
                        </li>
                        <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New
                                Products</a>
                        </li>
                        <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Components</div>
                    </a>
                    <ul>
                        <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
                        </li>
                        <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
                        </li>
                        <li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
                        </li>
                        <li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
                        </li>
                        <li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
                        </li>
                        <li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
                        </li>
                        <li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
                        </li>
                        <li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
                        </li>
                        <li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
                        </li>
                        <li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
                        </li>
                        <li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
                        </li>
                        <li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
                        </li>
                        <li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers &
                                Tooltips</a>
                        </li>
                        <li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
                        </li>
                        <li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Content</div>
                    </a>
                    <ul>
                        <li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
                        </li>
                        <li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
                        </li>
                        <li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text
                                Utilities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                        </div>
                        <div class="menu-title">Icons</div>
                    </a>
                    <ul>
                        <li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
                        </li>
                        <li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
                        </li>
                        <li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form-froala-editor.html">
                        <div class="parent-icon"><i class='bx bx-code-alt'></i>
                        </div>
                        <div class="menu-title">Froala Editor</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
                        </li>
                        <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
                        </li>
                        <li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios &
                                Checkboxes</a>
                        </li>
                        <li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
                        </li>
                        <li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
                        </li>
                        <li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
                        </li>
                        <li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
                        </li>
                        <li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
                        </li>
                        <li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
                        </li>
                        <li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
                        </li>
                        <li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
                        </li>
                        <li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-lock"></i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
                            <ul>
                                <li><a href="auth-basic-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-basic-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-basic-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-basic-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
                            <ul>
                                <li><a href="auth-cover-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-cover-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-cover-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-cover-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header
                                Footer</a>
                            <ul>
                                <li><a href="auth-header-footer-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-header-footer-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-header-footer-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-header-footer-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="user-profile.html">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="timeline.html">
                        <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-error"></i>
                        </div>
                        <div class="menu-title">Errors</div>
                    </a>
                    <ul>
                        <li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404
                                Error</a>
                        </li>
                        <li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500
                                Error</a>
                        </li>
                        <li> <a href="errors-coming-soon.html" target="_blank"><i
                                    class='bx bx-radio-circle'></i>Coming Soon</a>
                        </li>
                        <li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank
                                Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="faq.html">
                        <div class="parent-icon"><i class="bx bx-help-circle"></i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="pricing-table.html">
                        <div class="parent-icon"><i class="bx bx-diamond"></i>
                        </div>
                        <div class="menu-title">Pricing</div>
                    </a>
                </li>

                <li>
                    <a href="https://codervent.com/rocker/documentation/index.html" target="_blank">
                        <div class="parent-icon"><i class="bx bx-folder"></i>
                        </div>
                        <div class="menu-title">Documentation</div>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/user/codervent" target="_blank">
                        <div class="parent-icon"><i class="bx bx-support"></i>
                        </div>
                        <div class="menu-title">Support</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>

                    <div class="search-bar" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a href="avascript:;" class="btn d-flex align-items-center"><i
                                class='bx bx-search'></i>Search</a>
                    </div>

                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">
                            <li class="nav-item dropdown dropdown-app d-none">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                                    href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="app-container p-2 my-2">
                                        <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2"></div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-large d-none">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <p class="msg-header-badge">8 New</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">
                                            <button class="btn btn-primary w-100">View All Notifications</button>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">8</span>
                                    <i class='bx bx-shopping-bag'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">My Cart</p>
                                            <p class="msg-header-badge">10 Items</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="<?php echo e(asset('/')); ?>website/assets/images/products/11.png"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h5 class="mb-0">Total</h5>
                                                <h5 class="mb-0 ms-auto">$489.00</h5>
                                            </div>
                                            <button class="btn btn-primary w-100">Checkout</button>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown ps-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if(!session('customer_id')): ?>
                                <img src="<?php echo e(asset('/')); ?>website/assets/images/avatars/avatar.png"
                                    class="user-img" alt="user avatar">
                                <div class="user-info text-center">
                                    <p class="user-name mb-0">Md Moshiul islam</p>
                                    <p class="designattion mb-0">Welcome Back</p>
                                </div>
                            <?php else: ?>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#SearchModal">
                                    <img src="<?php echo e(asset('/')); ?>website/assets/images/avatars/avatar.png"
                                        class="user-img" alt="user avatar">
                                </a>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-cog fs-5"></i><span>Settings</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-download fs-5"></i><span>Downloads</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <?php echo $__env->yieldContent('carousel'); ?>
                <?php echo $__env->yieldContent('product-overview'); ?>
                <?php echo $__env->yieldContent('featured-category'); ?>
                <?php echo $__env->yieldContent('product-content'); ?>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © <?php echo e(date('Y')); ?>. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->


    <!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header gap-2">
                    <div class="position-relative popup-search w-100">
                        <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                            placeholder="Search">
                        <span
                            class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                                class='bx bx-search'></i></span>
                    </div>
                    <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="search-list">
                        <p class="mb-1">Html Templates</p>
                        <div class="list-group">
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-angular fs-4'></i>Best Html Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
                        </div>
                        <p class="mb-1 mt-3">Web Designe Company</p>
                        <div class="list-group">
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-windows fs-4'></i>Best Html Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-dropbox fs-4'></i>Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
                        </div>
                        <p class="mb-1 mt-3">Software Development</p>
                        <div class="list-group">
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
                        </div>
                        <p class="mb-1 mt-3">Online Shoping Portals</p>
                        <div class="list-group">
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-slack fs-4'></i>Best Html Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-skype fs-4'></i>Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                    class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search modal -->

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('/')); ?>website/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('/')); ?>website/assets/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>website/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>website/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>website/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script src="<?php echo e(asset('/')); ?>website/assets/js/index.js"></script>
    <!--app JS-->
    <script src="<?php echo e(asset('/')); ?>website/assets/js/app.js"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
    <script>
        function changeImage(thumbnail) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;
        }
    </script>

</body>


</html>
<?php /**PATH D:\Projects\rocker-ecom\resources\views/master.blade.php ENDPATH**/ ?>