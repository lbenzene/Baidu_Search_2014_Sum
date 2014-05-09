<?php #test 
//setcookie("user", "Alex"/*$username*/, time()+3600*12)
?>


<!--
*************************************************
*                百度搜索大赛专用
*                      ~~~
*
*************************************************
-->

<!DOCTYPE HTML>
    <!--  header  -->
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8" />
<title>搜索大赛</title> 

<link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?> ">
<link rel="stylesheet" href="<?=base_url('css/square/grey.css')?>" >
<link rel="shortcut icon" href="<?=base_url('img/shortcut.jpg')?>">
<link rel="stylesheet" href="<?=base_url('css/baidu.css')?>" >

</style>

</head>

<body>

        <!-- 顶部标题栏  -->


<header class="navbar navbar-inverse navbar-fixed-top" role="banner" data-target=".navbar" data-offset=40>
    <div class="container">


    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?=site_url()?>" class="navbar-brand">百度菁英俱乐部</a>
    </div>


    <nav class="collapse navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
            <li title="首页">
                <a href="<?=site_url('online_question/index')?>">线上</a>
            </li>
            <li title="答题">
                <a href="<?= isset($login)
                            ?site_url('online_question/start')
                            :site_url('online_question/login')?>">开始答题</a>
            </li>
            <li title="成绩">
                <a href="<?=site_url('online_question/scores')?>">查看成绩</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right nav-pills">
            <?php if ( isset($login) ) { ?>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href=""><?=$username?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=site_url('online_question/scores')?>">查看成绩</a></li>
                    <li><a href="#">啦啦啦啦</a></li>
                    <li class="divider"></li>
                    <li id="exit"><a href="<?=site_url('online_question/exit_login')?>">退出</a></li>
                </ul>
            </li>
            <?php } else { ?>
                <li title="登录">
                    <a href="<?=site_url('online_question/login')?>">登录</a>
                </li>            
            <?php } ?>
        </ul>
    </nav>


    </div>
</header>

        <!-- /顶部标题栏  -->
