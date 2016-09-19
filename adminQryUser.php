<?php
include_once 'classes/Header/header.php';
?>

<!--content--> 
<div class="content">
  <div class="stellar-section">
    <div class="thumb-box9" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row left_con">
          <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="list-group">
              <a href="adminQryClinic.php" class="list-group-item" id="user_appointment_recoder" >诊所用户管理</a>
              <a href="adminQryUser.php" class="list-group-item active" id="user_upd_person_pwd">个人用户管理</a>
              <a href="adminQryDoctor.php" class="list-group-item" id="user_upd_person_info">医生信息管理</a>
              <a href="adminUpdPwd.php" class="list-group-item" id="user_upd_person_pwd">修改管理员密码</a>
              <a href="adminService.php" class="list-group-item">服务列表</a>
            </div>
          </div>

          <div class="col-lg-9 col-md-9 col-sm-9 wow fadeInUp" data-wow-delay="0.1s">
              <div class="PersonUser">
                <div class="savedoctor">

                  <h2>个人用户管理</h2>
                  <div class="row">
                      <form class="form-inline" role="form" id="adminQryUser_form">
                          <input type="hidden" class="form-control" name="action_type" id="action_type" value="view_name_area">
                          <div class="form-group">
                            <label for="CUSTOMER_USER_NAME" class="control-label">用户名</label>
                            <input type="text" class="form-control" name="CUSTOMER_USER_NAME" id="CUSTOMER_USER_NAME">
                          </div>

                          <div class="form-group">
                            <label for="CUSTOMER_NAME" class="control-label">用户姓名</label>
                            <input type="text" class="form-control" name="CUSTOMER_NAME" id="CUSTOMER_NAME">
                          </div>

                          <div class="form-group">
                            <label for="CUSTOMER_SUBURB" class="control-label">区</label>
                            <input type="text" class="form-control" name="CUSTOMER_SUBURB" id="CUSTOMER_SUBURB">
                          </div>

                          <div class="form-group">
                            <label for="STATE_ID" class="control-label">州</label>
                            <select class="form-control" name="STATE_ID" id="STATE_ID">
                              <option value="">全部</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="ACTIVE_STATUS" class="control-label">状态</label>
                            <select class="form-control" name="ACTIVE_STATUS" id="ACTIVE_STATUS">
                              <option value="">全部</option>
                              <option value="1">active</option>
                              <option value="0">inactive</option>
                            </select>
                          </div>

                           <button class="btn btn-primary search_ok" id="search_ok"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>  

                           <button class="btn btn-warning" id="btn_active">active</button>
                           <button class="btn btn-danger" id="btn_inactive">inactive</button>
                       </form>
                  </div>

                  <div class="row">
                    <table id="dataTables-example" class="table table-hover  table-bordered" >
                      <thead class="table_title">
                          <tr>
                            <th><input type="checkbox" name="chk_all" id="chk_all"></th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>生日</th>
                            <th>详细地址</th>
                            <th>区</th>
                            <th>州</th>
                            <th>邮编</th>
                            <th>手机号</th>
                            <th>医疗卡号</th>
                            <th>状态</th>
                            <th>操作</th>
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

<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- datetime -->
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script src="js/bootstrap.min.js"></script><!-- dialog --><script src="js/bootstrap-dialog.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="js/main/pub.js"></script>
<script src="js/main/adminQryUser.js"></script>
</body>
</html>