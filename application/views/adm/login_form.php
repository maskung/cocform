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
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/all.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/main.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/styles/jquery.news-ticker.css">
     <script src="/assets/admin/script/jquery-1.10.2.min.js"></script>
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
    <script src="/assets/admin/script/jquery.news-ticker.js"></script>
    <script src="/assets/admin/script/jquery.menu.js"></script>
    <script src="/assets/admin/script/pace.min.js"></script>
    <script src="/assets/admin/script/holder.js"></script>
    <script src="/assets/admin/script/responsive-tabs.js"></script>
    <script src="/assets/admin/script/jquery.flot.js"></script>
    <script src="/assets/admin/script/jquery.flot.categories.js"></script>
    <script src="/assets/admin/script/jquery.flot.pie.js"></script>
    <script src="/assets/admin/script/jquery.flot.tooltip.js"></script>
    <script src="/assets/admin/script/jquery.flot.resize.js"></script>
    <script src="/assets/admin/script/jquery.flot.fillbetween.js"></script>
    <script src="/assets/admin/script/jquery.flot.stack.js"></script>
    <script src="/assets/admin/script/jquery.flot.spline.js"></script>
    <script src="/assets/admin/script/zabuto_calendar.min.js"></script>

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
                <a id="logo" href="index" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">DTK AD</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <!--div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welcome to LadyFirst Dashboard</li>
                    </ul>
                </div-->
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <!--li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        
                    </li-->
                    
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

        <!--BEGIN CONTENT-->
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl" style="text-align:center;">
                    <div class="col-lg-4">
                        <div class="col-md-4">
                            <div id="area-chart-spline" style="width: 100%; height: 00px; display: none; "></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">Login Form</div>
                                        <div class="panel-body pan">
                                            <div class="form-body pal">
                                                <?php echo $this->session->flashdata('msg1'); ?>
                                                <?php   $form_attrib = array('class' => 'form-horizontal', 'id' => 'form_members', 'role' => 'form');
                                                echo form_open_multipart('/adm/login',$form_attrib); ?>
                                                <div class="form-group">
                                                    <label for="inputName" class="col-md-3 control-label"> Name</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                    <?php $data = array( 
                                                                        'class' => 'form-control',
                                                                        'name' => 'admin_name', 
                                                                        'id' => 'admin_name', 
                                                                        'placeholder' =>'Username', 
                                                                        'value' =>  set_value('') 
                                                                                    
                                                                    ); 
                                                                    echo form_input($data); 
                                                                    ?>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                    <?php 
                                                                        $data = array( 
                                                                            'class' => 'form-control',
                                                                            'name' => 'admin_password', 
                                                                            'id' => 'admin_password', 
                                                                            'placeholder' =>'Password', 
                                                                            'value' => set_value('admin_password')
                                                                                        
                                                                        ); 
                                                                        echo form_password($data); 
                                                                        
                                                                    ?>
                                                            </div>
                                                        </div>
                                                </div>
                                            <div class="form-actions pal">
                                                <div class="form-group mbn">
                                                    <div class="col-md-offset-3 col-md-6">
                                                     
                                                            <?php 
                                                                $data = array(
                                                                    'name' => 'btn_login',
                                                                    'id' => 'btn_login',
                                                                    'value' => 'Login',
                                                                    'type' => 'submit',
                                                                    'content' => 'login');
                                                                    echo form_button($data);
                                                            ?>
                                                    
                                                    </div>
                                                    <?php
                                                        $string = "</div></div>";

                                                        echo form_close($string);
                                                    ?>
                                                    <?php echo $this->session->flashdata('msg'); ?>
                                                </div>
                                            </div> 
                                            </div>
                                            
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        <!--END CONTENT-->

<!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2017 © DTK-AD CO, LTD.</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
   
    <!--script src="/assets/admin/script/index.js"></script-->

    <script>


