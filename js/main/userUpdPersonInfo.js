var para,json_str,json_form;
var result = true;

$(document).ready(function() {
	
	$("#CUSTOMER_BIRTHDAY").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});

  // var ilogin = $.cookie("ilogin");

  // $('#btn_out').click(function(){
  //   $.cookie("ilogin", "");
  //   // $('#userinfo').html();
  //   window.location.href="index.php"; 

  //   if ($.cookie("fd_rmbUser") == "false") {
  //     $.cookie("fd_userid", "");
  //     $.cookie("fd_username", "");
  //     $.cookie("fd_password", "");
  //     $.cookie("fd_usertype", "");
  //   }

  // });

  // var username,fd_userid;
  // if(ilogin == 1)
  // {
  //   fd_userid = $.cookie("fd_userid");
  //   var fd_usertype = $.cookie("fd_usertype");
  //   var fd_usertypename = $.cookie("fd_usertypename");

  //   var username = $.cookie("fd_username");

  //   $('#userinfo').html(username);
  //   $('#usertype').html("用户类型: "+ fd_usertypename);

  //   $('#sub_userinfo').removeClass("hidden");

  //   if(fd_usertype == 0){
  //     $('#li_ClinicUser').removeClass("hidden");
  //   }else if(fd_usertype == 1){
  //     $('#li_AppRecoder').removeClass("hidden");
  //   }else if(fd_usertype == 2){
  //     $('#li_Admin').removeClass("hidden");
  //   }else{

  //   }
  // }

 //  if(ilogin == 0){
	// alert($('#Lang0019').html());//您未登陆,无法使用此功能! 
 //    history.go(-1);
 //    return false;
 //    // $('#a_userAppointmentRecoder').attr("href","#");
 //    // $('#a_userAppointmentRecoder').attr("color","#FF0000");
 //  }

  var state_id;
  var gender_id;
  var title_id;
  func_code="UI03";
  para={
        action_type: "view",
        CUSTOMER_USER_ID: fd_userid
      };

  json_str = request_const(para,func_code,0);
  // console.log(json_str);
  //请求
  result = true;
  $.ajax({
      type: "POST",
      url: "classes/class.UserDetail.php",
      dataType: "json",
      async:false,
      data: {
          request:json_str
      },
      success: function (msg) {
          var ret = msg.response;
          if(ret.success){
            if(json_str.sequ != ret.sequ){
                alert(func_code+":时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
                result = false;
            }
              var data = ret.data[0];
              if(data.CUSTOMER_GENDER == "0"){
                $("#CUSTOMER_GENDER option[value='"+ 0 +"']").attr("selected",true);
              }
              if(data.CUSTOMER_GENDER == "1"){
                $("#CUSTOMER_GENDER option[value='"+ 1 +"']").attr("selected",true);
              }
      
              $('#CUSTOMER_USER_MAIL').val(data.CUSTOMER_USER_MAIL);
              $('#CUSTOMER_FIRSTNAME').val(data.CUSTOMER_FIRSTNAME);
              $('#CUSTOMER_LASTNAME').val(data.CUSTOMER_LASTNAME);
              $('#CUSTOMER_BIRTHDAY').val(data.CUSTOMER_BIRTHDAY);
              $('#CUSTOMER_ADDR').val(data.CUSTOMER_ADDR);
              $('#CUSTOMER_PHONE_NO').val(data.CUSTOMER_PHONE_NO);
              $('#MEDICAL_CARD_NO').val(data.MEDICAL_CARD_NO);
              $('#CUSTOMER_USER_ID').val(data.CUSTOMER_USER_ID);
              $('#CUSTOMER_POSTCODE').val(data.CUSTOMER_POSTCODE);
              $('#CUSTOMER_SUBURB').val(data.CUSTOMER_SUBURB);
              $('#STATE_ID').val(data.STATE_ID);

              state_id = data.STATE_ID;
              title_id = data.TITLE_ID;
              gender_id = data.GENDER_ID;
          }else{
              alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
              result = false;
          }
          
      },
      error: function(XMLHttpRequest, textStatus, errorThrown){
        //请求失败之后的操作
        var ret_code = "999999";
        var ret_msg = "ajaxError,contact admin please!";
        alert(func_code + ":" + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
        result = false;
     }
  });
  if(!result){
    return result;
  }

  //填充州
  func_code = "SSTE";
  para="";

  json_str = request_const(para,func_code,0);

  // console.log(json_str);
  //请求
  result=true;
  $.ajax({
    type: "POST",
    url: "classes/class.getState.php",
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
            alert(func_code+":时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
            result=false;
          }
          // var data = ret.data[0];
          $.each(ret.data, function(i, item) {
              $("#STATE_ID").append("<option value='"+ item.STATE_ID +"'>" + item.STATE_NAME + "</option>");
          });
          // console.log(data);
        }else{
          alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
          result=false;
        }
        
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        //请求失败之后的操作
        var ret_code = "999999";
        var ret_msg = "Error,contact admin please!";
        alert(func_code + ":" + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
        result=false;
    }
  });
  if(!result){
    return result;
  }

  $("#STATE_ID option[value='"+ state_id +"']").attr("selected",true);
  
  
//填充title
  func_code = "SSTE";
  para="";
  json_str = request_const(para,func_code,0);

  result=true;
  $.ajax({
    type: "POST",
    url: "classes/class.getTitle.php",
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
            alert(func_code+":时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
            result=false;
          }
          // var data = ret.data[0];
          $.each(ret.data, function(i, item) {
              $("#TITLE_ID").append("<option value='"+ item.TITLE_ID +"'>" + item.TITLE_NAME + "</option>");
          });
          // console.log(data);
        }else{
          alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
          result=false;
        }
        
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        //请求失败之后的操作
        var ret_code = "999999";
        var ret_msg = "Error,contact admin please!";
        alert(func_code + ":" + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
        result=false;
    }
  });
  if(!result){
    return result;
  }
  
  $("#TITLE_ID option[value='"+ title_id +"']").attr("selected",true);
  
