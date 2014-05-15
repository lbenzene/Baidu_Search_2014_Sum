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

    <div class="row light_grey">
        <div class="container main">

            <h1>线下答题</h1>
        </div>
            
        <div class="container main">
            <div id="important" class="fade in">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                <h1>特别提醒</h1>
                <h3 class="important">1.每进入一套题组就会独立开始计时。请考虑好是否进入答题。</h3>
                <p><b>小提示</b>：可以在一套题打完后再进入另一套题，以减少重叠计时时间。</p>
                <h3 class="important">2.题目一旦提交，将无法修改其中的答案。请确认答案无误后再提交。</h3>
                <h3 class="important">3.答题时请注意答题格式，如有格式问题造成的错误将视为答案错误。</h3>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 select">
                    <form action="<?=site_url('offline_question/questionare/0')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_1" class="form-control" name="password" placeholder="请输入第一套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第一套" />
                    </form>
                    <form action="<?=site_url('offline_question/questionare/1')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_2" class="form-control" name="password" placeholder="请输入第二套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第二套" />
                    </form>                    
                    <form action="<?=site_url('offline_question/questionare/2')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_3" class="form-control" name="password" placeholder="请输入第三套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第三套" />
                    </form>                    
                    <form action="<?=site_url('offline_question/questionare/3')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_4" class="form-control" name="password" placeholder="请输入第四套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第四套" />
                    </form>                     
                    <form action="<?=site_url('offline_question/questionare/4')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_5" class="form-control" name="password" placeholder="请输入第五套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第五套" />
                    </form>                 
                </div>
                <div class="col-md-6 select">
                    <form action="<?=site_url('offline_question/questionare/5')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_6" class="form-control" name="password" placeholder="请输入第六套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第六套" />
                    </form>
                    <form action="<?=site_url('offline_question/questionare/6')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_7" class="form-control" name="password" placeholder="请输入第七套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第七套" />
                    </form>                    
                    <form action="<?=site_url('offline_question/questionare/7')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_8" class="form-control" name="password" placeholder="请输入第八套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第八套" />
                    </form>                    
                    <form action="<?=site_url('offline_question/questionare/8')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_9" class="form-control" name="password" placeholder="请输入第九套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第九套" />
                    </form>                     
                    <form action="<?=site_url('offline_question/questionare/9')?>" method="post" autocomplete="off" target="_blank">
                        <input type="text" id="q_10" class="form-control" name="password" placeholder="请输入第十套题组的进入密码" />
                        <input class="btn btn-success" type="submit" value="第十套" />
                    </form> 
                </div>
            </div>
            <br />
                <div class="progress">

                <div class="progress-bar progress-bar-primary" style="width: 100%">
                    <span class="sr-only"></span>
                </div>               
            </div>
        </div>

    </div>

    	<!-- /main -->

