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
            <p>退出成功</p>
            <p></p>
            <p id="timing">5</p>
            <p>秒后返回首页</p>
        </div>
     
    </div>

    <br />
    <br />
    <script type="text/javascript">

        // window.location.assign('<?=site_url()?>');
        var t1 = setTimeout("document.getElementByID('timing').innerHTML='4';",1000);
        var t2 = setTimeout("document.getElementByID('timing').innerHTML='3';",2000);
        var t3 = setTimeout("document.getElementByID('timing').innerHTML='2';",3000);
        var t4 = setTimeout("document.getElementByID('timing').innerHTML='1';",4000);

        var t5 = setTimeout("window.location.assign('<?=site_url(offline_question/index)?>');",5000);

    </script>
        <!--  /main  -->