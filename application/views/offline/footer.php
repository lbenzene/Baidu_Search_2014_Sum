    <!--  footer  -->
    <br />
    <div class="row center">
        <footer>
            <hr />
            <p>主办方：浙江大学企业俱乐部联合会百度俱乐部</p>
            <p>合作方：浙江大学学生博雅国学社</p>

            <p>Copyright © 2014 ZJU <a href="http://baiduzju.org">Baidu Club</a>. All Rights Reserved</p>
        </footer>
    </div>
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

});

</script>

</body>


</html>

    <!--  /footer  -->