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
        <!-- 答题页面 -->
    <div class="row">
        <div class="container main">
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
        <!--  /main  -->