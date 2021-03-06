<?php
include_once ('class.AppointmentRecoder_db.php');
// define _DBUG_LOG 1;
class AppointmentRecoder
{
	private $AppointmentRecoder;
	private $arr_values = array();
	private $request;
	private $draw;
	private $start;
	private $length;
	private $_dbug;
	private $requesttype;

	public function __construct()
	{
		session_start ();
		$this->AppointmentRecoder = new AppointmentRecoder_DB();
		$this->_dbug = false;
		// $this->user_name = $_SESSION ['fd_user_name'];
		// $this->user_pwd = $_SESSION ['fd_user_pwd'];
		$this->date = date("Y-m-d H:i:s",time());
		if (isset ( $_POST ['request'] )){
			$this->request = $_POST ['request'];
		}
		if (isset ( $_POST ['draw'])){
			$this->draw = $_POST ['draw'];
		}
		if (isset ( $_POST ['start'])){
			$this->start = $_POST ['start'];
		}
		if (isset ( $_POST ['length'])){
			$this->length = $_POST ['length'];
		}
		//加载类型 第一次加载 还是点击按钮

		$this->requesttype = $this->request["requesttype"];

        if($this->_dbug){
            echo "[---AppointmentRecoder---request]";
            print_r($this->request);
        }

		// echo "-------start:".$this->start;
		// echo "-------length:".$this->length;
		// echo "----------AppointmentRecoder:";
		// print_r($this->request);


		$this->arr_values = $this->request["para"];

		if($this->_dbug){
	        echo "[---AppointmentRecoder.php---__construct---arr_values]";
	        print_r($this->arr_values);
	    }

	    if (isset ( $this->arr_values["action_type"] )){
			$action_type = $this->arr_values["action_type"];
			unset($this->arr_values["action_type"]);
		}else
		{
			$action_type = "";
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

	public function viewAll()
	{
		$response["response"]  = array();
		$success = true;
		$ret_msg = "";
		$ret_code = "S00000"; //成功

		// echo "-------start:".$this->start;
		// echo "-------length:".$this->length;

		$records = $this->AppointmentRecoder->col_exists_sql($this->arr_values,$this->requesttype);

		$ret["data"] = $this->AppointmentRecoder->viewAll ($this->arr_values,$this->requesttype,$this->start,$this->length);
		
		if($records>0){
			$success = true;
			$ret_msg="Query successfully";
			$ret_code = "S00000";
		}else if($records==0){
			$success = true;
			$ret_msg="No match data";
			$ret_code = "S00001";
		}else{
			$success = false;
			$ret_msg="Error,contact admin please";
			$ret_code = "999999";
		}

		$status  = array();
		$status["ret_msg"] = $ret_msg;	
		$status["ret_code"] = $ret_code;
		// print_r($status);

		//服务器模式data
		$data  = array();
		$data["draw"] = $this->draw;
		$data["recordsTotal"] = $records;
		$data["recordsFiltered"] = $records;
		$data["data"]=$ret["data"];
		
		// echo $ret;
		$response["response"] = $this->response_const();  //固定参数返回
		$response["response"]["success"] = $success;  //固定参数返回	
		$response["response"]["status"] = $status;  //固定参数返回	
		$response["response"]["data"] = $data;

		// print_r($response);
		echo json_encode ( $response );
	}

	public function update(){
		$response["response"]  = array();
		$success = true;
		$ret_msg = "";
		$ret_code = "S00000"; //成功

		// echo "-------start:".$this->start;
		// echo "-------length:".$this->length;

		$ret = $this->AppointmentRecoder->update ($this->arr_values);
		
		if($ret==1){
			$success = true;
			$ret_msg="Updated successfully";
			$ret_code = "U00000";
		}else if($ret==0){
			$success = false;
			$ret_msg="Updating failed";
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

$AppointmentRecoder = new AppointmentRecoder();
?>