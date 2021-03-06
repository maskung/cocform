<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">

    <!--Loading bootstrap css-->
    <!--link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"-->
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/googlefont1.css">
    <!--link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300"-->
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/googlefontapi.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/all.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/main.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/pace.css">
    <!--link type="text/css" rel="stylesheet" href="/assets/admin/styles/jquery.news-ticker.css"-->
    <!--link type="text/css" rel="stylesheet" href="/assets/admin/styles/jplist-custom.css"-->
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/jquery.datepick.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/bootstrap-chosen.css">

    <!-- custom style -->
    <?php   if (isset($header_styles)) {
            foreach ($header_styles as $css) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $css; ?>">
    <?php }
     } ?>


    <!--Loading Chart script -->
	<!--script src="/assets/admin/script/jquery-1.10.2.min.js"></script-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/assets/admin/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/admin/script/jquery-ui.js"></script>
    <script src="/assets/admin/script/bootstrap.min.js"></script>
    <script src="/assets/admin/script/bootstrap-hover-dropdown.js"></script>
    <script src="/assets/admin/script/html5shiv.js"></script>
    <script src="/assets/admin/script/respond.min.js"></script>
    <script src="/assets/admin/script/jquery.metisMenu.js"></script>
    <script src="/assets/admin/script/jquery.slimscroll.js"></script>
    <script src="/assets/admin/script/jquery.cookie.js"></script>
    <script src="/assets/admin/script/icheck.min.js"></script>
    <script src="/assets/admin/script/custom.min.js"></script>
    <!--script src="/assets/admin/script/jquery.news-ticker.js"></script-->
    <script src="/assets/admin/script/jquery.menu.js"></script>
    <script src="/assets/admin/script/pace.min.js"></script>
    <script src="/assets/admin/script/holder.js"></script>
    <script src="/assets/admin/script/responsive-tabs.js"></script>
    <!--script src="/assets/admin/script/jquery.flot.js"></script>
    <script src="/assets/admin/script/jquery.flot.categories.js"></script>
    <script src="/assets/admin/script/jquery.flot.pie.js"></script>
    <script src="/assets/admin/script/jquery.flot.tooltip.js"></script>
    <script src="/assets/admin/script/jquery.flot.resize.js"></script>
    <script src="/assets/admin/script/jquery.flot.fillbetween.js"></script>
    <script src="/assets/admin/script/jquery.flot.stack.js"></script>
    <script src="/assets/admin/script/jquery.flot.spline.js"></script-->
    <script src="/assets/admin/script/zabuto_calendar.min.js"></script>
    <!--script src="/assets/admin/script/jquery.cleditor.min.js"></script-->
    <script src="/assets/admin/script/ckeditor/ckeditor.js"></script>
    <!-- date picker -->
    <script src="/assets/admin/script/jquery.plugin.min.js"></script>
    <script src="/assets/admin/script/jquery.datepick.min.js"></script>
    <!-- bootsrap chosen tag select word -->
    <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>

    <!-- custom script -->
    <?php   if (isset($header_scripts)) {
            foreach ($header_scripts as $script) { ?>
<script src="<?php echo $script; ?>"></script>
    <?php }
     } ?>

    <!--link rel="stylesheet" href="/assets/admin/styles/pesticide.css"--> <!-- uncomment it if you want to debug cassade and div -->
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">DTK AD Blog</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                <form id="topbar-search" action="/adm/search_keyword" method="post" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><i class="fa fa-search"></i><input type="text" name="search" id="search" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <!--div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welcome to LadyFirst</li>
                    </ul>
                </div-->
                <ul class="nav navbar navbar-top-links navbar-right mbn">

                    <!--li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>

                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>

                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>

                    </li-->
                    <?php  foreach($act_user as $r){ ?>
                    <li class="dropdown topbar-user">
                        <a data-hover="dropdown" href="#" class="dropdown-toggle">
                          <?php if ($r->picture != "") { ?>
                            <img src="/assets/images/img_profile/<?php echo $r->picture; ?>" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">
                          <?php } else { ?>
                            <img src="/assets/images/img_profile/no_img.png" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">
                          <?php } ?>
                              <?php echo $r->admin_name; ?>
                                </span>&nbsp;<span class="caret"></span>

                        </a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="/adm/profile"><i class="fa fa-user"></i>My Profile</a></li>
                            <!--li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li-->
                            <li><a href="/adm/logout"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <a href="/adm/changelang/english"><img style="margin:10px 10px 0 0;" class="img-responsive" src="/assets/images/icon/ukflag.png" width="25" height="25" align="right"></a>
                    <a href="/adm/changelang/thai"><img style="margin:10px 10px 0 0;"class="img-responsive" src="/assets/images/icon/thailandflag.png" width="25" height="25" align="right"></a>
                    <a href="/adm/changelang/japanese"><img style="margin:10px 10px 0 0;"class="img-responsive" src="/assets/images/icon/japanflag.png" width="25" height="25" align="right"></a>
                    <!--li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li-->
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">

                    <div class="clearfix"></div>
                    <li <?php if ($menu_order == 1) echo 'class="active"'; ?>><a href="/dashboard/index"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Dashboard</span></a></li>
                    <li <?php if ($menu_order == 4) echo 'class="active"'; ?>><a href="/adm/addmedia"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                        </i><span class="menu-title">Add Blog</span></a>
                    </li>
                    <li <?php if ($menu_order == 5) echo 'class="active"'; ?>><a href="/adm/listmedia"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">List Blog</span></a>
                    </li>
                    <li <?php if ($menu_order == 10) echo 'class="active"'; ?>><a href="/adm/tagmanage"><i class="fa fa-tag">
                        <div class="icon-bg bg-violet"></div>
                        </i><span class="menu-title">Tag Management</span></a>
                    </li>
                    <li <?php if ($menu_order == 9) echo 'class="active"'; ?>><a href="/adm/viewcontact"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">View Contact</span></a>
                    </li>
                    <li <?php if ($menu_order == 8) echo 'class="active"'; ?>><a href="/adm/setslide"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Slide Picture</span></a>
                    </li>
                    <li <?php if ($menu_order == 11) echo 'class="active"'; ?>><a href="/adm/customer"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Customer Slide Manager</span></a>
                    </li>
                    <li <?php if ($menu_order == 12) echo 'class="active"'; ?>><a href="/adm/customeradd"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Add Customer Slide</span></a>
                    </li>
                    <li <?php if ($menu_order == 13) echo 'class="active"'; ?>><a href="/adm/partner"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Partner Slide Manager</span></a>
                    </li>
                    <li <?php if ($menu_order == 14) echo 'class="active"'; ?>><a href="/adm/partneradd"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Add Partner Slide</span></a>
                    </li>

                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="/assets/admin/images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="/assets/admin/images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <!--div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div-->
                <?php echo $this->breadcrumbs->output(); ?>
                <!--END TITLE & BREADCRUMB PAGE-->
