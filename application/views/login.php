    <!--  main  -->
    <div class="col-xs-10 main login_form">
        <div class="col-md-6">
            <div class="login">
            <form class="form-horizontal login_form" action="<?=site_url('/search_competition/check_login')?>" 
                method="post" autocomplete="off">
                <div class="login_group">
                    <h3 class="center">登 录</h3>

                    <p>返回错误信息</p>

                    <p>
                        <label for="login_username" id="login_username_label" class="login_label login_label_username">帐号</label>
                        <input name="username" id="login_username" type="text" class="form-control" placeholder="帐号">
                    </p>
                    <br />
                    <p>
                        <label for="login_password" id="login_password_label" class="login_label login_label_password">密码</label>
                        <input name="password" id="login_password" type="password" class="form-control" placeholder="密码">
                    </p>
                    <p><a href="" >忘记密码？</a></p>              
                    <p>
                        <!-- <a type="submit" class="btn btn-success" href="<?=site_url('/search_competition/register')?>">注册</a> -->
                        <input type="submit" class="btn btn-success" value="登录" style="width:100%"/>
                    </p>
                </div>
            </form>
            </div>
        </div>
<!--
<script type="text/javascript">
    var xmlHttp;
    function validateEmail() {
        var username = document.getElementById("login_username");
        var password = document.getElementById("login_password");
        var url = <?=site_ure('/search_competition/')?> + escape(email.value);
        if (window.ActiveXObject) 
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else if (window.XMLHttpRequest) 
        {
            xmlHttp = new XMLHttpRequest();
        }
        xmlHttp.open("GET", url);
        xmlHttp.onreadystatechange = callback;
        xmlHttp.send(null);
    }
</script>
-->
        <div class="col-md-6 login_right">
            <br />
            <h1 class="center">还没有帐号？</h1>
            <h1 class="center">现在就注册！</h1>
            <br />
            <br />
        </div>




    </div>

</div>

<br />
<br />

    <!--  /main  -->