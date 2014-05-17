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
        <div class="container center">
            <h1>提交成功</h1>
            <h1>本套题组得分：<?php echo $total_score; ?></h1>
            <h3>点击<a href="javascript:void(0)" onclick="close_window()">这里关闭窗口</a></h3>
        </div>

    </div>

    <script type="text/javascript">
        function close_window(){
            window.close();
        }
    </script>
        <!--  /main  -->