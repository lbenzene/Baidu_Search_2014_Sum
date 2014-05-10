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

</head>

<body>

        <!-- 顶部标题栏  -->


<header class="navbar navbar-inverse navbar-fixed-top" role="banner" data-target=".navbar" data-offset=40>
    <div class="container">


    <div class="navbar-header">
        <button class="navbar-default navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
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
                <a href="<?=site_url()?>">首页</a>
            </li>
            <li title="规则">
                <a href="<?=site_url('search_competition/rules')?>">规则</a>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">报名<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=site_url('search_competition/register')?>">线上大赛报名</a></li>
                    <li><a href="<?=site_url('search_competition/signup')?>">线下大赛报名</a></li>
                </ul>
            </li>
            <li title="答题">
                <a href="<?=site_url('search_competition/competition')?>">答题</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right nav-pills">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">其他<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">关于</a></li>
                    <li class="divider"></li>
                    <li><a href="#">郭神</a></li>
                </ul>
            </li> 

        </ul>
    </nav>


    </div>
</header>

        <!-- /顶部标题栏  -->




    <!--  /header  -->