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
                
                <form action="<?=site_url('offline_question/check_answer/$mark')?>">
                    <h3 class="problem left">单选题:</h3>
                    <?php foreach ($select as $keys => $question): ?>
                    <form>
                        <p class="problem left"><?= $keys+1?>.<?=$question['problem']?></p>
                        <div class="col-md-3 single_choice_answer">
                            <input id="qst<?= $keys?>_answerA" type="radio" name="s_a_<?= $keys?>"/>
                            <label for="qst<?= $keys?>_answerA"><?=$question['s_a']?></label>
                        </div>
                        <div class="col-md-3 single_choice_answer">
                            <input id="qst<?= $keys?>_answerB" type="radio" name="s_b_<?= $keys?>"/>
                            <label for="qst<?= $keys?>_answerB"><?=$question['s_b']?></label>
                        </div>
                        <div class="col-md-3 single_choice_answer">
                            <input id="qst<?= $keys?>_answerC" type="radio" name="s_c_<?= $keys?>"/>
                            <label for="qst<?= $keys?>_answerC"><?=$question['s_c']?></label>
                        </div>
                        <div class="col-md-3 single_choice_answer">
                            <input id="qst<?= $keys?>_answerD" type="radio" name="s_d_<?= $keys?>"/>
                            <label for="qst<?= $keys?>_answerD"><?=$question['s_d']?></label>
                        </div>
                        <br />
                    </form>
                    <?php endforeach; ?>

                    <br />
                    <h3 class="problem left">填空题:</h3>

                    <?php foreach ($blank as $keys => $question): ?>
                    <div>
                        <p class="problem left"><?= $keys+1?>.<?=$question['problem']?></p>
                        <input name="answer_<?= $keys?>" type="text" class="form-control" />
                        <br />
                    </div>
                    <?php endforeach; ?>

                    <br />
                    <p>恭喜你已经回答玩了</p>
                    <input type="submit" value="提交" class="btn btn-success" />
                </form>
            </div>


        </div>

    </div>
        <!--  /main  -->