    <!--  main  -->
    <div class="col-xs-10 main login_form">
        <div class="col-md-6">
            <div class="login">
            <form class="form-horizontal login_form" action="<?=site_url('/search_competition/check_login')?>" 
                method="post" autocomplete="off">
                <div class="login_group">
                    <p>返回错误信息</p>

                    <p>
                        <label for="username" id="username_label" class="login_label login_label_username">帐号</label>
                        <input name="username" id="username" type="text" class="form-control" placeholder="帐号">
                        <span></span>
                    </p>
                    <br />
                    <p>
                        <label for="password" id="password_label" class="login_label login_label_password">密码</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="密码">
                    </p>
                 <br />
                    <p>
                        <label for="validation">验证码不要？</label>
                        <input name="validation" id="validation" type="text" class="form-control" >
                        <img src="<?=base_url('/img/$time().png')?>" />
                    </p>
                    <br />
                    <p><a href="" >忘记密码？</a></p>              
                    <p>
                        <!-- <a type="submit" class="btn btn-success" href="<?=site_url('/search_competition/register')?>">注册</a> -->
                        <input type="submit" class="btn btn-success" value="登录" style="width:100%"/>
                    </p>
                </div>
            </form>
            </div>
        </div>        

        <div class="col-md-6 login_right">
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