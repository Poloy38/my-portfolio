<?php 

    if (isset($_POST['sendmail'])) {
        $name = addcslashes($_POST['name']);
        $email = addcslashes($_POST['email']);
        $msg = addcslashes($_POST['message']);

        $to = "ply17728@gmail.com";

        $message = $msg;

        $header = "From : ". $email . "\r\n";
        $header .= "MINE-Version 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail($to,$message,$header)
        if ($retval) {
            echo "ส่ง Email สำเร็จ";
        } else {
            echo "ส่ง Email ไม่สำเร็จ";
        }
    }

    
?>