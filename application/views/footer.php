    <!--  footer  -->
<br />
<div class="container center">
    <footer>
    <p> 浙江大学企业俱乐部联合会百度俱乐部 & 浙江大学学生博雅国学社</p>

    <p>Copyright © 2014 ZJU <a href="http://baiduzju.org">Baidu Club</a>. All Rights Reserved</p>
    </footer>
</div>


<script src="<?=base_url('js/jQuery.js')?>"></script>
<script src="<?=base_url('js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('js/baidu.js')?>"></script>

<script type="text/javascript">

$(document).ready(function(){
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey',
        increaseArea: '20%' // optional
    });


    $(".pinned").pin({
        containerSelector: ".container", minWidth: 940
    });

    $("#login_username").focus(function(){
        $("#login_username_label").css("background-position", "0 -108px");
    });

    $("#login_username").blur(function(){
        $("#login_username_label").css("background-position", "0 -68px");
    });

    $("#login_password").focus(function(){
        $("#login_password_label").css("background-position", "0 -187px");
    });

    $("#login_password").blur(function(){
        $("#login_password_label").css("background-position", "0 -147px");
    });

});

/*
$(document).ready(function(){


    $team_mun = $("#team_mun").val();
    while ( $team_mun++ > default_num )
    {    
        $("#submit_label").append(
            '<p class="tmumber left"><span class="label label-success">1号队员</span></p>
            <div class="input-group">
                <span class="input-group-addon">姓名</span>
                <input type="text" class="form-control" placeholder=" 姓名" name="_name">
            </div>
            <div class="input-group">
                <span class="input-group-addon">学号</span>
                <input type="text" class="form-control" placeholder=" 学号" name="_id">
            </div>            
            <br/>
            <div class="input-group">
                <span class="input-group-addon">????</span>
                <input type="text" class="form-control" placeholder="????" name="_????">
            </div>'
        );
        ++default_num;
    }
});
*/
</script>

</body>


</html>

    <!--  /footer  -->