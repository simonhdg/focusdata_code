<?php
include_once 'classes/Language/language.common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>our services</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" ><!-- dialog --><link href="css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--user css-->
<link rel="stylesheet" href="css/user.css">
<link rel="stylesheet" href="css/focusdata.css">
<!--datetables css-->
<link rel="stylesheet" href="js/datatables/dataTables.bootstrap.min.css">
<!-- datetime -->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.cookie.js"></script>



</head>
<body>
<!--header-->
<div class="container bars"><em class="bars_"></em></div>
<?php
include_once 'classes/Menu/menu.php';
?>
<header>
    
    <h1 class="navbar-brand navbar-brand_"><a href="index.php"><img src="img/<?php echo $lang['Lang0004']; ?>" alt="logo"></a></h1>
</header>

<!--content--> 
<div class="content">
  <div class="stellar-section">
    <div class="thumb-box9" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row left_con">
          <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="list-group">
							<a href="userAppointmentRecoder.php" class="list-group-item" id="user_appointment_recoder" ><!-- 预约记录--><?php echo $lang['Lang0275']; ?></a>
							<a href="userUpdPersonInfo.php" class="list-group-item" id="user_upd_person_info"><!-- 修改个人用户信息--><?php echo $lang['Lang0276']; ?></a>
							<a href="userUpdPersonPwd.php" class="list-group-item" id="user_upd_person_pwd"><!-- 修改个人用户密码--><?php echo $lang['Lang0277']; ?></a>
							<a href="userSaveDoctor.php" class="list-group-item active" id="user_collect_doctor"><!-- 收藏医生管理--><?php echo $lang['Lang0278']; ?></a>
							<a href="userSaveSearch.php" class="list-group-item" id="user_search_terms"><!-- 常用搜索条件管理--><?php echo $lang['Lang0279']; ?></a>
						</div>
          </div>

          <div class="col-lg-9 col-md-9 col-sm-9 wow fadeInUp" data-wow-delay="0.1s">
              <div class="PersonUser">
                <div class="savedoctor">

                  <h2><!-- 收藏医生管理--><?php echo $lang['Lang0278']; ?></h2>
                  <div class="row">
                      <form class="form-inline" role="form" id="save_doctor_form">
                          
                          <input type="hidden" class="form-control" name="CUSTOMER_USER_ID" id="CUSTOMER_USER_ID">
                          <div class="form-group">
                            <label for="CLINIC_NAME" class="control-label"><!-- 诊所名称--><?php echo $lang['Lang0243']; ?></label>
                            <input type="text" class="form-control" name="CLINIC_NAME" id="CLINIC_NAME">
                          </div>

                          <div class="form-group">
                            <label for="CLINIC_SUBURB" class="control-label"><!-- 区--><?php echo $lang['Lang0245']; ?></label>
                            <input type="text" class="form-control" name="CLINIC_SUBURB" id="CLINIC_SUBURB">
                          </div>

                          <div class="form-group">
                            <label for="STATE_ID" class="control-label"><!-- 州--><?php echo $lang['Lang0246']; ?></label>
                            <select class="form-control" name="STATE_ID" id="STATE_ID">
                              <option value=""><!-- 全部--><?php echo $lang['Lang0237']; ?></option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="DOCTOR_NAME" class="control-label"><!-- 医生名称--><?php echo $lang['Lang0249']; ?></label>
                            <input type="text" class="form-control" name="DOCTOR_NAME" id="DOCTOR_NAME">
                          </div>

                           <button class="btn btn-primary search_ok" id="search_ok"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><!--  Search--><?php echo $lang['Lang0240']; ?></button>  

                           <button class="btn btn-danger" id="btn_delete"><!-- 删除收藏--><?php echo $lang['Lang0188']; ?></button>
                       </form>
                  </div>

                  <div class="row">
                    <table id="dataTables-example" class="table table-hover  table-bordered" >
                      <thead class="table_title">
                          <tr>
                            <th><input type="checkbox" name="chk_all" id="chk_all"></th>
                            <th><!-- 诊所名称--><?php echo $lang['Lang0243']; ?></th>
                            <th><!-- 详细地址--><?php echo $lang['Lang0244']; ?></th>
                            <th><!-- 区--><?php echo $lang['Lang0245']; ?></th>
                            <th><!-- 州--><?php echo $lang['Lang0246']; ?></th>
                            <th><!-- 邮编--><?php echo $lang['Lang0247']; ?></th>
                            <th><!-- 医生类别--><?php echo $lang['Lang0248']; ?></th>
                            <th><!-- 医生名称--><?php echo $lang['Lang0249']; ?></th>
                            <th><!-- 预约医生--><?php echo $lang['Lang0170']; ?></th>
                          </tr>
                      </thead>
                    </table>
                  </div>

              </div>
              <!-- savedoctor -->
            </div>
            <!-- PersonUser -->
          </div>
          <!-- wow -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </div>
</div>

<!--footer-->
<?php
include_once 'classes/Footer/Footer.php';
?>
<?php
include_once 'classes/Language/For_JS_multi_lang.php';
?>
<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- datetime -->
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script src="js/bootstrap.min.js"></script><!-- dialog --><script src="js/bootstrap-dialog.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="js/main/pub.js"></script>
<script src="js/main/userSaveDoctor.js"></script>
</body>
</html>