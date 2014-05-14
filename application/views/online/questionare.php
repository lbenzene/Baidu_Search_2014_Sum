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
        <!-- 答题页面 -->
    <div class="row light_grey">
        <div class="container main">
            <br />
            <form action="<?=site_url('online_question/check_answer/'.$mark)?>" method="post">
                <!-- 单选 -->
                <h3 class="problem">单选题:</h3>
                <?php foreach ($select as $keys => $question): ?>
                <p class="problem"><?=$question['id']?>.<?=$question['problem']?></p>
                <div class="row" data-toggle="buttons">
                    <label class="btn single_answer">
                        <input id="qst<?=$question['id']?>_answerA" type="radio" 
                            name="s_answer_<?=$question['id']?>" value="A" />A.&nbsp;<?=$question['s_a']?>
                    </label>
                    <label class="btn single_answer">
                        <input id="qst<?=$question['id']?>_answerB" type="radio" 
                            name="s_answer_<?=$question['id']?>" value="B" />B.&nbsp;<?=$question['s_b']?>
                    </label>
                    <label class="btn single_answer">
                        <input id="qst<?=$question['id']?>_answerC" type="radio" 
                            name="s_answer_<?=$question['id']?>" value="C" />C.&nbsp;<?=$question['s_c']?>
                    </label>
                    <label class="btn single_answer">
                        <input id="qst<?=$question['id']?>_answerD" type="radio" 
                            name="s_answer_<?=$question['id']?>" value="D" />D.&nbsp;<?=$question['s_d']?>
                    </label>
                </div>
                <br />
                <?php endforeach; ?>

                <br />
                <!-- 填空 -->
                <h3 class="problem left">填空题:</h3>
                <?php foreach ($blank as $keys => $question): ?>
                <div>
                <p class="problem left"><?=$question['id']?>.<?=$question['problem']?></p>
                <input name="b_answer_<?=$question['id']?>" type="text" class="form-control" />
                <br />
                </div>
                <?php endforeach; ?>

                <br />
                <p>恭喜你已经回答玩了</p>
                <input type="submit" value="提交答案" class="btn btn-success" />
            </form>
            <br />
        </div>

    </div>
        <!--  /main  -->

        <!--  bottom_info part  -->
    <div class="bottom_info">
        <div class="bottom_logo"><a href="<?=site_url('offline_question/index')?>"></a></div>
        <div class="bottom_brand">Baidu Club</div>


        <div class="timing" >本套题组所用时间 <b id="time">0：00：00</b></div>
    </div>

    <script type="text/javascript">

        var start_time = <?php echo $time;?>;
        var local_time = <?php echo time();?>;
        var time = local_time - start_time;
        var hours = parseInt(time / 3600);
        var minutes = parseInt((time - hours*3600) / 60);
        var seconds = time - hours*3600 - minutes*60;
        function checkTime(i)
        {
            if (i<10) 
                {i="0" + i}
            return i
        }
        function timedCount()
        {
            document.getElementById('time').innerHTML = hours+"："+checkTime(minutes)+"："+checkTime(seconds);
            seconds++;
            if ( seconds>=60 ) 
            {
                seconds = 0;
                minutes++;
            }
            t = setTimeout("timedCount()",1000);
        }

    </script>
