<!DOCTYPE html>
<HTML lang="ko">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lizzie">
    <meta name="description" content="laravel main page">
    <meta name="keywords" content="admin,laravel, study">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>main</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <!-- ajax 라이브러리 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
</head>
<body>
<!-- header top bar -->
    <header class="topbar">
        <nav class="navbar navbar-fixed-top">
            <div class="fluid-container">
                <div class="navbar-header pull-left">
                    <button id="slide_menu_btn" type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand header-title" href="#">Hangry Buddy</a>
                </div>
                <!-- <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>              
            </div>  -->
                <ul class="quickbtn pull-right">
                    <li class="notice">
                        <a id="notice_btn">
                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                            <span class="badge">4</span>
                        </a>
                        <!-- notice section -->
                       <!--  <ul class="top_notice" data-value="off">
                            <ul>
                                <li>
                                    <li class="notice_title">Today</li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </li>
                                <li>
                                    <li class="notice_title">Previous</li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification">
                                        <a href="#">
                                            <div class="notice_txt">
                                                <p><b>Alan Grey</b> uploaded new theme</p><small>7 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </li>
                            </ul>
                        </ul> -->
                        <!-- notice section /-->
                    </li>
                    <li>
                        <a class="cd-panel-close" value="View Menu" id="quickbooking_btn" />
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </nav>
    </header>
    <!-- header top bar /-->
    <!-- left menu side -->
    <aside class="left_aside" id="accordion" data-value="on">
        <div class="profile">
            <img class="circle" alt="" src="images/profile-image.png">
            <a class="link-down" href="">
                <p>David Doe</p>
                <p>david@gmail.com
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </p>
            </a>
        </div>
        <div class="clearfix"> </div>
        <div id="MainMenu">
            <div class="panel left_menu  ">
                <a class="accordion-toggle navtitle" data-toggle="collapse" data-parent="#MainMenu" href="#submenu1">
                    <span class="glyphicon glyphicon-star-empty left_icons"></span> a menu
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <ul id="submenu1" class="collapse submenu ">
                    <li>
                        <a href="">sub</a>
                    </li>
                    <li>
                        <a href="">sub</a>
                    </li>
                </ul>
            </div>
            <div class="panel left_menu">
                <a class="accordion-toggle navtitle" data-toggle="collapse" data-parent="#MainMenu" href="#submenu2">
                    <span class="glyphicon glyphicon-star-empty left_icons"></span> a menu
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <ul id="submenu2" class="collapse submenu ">
                    <li>
                        <a href="">sub</a>
                    </li>
                    <li>
                        <a href="">sub</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <!-- left menu side /-->
    <!-- contents -->
    <section class="contents dashboard">
    </section>
    <!-- contents /-->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
</html>