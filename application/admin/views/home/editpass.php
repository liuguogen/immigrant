

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>系统管理 - 添加用户</title>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
      <?php  $this->load->view('public/header') ?>
    <script src="<?php echo base_url() ?>assets/aceadmin/js/jquery-1.10.2.min.js"></script>
    <script  type="text/javascript"  src="<?php echo base_url() ?>assets/aceadmin/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/aceadmin/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/aceadmin/diyUpload/css/diyUpload.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/aceadmin/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/aceadmin/diyUpload/js/diyUpload.js"></script>
    <style>
        .btn-upload {
            width: 106px;
            height: 32px;
            position: relative;
            margin-bottom: 10px;
        }
        .btn-upload a {
            display: block;
            width: 104px;
            line-height: 18px;
            padding: 6px 0;
            text-align: center;
            color: #4c4c4c;
            background: #fff;
            border: 1px solid #cecece;
        }
        .btn-upload input {
            width: 106px;
            height: 32px;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 1;
            filter: alpha(opacity=0);
            -moz-opacity: 0;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- 导航栏开始 -->
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    <a href="<?php echo site_url('Default_controller/user') ?>">用户列表</a>
    &gt;
    修改密码
</div>


<ul id="myTab" class="nav nav-tabs">
    <li class="">
        <a href="<?php echo site_url('Default_controller/user') ?>">用户列表</a>
    </li>
        <li class="active">
        <a href="javascript:;">修改密码</a>
    </li>
</ul>
<!-- 导航栏结束 -->

<form class="form-inline"  method="post" enctype="multipart/form-data">
    <table class="table table-striped table-bordered table-hover table-condensed">
       <input type="hidden" name="admin_id" class="form-control" value="<?php echo $data['admin_id'] ?>" />
        
           <tr>
            <th>密码 <span style="color: red;">*</span></th>
            
               <td>
                   <input type="password" name="password" />
            
               </td>
        </tr>
        <tr>
            <th>确认密码 <span style="color: red;">*</span></th>
            
               <td>
                   <input type="password" name="confrim_pass" />
            
               </td>
        </tr>
         <tr>
            <th>是否启用 <span style="color: red;">*</span></th>
            
               <td>
                   <input type="radio" name="is_disabled" value="1"  <?php if($data['is_disabled']==1){echo "checked";} ?>/>是&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="is_disabled" value="0" <?php if($data['is_disabled']==0){echo "checked";} ?> />否&nbsp;&nbsp;&nbsp;
               </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="保存">
            </td>
        </tr>
    </table>
</form>

<script src="<?php echo base_url() ?>assets/aceadmin/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/aceadmin/js/base.js"></script>

</body>
</html>
 