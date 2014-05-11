    <!-- main -->
    <div class="row" id="head">

        <div class="jumbotron">
            <br/>
            <div class="container" >
                <h1>百度校园推广搜索大赛</h1>
                <h3>线上比赛报名</h3>
                <br />
            </div>
        </div>
    </div>

    <div class="row main light_grey">
        <div class="container">

            <div class="col-md-3"></div>

            <div class="col-md-6">
                <h1>线上大赛报名</h1>
                <form class="reg_form" role="form" method="post" autocomplete="OFF" 
                       action="">
                {% csrf_token %}
                        <!--基本信息板块-->


                    <div class="has-error">
                        <label for="{{userform.username.id_for_lebal}}" id="form_label_username{% if userform.username.error %}_error{% endif %}" 
                            class="form_label form_label_user{% if userform.username.errors %}_error{% endif %}">学号</label>
                        <input name="{{userform.username.html_name}}" id="form_username" type="text" 
                            class="form-control form_padding {% if userform.username.errors %}  {% endif %}" placeholder="学号" />
                    </div>
                    {% if userform.username.errors %}
                    <div class="callback_error">
                        <p>{{userform.username.errors}}</p>
                    </div>
                    {% endif %}

                    <div>
                        <label for="{{userform.password1.id_for_lebal}}" id="form_label_password1{% if userform.password1.errors %}_error{% endif %}" 
                            class="form_label form_label_password{% if userform.password1.errors %}_error{% endif %}">密码</label>
                        <input name="{{userform.password1.html_name}}" id="form_password1" type="password" 
                            class="form-control form_padding {% if userform.password1.errors %} has-error {% endif %}" placeholder="密码">
                    </div>
                    {% if userform.password1.errors %}
                    <div class="callback_error">
                        <p>{{userform.password1.errors}}</p>
                    </div>
                    {% endif %}

                    <div>
                        <label for="{{userform.password2.id_for_lebal}}" id="form_label_password2{% if userform.password2.errors %}_error{% endif %}" 
                            class="form_label form_label_password{% if userform.password2.errors %}_error{% endif %}">密码确认</label>
                        <input name="{{userform.password2.html_name}}" id="form_password2" type="password" 
                            class="form-control form_padding {% if userform.password2.errors %} has-error {% endif %}" placeholder="密码确认">
                    </div>
                    {% if userform.password2.errors %}
                    <div class="callback_error">
                        <p>{{userform.password2.errors}}</p>
                    </div>
                    {% endif %}

                    <br />
                    <hr />
                    <br />

                    <div>
                        <label for="{{profileform.name.id_for_lebal}}" id="form_label_name{% if profileform.name.errors %}_error{% endif %}" 
                            class="form_label form_label_user{% if profileform.name.errors %}_error{% endif %}">姓名</label>
                        <input name="{{profileform.name.html_name}}" id="form_name" type="text" 
                            class="form-control form_padding {% if profileform.name.errors %} has-error {% endif %}" placeholder="姓名" />
                    </div>
                    {% if profileform.name.errors %}
                    <div class="callback_error">
                        <p>{{profileform.name.errors}}</p>
                    </div>
                    {% endif %}
                    
                    <div>
                        <label for="{{profileform.cellphone.id_for_lebal}}" id="form_label_cellphone{% if profileform.cellphone.errors %}_error{% endif %}" 
                            class="form_label form_label_phone{% if profileform.cellphone.errors %}_error{% endif %}">手机号码</label>
                        <input name="{{profileform.cellphone.html_name}}" id="form_cellphone" type="text" 
                            class="form-control form_padding {% if profileform.cellphone.errors %} has-error {% endif %}" placeholder="手机号码" />
                    </div>
                    {% if profileform.cellphone.errors %}
                    <div class="callback_error">
                        <p>{{profileform.cellphone.errors}}</p>
                    </div>
                    {% endif %}
                    
                        <!--/基本信息板块-->

                    <div>
                        验证码
                    </div>
                    <br />
                
                
                    <input id="submit_button" type="submit" class="btn btn-success" value="提交"style="width:100%">
                </form>

            </div>



            <div class="col-md-3"></div>
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .row -->


    <!--  /main  -->