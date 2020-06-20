<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_ControllerWithoutSession extends CI_Controller {

    public function __construct() {
        parent::__construct();
		
		$DB = $this->load->database('hodo_mysql' , TRUE);
		
		if(!isset($_SESSION)) {
			session_start();
		}
		

		//$_SESSION['HODO_NAME']
		if($this->session->userdata('HODO_EMAIL')	==	"")
		{
			$parameter_array = array($this->session->userdata('TS_HODO_ID'));
			$result = $this->db->ms_procedure_query("prcHodoLoginSel",$parameter_array);
			if($result)
			{
				foreach ($result as $row)//->result_array()
				{
					$newsession = array
					(
					'HODO_EMAIL'  => trim($row['HL_Email']),
					'HODO_TYPE_DISPLAY_NAME'  => trim($row['HUT_DisplayName']),
					'HODO_TYPE_NAME'  => trim($row['HUT_TypeName']),
					'HODO_GENDER'	=>	trim($row['SL_SexCode'])
					);
					$this->session->set_userdata($newsession);
				}
			}
		}
		if($this->session->userdata('HODO_PATH') == '')
		{
			$parameter_array = array('home_path');
			$result = $this->db->ms_procedure_query("prcHodoOptionSel",$parameter_array);
			if($result)
			{
				foreach ($result as $row)//->result_array()
				{
					$newsession = array
					(
					'HODO_PATH'  => trim($row['HO_Option_Value'])
					);
					$this->session->set_userdata($newsession);
				}
			}
			$parameter_array = array('ENVIRONMENT');
			$result = $this->db->ms_procedure_query("prcHodoOptionSel",$parameter_array);
			if($result)
			{
				foreach ($result as $row)//->result_array()
				{
					$newsession = array
					(
					'HODO_ENVIRONMENT'  => trim($row['HO_Option_Value'])
					);
					$this->session->set_userdata($newsession);
				}
			}
			$parameter_array = array('DOCUMENT_ROOT');
			$result = $this->db->ms_procedure_query("prcHodoOptionSel",$parameter_array);
			if($result)
			{
				foreach ($result as $row)//->result_array()
				{
					$newsession = array
					(
					'HODO_DOCUMENT_ROOT'  => trim($row['HO_Option_Value'])
					);
					$this->session->set_userdata($newsession);
					$GLOBALS['HODO_DOCUMENT_ROOT'] = trim($row['HO_Option_Value'])	;
				}
			}

		}
	//	echo "path:". $this->session->userdata('HODO_PATH');



		$this->getPageHeaders($DB);

		//$this->createsess($DB);
		//$this->createintersession($DB);

		$DB->close();
    
	}
	
	public function getCurrentURL()
	{
		$url = $this->router->class;
		$url = $url."/".$this->router->method ;
		return $url;
	}
	public function getPageHeaders($DB)
	{
		$url = $this->getCurrentURL();
		//$sql = $DB->get_where('ci_page_headers', array('url' => $url));
		//$result['result'] = $sql;
		
		$res['meta_title']= "HoDo";	//defualt values
		$res['meta_description']= "HoDo";
		$res['meta_keywords']= "HoDo";
		$res['page_contents']='';
		$res['thankyou_msg']='';
		$res['destination_url']='/';
		$res['login_redirect']='';
		$res['login_type']='0';
		$res['url']='';
		
		///prcPageMasterSel
		
		$parameter_array = array($url);//pass parameters in the order
		$result = $this->db->ms_procedure_query("prcPageMasterSel",$parameter_array);// $this->db->procedure_query("prcPageMasterSel",$parameter_array);
		//$result['result'] = $result;
		if($result)
		{
			foreach($result as $row)	//->result()
			  {
				$res['meta_title']=$row['PM_Meta_Title'];
				$res['meta_description']=$row['PM_Meta_Description'];
				$res['meta_keywords']=$row['PM_Meta_Keywords'];
				$res['page_contents']=$row['PM_Page_Contents'];
				$res['thankyou_msg']=$row['PM_Thankyou_Msg'];
				$res['destination_url']=$row['PM_Destination_Url'];
				$res['login_redirect']=$row['PM_Login_Redirect'];
				$res['login_type']=	'0';//$row->login_type'];
				$res['url']=$row['PM_Url'];
			  }
		 }
		  $data_rpt['meta']=$res;
		  $GLOBALS['meta'] =$res;
		  return $data_rpt;
	}

	function createsess($DB)
	{
		/*
		
		$res = $this->db->query($qry);
		
		if($res->num_rows()>0){
		
		foreach ($res->result() as $row)
		{
			$last_num = $row->last_num;
		}
		}
		
		*/
		
		log_message('debug',"setting createsess " );
		$psid = md5(session_id());
		$ts_hid = $_SESSION['TS_HODO_ID'];
		
		$qry = " SELECT * from php_session where session_id	=	'$psid'";
		
		$result = $DB->query($qry);
		
		$ii = 0;
		
		if($result) {
		foreach ($result->result() as $row)
		{
			$ii++;
		} 
		}
		
		log_message('debug',"setting createsess1: ".$qry . " >> ".$ii );
		if($ii ==0)
		{
		$ip = $_SERVER['REMOTE_ADDR'];
				$qry = " insert into php_session (session_id,user_id,date_created,last_updated,ip,app_id) values ('$psid','$ts_hid',now(),now(),'$ip','HOD')";
			$DB->query($qry);
		
		foreach($_SESSION as $key => $value){
		$qry = " insert into php_session_data (session_id,attr_name,attr_value) values ('$psid','".trim($key)."','".trim($value)."')";
		$DB->query($qry);
		log_message('debug',"setting createsess end " );
		
		}
		
		}
	}
	function createintersession($DB)
	{
		$psid = $_GET['psid'];
		
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$sql="SELECT * FROM php_session WHERE session_id='".$psid."' and ip = '$ip' and last_updated >= ADDDATE(now(), INTERVAL -20 HOUR_MINUTE) and expired is null ";
		
		//echo $sql;
		$t=0;
		$resultx = $DB->query($sql);
		if($resultx) {
				foreach ($resultx->result() as $row)
				{
					$t++;	
				} 
		}
		
		if($t>0){
		$sql="SELECT * FROM php_session_data WHERE session_id='".$psid."'";
		
		$resultx = $DB->query($sql);
		if($resultx) {
				foreach ($resultx->result() as $rowx)
				{
						$_SESSION[trim($rowx['attr_name'])]=trim($rowx->attr_value);//trim($rowx['attr_value']); 
						
				} 
		}
		}
		
	}
	
	
	
	public function __destruct() {
		$GLOBALS['meta']	=	null;
   }
}
