<?Php
include_once 'classes/Language/language.common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Doctor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-dialog.min.css">-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--user css-->
<link rel="stylesheet" href="css/user.css">
<link rel="stylesheet" href="css/focusdata.css">
<link rel="stylesheet" href="css/bootstrapValidator.css"/>
<!-- datetime -->
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<!-- easy-autocomplete -->
<link rel="stylesheet" href="css/easy-autocomplete.min.css">
<link rel="stylesheet" href="css/easy-autocomplete.themes.min.css">

<style>
.outer {
	padding: 10px;
	margin: 10px;
	border: solid white 1px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0
		rgba(0, 0, 0, 0.19);
}

.inner1 {
	padding-left: 50px;
}

.timeslotBtn {
	margin: 5px;
	width:90px;
}

.save-fav{
	
	margin: 5px;
	margin-top: 100px;
}

.show-doctors{
		margin: 5px;
		
	margin-top: 100px;
}

.alexrow{
	margin-top:8px;
}
</style>

<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jsrender.js"></script>
<script src="js/underscore-min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.easy-autocomplete.min.js"></script>



</head>
<body>

	<!--header-->
	<div class="container bars">
		<em class="bars_"></em>
	</div>
	<header>
    <?php
				include_once 'classes/Menu/menu.php';
				?>
    <h1 class="navbar-brand navbar-brand_">
			<a href="index.php"><img src="img/<?php echo $lang['Lang0004']; ?>"
				alt="logo"></a>
		</h1>
	</header>

	<div class="content searchDoctor">
		<div class="stellar-section">
			<div class="thumb-box9" data-stellar-background-ratio="0.1">
				<div class="container">
					<h2 class="wow fadeInRight">
						<!-- 搜索医生结果-->
						<?php echo $lang['Lang0302']; ?></h2>
					<div class="row">
						<a class="btn btn-primary" href="index.php"> <span
							class="glyphicon  glyphicon-arrow-left"> <!--  主页-->
								<?php echo $lang['Lang0303']; ?></span>
						</a>
						<button type="button" class="btn btn-primary" data-toggle="modal"
							data-target="#searchModal">
							<!-- 搜索条件-->
							<?php echo $lang['Lang0304']; ?>
                    </button>
						<div class="modal fade bs-example-modal-lg" role="dialog"
							aria-labelledby="gridSystemModalLabel" id="searchModal">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h2 class="modal-title" id="gridSystemModalLabel">
											<!-- 高级搜索-->
											<?php echo $lang['Lang0318']; ?></h2>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											
												<form class="form-horizontal" role="form" id="modal_form_search">
													<input type="hidden" class="form-control"
														name="action_type" id="action_type" value="index_search">
													<input type="hidden" class="form-control"
														name="CUSTOMER_USER_ID" id="CUSTOMER_USER_ID">
														
													<div class="form-group col-md-12">
													<label for="DOCTOR_TYPE" class="radio-inline" style="margin-left: 0px;padding-left:0px"> <!-- 医生类别-->
														<?php echo $lang['Lang0065']; ?></label>
													
													<label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="GP">GP</label>
													<label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Dentist">Dentist</label>
													<label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Physio">Physio</label>
													<label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Dermatologist">Dermatologist</label>
													<label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Chiropractor">Chiropractor</label>
													</div>

													<div class="form-group  col-md-12">
														<label for="CLINIC_SUBURB" class="col-md-2"> <!-- 位置-->
															<?php echo $lang['Lang0316']; ?></label>
														<div class="col-md-10">
															<input type="text"
																class="form-control" id="CLINIC_SUBURB"
																name="CLINIC_SUBURB">
														</div>
													</div>
												

	
													<div class="form-group col-md-6" style="padding-left:0px">
														<label for="CLINIC_NAME" class="col-md-3"> <!-- 诊所名称-->
															<?php echo $lang['Lang0049']; ?></label>
														
															<input type="text" class="form-control" id="CLINIC_NAME"
																name="CLINIC_NAME">
														
													</div>

													<div class="form-group col-md-6">
														<label for="DOCTOR_NAME"  class="col-md-3"> <!-- 医生姓名-->
															<?php echo $lang['Lang0297']; ?></label>
														
															<input type="text" class="form-control" id="DOCTOR_NAME"
																name="DOCTOR_NAME">
													
													</div>

													<div class="form-group col-md-6" style="padding-left:0px">
														<label for="distance" class="col-md-3"> <!-- 医生距离-->
															<?php echo $lang['Lang0298']; ?></label>
														
															<select class="form-control" id="DISTANCE"
																name="DISTANCE">
																<option value=""><!-- All--><?php echo $lang['Lang0042']; ?></option>
																<option value="5km">5km</option>
																<option value="10km">10km</option>
																<option value="20km">20km</option>
															</select>
														
													</div>

													<div class="form-group col-md-6">
														<label for="APPOINTMENT_DATE" class="col-md-3"> <!-- 预约日期-->
															<?php echo $lang['Lang0319']; ?></label>
												
															<input type="text" class="form-control form_datetime"
																id="APPOINTMENT_DATE" name="APPOINTMENT_DATE">
												
													</div>


												</form>
										
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">
											<!-- 取消-->
											<?php echo $lang['Lang0139']; ?></button>
										<a class="btn btn-danger" href="userSaveSearch.php"
											id="btn_save_search_manage"> <!-- 常用搜索条件管理-->
											<?php echo $lang['Lang0279']; ?></a>
										<button type="button" class="btn btn-warning" id="btn_save_search">
											<!-- 保存为常用搜索条件-->
											<?php echo $lang['Lang0305']; ?></button>
										<button type="button" class="btn btn-primary" id="btn_search">
											<!-- 搜索-->
											<?php echo $lang['Lang0308']; ?></button>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>


					<div class="container">
						<ul class="nav nav-tabs" id="TMP1">

						</ul>

						<div class="tab-content" id="TMP2"></div>
						<div class="tab-content" id="TMP3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="gridSystemModalLabel" id="signupModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="gridSystemModalLabel"><!-- 注册|预约医生--><?php echo $lang['Lang0314']; ?></h2>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                     
                         <form class="form-inline" role="form" id="modal_form_signup">

                            <input type="hidden" class="form-control" name="action_type" id="action_type" value="create">
