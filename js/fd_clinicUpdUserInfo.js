var para,json_str,json_form;
var result = true;
var func_code;

$(document).ready(function() {

  var ilogin = $.cookie("ilogin");

  $('#btn_out').click(function(){
    $.cookie("ilogin", "");
    // $('#userinfo').html();
    window.location.href="index.html"; 

    if ($.cookie("fd_rmbUser") == "false") {
      $.cookie("fd_userid", "");
      $.cookie("fd_username", "");
      $.cookie("fd_password", "");
      $.cookie("fd_usertype", "");
    }

  });

  var username,fd_userid;
  if(ilogin == 1)
  {
      username = $.cookie("fd_username");
      fd_userid = $.cookie("fd_userid");

      $('#userinfo').html(username);
      $('#usertype').html("用户类型: "+$.cookie("fd_usertype"));
  }

  if(ilogin == 0){
    alert("您未登陆,无法使用此功能");
    history.go(-1);
    return false;
    // $('#a_userAppointmentRecoder').attr("href","#");
    // $('#a_userAppointmentRecoder').attr("color","#FF0000");
  }

  // alert(fd_userid);
  func_code = "UI03";
  para={
        action_type: "view",
        CLINIC_USER_ID: fd_userid
      };

  json_str = request_const(para, func_code, 0);

  // console.log(json_str);
  //请求
  result = true;
  $.ajax({
      type: "POST",
      url: "classes/class.ClinicDetail.php",
      dataType: "json",
      data: {
          request:json_str
      },
      success: function (msg) {
          // console.log(msg);
          var ret = msg.response;
          if(ret.success){
            if(json_str.sequ != ret.sequ){
                alert(func_code+" 时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
                result = false;
            }
              var data = ret.data[0];
              console.log(data);
              $('#CLINIC_USER_ID').val(data.CLINIC_USER_ID);
              $('#CLINIC_USER_NAME').val(data.CLINIC_USER_NAME);
              $('#CLINIC_NAME').val(data.CLINIC_NAME);
              $('#CLINIC_USER_MAIL').val(data.CLINIC_USER_MAIL);
              $('#CLINIC_ADDR').val(data.CLINIC_ADDR);
          }else{
              alert(func_code + " " +  ret.status.ret_code + " " + ret.status.ret_msg);
              result = false;
          }
          
      },
      error: function(XMLHttpRequest, textStatus, errorThrown){
        //请求失败之后的操作
        var ret_code = "999999";
        var ret_msg = "ajax失败,请联系管理员!";
        alert(func_code + " " +  ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
        result = false;
     }
  });
  if(!result){
    return result;
  }

  $('#btn_ok').click(function(){

///////////////////////////////////组织ajax 请求参数 begin///////////////////////////////
    //form序列化成json
    func_code="CU03";
    json_form = $("#clinicUpdUserInfo").serializeObject();
    //生成输入参数
    json_str = request_const(json_form,func_code,1);
    //alert(JSON.stringify(json_str));

    console.log(json_str);

///////////////////////////////////组织ajax 请求参数 end///////////////////////////////

    //请求
    result = true;
    $.ajax({
        type: "POST",
        url: "classes/class.ClinicDetail.php",
        dataType: "json",
        async:false,
        data: {
            request:json_str
        },
        success: function (msg) {
            // console.log(msg);
            var ret = msg.response;
            if(ret.success){
              if(json_str.sequ != ret.sequ){
                  alert(func_code+" 时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
                  result = false;
              }
              
              alert(func_code + " " + ret.status.ret_code + " " + ret.status.ret_msg);

              $.cookie("fd_username", $('#CLINIC_USER_NAME').val());

              var username = $.cookie("fd_username");

              $('#userinfo').html(username);
              // $('#usertype').html("用户类型: "+$.cookie("fd_usertype"));

            }else{
                alert(func_code + " " + ret.status.ret_code + " " + ret.status.ret_msg);
                result = false;
            }
            
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
          //请求失败之后的操作
          var ret_code = "999999";
          var ret_msg = "ajax失败,请联系管理员!";
          alert(func_code + " " + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
          result = false;
       }
    });
    if(!result){
      return result;
    }

    return false;
  })

});