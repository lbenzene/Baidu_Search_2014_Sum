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
<!-- <link rel="stylesheet" href="<?=base_url('css/flat-ui.css')?>" > -->
<style type="text/css">

    footer > p{
        color: #ebebeb;
    }


    h1{
        text-align: center;
        color:  #232323;

    }

    body{
        background-color:  #232323;
        padding-bottom: 40px;
        font-family: "微软雅黑", "Lato", Helvetica, Arial, sans-serif;
    }

    div.head{
         background-color:   #EBEBEB;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;      
    }

    div.main{
        background-color:   #EBEBEB;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;
        padding: 30px 20px;
    }

    div#main > div{
    width: 100%;
    padding: 20px 10px;
    border: 0;
    border-top: 1px solid #aaa;
    border-bottom: 1px solid #aaa;
    }

    div.container{
        font-family:  '微软雅黑';
    }

    div.single_choice_answer{
        display: block;
        -webkit-border-radius: 2px;
           -moz-border-radius: 2px;
                border-radius: 2px;
        border-width:  0;
        background-color:  #EBEBEB;
        margin:  2px auto;
    }


    .left{
        text-align: left;
    }

    .center{
        text-align: center;
        margin-left: 0 auto;
        margin-right: 0 auto;
        vertical-align: middle;
    }

    .right{
        text-align: right;
    }

    li.side_bar{
        /* lbenzene */
        border-width: 0px;
        font-size: 1.2em;
        padding-top:  1em;
        font-family: '微软雅黑';
        text-align: center;
    }

    li.side_bar > a{
        color: #EBEBEB;
        padding: 10px;
        -webkit-border-radius: 2px;
           -moz-border-radius: 2px;
                border-radius: 2px;

        border-style: solid;
        border-width: 0px;

    }

    li.side_bar > a:hover,
    li.side_bar > a:focus {
      text-decoration: none;
      background-color: #EBEBEB;
      color: #232323;
    }

    div.login_form{
        padding: 30px 10px;
    }
    div.login{
        padding: 40px;
        margin: 10px;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;   
                border-radius: 5px;
        background-color: #ebebeb;
    }
    div.login_group{

    }
    label.login_label{
        display: block;
        position: absolute;
        margin-top: 4px;
        margin-left: 6px;
        width: 0;
        height: 24px;
        overflow: hidden;
        padding: 0 0 0 24px;
        background: url("<?=base_url('img/login_icon.png')?>") no-repeat;
        z-index: 20;
    }

    label.login_label_username{
        background-position: 0 -68px;
    }

    label.login_label_password{
        background-position: 0 -147px;
    }

    div.login_group > p > input.form-control{
        width: 100%;
    }


    div.login_right{
        height: 100%;
        vertical-align: middle;
    }
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
                <a href="<?=site_url()?>">首页</a>
            </li>
            <li title="规则">
                <a href="<?=site_url('search_competition/rules')?>">规则</a>
            </li>
            <li title="答题">
                <a href="<?= isset($login) 
                                ? site_url('search_competition/competition') 
                                : site_url('search_competition/login')?>">答题</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-pills">
            <?php if ( isset($login) ) { ?>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href=""><?=$username?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">修改资料</a></li>
                    <li><a href="#">啦啦啦啦</a></li>
                    <li class="divider"></li>
                    <li id="exit"><a href="<?=site_url('search_competition/exit_login')?>">退出</a></li>
                </ul>
            </li>
            <?php } else { ?>
                <li title="注册">
                    <a href="<?=site_url('search_competition/register')?>">注册</a>
                </li>
                <li title="登录">
                    <a href="<?=site_url('search_competition/login')?>">登录</a>
                </li>            
            <?php } ?>
<!-- 
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">其他<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">关于</a></li>
                    <li><a href="#">简介</a></li>
                    <li class="divider"></li>
                    <li><a href="#">郭神</a></li>
                </ul>
            </li> 
-->
        </ul>
    </nav>


    </div>
</header>

        <!-- /顶部标题栏  -->

    <br/>
    <br/>
        <br/>
    <br/>


<div class="container"> 
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="head col-xs-10">

            <h1> 大 赛 </h1>
            <br />

        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
<br />
<hr />

    <!--  /header  -->