<div class="row alexrow">
                            <div class="form-group col-md-6" style="padding-left:0px">
                                <label for="CUSTOMER_USER_NAME" class="col-md-3"><!-- 用户名--><?php echo $lang['Lang0047']; ?><span class="span-red">*</span></label>
                          
                                <input type="text" class="form-control" id="CUSTOMER_USER_NAME" name="CUSTOMER_USER_NAME">
                               
                            </div>

                            <div class="form-group col-md-6">
                                <label for="CUSTOMER_USER_MAIL" class="col-md-3"><!-- 邮箱--><?php echo $lang['Lang0048']; ?><span class="span-red">*</span></label>
                               
                                <input type="text" class="form-control" id="CUSTOMER_USER_MAIL" name="CUSTOMER_USER_MAIL">
                               
                            </div>
</div>
<div class="row alexrow">
                            <div class="form-group col-md-6" style="padding-left:0px">
                                <label for="CUSTOMER_USER_PWD" class="col-md-3"><!-- 密码--><?php echo $lang['Lang0161']; ?><span class="span-red">*</span></label>
                         
                                <input type="password" class="form-control" name="CUSTOMER_USER_PWD" id="CUSTOMER_USER_PWD">
                           
                            </div>

                            <div class="form-group col-md-6">
                                <label for="CONFIME_PWD" class="col-md-3"><!-- 确认密码--><?php echo $lang['Lang0199']; ?><span class="span-red">*</span></label>
                       
                                <input type="password" class="form-control" name="CONFIME_PWD" id="CONFIME_PWD">
                        
                            </div>
</div>
<div class="row alexrow">
                            <div class="form-group col-md-6" style="padding-left:0px">
                            
                                <label for="CUSTOMER_NAME" class="col-md-3"><!-- 姓名--><?php echo $lang['Lang0216']; ?><span class="span-red">*</span></label>
                           
                                <input type="text" class="form-control" id="CUSTOMER_NAME" name="CUSTOMER_NAME">
                       
                            </div>
                            <div class="form-group col-md-6">
                                <label for="CUSTOMER_PHONE_NO" class="col-md-3"><!-- 电话号码--><?php echo $lang['Lang0149']; ?><span class="span-red">*</span></label>
                  
                                <input type="text" class="form-control" name="CUSTOMER_PHONE_NO" id="CUSTOMER_PHONE_NO" maxlength="10">
                          
                            </div>  
</div>
<div class="row alexrow">
                            <div class="form-group">
                              <label for="CUSTOMER_GENDER"><!-- 性别--><?php echo $lang['Lang0217']; ?><span class="span-red">*</span></label>
                            
                              <select class="form-control" style="margin-left: 40px" id="CUSTOMER_GENDER" name="CUSTOMER_GENDER">
                                    <option><!-- 男--><?php echo $lang['Lang0132']; ?></option>
                                    <option><!-- 女--><?php echo $lang['Lang0133']; ?></option>
                              </select>
                         
                            </div>

                            <div class="form-group">
                                <label for="CUSTOMER_BIRTHDAY"><!-- 生日--><?php echo $lang['Lang0148']; ?><span class="span-red">*</span></label>
 
                                <input type="text" class="form-control" name="CUSTOMER_BIRTHDAY" id="CUSTOMER_BIRTHDAY" placeholder="dd/mm/yyyy">
                        
                            
                            </div>

                            <div class="form-group">
                                <label for="MEDICAL_CARD_NO"><!-- 医疗卡号--><?php echo $lang['Lang0150']; ?><span class="span-red">*</span></label>
                    
                                <input type="text" class="form-control" name="MEDICAL_CARD_NO" id="MEDICAL_CARD_NO">
                 
                            </div>
