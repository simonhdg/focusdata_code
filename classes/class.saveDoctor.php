<?php
include_once ('class.saveDoctor_db.php');
// define _DBUG_LOG 1;
class saveDoctor
{
	private $saveDoctor;
	private $arr_values = array();
	private $request;
	private $requesttype;
	private $_dbug;

	public function __construct()
	{
		session_start ();
		$this->saveDoctor = new saveDoctor_DB();
		$this->_dbug = false;

		$this->date = date("Y-m-d H:i:s",time());

		if (isset ( $_POST ['request'] )){
			$this->request = $_POST ['request'];
		}

        if($this->_dbug){
            echo "[---saveDoctor---request]";
            print_r($this->request);
        }

		$this->arr_values = $this->request["para"];

		if($this->_dbug){
	        echo "[---saveDoctor---arr_values]";
	        print_r($this->arr_values);
	    }

	    if (isset ( $this->arr_values["action_type"] )){
			$action_type = $this->arr_values["action_type"];
			unset($this->arr_values["action_type"]);
		}else
		{
			$action_type = "";
		}

	    // foreach($this->arr_values as $k=>$v){
	    // 	// echo 'key='.$k.',value='.$v;
	    // 	$this->arr_values[$k]=intval($v);
	    // }

	    $this->requesttype = $this->request["requesttype"];
        if($this->requesttype==0){
   //      	$this->user_name = $this->arr_values['CUSTOMER_USER_NAME'];
			// $this->user_pwd = $this->arr_values['CUSTOMER_USER_PWD'];
			// unset($this->arr_values["CUSTOMER_USER_NAME"]);
			// unset($this->arr_values["CUSTOMER_USER_PWD"]);
        }else if($this->requesttype==1){
        	$this->user_name = $_SESSION ['fd_user_name'];
			$this->user_pwd = $_SESSION ['fd_user_pwd'];
        }

		if($action_type == "create"){
			$this->arr_values["CREATE_USER"] = $this->user_name;
			$this->arr_values["UPDATE_USER"] = $this->user_name;
			$this->arr_values["CREATE_DATE"] = $this->date;
			$this->arr_values["UPDATE_DATE"] = $this->date;
		}else if($action_type == "update"){
			$this->arr_values["UPDATE_USER"] = $this->user_name;
			$this->arr_values["UPDATE_DATE"] = $this->date;
		}else if($action_type == "remove"){
	     //    foreach($this->arr_values as $k=>$v){
		    // 	// echo 'key='.$k.',value='.$v;
		    // 	$this->arr_values[$k]=intval($v);
		    // }
		}

		if($this->_dbug){
	        echo "[---saveDoctor---arr_values]";
	        print_r($this->arr_values);
	    }
		
		
		$this->action = $action_type;

		$this->action_type ();
	}
	private function action_type()
	{
		switch ($this->action)
		{
			case 'create' :
				$this->create ();
				break;
			case 'save' :
				$this->save ();
				break;
			case 'update' :
				$this->update ();
				break;
			case 'remove' :
				$this->remove ();
				break;	
			default :
				$this->viewAll ();
				//$this->getDataTime();
				break;
		}
	}

	public function response_const(){
		$response  = array();
		$response["serviceid "] = $this->request["serviceid"]; //功能编号 300003
		$response["sequ"] = $this->request["sequ"]; //时序号 随机4位数
		$response["systemid"] = $this->request["systemid"];   //focusdata 系统ID 黄页 100
		$response["projectid"] = $this->request["projectid"]; //focusdata项目ID 10001
		return $response;
	}

	public function create()
	{
		$response["response"]  = array();
		$success = true;
		$ret_msg = "";
		$ret_code = "S00101"; //成功
		
		$ret = $this->saveDoctor->create($this->arr_values);

		if($ret>0){
			$success = true;
			$ret_msg="收藏成功";
			$ret_code = "S00101";
			if($ret == 2){
				$success = true;
				$ret_msg="Add this doctor to favorite";
				$ret_code = "S00102";
			}
		}else{
			$success = false;
			$ret_msg="收藏医生Error,contact admin please";
			$ret_code = "S00199";
		}

		$status  = array();
		$status["ret_msg"] = $ret_msg;	
		$status["ret_code"] = $ret_code;

		//服务器模式data
		// $data  = array();
		// $data["draw"] = $this->draw;
		// $data["recordsTotal"] = $records;
		// $data["recordsFiltered"] = $records;
		// $data["data"]=$ret["data"];
		
		// echo $ret;
		$response["response"] = $this->response_const();  //固定参数返回
		$response["response"]["success"] = $success;  //固定参数返回	
		$response["response"]["status"] = $status;  //固定参数返回	
		$response["response"]["data"] = $ret;

		echo json_encode ( $response );
	}

	public function viewAll()
	{
		$response["response"]  = array();
		$success = true;
		$ret_msg = "";
		$ret_code = "S00000"; //成功

		$ret = $this->saveDoctor->viewAll ($this->arr_values);
		
		if($ret!=""){
			$success = true;
			$ret_msg="Query successfully";
			$ret_code = "S00000";
		}else{
			$success = true;
			$ret_msg="No match data";
			$ret_code = "S00001";
		}

		$status  = array();
		$status["ret_msg"] = $ret_msg;	
		$status["ret_code"] = $ret_code;

		//服务器模式data
		// $data  = array();
		// $data["draw"] = $this->draw;
		// $data["recordsTotal"] = $records;
		// $data["recordsFiltered"] = $records;
		// $data["data"]=$ret["data"];
		
		// echo $ret;
		$response["response"] = $this->response_const();  //固定参数返回
		$response["response"]["success"] = $success;  //固定参数返回	
		$response["response"]["status"] = $status;  //固定参数返回	
		$response["response"]["data"] = $ret;

		echo json_encode ( $response );
	}

	public function remove(){
		$response["response"]  = array();
		$success = true;
		$ret_msg = "";
		$ret_code = "S00000"; //成功

		// echo "-------start:".$this->start;
		// echo "-------length:".$this->length;
		// print_r($this->arr_values);

		$ret = $this->saveDoctor->remove ($this->arr_values);
		
		if($ret){
			$success = true;
			$ret_msg="删除成功";
			$ret_code = "U00000";
		}else if($ret==0){
			$success = false;
			$ret_msg="删除失败";
			$ret_code = "U99999";
		}else{
			$success = false;
			$ret_msg="Error,contact admin please";
			$ret_code = "999999";
		}

		$status  = array();
		$status["ret_msg"] = $ret_msg;	
		$status["ret_code"] = $ret_code;
		// print_r($status);

		// //服务器模式data
		// $data  = array();
		// $data["draw"] = $this->draw;
		// $data["recordsTotal"] = $records;
		// $data["recordsFiltered"] = $records;
		// $data["data"]=$ret["data"];
		
		// echo $ret;
		$response["response"] = $this->response_const();  //固定参数返回
		$response["response"]["success"] = $success;  //固定参数返回	
		$response["response"]["status"] = $status;  //固定参数返回	
		$response["response"]["data"] = $ret;

		echo json_encode ( $response );
	}
}

$saveDoctor = new saveDoctor();
?>