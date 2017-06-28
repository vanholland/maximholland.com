<?php
$action=$_REQUEST['action'];
    $name=$_REQUEST['firstname'];
	$name=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['text-paragraph'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "Bitte füllen Sie alle Felder aus.<a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="maximholland / E-Mail";
        mail("roman@maximholland.com", $subject, $message, $from);
        }


header("Location: http://www.maximholland.com/nachricht.html");

?> 
