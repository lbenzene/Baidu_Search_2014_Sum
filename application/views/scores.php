<?php //test vars
$user = array(
    '1' => array(
                'username' => 'test1',
                'scores' => '100'),
    '2' => array(
                'username' => 'test2',
                'scores' => '99.0')
);

?>

    <!-- main -->
    <div class="col-xs-10 main" id="main">

        <table class="table table-hover table-bordered">
            <thead>
                <th>排名</th>
                <th>名字</th>
                <th>得分</th>
            </thead>
            <?php #user会改变
            foreach ($user as $key => $user_scores):?>
            <tr <?php if (isset($login)) if ($user_scores['username'] === $username) echo 'class="active"';?>>
                <td style="width:10%"><?=$key?></td>
                <td><?=$user_scores['username']?></td>
                <td><?=$user_scores['scores']?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <br>
            
        <br>

    </div>
</div>

<br />
<br />
	<!-- /main -->