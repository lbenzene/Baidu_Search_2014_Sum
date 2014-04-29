
<div class="container"> 
    <div class="col-md-2">

        <div class="hidden-print" role="complementary">
            <ul class="nav">
                <li class="side_bar">
                    <a href="<?=site_url()?>">大赛首页</a>
                </li>
                <li class="side_bar">
                    <a href="<?=site_url('search_competition/rules')?>">大赛规则</a>
                </li>
                <li class="side_bar">
                    <a href="<?=site_url('search_competition/register')?>">线上注册</a>
                </li>
                <li class="side_bar">
                    <a href="<?=site_url('search_competition/signup')?>">线下报名</a>
                </li>
                <li class="side_bar">
                    <a href="<?= isset($login)
                                ? site_url('search_competition/competition') 
                                : site_url('search_competition/login')?>">开始答题</a>
                </li>
                              
            </ul>
        </div>
    </div>        