$(function () {

    //BEGIN CALENDAR
    $("#my-calendar").zabuto_calendar({
        language: "en"
    });
    //END CALENDAR

    //BEGIN TO-DO-LIST
    $('.todo-list').slimScroll({
        "width": '100%',
        "height": '250px',
        "wheelStep": 5
    });
    $( ".sortable" ).sortable();
    $( ".sortable" ).disableSelection();
    //END TO-DO-LIST

    //BEGIN AREA CHART SPLINE
    var date = ['<?php echo $graph_ig['0']->date_add; ?>','<?php echo $graph_ig['1']->date_add; ?>','<?php echo $graph_ig['2']->date_add; ?>','<?php echo $graph_ig['3']->date_add; ?>'];
    var data_ig = ['<?php echo $graph_ig['0']->sumfollowed; ?>','<?php echo $graph_ig['1']->sumfollowed; ?>','<?php echo $graph_ig['2']->sumfollowed; ?>','<?php echo $graph_ig['3']->sumfollowed; ?>'];
    var data_fb = ['<?php echo $graph_fb['0']->sumlikes; ?>','<?php echo $graph_fb['1']->sumlikes; ?>','<?php echo $graph_fb['2']->sumlikes; ?>','<?php echo $graph_fb['3']->sumlikes; ?>'];
    var d6_1 = [[date[3], data_ig[3]],[date[2], data_ig[2]],[date[1], data_ig[1]],[date[0], data_ig[0]]];
    var d6_2 = [[date[3], data_fb[3]],[date[2], data_fb[2]],[date[1], data_fb[1]],[date[0], data_fb[0]]];
    
    $.plot("#area-chart-spline", [{
        data: d6_1,
        label: "Instagram",
        color: "#ffce54"
    },{
        data: d6_2,
        label: "Facebook",
        color: "#01b6ad"
    }], {
        series: {
            lines: {
                show: !1
            },
            splines: {
                show: !0,
                tension: .4,
                lineWidth: 2,
                fill: .8
            },
            points: {
                show: !0,
                radius: 4
            }
        },
        grid: {
            borderColor: "#fafafa",
            borderWidth: 1,
            hoverable: !0
        },
        tooltip: !0,
        tooltipOpts: {
            content: "%x : %y",
            defaultTheme: true
        },
        xaxis: {
            tickColor: "#fafafa",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#fafafa"
        },
        shadowSize: 0
    });
    //END AREA CHART SPLINE

    //BEGIN INTRO JS
    $(window).load(function() {
        introJs().start();
    });
    //END INTRO JS

    //BEGIN CHAT FORM
    $('.chat-scroller').slimScroll({
        "width": '100%',
        "height": '270px',
        "wheelStep": 5,
        "scrollTo": "100px"
    });
    $('.chat-form input#input-chat').on("keypress", function(e){

        var $obj = $(this);
        var $me = $obj.parents('.portlet-body').find('ul.chats');
        
        if (e.which == 13) {
            var content = $obj.val();
            
            if (content !== "") {
                $me.addClass(content);
                var d = new Date();
                var h = d.getHours();
                var m = d.getMinutes();
                if (m < 10) m = "0" + m;
                $obj.val(""); // CLEAR TEXT ON TEXTAREA
                
                var element = ""; 
                element += "<li class='in'>";
                element += "<img class='avatar' src='https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg'>";
                element += "<div class='message'>";
                element += "<span class='chat-arrow'></span>";
                element += "<a class='chat-name' href='#'>Admin &nbsp;</a>";
                element += "<span class='chat-datetime'>at July 6, 2014" + h + ":" + m + "</span>";
                element += "<span class='chat-body'>" + content + "</span>";
                element += "</div>";
                element += "</li>";
                
                $me.append(element);
                var height = 0;
                $me.find('li').each(function(i, value){
                    height += parseInt($(this).height());
                });

                height += '';
                //alert(height);
                $('.chat-scroller').slimScroll({
                    scrollTo: height
                });
            }
        }
    });
    $('.chat-form span#btn-chat').on("click", function(e){

        e.preventDefault();
        var $obj = $(this).parents('.chat-form').find('input#input-chat');
        var $me = $obj.parents('.portlet-body').find('ul.chats');
        var content = $obj.val();

        if (content !== "") {
            $me.addClass(content);
            var d = new Date();
            var h = d.getHours();
            var m = d.getMinutes();
            if (m < 10) m = "0" + m;
            $obj.val(""); // CLEAR TEXT ON TEXTAREA
            
            var element = ""; 
            element += "<li class='in'>";
            element += "<img class='avatar' src='https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg'>";
            element += "<div class='message'>";
            element += "<span class='chat-arrow'></span>";
            element += "<a class='chat-name' href='#'>Admin &nbsp;</a>";
            element += "<span class='chat-datetime'>at July 6, 2014" + h + ":" + m + "</span>";
            element += "<span class='chat-body'>" + content + "</span>";
            element += "</div>";
            element += "</li>";
            
            $me.append(element);
            var height = 0;
            $me.find('li').each(function(i, value){
                height += parseInt($(this).height());
            });
            height += '';

            $('.chat-scroller').slimScroll({
                scrollTo: height
            });
        }
        
    });
    //END CHAT FORM

    //BEGIN COUNTER FOR SUMMARY BOX
    counterNum($(".visit h4 span:first-child"), <?php echo $inf_amount-10; ?>, <?php echo $inf_amount; ?>, 1, 500);
    counterNum($(".profit h4 span:first-child"), <?php echo $fb_amount-10; ?>, <?php echo $fb_amount; ?>, 1, <?php echo $inf_amount; ?>);
    counterNum($(".income h4 span:first-child"), <?php echo $ig_amount-10; ?>, <?php echo $ig_amount; ?>, 1, <?php echo $inf_amount; ?>);
    counterNum($(".task h4 span:first-child"), <?php echo $fbig_amount-10; ?>, <?php echo $fbig_amount; ?> , 1, <?php echo $inf_amount; ?>);
    function counterNum(obj, start, end, step, duration) {
        $(obj).html(start);
        setInterval(function(){
            var val = Number($(obj).html());
            if (val < end) {
                $(obj).html(val+step);
            } else {
                clearInterval();
            }
        },duration);
    }
    //END COUNTER FOR SUMMARY BOX

});


    </script>

    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="/assets/admin/script/highcharts.js"></script>
    <script src="/assets/admin/script/data.js"></script>
    <script src="/assets/admin/script/drilldown.js"></script>
    <script src="/assets/admin/script/exporting.js"></script>
    <script src="/assets/admin/script/highcharts-more.js"></script>
    <script src="/assets/admin/script/charts-highchart-more.js"></script>
    <!--script src="/assets/admin/script/charts-flotchart.js"></script-->
    <!--CORE JAVASCRIPT-->
    <script src="/assets/admin/script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>

