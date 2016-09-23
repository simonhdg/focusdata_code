<?php
include_once 'classes/Language/language.common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>sign up</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" ><!-- dialog --><link href="css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--User CSS-->
<link rel="stylesheet" href="css/user.css">
<link rel="stylesheet" href="css/focusdata.css">
<link rel="stylesheet" href="css/bootstrapValidator.css"/>
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/jquery.ui.totop.js"></script>

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<!--header-->
<div class="container bars"><em class="bars_"></em></div>
<header>
    <?php
include_once 'classes/Menu/menu.php';
?>
    <h1 class="navbar-brand navbar-brand_"><a href="index.php"><img src="img/<?php echo $lang['Lang0004']; ?>" alt="logo"></a></h1>
</header>

<!--content-->
<div class="content">
	<div class="stellar-section">
		<div class="thumb-box9" data-stellar-background-ratio="0.1">
			<div class="container">
				<div class="row df_content">
					<h2 class="wow fadeInRight"><!-- 个人用户注册--><?php echo $lang['Lang0208']; ?></h2>
					<form class="form-inline wow fadeInLeft form_add" role="form" id="signup_form">
						<fieldset>
					<!-- 		<div class="form-group has-error has-feedback">
								<!--<label class="control-label" for="inputError2">Input with error</label>
								<input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status" readonly value="Info: Please select user">
								<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
								<span id="inputError2Status" class="sr-only">(error)</span>
							</div> -->
							<input type="hidden" class="form-control" name="action_type" id="action_type" value="create">

							<div class="form-group col-md-12 col-lg-12">
								<label for="sele_user"><!-- 选择用户--><?php echo $lang['Lang0209']; ?><span class="span-red">*</span></label>
									<select class="form-control" id="sele_user" autofocus>
										<option value="0" selected><!-- 个人用户--><?php echo $lang['Lang0210']; ?></option>
										<option value="1" ><!-- 诊所用户--><?php echo $lang['Lang0211']; ?></option>
									</select>
							</div>
							
							<div id="personal">
								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_USER_NAME"><!-- 用户名--><?php echo $lang['Lang0212']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" id="CUSTOMER_USER_NAME" name="CUSTOMER_USER_NAME">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_USER_MAIL"><!-- 邮箱--><?php echo $lang['Lang0213']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" id="CUSTOMER_USER_MAIL" name="CUSTOMER_USER_MAIL">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_USER_PWD"><!-- 密码--><?php echo $lang['Lang0214']; ?><span class="span-red">*</span></label>
									<input type="password" class="form-control" name="CUSTOMER_USER_PWD" id="CUSTOMER_USER_PWD">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CONFIME_PWD"><!-- 确认密码--><?php echo $lang['Lang0215']; ?><span class="span-red">*</span></label>
									<input type="password" class="form-control" name="CONFIME_PWD" id="CONFIME_PWD">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_NAME"><!-- 姓名--><?php echo $lang['Lang0216']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" id="CUSTOMER_NAME" name="CUSTOMER_NAME">
								</div>

								<div class="form-group col-md-6 col-lg-6">
	                              <label for="CUSTOMER_GENDER"><!-- 性别--><?php echo $lang['Lang0217']; ?><span class="span-red">*</span></label>
	                              <select class="form-control" id="CUSTOMER_GENDER" name="CUSTOMER_GENDER">
	                                    <option><!-- 男--><?php echo $lang['Lang0218']; ?></option>
	                                    <option><!-- 女--><?php echo $lang['Lang0219']; ?></option>
	                              </select>
	                            </div>
								
								<!-- <div class="form-group">
									<label for="pwd">手机验证码<span class="span-red">*</span></label>
									<input type="text" class="form-control" name="verifyCode" id="verifyCode" value="1">
								</div> -->
								

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_BIRTHDAY"><!-- 生日--><?php echo $lang['Lang0220']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" name="CUSTOMER_BIRTHDAY" id="CUSTOMER_BIRTHDAY" placeholder="Birthdate (dd/mm/yyyy)">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_PHONE_NO"><!-- 电话号码--><?php echo $lang['Lang0221']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" name="CUSTOMER_PHONE_NO" id="CUSTOMER_PHONE_NO" value="1">
								</div>	

								<div class="form-group col-md-6 col-lg-6">
									<label for="MEDICAL_CARD_NO"><!-- 医疗卡号--><?php echo $lang['Lang0150']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" name="MEDICAL_CARD_NO" id="MEDICAL_CARD_NO" value="1">
								</div>

								<div class="form-group col-md-9 col-lg-9">
									<label for="CUSTOMER_ADDR"><!-- 详细地址--><?php echo $lang['Lang0224']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control"  style="width:81%" name="CUSTOMER_ADDR" id="CUSTOMER_ADDR" value="1">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_POSTCODE"><!-- 邮编--><?php echo $lang['Lang0223']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" name="CUSTOMER_POSTCODE" id="CUSTOMER_POSTCODE" value="1">
								</div>

								<div class="form-group col-md-6 col-lg-6">
									<label for="CUSTOMER_SUBURB"><!-- 区--><?php echo $lang['Lang0225']; ?><span class="span-red">*</span></label>
									<input type="text" class="form-control" name="CUSTOMER_SUBURB" id="CUSTOMER_SUBURB" value="1">
								</div>

								<div class="form-group col-md-6 col-lg-6">
	                              <label for="STATE_ID"><!-- 州--><?php echo $lang['Lang0226']; ?><span class="span-red">*</span></label>
	                              <select class="form-control" id="STATE_ID" name="STATE_ID">
	                              </select>
	                            </div>
							</div>
						</fieldset>
					</form>
						<div class="row">
							<div class="form-group pull-right">
								<button type="submit" class="btn btn-lg btn-primary btn-block" id="signup_ok"><!-- Sign up for free--><?php echo $lang['Lang0227']; ?></button>
							 </div>
						</div>
						<div class="row">
							<div class="pull-right">
								<a href="sign_in.php"><strong><!-- sign in--><?php echo $lang['Lang0228']; ?></strong></a>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 center">
                <ul class="follow_icon">
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-rss"></a></li>
                    <li><a href="#" class="fa fa-pinterest"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="col-lg-12 center">
                <p>84, Charing Cross Road,London<br>JL 851213-2340</p>
            </div>
            <div class="col-lg-12 center">
                <p class="privacy">&copy; <em id="copyright-year"></em> <i>|</i> <a href="index-5.php">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- 为了实现js多语言 begin -->

