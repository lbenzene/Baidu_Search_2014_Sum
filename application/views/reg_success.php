        <!--  main  -->

    <div class="row" id="head">

        <div class="jumbotron">
            <br/>
            <div class="container" >
                <h1>线上大赛注册</h1>
                <br />
            </div>
        </div>
    </div>

    <div class="row main">
        <div class="container">
            <p>注册成功</p>
            <p>欢迎您，{{user.last_name}}</p>
            <p><b id="timing">5</b>秒后返回首页</p>
        </div>
    </div>

    <script type="text/javascript">

        var t1 = setTimeout("document.getElementByID('timing').innerHTML='4';",1000);
        var t2 = setTimeout("document.getElementByID('timing').innerHTML='3';",2000);
        var t3 = setTimeout("document.getElementByID('timing').innerHTML='2';",3000);
        var t4 = setTimeout("document.getElementByID('timing').innerHTML='1';",4000);

        var t5 = setTimeout("window.location.assign(\"{% url 'home' %}\");",5000);

    </script>
        <!--  /main  -->