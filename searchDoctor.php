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
        <link rel="stylesheet" href="css/bootstrapValidator.css" />
        <!-- datetime -->
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-multiselect.css">


        <link rel="stylesheet" type="text/css" href="css/sm.css@ver-3" />
        <link rel="stylesheet" type="text/css" href="css/searchDoctor.css" />

        <style>
            .ui-autocomplete {
                z-index: 5000;
            }
            
            .alexrow {
                margin-top: 8px;
            }
            
            #map {
                height: 300px;
                width: 600px;
            }
            /* Google map */
            
            #popup-Googlemap .slickWindow iframe,
            #popup-Googlemap #mapDiv {
                width: 100%;
                height: 100%;
            }
            
            #clinicProfile .slickWindow * {
                box-sizing: border-box;
            }
            
            #clinicProfile .slickWindow {
                overflow: auto;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar {
                width: 6px;
                height: 2px;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-button {
                width: 0px;
                height: 0px;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-thumb {
                background: #acacac;
                border: 0px none #ffffff;
                border-radius: 0;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-thumb:hover {
                background: #000000;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-thumb:active {
                background: #000000;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-track {
                background: #f0f0f0;
                border: 0px none #ffffff;
                border-radius: 0;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-track:hover {
                background: #f0f0f0;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-track:active {
                background: #f0f0f0;
            }
            
            #clinicProfile .slickWindow::-webkit-scrollbar-corner {
                background: transparent;
            }
            
            #clinicProfile .slickWindow .actions {
                display: inline-block;
                width: 100%;
                padding: 28px 36px 36px 36px;
            }
            
            #clinicProfile .slickWindow .action {
                border: #42abb5;
                font-weight: 800;
                border: solid 1px #333;
                text-align: center;
                width: 100%;
                height: 50px;
                line-height: 50px;
                cursor: pointer;
                transition: all 0.1s ease;
            }
            
            #clinicProfile .slickWindow .action:hover {
                background: #42abb5;
                border-color: #42abb5;
                color: #fff;
            }
            
            #clinicProfile .slickWindow .cartItems {
                display: inline-block;
                width: 100%;
                overflow-y: auto;
                overflow-x: hidden;
            }
            
            #clinicProfile .slickWindow .cartItems .clinic-title {
                margin: 1px 0 14px;
                padding: 0 90px 0 10px;
                font-size: 20px;
                width: 100%;
                color: #313436;
                font-weight: 400;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden
            }
            
            #clinicProfile .slickWindow .cartItems .clinic-address {
                margin: 1px 0 14px;
                padding: 0 90px 0 10px;
                font-size: 13px;
                color: #63707b;
                font-weight: 400
            }
            
            #clinicProfile .slickWindow .cartItems .clinic-mobile {
                margin: 1px 0 14px;
                padding: 0 90px 0 10px;
                font-size: 13px;
                color: #63707b;
                font-weight: 400
            }
            
            #clinicProfile .slickWindow .cartItems img {
                max-width: 400px;
                max-height: 300px;
            }
            
            #clinicProfile .slickWindow .cartItems p {
                color: #605833;
                font-family: Enriqueta;
                font-size: 16px;
                padding: 10px 0;
                margin: 0 0 24px 10px;
                line-height: 20px;
            }
            
            .search-card-contain .search-card-top .col-sm-12,
            .col-lg-8 {
                padding-right: 15px;
                padding-left: 15px;
            }
            
            .nav-tabs {
                margin-bottom: 30px;
            }
            
            .nav-tabs>li>a {
                border: 1px solid #cccccc;
                color: #000;
                cursor: pointer;
            }
            
            .nav-tabs>li.active>a {
                font-weight: bold;
            }
            
            .modal-body {
                padding: 0;
            }
            
            .radio-inline {
                width: auto;
                margin: 0;
            }
            
            .container-fluid {
                padding-top: 15px;
            }
            
            .col-md-6,
            .col-md-1 {
                padding-left: 0px;
                padding-right: 0px;
            }
            
            .modal-footer .btn {
                margin-top: 5px;
            }
            
            .modal-footer .btn+.btn {
                margin-left: 0px;
            }
            
            .he-global-pagination {
                clear: both;
                float: none;
                width: 100%;
                text-align: right;
                margin: 20px 0 30px
            }
            /*@media (max-width: 767px) {
                .he-global-pagination {
                    display: none
                }
            }*/
            
            .he-global-pagination .he-global-paginner {
                width: auto;
                display: inline-block
            }
            
            .he-global-pagination .he-global-paginner .he-global-pagtext {
                display: inline-block;
                font-size: 12px;
                color: #63707b;
                padding: 0 30px
            }
            
            .he-global-pagination .he-global-paginner .he-global-paglinks {
                display: inline-block;
                background-color: #fff;
                -webkit-box-shadow: 2px 2px 1px 0 rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 2px 2px 1px 0 rgba(0, 0, 0, 0.2);
                box-shadow: 2px 2px 1px 0 rgba(0, 0, 0, 0.2)
            }
            
            .he-global-pagination .he-global-paginner .he-global-paglinks .page-ellip {
                padding: 0 19px
            }
            
            .he-global-pagination .he-global-paginner .he-global-paglinks>span bb {
                color: #313436;
                font-size: 15px;
                font-weight: 600;
                padding: 13px 19px;
                display: inline-block;
                line-height: normal
            }
            
            .he-global-pagination .he-global-paginner .he-global-paglinks>span a {
                color: #008ec8;
                font-size: 15px;
                font-weight: 600;
                padding: 13px 19px;
                display: inline-block;
                line-height: normal
            }
            
            .he-global-pagination .he-global-paginner .he-global-paglinks>span a:hover {
                color: #ffffff;
                background-color: #008ec8;
            }
            
            #leaderboard-slot1 {
                margin-top: 25px
            }
            
            @media (max-width: 767px) {
                #leaderboard-slot1 {
                    display: none
                }
            }
            
            #leaderboard-slot2 {
                margin-bottom: 25px
            }
            
            @media (max-width: 767px) {
                #sidebar-mrec-slot1 {
                    text-align: center
                }
            }
            
            #sidebar-mrec-slot2 {
                margin-top: 25px
            }
            
            @media (max-width: 767px) {
                #sidebar-mrec-slot2 {
                    margin-bottom: 25px;
                    text-align: center
                }
            }
            
            #sidebar-mrec-slot3 {
                margin-top: 25px;
                margin-bottom: 25px
            }
            
            #sidebar-mrec-group1 {
                margin-top: 26px
            }
            
            @media (max-width: 767px) {
                #sidebar-mrec-group2 {
                    display: none
                }
            }
        </style>


    </head>

    <body>
        <!--header-->
        <div class="container bars">
            <em class="bars_"></em>
        </div>

        <?php
            include_once 'classes/Menu/menu.php';
            ?>
            <header>

                <h1 class="navbar-brand navbar-brand_">
                    <a href="index.php"><img src="img/<?php echo $lang['Lang0004']; ?>"
               alt="logo" height="55" width="346"></a>
                </h1>
            </header>


            <div id="popup-Googlemap" class="slickModal">
                <div class="slickWindow">
                    <div id="mapDiv"></div>
                </div>
            </div>

            <div id="clinicProfile" class="slickModal">
                <div class="slickWindow">
                    <div class="cartItems">
                        <img class="clinic-img" />
                        <div class="clinic-title"></div>
                        <div class="clinic-mobile"></div>
                        <div class="clinic-address"></div>
                        <p class="clinic-overview"></p>
                    </div>



                    <div class="actions">
                        <div class="action closeModal">Close</div>

                    </div>

                </div>
            </div>

            <div class="content">

                <div class="thumb-box9" data-stellar-background-ratio="0.1">

                    <div class="tab_container">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                            <ul class="nav nav-tabs" id="Day_Tab">
                            </ul>

                            <div class="tab-content" id="Clinic_Tab_Content"></div>
                            <div class="tab-content" id="Doctor_Tab_Content"></div>



                            <section class="search-card-contain search-card-top warning">
                                <div class="search-card-overflow">
                                    <h1>Sorry, we couldn't find any appointments matching your search criteria</h1>
                                    <h2>Try changing your search criteria for more results</h2>

                                </div>
                            </section>

                            <div class="he-global-pagination">
                                <div class="he-global-paginner">

                                </div>
                            </div>

                        </div>
                    </div>









                </div>

            </div>



            <div class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="gridSystemModalLabel" id="searchModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                            <h2 class="modal-title" id="gridSystemModalLabel">
                                <!-- 高级搜索-->
                                <?php echo $lang['Lang0318']; ?>
                            </h2>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form class="form-horizontal" role="form" id="modal_form_search">
                                    <input type="hidden" class="form-control" name="action_type" id="action_type" value="index_search">
                                    <input type="hidden" class="form-control" name="CUSTOMER_USER_ID" id="CUSTOMER_USER_ID">
                                    <div class="form-group">
                                        <label for="DOCTOR_TYPE" class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                                             <!-- 医生类别-->
                                             <?php echo $lang['Lang0065']; ?>
                                          </label>
