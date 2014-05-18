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
    
    <div class="row light_grey">
        <div class="container center">
            <h1>大赛还没有开始呢！</h1>
            <h3>21：00大赛将准时开始，敬请期待。</h3>
            <h3><b id="timing">5</b>秒后<a href="javascript:void(0)" onclick="window.close()">关闭窗口</a></h3>
        </div>        
    </div>
    <script type="text/javascript">

        var t1 = setTimeout("document.getElementById('timing').innerHTML='4';",1000);
        var t2 = setTimeout("document.getElementById('timing').innerHTML='3';",2000);
        var t3 = setTimeout("document.getElementById('timing').innerHTML='2';",3000);
        var t4 = setTimeout("document.getElementById('timing').innerHTML='1';",4000);

        var t5 = setTimeout("window.close();",5000);

    </script>


        <!--  /main  -->