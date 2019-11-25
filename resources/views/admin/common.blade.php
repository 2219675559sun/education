<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/app/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/app/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/app/admin/css/animate.css" rel="stylesheet">
    <link href="/app/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <link rel="stylesheet" href="/layui/css/layui.css">
    <!--    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">-->
    <!--    <script src="/bootstrap/jquery.min.js"></script>-->
    <!--    <script src="/bootstrap/bootstrap.min.js"></script>-->
    <script src="/jquery.js"></script>
    <!--    <script src="/gaoliang.js"></script>-->
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">

<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">
                                            @if(empty(session('user_name')))
                                                <a href="{{url('admin/login')}}">登录</a>
                                            @else
                                                {{session('user_name')}}
                                                <a href="{{url('admin/out_session')}}">退出</a>
                                            @endif
                                        </strong>
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element">hAdmin
                    </div>

                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">个人中心</span>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">个人管理 </span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('/admin/last/lecturerIndex')}}">个人信息</a>
                        </li>
                    </ul>
                </li>

                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">课程分类</span>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">课程管理 </span>
{{--                        <span class="label label-warning pull-right">16</span>--}}
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="{{url('admin/add_category')}}">添加课程及分类</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('admin/index_category')}}">分类列表</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('admin/index_course')}}">课程列表</a>
                        </li>
                    </ul>
                </li>
                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">咨讯系统</span>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">咨讯管理 </span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('info/info_add')}}">咨讯添加</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('info/info_list')}}">咨讯列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('info/activity_add')}}">活动添加</a>
                        </li>

                        <li>
                            <a class="J_menuItem" href="{{url('info/activity_list')}}">活动列表</a>
                        </li>
                    </ul>
                </li>

                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">考试系统</span>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">考试管理 </span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('exam/exam_add')}}">考试添加</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('exam/exam_list')}}">考试列表</a>
                        </li>
                    </ul>
                <li class="line dk"></li>

                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">收藏夹</span>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">收藏列表 </span>
                        {{--                        <span class="label label-warning pull-right">16</span>--}}
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="{{url('admin/index_collect')}}">收藏列表</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom" style="color:red">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="m-t-xs">
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/app/admin/img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 是不是只有我死了,你们才不骂爵迹
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/app/admin/img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>二愣子</strong> 呵呵
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row J_mainContent" id="content-main">
            @section('body')

            @show
        </div>
    </div>
    <!--右侧部分结束-->
</div>

<!-- 全局js -->
<script src="/app/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/app/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/app/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/app/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/app/admin/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/app/admin/js/hAdmin.js?v=4.1.0"></script>
{{--<script type="text/javascript" src="/app/admin/js/index.js"></script>--}}

<!-- 第三方插件 -->
{{--<script src="/app/admin/js/plugins/pace/pace.min.js"></script>--}}
<div style="text-align:center;">
    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>

</body>
</html>
<script src="/layui/layui.js"></script>
@section('script')

@show
