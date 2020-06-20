<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public static $socialLogin;
    public function __construct() {
		
        parent::__construct();
		//$socialLogin	=	'Testss';
		//$this->socialLogin	=$	'Tet';
		//$DB = $this->load->database('hodo_mysql' , TRUE);
		
		/*if($this->router->class	== 'social'){
		$this->config->set_item('url_suffix', '.php');
		}*/
        
		if(!isset($_SESSION)) {
			session_start();
		}
		//log_message('debug', "inside updatingSession setting2xxD:".$this->session->userdata('updatingSession'));

		//log_message('debug',"get updateSessionFFl:".$this->session->userdata('updateSession') .">>>>".$this->session->userdata('loginMessage'));
		//$this->createsess($DB);
		if(!isset($_SESSION['HODO_ID']) || (trim($_SESSION['HODO_ID']) == '')) {
			//$this->createintersession($DB);
		}
		//log_message('debug',"get updateSessionFFm:".$this->session->userdata('upSession') .">>>>".$this->session->userdata('loginMessage'));
	
	//echo "--".$_SESSION['HODO_TYPE'];
	
	if(!isset($_SESSION['HODO_ID']) || (trim($_SESSION['HODO_ID']) == '0')){
			header("location: ".base_url()."?ru=".$this->getRequest_URI()."&fromsource=1&pp=".$this->session->userdata('HODO_ID'));
			exit();

		}
		
		if($this->session->userdata('PARENT_HODO_ID')	==	'' || $this->session->userdata('HODO_ID') == '' || $this->session->userdata('OTPVerified') == '')
		{
			header("location: ".base_url()."?ru=".$this->getRequest_URI()."&fromsource=2");
			exit();
		}
		
		
		/*if($this->session->userdata('HODO_TYPE')	==	'U' && ($_COOKIE["outlet"]	=	'' || $_COOKIE["outlet"]=='0') )
		{
			header("location: ".base_url()."?ru=".$this->getRequest_URI()."&fromsource=4");
			exit();
		}*/
		
		 if($this->router->class	=="admin")
		 {
			 if($this->session->userdata('HODO_TYPE')!='A'){
			 	redirect('emr');
			 }
		 }
		$url = $this->getCurrentURL();
		if(!isset($_SESSION['MenuTree']))	//21102014
		{
			//call one time
			
			$parameter_array2 = array($this->session->userdata('PARENT_HODO_ID'),$this->session->userdata('USER_ROLE'));
			$this->db->ms_procedure_query("prcSetDefaultPagePermissions",$parameter_array2);	
			
			if($this->session->userdata('HODO_TYPE') !=	'P'){
			
				$parameter_array20 = array($this->session->userdata('PARENT_HODO_ID'));
				$this->db->ms_procedure_query("prcSetDefaultSettings",$parameter_array20);	
				
			}
			
			$parameter_array = array($_SESSION['HODO_TYPE'],$this->session->userdata('USER_ROLE'),$this->session->userdata('PARENT_HODO_ID'));
			$result = $this->db->ms_procedure_query("prcUserMenuTreeSel",$parameter_array);	
			if($result)
			{
				foreach ($result as $row)
				{
					$menu_page_tree_array[] 	= $row;
				}
			}
			$_SESSION['MenuTree']=$menu_page_tree_array;
			
			$parameter_array = array($_SESSION['HODO_TYPE'],$this->session->userdata('USER_ROLE'),$this->session->userdata('PARENT_HODO_ID'));
			$result = $this->db->ms_procedure_query("prcUserModuleTreeSel",$parameter_array);	
			
			//$DB_SRC = $this->load->database('hodo_mysql' , TRUE);
			if($result)
			{
				foreach ($result as $row)
				{
				
					$check_count	=	1;
					$module_page_tree_array[] 	= array('mn'=>$row['MM_Name'],'mu'=>$row['MM_Url']);
					
					//$_SESSION['Module_'.$row['PUM_Module_FK'].'_Installed']=$check_count;
					
				}
			}
			$_SESSION['ModuleTree']=$module_page_tree_array;
			
			
				
		}
		$i_url = 0;
		$i_url_admin = 0;
		$defined_url = "false";
		
		$_REQUEST['user_access'] = 1;
		
		$parameter_array = array($this->session->userdata('HODO_ID'),$this->session->userdata('PARENT_HODO_ID'),$this->session->userdata('USER_ROLE'),$url,$this->session->userdata('HODO_TYPE'));
		$result_permision = $this->db->ms_procedure_query("prcPagePermissionCheck",$parameter_array);
		if($result_permision)
		{	
			foreach ($result_permision as $row_permission)
			{
				$_REQUEST['user_access'] = $row_permission['user_access'];
				$Stock_Updated_Date	=	$row_permission['Stock_Updated_Date'];
				$_REQUEST['Software_Access'] = $row_permission['Software_Access'];
				$this->getPageHeaders($row_permission);
			}
		}
		/*
		if($Stock_Updated_Date	!=	date('Y-m-d'))
		{
			//call stock day update
			$parameter1_array	=	array(date('Y-m-d'));
			$this->db->ms_procedure_query("prcDrugStockDayBalanceUpd",$parameter1_array);
			
		}*/
		//page access control ends here 
		//$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://")	;	//.$_SERVER['HTTP_HOST'];
		$root	=	( ($_SERVER['HTTPS'] === 'on' || $_SERVER['HTTP_X_FORWARDED_PROTO'] =='https') ? "https://" : "http://");

		if($this->session->userdata('HODO_EMAIL')	==	"" || $this->session->userdata('updateSession') == 'Y' || $this->session->userdata('HODO_Mobile_No')	==	"")
		{
			$this->session->unset_userdata('multi_logins');
			$this->session->unset_userdata('users_list');
			$this->session->unset_userdata('users_list_to_upgrade');
			$this->session->unset_userdata('updateSession');
			$this->session->set_userdata('updateSession','N');
			//log_message('debug',"get updateSession1y:".$this->session->userdata('updateSession') .">>>>".$this->session->userdata('loginMessage'));
			$parameter_array = array($this->session->userdata('HODO_ID'));
			$result = $this->db->ms_procedure_query("prcHodoLoginSel",$parameter_array);
			if($result)
			{	
				foreach ($result as $row)//->result_array()
				{
					//echo str_replace("world","Peter","Hello world!");
					if($row['HL_Profile_Img']	!= '')
					{
						$HL_Profile_Img	=  str_replace('http://','',$row['HL_Profile_Img']);
						$HL_Profile_Img	=  str_replace('https://','',$HL_Profile_Img);
						$HL_Profile_Img =  $root.$HL_Profile_Img;
					}
					if($_SESSION['HODO_TYPE']	==	'U')
					{
						$newsession = array
						(
						'HODO_EMAIL'  			=>  trim($row['HL_Email']),
						'HL_WS_UserID'			=>	trim($row['HL_WS_UserID']),
						'HODO_Mobile_No'  		=>  trim($row['HL_Mobile_No']),
						'HODO_TYPE_DISPLAY_NAME'=>  trim($row['HUT_DisplayName']),
						'HODO_TYPE_NAME'  		=>  trim($row['HUT_TypeName']),
						'HODO_GENDER'			=>	trim($row['SL_SexCode']),
						'Pssword_Set'			=>	trim($row['Pssword_Set']),
						'Password_Modified'		=>	trim($row['HL_Web_Password_Modified']),
						'HL_Web_Password_ModifiedText'=>	trim($row['HL_Web_Password_ModifiedText']),
						'Profile_URL'			=>	trim($HL_Profile_Img)
						);

					}
					else
					{
						$newsession = array
						(
						'HODO_EMAIL'  			=>  trim($row['HL_Email']),
						'HL_WS_UserID'			=>	trim($row['HL_WS_UserID']),
						'HODO_Mobile_No'  		=>  trim($row['HL_Mobile_No']),
						'HODO_TYPE_DISPLAY_NAME'=>  trim($row['HUT_DisplayName']),
						'HODO_TYPE_NAME'  		=>  trim($row['HUT_TypeName']),
						'HODO_GENDER'			=>	trim($row['SL_SexCode']),
						'Pssword_Set'			=>	trim($row['Pssword_Set']),
						'Password_Modified'		=>	trim($row['HL_Web_Password_Modified']),
						'HL_Web_Password_ModifiedText'=>	trim($row['HL_Web_Password_ModifiedText']),
						'Profile_URL'			=>	trim($HL_Profile_Img),
						'CARD_CVV'				=>	trim($row['CM_CVVCode']),
						'CARD_Expiry'			=>	date("m/Y", strtotime(trim($row['CM_ExpiryDate'])))
						);
					}
					$this->session->set_userdata($newsession);
				}
			}
			
			if($this->session->userdata('HODO_TYPE')==	"P")
			{
				$resc1 = $this->db->procedure_query("prcPatientDetailSel",$parameter_array);
				if($resc1){
				foreach ($resc1->result() as $patrow)
				{
					$PM_Card_PK = $patrow->PM_Card_PK;
					
					$newsession = array
					(
					'HODO_AGE'  			=> $patrow->PM_Age,
					'HODO_SEX'  			=> $patrow->PM_Sex,
					'HODO_BLOOD'  			=> $patrow->PM_BloodGroupName
					
					);
					$this->session->set_userdata($newsession);
				}
				}
			}

            if($this->session->userdata('HODO_TYPE')!='U'){
               // $this->utility_model->setupAutoInstallPackages($this->session->userdata('HODO_ID'),$this->session->userdata('HODO_NAME'),$this->session->userdata('HODO_TYPE'));
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
			
			$newsession = array
			(
			'HODO_DOCUMENT_ROOT'  =>	$this->config->item('DOCUMENT_ROOT'));	// trim($row['HO_Option_Value'])
			$this->session->set_userdata($newsession);
			$GLOBALS['HODO_DOCUMENT_ROOT'] = $this->config->item('DOCUMENT_ROOT'); //trim($row['HO_Option_Value'])	
			
			/*
			$parameter_array = array('DOCUMENT_ROOT');
			$result = $this->db->ms_procedure_query("prcHodoOptionSel",$parameter_array);
			if($result)
			{	
				foreach ($result as $row)//->result_array()
				{
					$newsession = array
					(
					'HODO_DOCUMENT_ROOT'  =>	$this->config->item('DOCUMENT_ROOT')					   
					);	// trim($row['HO_Option_Value'])
					$this->session->set_userdata($newsession);
					$GLOBALS['HODO_DOCUMENT_ROOT'] = $this->config->item('DOCUMENT_ROOT'); //trim($row['HO_Option_Value'])	
				}
			}*/
			
		}
	//	echo "path:". $this->session->userdata('HODO_PATH');
	if($_SESSION['HODO_TYPE']!=	'U')	//31072016
	{
		if(!$this->session->userdata('multi_logins'))
		{	
			$parameter_array = array($this->session->userdata('HODO_EMAIL'));//pass parameters in the order
			$result = $this->db->ms_procedure_query("prcHodoLoginCheckByEmail",$parameter_array);
			$this->session->set_userdata('multi_logins',$result);
		}
		if(!$this->session->userdata('users_list'))
		{	
			$parameter_array = array();//pass parameters in the order
			$result = $this->db->ms_procedure_query("prcHodoUserTypeList",$parameter_array);
			$this->session->set_userdata('users_list',$result);
		}
		if(!$this->session->userdata('users_list_to_upgrade'))
		{	
			$parameter_array = array($this->session->userdata('HODO_EMAIL'));//pass parameters in the order
			$result = $this->db->ms_procedure_query("prcHodoUserToUpgrade",$parameter_array);
			$this->session->set_userdata('users_list_to_upgrade',$result);
		}
	}
	if($this->session->userdata('Package_Status') == '')
	{
		if( $this->session->userdata('HODO_TYPE')	==	'D' || $this->session->userdata('HODO_TYPE')	==	'H')
		{
			$Package_Status	=	1;
		}else{
			$Package_Status	=	0;
		}
		$parameter_array = array($this->session->userdata('PARENT_HODO_ID')."_base_package_installed");
		$result = $this->db->ms_procedure_query("prcHodoOptionSel",$parameter_array);
		if($result)
		{	
			foreach ($result as $row)//->result_array()
			{
				$HO_Option_Value	=	trim($row['HO_Option_Value'])		;
				if($HO_Option_Value	==	'1')	//if installed
				{
						//check mysql table for expiry
						$Package_Status	=	2;
				}
			}
		}
		
		$newsession = array
		(
			'Package_Status'  => $Package_Status			   
		);
		$this->session->set_userdata($newsession);
		
	}
		
		
		if($_REQUEST['user_access']	==	'0'){
			$this->checkAccess();
		}
		
		$_REQUEST['pus'] = $this->utility_model->getcurrentpagesetttings();
    //print_r($_SESSION['MenuTree']);

	}
	
	
	public function checkAccess()
  {
  	header("HTTP/1.1 200 OK");
	
	//http_response_code(406);
    if($this->input->get('preview',true)  ==  '1')
    {
      $output  = $this->load->view('access_denied', $data, true);
    }
    else{
      $output =  $this->load->view('header_bs3', $data, true);
      $output  =  $output.$this->load->view('access_denied', $data, true);
      $output  =  $output.$this->load->view('footer_bs3', $data, true);
    }
    echo $output;
    exit;
  }
	
	public function getRequest_URI() {
	   $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on" || $_SERVER['HTTP_X_FORWARDED_PROTO'] =='https') {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}

	public function getCurrentURL()
	{
		//echo $this->router->directory;
		if($this->router->directory	==	'')
		{
			$url = $this->router->class;
			$url = $url."/".$this->router->method ;
		}
		else
		{
			$url = $this->router->directory."".$this->router->class;
			$url = $url."/".$this->router->method ;
		}
		//echo "new url:".$url;
		return $url;
	}
	public function getPageHeaders($page_data)
	{
		$res['meta_title']= $this->config->item('default_title')	;// "HoDo";	//defualt values
		$res['meta_description']=$this->config->item('default_title')	;// "HoDo";	//defualt values
		$res['meta_keywords']= $this->config->item('default_title')	;// "HoDo";	//defualt values
		$res['page_contents']='';
		$res['thankyou_msg']='';
		$res['destination_url']='/';
		$res['login_redirect']='';
		$res['login_type']='0';
		$res['url']='';
		
		if($page_data['PM_Name']!=	'')
		{
			  	$xx = 1;
				if($page_data['PM_Meta_Title']	==	'')
				{
					$page_data['PM_Meta_Title']	=	$page_data['PM_Name'];
				}
				$res['meta_title']= $page_data['PM_Meta_Title'];
				
				$res['meta_description']=$page_data['PM_Meta_Description'];
				$res['meta_keywords']=$page_data['PM_Meta_Keywords'];
				$res['page_contents']=$page_data['PM_Page_Contents'];
				$res['thankyou_msg']=$page_data['PM_Thankyou_Msg'];
				$res['destination_url']=$page_data['PM_Destination_Url'];
				$res['login_redirect']=$page_data['PM_Login_Redirect'];
				$res['login_type']=	'0';//$row->login_type'];
				$res['url']=$page_data['PM_Url'];
			
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
		
		//log_message('debug',"setting createsess " );
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
		
		//log_message('debug',"setting createsess1: ".$qry . " >> ".$ii );
		if($ii ==0)
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			
			$parameter_array = array($ts_hid);
			$result = $this->db->ms_procedure_query("prcHodoLoginSel",$parameter_array);
			if($result)
			{	
				foreach ($result as $row)//->result_array()
				{
					$email = $row['HL_Email'];
				}
			}

				$qry = " insert into php_session (session_id,user_id,date_created,last_updated,ip,app_id,email,hodo_type) values ('$psid','$ts_hid',now(),now(),'$ip','HOD','$email','".$_SESSION['HODO_TYPE']."')";
			$DB->query($qry);
		
		foreach($_SESSION as $key => $value){
		$qry = " insert into php_session_data (session_id,attr_name,attr_value) values ('$psid','".trim($key)."','".trim($value)."')";
		$DB->query($qry);
		
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
		
		//log_message('debug',"phpsession1.".$sql);
		
		if($resultx) {
				foreach ($resultx->result() as $row)
				{
					//log_message('debug',"phpsession2.");
					$t++;
					$email 			= 	$row->email;
					$hodo_type 		= 	$row->hodo_type;
					
				} 
		}
		//log_message('debug',"phpsession3..".$t.$email.$hodo_type);
		if($t>0){
			
		$sql="SELECT * FROM php_session_data WHERE session_id='".$psid."'";
		//log_message('debug',"phpsession4.sql.".$sql);
		$resultx = $DB->query($sql);
		if($resultx) {
			//log_message('debug',"phpsession4.sql2.".$sql);
				foreach ($resultx->result() as $rowx)
				{
						$_SESSION[trim($rowx->attr_name)]=trim($rowx->attr_value);//trim($rowx['attr_value']); 
						
				} 
		}
		//log_message('debug',"phpsession4.");
		$parameter_array = array($email,$hodo_type);
		$result = $this->db->ms_procedure_query("prcHodoUserExistCheck",$parameter_array);
			if($result)
			{	
				foreach ($result as $row)//->result_array()
				{
					//log_message('debug',"phpsession5.");
					$_SESSION['HODO_ID']   = trim($row['HL_Hodo_ID']);
					$_SESSION['TS_HODO_ID']= trim($row['HL_Hodo_ID']);
					$_SESSION['HODO_NAME'] = $row['HL_Name'];
					$_SESSION['HODO_TYPE'] = $row['HUT_UserType'];
					
				}
			}
			
		//
		//log_message('debug',"phpsession6.");
		}
		
		$newsession = array
		(
			'HODO_TYPE'  =>$_SESSION['HODO_TYPE'],
			'HODO_ID'    =>$_SESSION['HODO_ID'],
			'TS_HODO_ID' =>$_SESSION['TS_HODO_ID'],
			'HODO_NAME'  =>$_SESSION['HODO_NAME'],
		);
		//$this->session->sess_destroy();
		$this->session->set_userdata($newsession);
		
		
	}
	
	
	
	public function __destruct() {
		$GLOBALS['meta']	=	null;
   }
}
