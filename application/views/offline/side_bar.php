
    <div class="row side_bar"> 
        <div class="col-xs-2">

            <div class="hidden-print" role="complementary">
                <ul class="nav">
                    <li class="side_bar">
                        <a href="<?=site_url('offline_question/index')?>">线下首页</a>
                    </li>
                    <li class="side_bar">
                        <a href="<?=site_url('offline_question/rules')?>">答题规则</a>
                    </li>
                    <li class="side_bar">
                        <a href="<?= isset($login)
                                    ?site_url('offline_question/start')
                                    :site_url('offline_question/login')?>">开始答题</a>
                    </li>
                    <li class="side_bar">
                        <a HREF="<?=site_url('offline_question/scores')?>">查看成绩</a>
                    </li>
                </ul>
            </div>
        </div>        
