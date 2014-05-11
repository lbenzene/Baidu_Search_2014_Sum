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
                    <a href="#online" class="btn white_btn">线上大赛</a>
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

                <?php foreach ($select as $keys => $question): ?>
                <form>
                    <p class="problem left"><?= $keys+1?>.<?=$question['problem']?></p>
                    <div class="col-md-3 single_choice_answer">
                        <input id="qst<?= $keys?>_answerA" type="radio" name="iCheck"/>
                        <label for="qst<?= $keys?>_answerA">A. <?=$question['s_a']?></label>
                    </div>
                    <div class="col-md-3 single_choice_answer">
                        <input id="qst<?= $keys?>_answerB" type="radio" name="iCheck"/>
                        <label for="qst<?= $keys?>_answerB">B. <?=$question['s_b']?></label>
                    </div>
                    <div class="col-md-3 single_choice_answer">
                        <input id="qst<?= $keys?>_answerC" type="radio" name="iCheck"/>
                        <label for="qst<?= $keys?>_answerC">C. <?=$question['s_c']?></label>
                    </div>  
                    <div class="col-md-3 single_choice_answer">
                        <input id="qst<?= $keys?>_answerD" type="radio" name="iCheck"/>
                        <label for="qst<?= $keys?>_answerD">D. <?=$question['s_d']?></label>
                    </div>
                    <br />
                </form>
                <?php endforeach; ?>

                <br />
                <h2 class="problem left">二、填空题</h2>

                <?php foreach ($blank as $keys => $question): ?>
                <div>
                <p class="problem left"><?= $keys+1?>.<?=$question['problem']?></p>
                <input name="answer<?= $keys?>" type="text" 
                    class="form-control" />
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