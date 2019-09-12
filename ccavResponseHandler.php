<?php include('Crypto.php')?>
<?php

	error_reporting(1);
	
	$workingKey='05C6AAD38CF8FE980DA179B99A4EF079';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<br>Thank you for donating us. Your credit card has been charged and your transaction is successful. We will be email your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>transaction Aborted .Please Try Again.";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>transaction Failure.Please Try Again.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	/*echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";*/
?>
<a href="http://studiocowork.in">Go to back </a>