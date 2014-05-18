<!--
|-百度校园推广搜索大赛-
|主办方：浙江大学企业俱乐部联合会百度俱乐部
|合作方：浙江大学学生博雅国学社
|Copyright © 2014 ZJU Baidu Club. All Rights Reserved
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
<link rel="shortcut icon" href="<?=base_url('img/shortcut.ico')?>">
<link rel="stylesheet" href="<?=base_url('css/baidu.css')?>" >

<style type="text/css">

label.form_label{
    display: block;
    position: absolute;
    margin-top: 5px;
    margin-left: 6px;
    width: 0;
    height: 24px;
    overflow: hidden;
    padding: 0 0 0 24px;
    background: url("<?=base_url('img/form_icon.png')?>") no-repeat;
    z-index: 20;
}

label.search_label{
    display: block;
    position: absolute;
    margin-top: 2px;
    margin-left: 4px;
    width: 0;
    height: 20px;
    overflow: hidden;
    padding: 0 0 0 24px;
    background: url("<?=base_url('img/search.png')?>") no-repeat;
    z-index: 20;
}

label.form_label_phone{
    background-position: 0 0;
}
label.form_label_phone_error{
    background-position: 0 -48px;
}
label.form_label_user{
    background-position: 0 -72px;
}
label.form_label_user_error{
    background-position: 0 -120px;
}
label.form_label_password{
    background-position: 0 -144px;
}
label.form_label_password_error{
    background-position: 0 -192px;
}
label.form_label_id{
    background-position: 0 -216px;
}
label.form_label_id_error{
    background-position: 0 -264px;
}

</style>

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
            <li>
                <form action="http://www.baidu.com/s" class="header_search" target="_blank" method="get">
                    <label class="search_label">搜索</label><input name="wd" type="text" maxlength="20" />
                </form>
            </li>

            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">其他<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="disabled"><a>关于</a></li>
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