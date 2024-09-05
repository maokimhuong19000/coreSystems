<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{route('user.login')}}" id="site-logo-inner">
                            <img class="" id="logo_header" alt="" src="images/logo/logo.png" data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" >
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <div class="center-heading">Main Home</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children active">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-grid"></i></div>
                                            <div class="text">Dashboard</div>
                                        </a>
                                        <ul class="sub-menu" style="display: block;">
                                            <li class="sub-menu-item">
                                                <a href="{{route('user.login')}}" class="">
                                                    <div class="text">Home 01</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-2.html" class="">
                                                    <div class="text">Home 02</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-3.html" class="">
                                                    <div class="text">Home 03</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-4.html" class="active">
                                                    <div class="text">Home 04</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-boxed.html" class="">
                                                    <div class="text">Home Boxed</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-menu-icon-hover.html" class="">
                                                    <div class="text">Home Menu Icon Hover</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="home-menu-icon-default.html" class="">
                                                    <div class="text">Home Menu Icon Default</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">All page</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-shopping-cart"></i></div>
                                            <div class="text">Ecommerce</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="add-product.html" class="">
                                                    <div class="text">Add Product</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="product-list.html" class="">
                                                    <div class="text">Product List</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="product-detail-1.html" class="">
                                                    <div class="text">Product Detail 1</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="product-detail-2.html" class="">
                                                    <div class="text">Product Detail 2</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="product-detail-3.html" class="">
                                                    <div class="text">Product Detail 3</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-layers"></i></div>
                                            <div class="text">Category</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="category-list.html" class="">
                                                    <div class="text">Category list</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="new-category.html" class="">
                                                    <div class="text">New category</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-box"></i></div>
                                            <div class="text">Attributes</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="attributes.html" class="">
                                                    <div class="text">Attributes</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="add-attributes.html" class="">
                                                    <div class="text">Add attributes</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-file-plus"></i></div>
                                            <div class="text">Order</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="oder-list.html" class="">
                                                    <div class="text">Order list</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="oder-detail.html" class="">
                                                    <div class="text">Order detail</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="oder-tracking.html" class="">
                                                    <div class="text">Order tracking</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-user"></i></div>
                                            <div class="text">User</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="all-user.html" class="">
                                                    <div class="text">All user</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="add-new-user.html" class="">
                                                    <div class="text">Add new user</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{route('user.login')}}" class="">
                                                    <div class="text">Login</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{route('user.signup')}}" class="">
                                                    <div class="text">Sign up</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-user-plus"></i></div>
                                            <div class="text">Roles</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="all-roles.html" class="">
                                                    <div class="text">All roles</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="create-role.html" class="">
                                                    <div class="text">Create role</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gallery.html" class="">
                                            <div class="icon"><i class="icon-image"></i></div>
                                            <div class="text">Gallery</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Report</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">Setting</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-map-pin"></i></div>
                                            <div class="text">Location</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="countries.html" class="">
                                                    <div class="text">Countries</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="states.html" class="">
                                                    <div class="text">States</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="cities.html" class="">
                                                    <div class="text">Cities</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="setting.html" class="">
                                            <div class="icon"><i class="icon-settings"></i></div>
                                            <div class="text">Setting</div>
                                        </a>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-edit"></i></div>
                                            <div class="text">Pages</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="list-page.html" class="">
                                                    <div class="text">List page</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="new-page.html" class="">
                                                    <div class="text">New page</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="edit-page.html" class="">
                                                    <div class="text">Edit page</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                          <div class="center-item">
                                <div class="center-heading">Components</div>
                                <ul class="menu-list">
                                    <li class="menu-item">
                                        <a href="components.html" class="">
                                            <div class="icon"><i class="icon-database"></i></div>
                                            <div class="text">Components</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">Support</div>
                                <ul class="menu-list">
                                    <li class="menu-item">
                                        <a href="#" class="">
                                            <div class="icon"><i class="icon-help-circle"></i></div>
                                            <div class="text">Help center</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="">
                                            <div class="icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.7727 4.27031C15.025 3.51514 14.1357 2.91486 13.1558 2.50383C12.1758 2.09281 11.1244 1.87912 10.0617 1.875H10C7.84512 1.875 5.77849 2.73102 4.25476 4.25476C2.73102 5.77849 1.875 7.84512 1.875 10V14.375C1.875 14.8723 2.07254 15.3492 2.42417 15.7008C2.77581 16.0525 3.25272 16.25 3.75 16.25H5C5.49728 16.25 5.9742 16.0525 6.32583 15.7008C6.67746 15.3492 6.875 14.8723 6.875 14.375V11.25C6.875 10.7527 6.67746 10.2758 6.32583 9.92417C5.9742 9.57254 5.49728 9.375 5 9.375H3.15313C3.27366 8.07182 3.76315 6.83 4.56424 5.79508C5.36532 4.76016 6.44481 3.97502 7.67617 3.53169C8.90753 3.08836 10.2398 3.0052 11.5167 3.29196C12.7936 3.57872 13.9624 4.22352 14.8859 5.15078C16.0148 6.28539 16.7091 7.78052 16.8477 9.375H15C14.5027 9.375 14.0258 9.57254 13.6742 9.92417C13.3225 10.2758 13.125 10.7527 13.125 11.25V14.375C13.125 14.8723 13.3225 15.3492 13.6742 15.7008C14.0258 16.0525 14.5027 16.25 15 16.25H16.875C16.875 16.7473 16.6775 17.2242 16.3258 17.5758C15.9742 17.9275 15.4973 18.125 15 18.125H10.625C10.4592 18.125 10.3003 18.1908 10.1831 18.3081C10.0658 18.4253 10 18.5842 10 18.75C10 18.9158 10.0658 19.0747 10.1831 19.1919C10.3003 19.3092 10.4592 19.375 10.625 19.375H15C15.8288 19.375 16.6237 19.0458 17.2097 18.4597C17.7958 17.8737 18.125 17.0788 18.125 16.25V10C18.1291 8.93717 17.9234 7.88398 17.5197 6.90077C17.1161 5.91757 16.5224 5.02368 15.7727 4.27031ZM5 10.625C5.16576 10.625 5.32473 10.6908 5.44194 10.8081C5.55915 10.9253 5.625 11.0842 5.625 11.25V14.375C5.625 14.5408 5.55915 14.6997 5.44194 14.8169C5.32473 14.9342 5.16576 15 5 15H3.75C3.58424 15 3.42527 14.9342 3.30806 14.8169C3.19085 14.6997 3.125 14.5408 3.125 14.375V10.625H5ZM15 15C14.8342 15 14.6753 14.9342 14.5581 14.8169C14.4408 14.6997 14.375 14.5408 14.375 14.375V11.25C14.375 11.0842 14.4408 10.9253 14.5581 10.8081C14.6753 10.6908 14.8342 10.625 15 10.625H16.875V15H15Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">FAQs</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="">
                                            <div class="icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_604_18468)">
                                                    <path d="M4.71875 7V1H15.5561L18.9991 4.44801V19H4.71875C4.71875 19 4.71875 16.2 4.71875 13.5" stroke="#111111" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M19.0015 4.44801H15.5586V1L19.0015 4.44801Z" stroke="#111111" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.53469 14.5507C9.89243 14.5507 11.8037 12.6366 11.8037 10.2754C11.8037 7.91415 9.89243 6 7.53469 6C5.17695 6 3.26562 7.91415 3.26562 10.2754C3.26562 12.6366 5.17695 14.5507 7.53469 14.5507Z" stroke="#111111" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5.41029 13.9852L2.90967 16.4895C2.47263 16.9272 1.76451 16.9272 1.3275 16.4895C0.890833 16.0522 0.890833 15.3427 1.3275 14.9054L3.82812 12.4011M6.14799 10.2051L7.11794 11.175L8.91794 9.375" stroke="#111111" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_604_18468">
                                                    <rect width="20" height="20" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="text">Privacy policy</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">Connect us</div>
                                <ul class="wg-social">
                                    <li>
                                        <a href="#"><i class="icon-facebook"></i></a>
                                    </li>
                                    <li class="active">
                                        <a href="#"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bot text-center">
                            <div class="wrap">
                                <div class="mb-20">
                                    <img src="images/menu-left/img-bot.png" alt="">
                                </div>
                                <div class="mb-20">
                                    <h6>Hi, how can we help?</h6>
                                    <div class="text">Contact us if you have any assistance, we will contact you as soon as possible</div>
                                </div>
                                <a href="#" class="tf-button w-full">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="{{route('user.login')}}">
                                    <img class="" id="logo_header_mobile" alt="" src="images/logo/logo.png" data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" data-width="154px" data-height="52px" data-retina="images/logo/logo@2x.png">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search here..." class="show-search" name="name" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/17.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Dog Food Rachael Ray Nutrish®</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/18.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Natural Dog Food Healthy Dog Food</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/19.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Freshpet Healthy Dog Food and Cat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/20.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Sojos Crunchy Natural Grain Free...</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/21.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Kristin Watson</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/22.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/23.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item country">
                                    <select class="image-select no-text">
                                        <option data-thumbnail="images/country/1.png">ENG</option>
                                        <option data-thumbnail="images/country/9.png">VIE</option>
                                    </select>
                                </div>
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                                            <li>
                                                <h6>Message</h6>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/avatar/user-11.png" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Hello?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/avatar/user-12.png" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Ralph Edwards</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Are you there?  interested i this...</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/avatar/user-13.png" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Eleanor Pena</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Interested in this loads?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/avatar/user-11.png" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Jane Cooper</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Okay...Do we have a deal?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-message-square"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2" >
                                            <li>
                                                <h6>Notifications</h6>
                                            </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span></div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap apps type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <i class="icon-grid"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton4" >
                                            <li>
                                                <h6>Related apps</h6>
                                            </li>
                                            <li>
                                                <ul class="list-apps">
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-1.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Photoshop</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-2.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">illustrator</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-3.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Sheets</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-4.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Gmail</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-5.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Messenger</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-6.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Youtube</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-7.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Flaticon</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-8.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Instagram</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-9.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">PDF</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all app</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">Kristin Watson</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3" >
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="setting.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-settings"></i>
                                                    </div>
                                                    <div class="body-title-2">Setting</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('user.login')}}" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="tf-section-4 mb-30">
                                    <!-- wg-goal -->
                                    <div class="wg-goal">
                                        <div class="image">
                                            <img src="images/images-section/goal.jpg" alt="">
                                        </div>
                                        <div class="left">
                                            <h5 class="mb-14">Great! Your goal is almost complete</h5>
                                            <div class="body-text mb-14">You have completed <span class="body-title">61%</span> <br> of your target. You can <br> view the work details.</div>
                                            <a href="#"><span class="body-title">View detail</span><i class="icon-arrow-right"></i></a>
                                        </div>
                                        <div class="right">
                                            <div id="line-chart-17">
                                                <div class="circle_percent" data-percent="61">
                                                    <div class="circle_inner">
                                                        <div class="round_per"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /wg-goal -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default style-1">
                                        <div class="flex flex-column gap15 flex-shrink-0">
                                            <div class="flex gap14 flex-column">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#22C55E"/>
                                                    </svg>
                                                    <i class="icon-shopping-bag"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Sales</div>
                                                    <h3>34,945</h3>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <div class="body-title number tf-color-2">1.56%</div>
                                                <i class="icon-trending-up"></i>
                                            </div>
                                        </div>
                                        <div class="wrap-chart flex-grow">
                                            <div id="line-chart-18"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default style-1">
                                        <div class="flex flex-column gap15 flex-shrink-0">
                                            <div class="flex gap14 flex-column">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#FF5200"/>
                                                    </svg>
                                                    <i class="icon-dollar-sign"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Income</div>
                                                    <h3>$37,802</h3>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending down">
                                                <div class="body-title number tf-color-1">1.56%</div>
                                                <i class="icon-trending-down"></i>
                                            </div>
                                        </div>
                                        <div class="wrap-chart flex-grow">
                                            <div id="line-chart-19"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default style-1">
                                        <div class="flex flex-column gap15 flex-shrink-0">
                                            <div class="flex gap14 flex-column">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#2377FC"/>
                                                    </svg>
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Visitor</div>
                                                    <h3>34,945</h3>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <div class="body-title number tf-color-2">1.56%</div>
                                                <i class="icon-trending-up"></i>
                                            </div>
                                        </div>
                                        <div class="wrap-chart flex-grow">
                                            <div id="line-chart-20"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                </div>
                                <div class="tf-section-8 mb-30">
                                    <!-- sale -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Sale by category</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex gap10 justify-between flex-wrap">
                                            <div>
                                                <div class="text-tiny mb-2">Total Mar 20, 2023</div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown default style-box">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">Week<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>  
                                                        <a href="javascript:void(0);">Month</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="line-chart-21"></div>
                                        <div class="flex gap20">
                                            <div class="block-legend justify-center w-full">
                                                <div class="dot-1 t1"></div>
                                                <div class="text-tiny">Mens</div>
                                            </div>
                                            <div class="block-legend justify-center w-full">
                                                <div class="dot-1 t2"></div>
                                                <div class="text-tiny">Women’s</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /sale -->
                                    <!-- order -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Recent orders</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-product-overview t3">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Product</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Customer</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Product ID</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Quantity</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <div class="divider mb-14"></div>
                                            <ul class="flex flex-column gap10">
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/31.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Taste of the Wild Formula Finder</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X1</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/32.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Proden Plaqueoff Dental Bites Dog, 150 G</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X2</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/33.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Zuke's Lil' Links Healthy Little Sausage Links for Dogs...</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X1</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/34.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Rachael Ray Nutrish Grain Free Chicken Drumstick...</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X3</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/35.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Fruitables Dog Treats Sweet Potato & Pecan Flavor</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X2</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="flex items-center justify-between flex-wrap gap10">
                                            <div class="text-tiny">Showing 5 entries</div>
                                            <ul class="wg-pagination">
                                                <li>
                                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /order -->
                                </div>
                                <div class="tf-section-8 mb-30">
                                    <!-- customers -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Top Customers</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table">
                                            <ul class="table-title flex justify-between gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Name</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Total money</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap18">
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/avatar/user-1.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="tf-color-3 body-text name">Devon Lane</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text tf-color-3">$8.99</div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/avatar/user-2.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="tf-color-3 body-text name">Jenny Wilson</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text tf-color-3">$6.48</div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/avatar/user-3.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="tf-color-3 body-text name">Eleanor Pena</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text tf-color-3">$14.81</div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/avatar/user-4.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="tf-color-3 body-text name">Albert Flores</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text tf-color-3">$5.22</div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/avatar/user-5.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="tf-color-3 body-text name">Ronald Richards</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text tf-color-3">$17.84</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /customers -->
                                    <div class="tf-section-2">
                                        <!-- sales -->
                                        <div class="wg-box">
                                            <div class="flex items-center justify-between">
                                                <h5>Top Countries By Sales</h5>
                                                <div class="dropdown default">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>  
                                                            <a href="javascript:void(0);">3 days</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">7 days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap10">
                                                <h4>$37,802</h4>
                                                <div class="box-icon-trending up">
                                                    <i class="icon-trending-up"></i>
                                                    <div class="body-title number">1.56%</div>
                                                </div>
                                                <div class="text-tiny">since last weekend</div>
                                            </div>
                                            <ul class="flex flex-column justify-between gap10 h-full">
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/6.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Turkish Flag</a>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/7.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Belgium</a>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/8.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Sweden</a>
                                                        <div class="box-icon-trending down">
                                                            <i class="icon-trending-down"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/9.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Vietnamese</a>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/10.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Australia</a>
                                                        <div class="box-icon-trending down">
                                                            <i class="icon-trending-down"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                                <li class="country-item">
                                                    <div class="image">
                                                        <img src="images/country/11.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between">
                                                        <a href="countries.html" class="body-text name">Saudi Arabia</a>
                                                        <div class="box-icon-trending down">
                                                            <i class="icon-trending-down"></i>
                                                        </div>
                                                        <div class="body-text number">6,972</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /sales -->
                                        <!-- product -->
                                        <div class="wg-box">
                                            <div class="flex items-center justify-between">
                                                <h5>Top Products</h5>
                                                <div class="dropdown default">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>  
                                                            <a href="javascript:void(0);">3 days</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">7 days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="wg-table table-top-product">
                                                <ul class="flex flex-column gap14">
                                                    <li class="product-item">
                                                        <div class="image">
                                                            <img src="images/products/1.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-title-2">Patimax Fragrance Long...</a>
                                                                <div class="text-tiny mt-3">100 Items</div>
                                                            </div>
                                                            <div>
                                                                <div class="text-tiny mb-3">Coupon Code</div>
                                                                <div class="body-text">Sflat</div>
                                                            </div>
                                                            <div class="country">
                                                                <img src="images/country/2.png" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="body-title-2 mb-3">-15%</div>
                                                                <div class="text-tiny">$27.00</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <div class="image">
                                                            <img src="images/products/2.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-title-2">Nulo MedalSeries Adult Cat...</a>
                                                                <div class="text-tiny mt-3">100 Items</div>
                                                            </div>
                                                            <div>
                                                                <div class="text-tiny mb-3">Coupon Code</div>
                                                                <div class="body-text">Sflat</div>
                                                            </div>
                                                            <div class="country">
                                                                <img src="images/country/3.png" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="body-title-2 mb-3">-15%</div>
                                                                <div class="text-tiny">$27.00</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <div class="image">
                                                            <img src="images/products/3.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-title-2">Pedigree Puppy Dry Dog...</a>
                                                                <div class="text-tiny mt-3">100 Items</div>
                                                            </div>
                                                            <div>
                                                                <div class="text-tiny mb-3">Coupon Code</div>
                                                                <div class="body-text">Sflat</div>
                                                            </div>
                                                            <div class="country">
                                                                <img src="images/country/1.png" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="body-title-2 mb-3">-15%</div>
                                                                <div class="text-tiny">$27.00</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <div class="image">
                                                            <img src="images/products/4.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-title-2">Biscoito Premier Cookie...</a>
                                                                <div class="text-tiny mt-3">100 Items</div>
                                                            </div>
                                                            <div>
                                                                <div class="text-tiny mb-3">Coupon Code</div>
                                                                <div class="body-text">Sflat</div>
                                                            </div>
                                                            <div class="country">
                                                                <img src="images/country/4.png" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="body-title-2 mb-3">-15%</div>
                                                                <div class="text-tiny">$27.00</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <div class="image">
                                                            <img src="images/products/5.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-title-2 mb-3">Pedigree Adult Dry Dog...</a>
                                                                <div class="text-tiny">100 Items</div>
                                                            </div>
                                                            <div>
                                                                <div class="text-tiny mb-3">Coupon Code</div>
                                                                <div class="body-text">Sflat</div>
                                                            </div>
                                                            <div class="country">
                                                                <img src="images/country/5.png" alt="">
                                                            </div>
                                                            <div>
                                                                <div class="body-title-2 mb-3">-15%</div>
                                                                <div class="text-tiny">$27.00</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    </div>
                                </div>
                                <div class="tf-section-2">
                                    <!-- sales -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Product overview</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-product-overview t4">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Name</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">ID</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Sale</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Revenue</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <div class="divider mb-14"></div>
                                            <ul class="flex flex-column gap10">
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/6.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Dog Food, Chicken & Chicken Liver Recipe...</a>
                                                        </div>
                                                        <div class="body-text">#70668</div>
                                                        <div class="body-text">$450</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">$928.41</div>
                                                        <div>
                                                            <div class="block-available">Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/7.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Grain Free Dry Dog Food | Rachael Ray® Nutrish®</a>
                                                        </div>
                                                        <div class="body-text">#70668</div>
                                                        <div class="body-text">$450</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">$928.41</div>
                                                        <div>
                                                            <div class="block-not-available">Not Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/8.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Weruva Pumpkin Patch Up! Pumpkin With Ginger...</a>
                                                        </div>
                                                        <div class="body-text">#70668</div>
                                                        <div class="body-text">$450</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">$928.41</div>
                                                        <div>
                                                            <div class="block-available">Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/9.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Milk-Bone Mini's Flavor Snacks Dog Treats, 15...</a>
                                                        </div>
                                                        <div class="body-text">#70668</div>
                                                        <div class="body-text">$450</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">$928.41</div>
                                                        <div>
                                                            <div class="block-available">Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/10.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Weruva Pumpkin Patch Up! Dog & Cat Food...</a>
                                                        </div>
                                                        <div class="body-text">#70668</div>
                                                        <div class="body-text">$450</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">$928.41</div>
                                                        <div>
                                                            <div class="block-not-available">Not Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="flex items-center justify-between flex-wrap gap10">
                                            <div class="text-tiny">Showing 5 entries</div>
                                            <ul class="wg-pagination">
                                                <li>
                                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /sales -->
                                    <!-- revenue -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Revenue</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-3">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Website</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <div class="block-legend">
                                                        <div class="dot t4"></div>
                                                        <div class="text-tiny">Store</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-22"></div>
                                    </div>
                                    <!-- /revenue -->
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Remos. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/zoom.js"></script>
    <script src="js/apexcharts/apexcharts.js"></script>
    <script src="js/apexcharts/line-chart-17.js"></script>
    <script src="js/apexcharts/line-chart-18.js"></script>
    <script src="js/apexcharts/line-chart-19.js"></script>
    <script src="js/apexcharts/line-chart-20.js"></script>
    <script src="js/apexcharts/line-chart-21.js"></script>
    <script src="js/apexcharts/line-chart-22.js"></script>
    <!-- <script src="js/switcher.js"></script> -->
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>

</html>