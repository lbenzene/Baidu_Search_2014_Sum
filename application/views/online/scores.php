        <!--  main  -->

    <div class="row" id="head">

        <div class="jumbotron">
            <br/>
            <div class="container" >
                <h1>百度校园推广搜索大赛</h1>
                <h3>—线上答题网站—</h3>
                <h3>在这里你可以尽情展现你自己的答案</h3>
                <br />
                <p class="center">
                    <a href="<?=site_url('online_question/index')?>" class="btn white_btn">线上大赛首页</a>
                </p>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="container main">
            <p><a href="#mine">我的成绩</a></p>
            <table class="table table-hover table-bordered">
                <thead>
                    <th>排名</th>
                    <th>学号</th>
                    <th>得分</th>
                    <th>用时</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($rank as $key => $user_scores):?>
                    <tr <?php if (isset($login_online)) if ($user_scores['username'] == $username_online) echo 'class="active" id="mine"';?>>
                        <td style="width:10%"><?=$key+1?></td>
                        <td><?=$user_scores['username']?></td>
                        <td><?=$user_scores['score_online']?></td>
                        <td><?=$user_scores['time_sum']?></td>          
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
                
            <br>

        </div>
    </div>

        <!-- /main -->