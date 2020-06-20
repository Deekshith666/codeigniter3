<?php include('../Connection.php');?>
<?php
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, POST, OPTIONS ');
header('Access-Control-Allow-Headers: Content-Type, * ');
header('Access-Control-Allow-Credentials: true ');

$data = json_decode(file_get_contents('php://input'), true);
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d h:i:s");
$insertsql = "INSERT INTO [TXN_Payment_HodoMaster]
                     ([TPH_OrderID]
                     ,[TPH_TokenNo]
                     ,[TPH_ProviderID]
                     ,[TPH_ProvideName]
                     ,[TPH_RedirectUrl]
                     ,[TPH_Subdomain]
                     ,[TPH_UserName]
                     ,[TPH_Mobile]
                     ,[TPH_Address]
                     ,[TPH_Email]
                     ,[TPH_Zip]
                     ,[TPH_Amount]
                     ,[TPH_DoctorID]
                     ,[TPH_Payment_Status]
                     ,[TPH_Payment_Remarks]
                     ,[TPH_Online_TxnRef_No]
                     ,[TPH_Added_On]
                     ,[TPH_Payment_Type]
					 ,[TPH_Payment_Method]
					 ,[TPH_Payment_GatewayText]
					 ,[TPH_Payment_Client_or_Hodo])
                 VALUES
                     ('".$data['invoice_fk']."'
                     ,'0'
                     ,'".$data['provider_id']."'
                     ,'".$data['provider_name']."'
                     , '".$data['call_back_url']."'
                     ,'".$data['call_back_url']."'
                     ,'".$data['patient_name']."'
                     ,'".$data['mobile_no']."'
                     ,' '
                     ,'".$data['email_id']."'
                     ,' '
                     ,'".$data['amt']."'
                     ,'".$data['provider_id']."'
                     ,'10'
                     ,'paid'
                     ,'".$data['razorpay_id']."'
                     ,'".$date."'
                     ,'".$data['event']."'
					 ,'".$data['payment_type']."'
					 ,'".$data['payment_gateway_text']."'
					 ,'".$data['payment_client_or_hodo']."'); SELECT SCOPE_IDENTITY()";
                  
      $getResults = sqlsrv_query($conn, $insertsql);
	  echo json_encode($insertsql);	
?>