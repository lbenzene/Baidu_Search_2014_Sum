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
    
    <div class="row">
        <div class="container main">
            <p>登录成功</p>
            <p>欢迎您，<?=$username?></p>
            <p><b id="timing">5</b>秒后返回答题界面</p>
        </div>

    </div>

    <script type="text/javascript">

        // window.location.assign('<?=site_url()?>');
        var t1 = setTimeout("document.getElementById('timing').innerHTML='4';",1000);
        var t2 = setTimeout("document.getElementById('timing').innerHTML='3';",2000);
        var t3 = setTimeout("document.getElementById('timing').innerHTML='2';",3000);
        var t4 = setTimeout("document.getElementById('timing').innerHTML='1';",4000);

        var t5 = setTimeout("window.location.assign('<?=site_url('online_question/start')?>');",5000);

    </script>
        <!--  /main  -->