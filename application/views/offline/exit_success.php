    <!--  main  -->
    <div class="col-xs-10 main">
        <p>退出成功</p>
        <p></p>
        <p id="timing">5</p>
        <p>秒后返回首页</p>
    </div>
 
</div>

<br />
<br />
<script type="text/javascript">

    // window.location.assign('<?=site_url()?>');
    var t1 = setTimeout("document.getElementByID('timing').innerHTML='4';",1000);
    var t2 = setTimeout("document.getElementByID('timing').innerHTML='3';",2000);
    var t3 = setTimeout("document.getElementByID('timing').innerHTML='2';",3000);
    var t4 = setTimeout("document.getElementByID('timing').innerHTML='1';",4000);

    var t5 = setTimeout("window.location.assign('<?=site_url(offline_question/index)?>');",5000);

</script>
    <!--  /main  -->