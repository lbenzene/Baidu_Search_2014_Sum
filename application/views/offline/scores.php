
        <!--  main  -->

    <div class="row" id="head">

        <div class="jumbotron">
            <br/>
            <div class="container" >
                <h1>百度校园推广搜索大赛</h1>
                <h3>—线下答题网站—</h3>
                <h3>在这里你可以尽情展现你自己的答案</h3>
                <br />
                <p class="center">
                    <a href="<?=site_url('offline_question/index')?>" class="btn white_btn">线下大赛首页</a>
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
                    <th>帐号</th>
                    <th>得分</th>
                    <th>用时</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($rank as $key => $user_scores):?>
                    <tr <?php if (isset($login_offline)) if ($user_scores['username'] == $username_offline) echo 'class="active" id="mine"';?>>
                        <td style="width:15%"><?=$key+1?></td>
                        <td style="width:30%"><?=$user_scores['username']?></td>
                        <td style="width:25%"><?=$user_scores['score_offline']?></td>
                        <td style="width:30%"><?php
                            $time = $user_scores['time_sum'];
                            $hours = (int)($time / 3600);
                            $minutes = (int)(($time - $hours*3600) / 60);
                            $seconds = $time - $hours*3600 - $minutes*60;
                            echo "$hours:$minutes:$seconds"?>
                        </td>                         
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
                
            <br>

        </div>
    </div>

    	<!-- /main -->