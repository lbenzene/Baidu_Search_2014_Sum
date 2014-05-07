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

    <!-- main -->
    <div class="col-xs-10 main" id="main">

        <table class="table table-hover table-bordered">
            <thead>
                <th>排名</th>
                <th>名字</th>
                <th>得分</th>
                <th>用时</th>
            </thead>
            <?php #user会改变
            foreach ($user as $key => $user_scores):?>
            <tr <?php if (isset($login)) if ($user_scores['username'] === $username) echo 'class="active"';?>>
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