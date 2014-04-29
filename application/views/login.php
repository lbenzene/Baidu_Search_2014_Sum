    <!--  main  -->
    <div class="col-md-10 main login_form">
        <div class="col-md-6 login_left_div o_hidden">
            <h1 class="center">还没有帐号？</h1>
            <h1 class="center">现在就注册！</h1>
            <br />
            <br />
        </div>

        <div class="col-md-6 o_hidden">
            <div class="login">
            <form class="form-horizontal" action="<?=site_url('/search_competition/check_login')?>" method="post">

                <div class="input-group">
                    <span class="input-group-addon"> 帐号 </span>
                    <input name="username" type="text" class="form-control" placeholder="">
                </div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon"> 密码 </span>
                    <input name="password" type="password" class="form-control" placeholder="">
                </div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon"> 验证码 </span>
                    <input type="text" class="form-control" style="width:30%;" />
                    <img src="<?=base_url('/img/$time().png')?>" />
                </div>
                <br />
                <p><a href="" >忘记密码？</a></p>              
                <div class="input-grop center">
                    <!-- <a type="submit" class="btn btn-success" href="<?=site_url('/search_competition/register')?>">注册</a> -->
                    <input type="submit" class="btn btn-success" style="width:80%;" value="登录" />
                </div>

            </form>
            </div>
        </div>
    </div>

</div>

<br />
<br />

    <!--  /main  -->