</div>
<div class="row alexrow">

                            <div class="form-group">
                                <label for="CUSTOMER_ADDR"><!-- 详细地址--><?php echo $lang['Lang0152']; ?><span class="span-red">*</span></label>
                                <input type="text" class="form-control"  style="margin-left: 34px" name="CUSTOMER_ADDR" id="CUSTOMER_ADDR">
                            </div>
</div>
<div class="row alexrow">
                            <div class="form-group">
                                <label for="CUSTOMER_SUBURB"><!-- 区--><?php echo $lang['Lang0153']; ?><span class="span-red">*</span></label>
                                <input type="text" style="margin-left: 40px" class="form-control" name="CUSTOMER_SUBURB" id="CUSTOMER_SUBURB">
                            </div>

                            <div class="form-group">
                              <label for="STATE_ID"><!-- 州--><?php echo $lang['Lang0154']; ?><span class="span-red">*</span></label>
                              <select class="form-control" id="STATE_ID" name="STATE_ID">
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="CUSTOMER_POSTCODE"><!-- 邮编--><?php echo $lang['Lang0155']; ?><span class="span-red">*</span></label>
                                <input type="text" class="form-control" name="CUSTOMER_POSTCODE" id="CUSTOMER_POSTCODE">
                            </div>
</div>
                        </form>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><!-- Close--><?php echo $lang['Lang0139']; ?></button>
                    <button type="button" class="btn btn-primary" id="btn_signin" ><!-- 注册|预约医生--><?php echo $lang['Lang0314']; ?></button>
                </div>
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

<script id="tmp1" type="text/x-jsrender">
{{for #data}}

<li {{if ID=="1"}}class="active"{{else}}{{/if}}>
<a href="#{{>ID}}" data-toggle="tab"> {{>date}}</a>
</li>
 
{{/for}}				
</script>

	<script id="tmp2" type="text/x-jsrender">
{{for #data}}

 <div class="tab-pane {{if ID=="1"}}active{{else}}{{/if}}" id="{{>ID}}">
									
									
									{{for doctors ~ppdate=date}}
										<div  class="outer">
											<div class="row">
												<div class="col-md-2">
													<img src="{{>doctorPIC}}" alt="Smiley face" height="192"
														width="192">
												</div>
												<div class="col-md-4 inner1" >
													<h2>{{>doctorName}}</h2>
													<h5>{{>clinicName}}</h5>
													<h5>{{>clinicAddress}}</h5>
												</div>
												
												<div class="col-md-6">
												{{for timeslot ~pdoctorid=doctorID}}
												<div class="btn btn-primary timeslotBtn" 
													keyDoctorID="{{>~pdoctorid}}"
													keyDate="{{>~ppdate}}"
													keyTime="{{>originalTime}}">{{>time}}</div>
												{{/for}}
													<div class="save-fav">

															<button class="btn btn-primary save2favBtn" keyDoctorID="{{>doctorID}}"><?php echo $lang['Lang0171']; ?></button>
<a class="btn btn-primary jumptouserSaveDoctor" href="userSaveDoctor.php"><!-- 收藏医生管理--><?php echo $lang['Lang0278']; ?></a>
													</div>
												</div>
											</div>
										</div>
									{{/for}}

							
								</div>
														
{{/for}}				
</script>


<script id="tmp3" type="text/x-jsrender">
{{for #data}}

	<div class="tab-pane {{if ID=="1"}}active{{else}}{{/if}}" id="{{>ID}}">
									
									
		{{for clinics ~ppdate=date}}
			<div  class="outer">
				<div class="row">
					<div class="col-md-2">
						<img src="{{>clinicPIC}}" alt="Smiley face" height="192"
														width="192">
					</div>
					<div class="col-md-4 inner1" >
						<h2>{{>clinicName}}</h2>
						<h5>{{>clinicSuburb}}</h5>
						<h5>{{>clinicAddress}}</h5>
					</div>
												
					<div class="col-md-6">
						{{for timeslot}}
												<div class="btn active btn-default timeslotBtn">{{>time}}</div>
						{{/for}}
													
						<div class="show-doctors">

							<button style="position: absolute;right:5px" class="btn btn-primary showDoctors" keyClinicID="{{>clinicID}}"><?php echo $lang['Lang0324']; ?></button>
	
						</div>
					</div>
				</div>
			</div>
		{{/for}}

							
	</div>
														
{{/for}}				
</script>

	<script src="js/bootstrap.min.js"></script>
	
	<!-- dialog -->
	<script src="js/bootstrap-dialog.min.js"></script>
	<script src="js/tm-scripts.js"></script>
	<script src="js/bootstrapValidator.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script> 
	<!-- date time -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"
		charset="UTF-8"></script>
	<script type="text/javascript"
		src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>

	<script src="js/main/pub.js"></script>
	<script src="js/main/searchDoctor.js"></script>

</body>
</html>