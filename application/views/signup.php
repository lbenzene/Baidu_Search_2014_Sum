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


                    <div>
                        <label>队名</label>
                        <label for="{{userform.username.id_for_lebal}}" id="form_label_username{% if userform.username.error %}_error{% endif %}" 
                            class="form_label form_label_user{% if userform.username.errors %}_error{% endif %}">队名</label>
                        <input name="{{userform.username.html_name}}" id="form_username" type="text" 
                            class="form-control form_padding {% if userform.username.errors %} has-error {% endif %}" placeholder="队名" />
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
                        <!--/基本信息板块-->

                    <br />
                        <!-- 1 -->
                    <br />
                    <p>搜索组选手</p>
                    <div>
                        <label for="{{profileform.name1.id_for_lebal}}" id="form_label_name1{% if profileform.name.errors %}_error{% endif %}" 
                            class="form_label form_label_user{% if profileform.name1.errors %}_error{% endif %}">姓名</label>
                        <input name="{{profileform.name1.html_name}}" id="form_name1" type="text" 
                            class="form-control form_padding {% if profileform.name1.errors %} has-error {% endif %}" placeholder="姓名" />
                    </div>
                    {% if profileform.name1.errors %}
                    <div class="callback_error">
                        <p>{{profileform.name1.errors}}</p>
                    </div>
                    {% endif %}

                    <div>
                        <label for="{{profileform.studentid1.id_for_lebal}}" id="form_label_studentid1{% if profileform.studentid1.errors %}_error{% endif %}" 
                            class="form_label form_label_id{% if profileform.studentid1.errors %}_error{% endif %}">学号</label>
                        <input name="{{profileform.studentid1.html_name}}" id="form_studentid1" type="text" 
                            class="form-control form_padding {% if profileform.studentid1.errors %} has-error {% endif %}" placeholder="学号" />
                    </div>
                    {% if profileform.studentid1.errors %}
                    <div class="callback_error">
                        <p>{{profileform.studentid1.errors}}</p>
                    </div>
                    {% endif %}   

                    <div>
                        <label for="{{profileform.phone1.id_for_lebal}}" id="form_label_phone1{% if profileform.phone1.errors %}_error{% endif %}" 
                            class="form_label form_label_phone{% if profileform.phone1.errors %}_error{% endif %}">手机号码</label>
                        <input name="{{profileform.phone1.html_name}}" id="form_phone1" type="text" 
                            class="form-control form_padding {% if profileform.phone1.errors %} has-error {% endif %}" placeholder="手机号码" />
                    </div>
                    {% if profileform.phone1.errors %}
                    <div class="callback_error">
                        <p>{{profileform.phone1.errors}}</p>
                    </div>
                    {% endif %}

                        <!-- 2 -->
                    <br />
                    <p>答题组选手</p>
                    <div>
                        <label for="{{profileform.name2.id_for_lebal}}" id="form_label_name2{% if profileform.name.errors %}_error{% endif %}" 
                            class="form_label form_label_user{% if profileform.name2.errors %}_error{% endif %}">姓名</label>
                        <input name="{{profileform.name2.html_name}}" id="form_name2" type="text" 
                            class="form-control form_padding {% if profileform.name2.errors %} has-error {% endif %}" placeholder="姓名" />
                    </div>
                    {% if profileform.name2.errors %}
                    <div class="callback_error">
                        <p>{{profileform.name2.errors}}</p>
                    </div>
                    {% endif %}

                    <div>
                        <label for="{{profileform.studentid2.id_for_lebal}}" id="form_label_studentid2{% if profileform.studentid2.errors %}_error{% endif %}" 
                            class="form_label form_label_id{% if profileform.studentid2.errors %}_error{% endif %}">学号</label>
                        <input name="{{profileform.studentid2.html_name}}" id="form_studentid2" type="text" 
                            class="form-control form_padding {% if profileform.studentid2.errors %} has-error {% endif %}" placeholder="学号" />
                    </div>
                    {% if profileform.studentid2.errors %}
                    <div class="callback_error">
                        <p>{{profileform.studentid2.errors}}</p>
                    </div>
                    {% endif %}   

                    <div>
                        <label for="{{profileform.phone2.id_for_lebal}}" id="form_label_phone2{% if profileform.phone2.errors %}_error{% endif %}" 
                            class="form_label form_label_phone{% if profileform.phone2.errors %}_error{% endif %}">手机号码</label>
                        <input name="{{profileform.phone2.html_name}}" id="form_phone2" type="text" 
                            class="form-control form_padding {% if profileform.phone2.errors %} has-error {% endif %}" placeholder="手机号码" />
                    </div>
                    {% if profileform.phone2.errors %}
                    <div class="callback_error">
                        <p>{{profileform.phone2.errors}}</p>
                    </div>
                    {% endif %}
                    <br />

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
