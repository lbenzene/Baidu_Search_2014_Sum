<?php //test vars
$user = array(
    '1' => array(
                'username' => 'test1',
                'scores' => '100',
                'times' => '600'
                ),
    '2' => array(
                'username' => 'test2',
                'scores' => '99.0',
                'times' => '2456'
                ),
    '3' => array(
                'username' => 'test3',
                'scores' => '0',
                'times' => '0'
                )
);

?>
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
                    <a href="#offline" class="btn white_btn">线下大赛</a>
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
                    <th>名字</th>
                    <th>得分</th>
                    <th>用时</th>
                </thead>
                <?php #user会改变
                foreach ($user as $key => $user_scores):?>
                <tr <?php if (isset($login)) if ($user_scores['username'] === $username_offline) echo 'class="active" id="mine"';?>>
                    <td style="width:10%"><?=$key?></td>
                    <td><?=$user_scores['username']?></td>
                    <td><?=$user_scores['scores']?></td>
                    <td><?=$user_scores['times']?></td>          
                </tr>
                <?php endforeach;?>
            </table>
            <br>
                
            <br>

        </div>
    </div>

    	<!-- /main -->