<?php

error_reporting(1);

if($_SERVER['REQUEST_METHOD']=='POST'){


    $to='info@studiocowork.in';

    $subject = "Contact Us Enquiry";


    /* Details of Complainant */

    $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

    $data.='<tr><td colspan="2" align="center">Contact Us Enquiry Details :-</td></tr>';/* field name */

    $data.='<tr><td> Name :</td><td>'.$_POST['name'].'</td></tr>';

    $data.='<tr><td>Mobile No :</td><td>'.$_POST['mobileno'].'</td></tr>';

    $data.='<tr><td>Workspace Option : </td><td>'.$_POST['workspace_option'].'</td></tr>';

    $data.='<tr><td>Number Of Seat :</td><td>'.$_POST['seat'].'</td></tr>';

    $data.='<tr><td>Email Id:</td><td>'.$_POST['email'].'</td></tr>';

    $data.='<tr><td>Starting Date :</td><td>'.$_POST['todate'].'</td></tr>';

    $data.='<tr><td>Ending Date:</td><td>'.$_POST['enddate'].'</td></tr>';


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

    }
}