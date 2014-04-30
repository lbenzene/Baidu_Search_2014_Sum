    <!--  main  -->
    <div class="col-md-10 main">

        <div class="col-md-1"></div>

        <div class="col-md-10">
            <br />
            <h1>线下大赛报名</h1>
            <p><?php echo validation_errors(); ?></p>
<!--------------------------action---------------------------->        

             <form id="reg_form" class="form-horizontal" role="form" method="post" 
                   action="<?=site_url('search_competition/register')?>">
 
<!--                 <?php echo form_open('form'); ?> -->
                    <!--基本信息板块-->

                <p class="tmumber left"><span class="label label-success">1号队员</span></p>
                <div class="input-group">
                    <span class="input-group-addon" for="name1">姓名</span>
                    <input type="text" class="form-control" placeholder=" 姓名" name="name1">
                </div>
                
                <div class="input-group">
                    <span class="input-group-addon" for="id1">学号</span>
                    <input type="text" class="form-control" placeholder=" 学号" name="id1">
                </div>

                <div class="input-group">
                    <span class="input-group-addon" for="phone1">手机</span>
                    <input type="text" class="form-control" placeholder=" 手机" name="phone1">
                </div>

                <p class="tmumber left"><span class="label label-success">2号队员</span></p>
                <div class="input-group">
                    <span class="input-group-addon" for="name2">姓名</span>
                    <input type="text" class="form-control" placeholder=" 姓名" name="name2">
                </div>
                
                <div class="input-group">
                    <span class="input-group-addon" for="id2">学号</span>
                    <input type="text" class="form-control" placeholder=" 学号" name="id2">
                </div>

                <div class="input-group">
                    <span class="input-group-addon" for="phone2">手机</span>
                    <input type="text" class="form-control" placeholder=" 手机" name="phone2">
                </div>
                
                    <!--/基本信息板块-->
            
            
                <br/>
                <div class="input-group">
                    <span class="input-group-addon">????</span>
                    <input type="text" class="form-control" placeholder="????" name="_????">
                </div>
            
                <div class="checkbox" class="left">
                    <label>
                        <input name="_check" type="checkbox" >
                        Check Here! Yeah!<a href="#">read me</a>
                    </label> 
                </div>

                <br />
            
            
                <button id="submit_button" type="submit" class="btn btn-default">Submit</button>
            </form>

            <br />
            <br />
        </div>



        <div class="col-md-1"></div>
    </div>

    <!-- End of the whole div -->
</div>

<br />
<br />



    <!--  /main  -->