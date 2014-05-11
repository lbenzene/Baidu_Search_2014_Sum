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
                    <a href="<?=site_url('offline_question/index')?>" class="btn white_btn">线下大赛首页</a>
                </p>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="container main login_form">
            <div class="col-md-6">
                <div class="login">
                <form class="login_form" action="<?=site_url('offline_question/check_login')?>" 
                    method="post" autocomplete="off">
                    <div class="login_group">
                        <h3 class="center">线上大赛登录</h3>

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
                        <p class="right"><a href="" >忘记密码？</a></p>              
                        <p>
                            <input type="submit" class="btn btn-success login_submit" value="登录" style="width:100%"/>
                        </p>
                    </div>
                </form>
                </div>
            </div>


            <div class="col-md-6 login_right">
                <br />
                <h1 class="center">还没有帐号？</h1>
                <h1 class="center">现在就注册！</h1>
                <br />
                <br />
            </div>
        </div>
    </div>


        <!--  /main  -->