<div class="col-md-2">
                                        <select class="form-control" name="DOCTOR_TYPE" id="DOCTOR_TYPE">
                                                <option value="">All</option>
                                                <option value="GP"><?php echo $lang['Lang0333']; ?></option>
                                                <option value="Dentist"><?php echo $lang['Lang0334']; ?></option>
                                                <option value="Dietitian"><?php echo $lang['Lang0335']; ?></option>
                                                <option value="Physio"><?php echo $lang['Lang0336']; ?></option>
                                                <option value="Podiatrist"><?php echo $lang['Lang0337']; ?></option>
                                                <option value="Pschologist"><?php echo $lang['Lang0338']; ?></option>
                                                <option value="Chiropractor"><?php echo $lang['Lang0339']; ?></option>
                                                <option value="Audiologist"><?php echo $lang['Lang0340']; ?></option>
                                                <option value="Optometry"><?php echo $lang['Lang0341']; ?></option>
                                                <option value="Skin Doctors"><?php echo $lang['Lang0342']; ?></option>
                                                <option value="Counsellor"><?php echo $lang['Lang0343']; ?></option>
                                            
                                        </select>
                                        </div>
                                        <!--<div class="col-xs-12 col-sm-12">-->
                                        <!--<label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="GP">GP</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Dentist">Dentist</label>
                                        <label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Dietitian">Dietitian</label>
                                        <label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Physio">Physio</label>
                                        <label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Podiatrist">Podiatrist</label>
                                        <label class="radio-inline"><input type="radio"  class="custom-control-input" name="DOCTOR_TYPE" value="Pschologist">Pschologist</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Chiropractor">Chiropractor</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Audiologist">Audiologist</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Optometry">Optometry</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Skin Doctors">Skin Doctors</label>
                                        <label class="radio-inline"><input type="radio" class="custom-control-input" name="DOCTOR_TYPE" value="Counsellor">Counsellor</label>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="form-group  col-md-12">
                                        <label for="LANGUAGE" class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                                             <!-- 位置-->
                                             <?php echo $lang['Lang0326']; ?>
                                          </label>
                                        <select id="LANGUAGE" name="LANGUAGE" multiple="multiple" class="form-control">
                                             <option value="English">English</option>
                                             <option value="Chinese">Chinese</option>
                                             <option value="Spanish">Spanish</option>
                                             <option value="Arabic">Arabic</option>
                                          </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="col-md-6">
                                            <label for="CLINIC_SUBURB" class="col-md-3">
                                             <!-- 位置-->
                                             <?php echo $lang['Lang0316']; ?>
                                          </label>

                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="CLINIC_SUBURB" name="CLINIC_SUBURB">
                                            </div>

                                        </div>
                                        <!--<div class="clearfix visible-xs-block"></div>-->

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="CLINIC_NAME" class="col-md-3">
                                             <!-- 诊所名称-->
                                             <?php echo $lang['Lang0049']; ?>
                                          </label>
                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" class="form-control" id="CLINIC_NAME" name="CLINIC_NAME">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="DOCTOR_NAME" class="col-md-3">
                                             <!-- 医生姓名-->
                                             <?php echo $lang['Lang0297']; ?>
                                          </label>
                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" class="form-control" id="DOCTOR_NAME" name="DOCTOR_NAME">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="distance" class="col-md-3">
                                             <!-- 医生距离-->
                                             <?php echo $lang['Lang0298']; ?>
                                          </label>
                                        <div class="col-xs-12 col-sm-12 col-md-8">

                                            <select class="form-control" id="DISTANCE" name="DISTANCE">
                                             <option value="">
                                                <!-- All--><?php echo $lang['Lang0042']; ?>
                                             </option>
                                             <option value="5km">5km</option>
                                             <option value="10km">10km</option>
                                             <option value="20km">20km</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="APPOINTMENT_DATE" class="col-md-3">
                                             <!-- 预约日期-->
                                             <?php echo $lang['Lang0319']; ?>
                                          </label>
                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" class="form-control form_datetime" id="APPOINTMENT_DATE" name="APPOINTMENT_DATE">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <!-- 取消-->
                                    <?php echo $lang['Lang0139']; ?>
                                 </button>
                            <a class="btn btn-danger" href="userSaveSearch.php" id="btn_save_search_manage">
                                <!-- 常用搜索条件管理-->
                                <?php echo $lang['Lang0279']; ?>
                            </a>
                            <button type="button" class="btn btn-warning" id="btn_save_search">
                                    <!-- 保存为常用搜索条件-->
                                    <?php echo $lang['Lang0305']; ?>
                                 </button>
                            <button type="button" class="btn btn-primary" id="btn_search">
                                    <!-- 搜索-->
                                    <?php echo $lang['Lang0308']; ?>
                                 </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->


            <div class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="gridSystemModalLabel" id="signupModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="gridSystemModalLabel">
                                <!-- 注册|预约医生-->
                                <?php echo $lang['Lang0314']; ?>
                            </h2>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form class="form-inline" role="form" id="modal_form_signup">
                                    <input type="hidden" class="form-control" name="action_type" id="action_type" value="create">
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_USER_MAIL">
                                 <!-- 邮箱--><?php echo $lang['Lang0048']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" style="margin-left: 50px;" class="form-control" id="CUSTOMER_USER_MAIL" name="CUSTOMER_USER_MAIL">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_USER_PWD">
                                 <!-- 密码--><?php echo $lang['Lang0161']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="password" style="margin-left: 26px" class="form-control" name="CUSTOMER_USER_PWD" id="CUSTOMER_USER_PWD">
                                        </div>
                                        <div class="form-group">
                                            <label for="CONFIME_PWD" style="margin-left: 129px">
                                 <!-- 确认密码--><?php echo $lang['Lang0199']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="password" class="form-control" name="CONFIME_PWD" id="CONFIME_PWD">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="TITLE_ID">
                                 <!-- title-->
                                 <?php echo $lang['Lang0322']; ?><span class="span-red">*</span>
                              </label>
                                            <select style="margin-left: 57px" class="form-control" id="TITLE_ID" name="TITLE_ID">
                              </select>
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_FIRSTNAME">
                                 <!-- 名-->
                                 <?php echo $lang['Lang0320']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" style="margin-left: 17px" class="form-control" id="CUSTOMER_FIRSTNAME" name="CUSTOMER_FIRSTNAME" maxlength="50">
                                        </div>
                                        <div class="form-group">
                                            <label for="CUSTOMER_LASTNAME" style="margin-left: 114px">
                                 <!-- 姓-->
                                 <?php echo $lang['Lang0321']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" class="form-control" id="CUSTOMER_LASTNAME" name="CUSTOMER_LASTNAME" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="GENDER_ID">
                                 <!-- 性别-->
                                 <?php echo $lang['Lang0217']; ?><span class="span-red">*</span>
                              </label>
                                            <select class="form-control" style="margin-left: 40px" id="GENDER_ID" name="GENDER_ID">
                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="CUSTOMER_BIRTHDAY" style="margin-left: 260px">
                                 <!-- 生日-->
                                 <?php echo $lang['Lang0220']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" class="form-control" name="CUSTOMER_BIRTHDAY" id="CUSTOMER_BIRTHDAY" placeholder="Birthdate (dd/mm/yyyy)">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_PHONE_NO">
                                 <!-- 电话号码-->
                                 <?php echo $lang['Lang0221']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" class="form-control" style="margin-left: 42px" name="CUSTOMER_PHONE_NO" id="CUSTOMER_PHONE_NO" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label for="MEDICAL_CARD_NO" style="margin-left: 67px">
                                 <!-- 医疗卡号-->
                                 <?php echo $lang['Lang0150']; ?>
                                 <!--<span class="span-red">*</span>-->
                              </label>
                                            <input type="text" class="form-control" name="MEDICAL_CARD_NO" id="MEDICAL_CARD_NO" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_ADDR">
                                 <!-- 详细地址--><?php echo $lang['Lang0152']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" class="form-control" style="margin-left: 34px" name="CUSTOMER_ADDR" id="CUSTOMER_ADDR">
                                        </div>
                                    </div>
                                    <div class="row alexrow">
                                        <div class="form-group">
                                            <label for="CUSTOMER_SUBURB">
                                 <!-- 区--><?php echo $lang['Lang0153']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" style="margin-left: 40px" class="form-control" name="CUSTOMER_SUBURB" id="CUSTOMER_SUBURB">
                                        </div>
                                        <div class="form-group">
                                            <label for="STATE_ID">
                                 <!-- 州--><?php echo $lang['Lang0154']; ?><span class="span-red">*</span>
                              </label>
                                            <select class="form-control" id="STATE_ID" name="STATE_ID">
                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="CUSTOMER_POSTCODE">
                                 <!-- 邮编--><?php echo $lang['Lang0155']; ?><span class="span-red">*</span>
                              </label>
                                            <input type="text" class="form-control" name="CUSTOMER_POSTCODE" id="CUSTOMER_POSTCODE">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                     <!-- Close--><?php echo $lang['Lang0139']; ?>
                  </button>
                            <button type="button" class="btn btn-primary" id="btn_signin">
                     <!-- 注册|预约医生--><?php echo $lang['Lang0314']; ?>
                  </button>
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



                    <script id="tmp_day_tab" type="text/x-jsrender">
                        {{for #data}}

                        <li {{if day==activeID}}class="active" {{else}}{{/if}}>
                            <a data-toggle="tab" class="day-tab">{{>day}}</a>
                        </li>

                        {{/for}}

                    </script>









                    <script id="tmp_clinic_content" type="text/x-jsrender">

                        <div class="tab-pane active">
                            {{for #data}}
                            <section class="search-card-contain search-practice  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="search-card-overflow">
                                    <div class="search-main-dets">
                                        <h2 class="search-main-title showProfile">{{>clinicName}}</h2>


                                        <div class="search-suburb-contain clearfix">
                                            <h3 class="search-suburb">{{>clinicSuburb}}</h3>
                                            <div class="search-map-dets">

                                                <span class="search-map-link"><span class="search-map-ico"></span><span class="search-map-txt"><a class="showMap" street="{{>clinicAddress}}" suburb="{{>clinicSuburb}}" lat="{{>clinicLat}}" lng="{{>clinicLng}}">Map</a></span></span>
                                            </div>
                                        </div>
                                        <div class="search-images-dets">
                                            <div class="search-images-photo">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 1;"><img class="lazy" src="{{>clinicPIC}}" draggable="false"></li>
                                                    </ul>
                                                </div>
                                                <img src="{{>clinicPIC}}">
                                            </div>
                                        </div>
                                        <div class="search-addie clinic-addr">
                                            {{>clinicAddress}}

                                        </div>
                                        <div class="clinic-phone" style="display:none">
                                            {{>clinicPhone}}
                                        </div>
                                        <div class="search-addie">
                                            {{>language}} {{if isYellowPage==0}}
                                            <a class="showDoctors" keyClinicID="{{>clinicID}}">
                                                <?php echo $lang['Lang0324']; ?>
                                            </a>

                                            {{else}}{{/if}}
                                        </div>

                                        <div class="search-overview" style="display:none;">
                                            {{>overview}}
                                        </div>
                                    </div>
                                </div>
                                <div class="search-time-container clearfix closed">
                                    <div class="search-time-scroll">
                                        {{if isYellowPage==0}}<span class="search-time-booknow">{{>day}}</span> {{else}}{{/if}}
                                        {{for timeslot}}
                                        <a class="apptTimeBtn">{{>time}}</a> {{/for}}

                                        <span class="search-more apptTimeMore">More</span>
                                        <a href="#" class="search-more-mob apptTimeMore">More</a>
                                    </div>
                                </div>
                            </section>
                            {{/for}}
                        </div>

                    </script>


                    <script id="tmp_doctor_content" type="text/x-jsrender">
                        {{for #data}}
                        <section class="search-card-contain search-practice  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="search-card-overflow">
                                <div class="search-main-dets">
                                    <h2 class="search-main-title showProfile">{{>doctorName}}</h2>


                                    <div class="search-suburb-contain clearfix">
                                        <h3 class="search-suburb">{{>clinicName}}</h3>
                                    </div>
                                    <div class="search-images-dets">
                                        <div class="search-images-photo">
                                            <div class="flexslider">
                                                <ul class="slides">
                                                    <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 1;"><img class="lazy" src="{{>doctorPIC}}" draggable="false"></li>
                                                </ul>
                                            </div>
                                            <img src="{{>doctorPIC}}">
                                        </div>
                                    </div>
                                    <div class="search-overview" style="display:none;">
                                        {{>overview}}
                                    </div>
                                    <div class="search-addie doctor-addr">
                                        {{>clinicAddress}}

                                    </div>
                                    <div class="search-addie">
                                        {{>language}}
                                        <a class="save2favBtn" keyDoctorID="{{>doctorID}}">
                                            <?php echo $lang['Lang0171']; ?>
                                        </a>
                                        <a class="jumptouserSaveDoctor" href="userSaveDoctor.php">
                                            <!-- 收藏医生管理-->
                                            <?php echo $lang['Lang0278']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-time-container clearfix closed">
                                <div class="search-time-scroll doctor-time-scroll">
                                    <span class="search-time-booknow">{{>day}}</span> {{for timeslot ~pdoctorid=doctorID}}
                                    <a class="apptTimeBtn" keyDoctorID="{{>~pdoctorid}}" keyDate="{{>~ppdate}}" keyTime="{{>originalTime}}">{{>time}}</a>                                    {{/for}}

                                    <span class="search-more apptTimeMore">More</span>
                                    <a href="#" class="search-more-mob apptTimeMore">More</a>
                                </div>
                            </div>
                        </section>
                        {{/for}}
                        </div>

                    </script>

                    <!--vendor-->
                    <script src="js/jquery.js"></script>
                    <script src="js/jsrender.js"></script>
                    <script src="js/underscore-min.js"></script>


                    <script src="js/jquery-migrate-1.2.1.min.js"></script>
                    <script src="js/jquery.easing.1.3.js"></script>
                    <script src="js/jquery.mobilemenu.js"></script>
                    <script src="js/jquery.equalheights.js"></script>
                    <script src="js/jquery.ui.totop.js"></script>
                    <script src="js/jquery.cookie.js"></script>

                    <script src="js/bootstrap.min.js"></script>
                    <!-- autocomplete -->
                    <script src="js/jquery-ui.js"></script>
                    <!-- dialog -->
                    <script src="js/bootstrap-dialog.min.js"></script>
                    <script src="js/tm-scripts.js"></script>
                    <script src="js/bootstrapValidator.js"></script>
                    <script src="js/jquery.maskedinput.min.js"></script>
                    <!-- date time -->
                    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
                    <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
                    <script src="js/bootstrap-multiselect.js"></script>
                    <script src="js/slickModal.js"></script>

                    <!--user js-->
                    <script src="js/main/pub.js"></script>
                    <script src="js/main/searchDoctor.js"></script>
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCyZERlQBAH0_PRkVI8bu7oqx8HIBlyZG4&libraries=geometry"></script>

    </body>

    </html>