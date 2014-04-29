    <!--  footer  -->

<div class="container">
    <footer>
    <p>Copyright © 2014 ZJU <a href="#">Baidu Club</a></p>
    </footer>
</div>


<script src="<?=base_url('js/jQuery.js')?>"></script>
<script src="<?=base_url('js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('js/baidu.js')?>"></script>

<script type="text/javascript">
/*
$(document).ready(function(){

	$(".side_bar").mouseover(function(){
		$(this).css('border-color', "#EBEBEB");
	});

});*/


$(document).ready(function(){
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey',
        increaseArea: '20%' // optional
    });


    $(".pinned").pin({
        containerSelector: ".container", minWidth: 940
    });

    $("#exit").click(
        <?php
        $_SESSION['login'] = FALSE;
        ?>
    );
    
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

/*
var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
}
else
{// code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
*/
</script>

</body>


</html>

    <!--  /footer  -->