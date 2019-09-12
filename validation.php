<?php

error_reporting(1);

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    
    $to='info@studiocowork.in';
    
    $subject = "Booking Enquiry";
    
    
    
    /* Details of Complainant */
    
    $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    
    $data.='<tr><td colspan="2" align="center">Booking Enquiry Details :-</td></tr>';/* field name */
    
    $data.='<tr><td> Email :</td><td>'.$_POST['email'].'</td></tr>';
    
    $data.='<tr><td>Name :</td><td>'.$_POST['name'].'</td></tr>';
    
    $data.='<tr><td>Company Name : </td><td>'.$_POST['cname'].'</td></tr>';
    
    $data.='<tr><td>Industry : </td><td>'.$_POST['industry'].'</td></tr>';
    
    $data.='<tr><td>Mobile No. :</td><td>'.$_POST['mno'].'</td></tr>';
    
    $data.='<tr><td>Starting Date :</td><td>'.$_POST['sdate'].'</td></tr>';
    
    $data.='<tr><td>Ending Date:</td><td>'.$_POST['edate'].'</td></tr>';
    
    $data.='<tr><td>From Time:</td><td>'.$_POST['timepicker-one'].'</td></tr>';
    
    $data.='<tr><td>To Time:</td><td>'.$_POST['timepicker-two'].'</td></tr>';
    
  
    $data.='</table>';
    
    
    $message=$data;
    
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $headers .= 'From: <'.$_POST['email'].'>' . "\r\n";
    
    header('Content-Type: application/json');
    
    if(mail($to,$subject,$message,$headers)){
        
        //header('Location: ../index.php?msg=Enquiry sent successfully. Thankyou!');
        //header('Location: success.php');
        echo json_encode(['success'=>true,'message'=>'Enquiry sent successfully. Thankyou!'],true);
        
        /* echo "Enquiry sent successfully. Thankyou! "; */
        
    }
    
    else{
        
        //header('Location: ../index.php?msg=Message sending failed. Please contact admin.');
        //header('Location: failed.html');
        echo json_encode(['error'=>true,'message'=>'Message sending failed. Please contact info@studiocowork.in'],true);
        
        /*  echo "Message sending failed. Please contact info@sniffernity.com"; */
        
    }
}