

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    @yield('title')
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('nk1/assets/css/dashlite.css?ver=2.9.1') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('nk1/assets/css/theme.css?ver=2.9.1') }}">
    
</head>

<body class="nk-body bg-lighter npc-general has-sidebar">
    
   
       
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
         
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <!-- <a href="html/index.html" class="logo-link">
                                    <img width="80" height="40" class="logo-light logo-img" src="https://www.data collection.com/temp/images/7784.png" srcset="https://www.data collection.com/temp/images/7784.png" alt="logo">
                                    <img class="logo-dark logo-img" src="https://www.data collection.com/temp/images/7784.png" srcset="https://www.data collection.com/temp/images/7784.png" alt="logo-dark">
                                </a> -->
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <p>Welcome , data collection is an initiative of refined traders. Make profit trading your favorite Shares, Cryptocurrencies and Non fungible tokens (NFTs).</p>
                                            <em class="icon ni ni-external"></em>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./images/flags/english.png" alt="" class="language-flag">
                                                <!--        <span class="language-name">English</span>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a href="#" class="language-item">-->
                                                <!--        <img src="./images/flags/spanish.png" alt="" class="language-flag">-->
                                                <!--        <span class="language-name">Español</span>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a href="#" class="language-item">-->
                                                <!--        <img src="./images/flags/french.png" alt="" class="language-flag">-->
                                                <!--        <span class="language-name">Français</span>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a href="#" class="language-item">-->
                                                <!--        <img src="./images/flags/turkey.png" alt="" class="language-flag">-->
                                                <!--        <span class="language-name">Türkçe</span>-->
                                                <!--    </a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"></div>
                                                    <div class="user-name dropdown-indicator"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span></span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"></span>
                                                        <span class="sub-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <!-- <li><a href="crypto1-user-profile-regular"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li> -->
                                                    <li><a href="crypto1-user-profile-regular"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <!-- <li><a href="crypto1-user-profile-activity"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('/logout') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <!-- <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>nk-notification -->
                                            <!-- </div> nk-dropdown-body -->
                                            <!-- <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>  -->
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->

@yield('content')





   
   <style>
       a.dropdown-toggle.dropdown-indicator.has-indicator.nav-link{
           visibility:hidden;
       }
   </style>


   
<script src="{{ asset('nk1/assets/js/charts/gd-default.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('nk1/assets/js/libs/jqvmap.js?ver=2.9.1') }}"></script>
    <!-- JavaScript -->
    <script src="{{ asset('nk1/assets/js/bundle.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('nk1/assets/js/scripts.js?ver=2.9.1') }}"></script>
    
    <script src="{{ asset('nk1/assets/js/charts/gd-default.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('nk1/assets/js/libs/jqvmap.js?ver=2.9.1') }}"></script>
    <!-- JavaScript -->
   
</body>

</html>