//填充性别
  func_code = "SSTE";
  para="";
  json_str = request_const(para,func_code,0);

  result=true;
  $.ajax({
    type: "POST",
    url: $('#Lang0323').html(),
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
            alert(func_code+":时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
            result=false;
          }

          $.each(ret.data, function(i, item) {
              $("#GENDER_ID").append("<option value='"+ item.GENDER_ID +"'>" + item.GENDER_NAME + "</option>");
          });

        }else{
          alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
          result=false;
        }
        
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        //请求失败之后的操作
        var ret_code = "999999";
        var ret_msg = "Error,contact admin please!";
        alert(func_code + ":" + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
        result=false;
    }
  });
  if(!result){
    return result;
  }
  
  $("#GENDER_ID option[value='"+ gender_id +"']").attr("selected",true);

  $('#btn_ok').click(function(){
	  
	  
	  /*calculate lat/lng begin*/ 
	  	  var address=$('#CUSTOMER_ADDR').val()+","+$('#CUSTOMER_SUBURB').val()+","+$("#STATE_ID option:selected").text()+","+"Australia";
	  	  var geocoder = new google.maps.Geocoder();
	  	  if (geocoder) {
	  	      geocoder.geocode( { 'address': address}, function(results, status) {
	  	        if (status == google.maps.GeocoderStatus.OK) {
	  	          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
	  	          
	  			    $('#CUSTOMER_LAT').val(results[0].geometry.location.lat());
	  			    $('#CUSTOMER_LNG').val(results[0].geometry.location.lng());
	  
	  

///////////////////////////////////组织ajax 请求参数 begin///////////////////////////////
    func_code = "UU03";
    //form序列化成json
    json_form = $("#userUpdPersonInfo").serializeObject();
    //生成输入参数
    json_str = request_const(json_form,func_code,1);
    //alert(JSON.stringify(json_str));

    console.log(json_str);

///////////////////////////////////组织ajax 请求参数 end///////////////////////////////

    //请求
    result = true;
    $.ajax({
        type: "POST",
        url: "classes/class.UserDetail.php",
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
                  alert(func_code+":时序号错误,请联系管理员ret.sequ"+ret.sequ+" json_str.sequ:"+json_str.sequ);
                  result = false;
              }
              
              alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);

              $.cookie("fd_username", $('#CUSTOMER_USER_MAIL').val());

              var username = $.cookie("fd_username");

              $('#userinfo').html(username);
              // $('#usertype').html("用户类型: "+$.cookie("fd_usertype"));

            }else{
                alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
                result = false;
            }
            
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
          //请求失败之后的操作
          var ret_code = "999999";
          var ret_msg = "ajaxError,contact admin please!";
          alert(func_code + ":" + ret_code + ":" + ret_msg +" textStatus:"+ textStatus);
          result = false;
       }
    });
    if(!result){
      return result;
    }

    return false;
    
	  	        } else {
                    alert("Invalid address!");
                }
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }

    /* calculate lat/lng end */
  })

});