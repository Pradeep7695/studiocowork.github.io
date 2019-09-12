<html>
<head>
<title> CCAVENUE</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(1);
	
	$merchant_data='';
	$working_key='05C6AAD38CF8FE980DA179B99A4EF079';//Shared by CCAVENUES
	$access_code='AVTR79FG43CC49RTCC';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
//https://test.ccavenue.com
//https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

