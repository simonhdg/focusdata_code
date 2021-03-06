$(document).ready(function() {
  
  var str = sessionStorage.doctorinfo;
  //处理浏览 修改
  if(str){
    var json_value = JSON.parse(str);
    console.log(json_value);

    if(json_value.DOCTOR_GENDER == "0"){
      $("#DOCTOR_GENDER option[value='"+ 0 +"']").attr("selected",true);
    }
    if(json_value.DOCTOR_GENDER == "1"){
      $("#DOCTOR_GENDER option[value='"+ 1 +"']").attr("selected",true);
    }

    var clinic_addr = json_value.CLINIC_ADDR +","+ json_value.CLINIC_SUBURB +","+ json_value.STATE_NAME +","+ json_value.CLINIC_POSTCODE;
    // $('#DOCTOR_PHOTO').attr('src','img/doctors/'+json_value.DOCTOR_PHOTO);
    $('#CLINIC_NAME').text(json_value.CLINIC_NAME);
    $('#CLINIC_ADDR').text(clinic_addr);
    // $('#STATE_NAME').text(json_value.STATE_NAME);
    $('#DOCTOR_TYPE').val(json_value.DOCTOR_TYPE);
    $('#DOCTOR_NAME').val(json_value.DOCTOR_NAME);
    // $('#DOCTOR_GENDER').val(json_value.DOCTOR_GENDER);
    $('#DOCTOR_INFO').val(json_value.DOCTOR_INFO);
    $('#DOCTOR_ID').val(json_value.DOCTOR_ID);
    $('#DOCTOR_PHOTO').val(json_value.DOCTOR_PHOTO);
    $("#ACTIVE_STATUS").find("option[value='"+json_value.ACTIVE_STATUS+"']").attr("selected",true);
    $('#feedback').html("<img src='img/doctors/"+json_value.DOCTOR_PHOTO+"'/>");

    if(json_value.imgId == "opr_info"){
      $("#adminUpdDoctorDetail input").attr("disabled","disabled");
      $("#adminUpdDoctorDetail select").attr("disabled","disabled");
      $("#adminUpdDoctorDetail textarea").attr("disabled","disabled");
      $("#submit_form input").attr("disabled","disabled");           
      $("#btn_submit").attr("disabled","disabled");
    }

  }

  $('#btn_submit').click(function (){

///////////////////////////////////组织ajax 请求参数 begin///////////////////////////////
    requesttype = 1;
    func_code = "CU07";
    //form序列化成json
    json_form = $("#adminUpdDoctorDetail").serializeObject();

    var json_stringify=JSON.stringify(json_form);
    json_form = json_stringify.replace(/[ ]/g,"");

    //生成输入参数
    json_str = request_const(JSON.parse(json_form),func_code,requesttype);

    console.log(json_str);

    result = true;
    $.ajax({
        type: "POST",
        url: "classes/class.ClinicOprDoctor.php",
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
              // var data = ret.data[0];
              window.location.href="adminQryDoctor.php"; 
            }else{
              alert(func_code+":"+ret.status.ret_code + " " + ret.status.ret_msg);
              result = false;
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
    return false;
  });

  $("#upload_file").change(function(){
    if($("#upload_file").val() != '')  $("#submit_form").submit();
  });

  $("#exec_target").load(function(){
    var data = $(window.frames['exec_target'].document.body).find("textarea").html();
    img_path=$("#upload_file").val();
    var arr = img_path.split('\\');
    $('#DOCTOR_PHOTO').val(arr[2]);
    if(data != null){
      $("#feedback").replaceWith(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
      // $("#upload_file").val('');
    }
  });

});