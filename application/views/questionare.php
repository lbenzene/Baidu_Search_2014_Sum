<?php
//test var
$choice_qst = array(
    "1" => array(  
            "qst_content" => "AAAA",
            "qst_answerA" => "choose me",
            "qst_answerB" => "choose A",
            "qst_answerC" => "choose me",
            "qst_answerD" => "not me",
            "qst_select" => "A",
    ),

    "2" => array(  
            "qst_content" => "if (condition) {
                # code...
            }<br />atcasesort(
                so\0\.\'\;\natcasesort(
                    )')",
            "qst_answerA" => "choose me",
            "qst_answerB" => "choose A",
            "qst_answerC" => "choose me",
            "qst_answerD" => "not me",
             "qst_select" => "B",           
    )
);

$filling_qst = array(
    "1" => array(
        "qst_content" => "特特姐",
        "qst_answer" => "请回答"
    ),

    "2" => array(
        "qst_content" => "MISS 特特？",
        "qst_answer" => "请回答"
    ),

);
?>


<!--
*************************************************
*                   答题页面
*                               
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
<style type="text/css">


    h1{
        text-align: center;
        color:  #232323;

    }

    body{
        background-color:  #232323;
        padding-bottom: 40px;
        font-family: "微软雅黑", "Lato", Helvetica, Arial, sans-serif;
    }

    div.main{
        background-color:   #EBEBEB;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;
    }

    div.container{
        font-family:  '微软雅黑';
    }

    div.p_left{
        width: 80%;
        position: relative;
        float: left;
        margin-bottom: 40px;
        margin-left: 5%;
    }

    div.p_right{
        width: 15%;
        position: relative;
        float: left;
        padding: 10px 10px;
        text-align: center;
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
    }

    .right{
        text-align: right;
    }

    .note {
        padding: 18px 20px;
        text-decoration:none;
        background: #ffc;
        display:block;
        width: 80%;        
        box-shadow: 5px 5px 7px rgba(33,33,33,.7);
        -webkit-transform: rotate(-6deg);
           -moz-transform: rotate(-6deg);
            -ms-transform: rotate(-6deg);
                transform: rotate(-6deg);
        font-size: 18px;
        text-align: center;
        margin-top: 40px;
        overflow: hidden;
    }

    .note h3 {
      font-size: 32px;
      margin: 0;
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
    <!--  /header  -->

    <!--  main  -->
<div class="container"> 

<hr />


    <!-- 答题页面 -->

    <div class="main col-md-12">
        <div class="p_left">
            <br />
                <!-- 单选 -->
            <h2 class="problem left">一、单选题</h2>

            <?php foreach ($choice_qst as $keys => $question): ?>
            <form>
                <p class="problem left"><?= $keys?>.<?=$question['qst_content']?></p>
                <div class="col-md-3 single_choice_answer">
                    <input id="qst<?= $keys?>_answerA" type="radio" name="iCheck" <?= 'A'===$question['qst_select']? 'checked': ''?>/>
                    <label for="qst<?= $keys?>_answerA">A. <?=$question['qst_answerA']?></label>
                </div>
                <div class="col-md-3 single_choice_answer">
                    <input id="qst<?= $keys?>_answerB" type="radio" name="iCheck" <?= 'B'===$question['qst_select']? 'checked': ''?>/>
                    <label for="qst<?= $keys?>_answerB">B. <?=$question['qst_answerB']?></label>
                </div>
                <div class="col-md-3 single_choice_answer">
                    <input id="qst<?= $keys?>_answerC" type="radio" name="iCheck" <?= 'C'===$question['qst_select']? 'checked': ''?>/>
                    <label for="qst<?= $keys?>_answerC">C. <?=$question['qst_answerC']?></label>
                </div>
                <div class="col-md-3 single_choice_answer">
                    <input id="qst<?= $keys?>_answerD" type="radio" name="iCheck" <?= 'D'===$question['qst_select']? 'checked': ''?>/>
                    <label for="qst<?= $keys?>_answerD">D. <?=$question['qst_answerD']?></label>
                </div>
                <br />
            </form>
            <?php endforeach; ?>

            <br />
            <h2 class="problem left">二、填空题</h2>

            <?php foreach ($filling_qst as $keys => $question): ?>
            <div>
            <p class="problem left"><?= $keys?>.<?=$question['qst_content']?></p>
            <input name="answer<?= $keys?>" type="text" 
                class="form-control" value="<?=$question['qst_answer']?>" />
            <br />
            </div>
            <?php endforeach; ?>

            <br />
            <p>恭喜你已经回答玩了</p>
            <input type="submit" value="提交" class="btn btn-success" />
        </div>


        <div class="p_right pinned">
            <div class="note">
            <h3>Time</h3>
            <p>56:32</p>

            </div>
        </div>
    </div>

</div>

<br />
<br />

    <!--  /main  -->