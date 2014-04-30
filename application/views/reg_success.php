    <!--  main  -->
    <div class="col-xs-10 main">
        <p>注册成功</p>
        <p>欢迎您，<?=$username?></p>
        <p><b id="timing">5</b>秒后返回首页</p>
    </div>

</div>

<br />
<br />
<script type="text/javascript">

    // window.location.assign('<?=site_url()?>');

    var t5 = setTimeout("window.location.assign('<?=site_url()?>');",5000);

</script>
    <!--  /main  -->