<!-- 总开关，为了设置第三方库的多语言而设置 -->
<div id="which_lang" style="display: none;"><?php echo $_SESSION ['lang']; ?></div>

<!-- 密码重置成功! -->
<div id="Lang0032" style="display: none;"><?php echo $lang['Lang0032']; ?></div>

<!-- 请选择需要修改的数据 -->
<div id="Lang0033" style="display: none;"><?php echo $lang['Lang0033']; ?></div>

<!-- 确定修改 -->
<div id="Lang0018" style="display: none;"><?php echo $lang['Lang0018']; ?></div>

<!-- 您未登陆,无法使用此功能 -->
<div id="Lang0019" style="display: none;"><?php echo $lang['Lang0019']; ?></div>

<!-- 请修改个人信息，添加邮箱地址 -->
<div id="Lang0020" style="display: none;"><?php echo $lang['Lang0020']; ?></div>

<!-- 详细 -->
<div id="Lang0056" style="display: none;"><?php echo $lang['Lang0056']; ?></div>

<!-- 修改-->
<div id="Lang0057" style="display: none;"><?php echo $lang['Lang0057']; ?></div>

<!-- 密码重置 -->
<div id="Lang0058" style="display: none;"><?php echo $lang['Lang0058']; ?></div>

<!-- 两次密码输入不一致 -->
<div id="Lang0207" style="display: none;"><?php echo $lang['Lang0207']; ?></div>


<!-- 为了实现js多语言 end -->
<script src="js/bootstrap.min.js"></script><!-- dialog --><script src="js/bootstrap-dialog.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrapValidator.js"></script>
<script src="js/main/pub.js"></script>
<!-- <script src="js/main/sign_in.js"></script> -->

<script src="js/jquery.maskedinput.min.js"></script> 
<script src="js/main/sign_up_person.js"></script>
</body>
</html>