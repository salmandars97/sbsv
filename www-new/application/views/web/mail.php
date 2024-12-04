<?php
if(isset($_POST["femail"])){

    $to = 'chrislevi011987@gmail.com';
    //$to = 'digitsdevelopment@outlook.com';
    $email= $_POST["femail"];

    sleep(3);

    // $headers = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

    $message ='<table style="width:100%">';

    if(isset($_POST["fname"])){
        $message .= '<tr><td>Name: '.$_POST["fname"].'</td></tr>';
    }
    if(isset($_POST["femail"])){
        $message .= '<tr><td>Email: '.$_POST["femail"].'</td></tr>';
    }
    if(isset($_POST["fphone"])){
        $message .= '<tr><td>Phone: '.$_POST["fphone"].'</td></tr>';
    }
    if(isset($_POST["fmessage"])){
        $message .= '<tr><td>Message: '.$_POST["fmessage"].'</td></tr>';
    }
    if(isset($_POST["foccupation"])){
        $message .= '<tr><td>Ocupation: '.$_POST["foccupation"].'</td></tr>';
    }
    if(isset($_POST["fcountry"])){
        $message .= '<tr><td>Country: '.$_POST["fcountry"].'</td></tr>';
    }
    if(isset($_POST["fsub"])){
        $message .= '<tr><td>Subject: '.$_POST["fsub"].'</td></tr>';
    }
    if(isset($_POST["fmessage"])){
        $message .= '<tr><td>Message: '.$_POST["fmessage"].'</td></tr>';
    }
    $message .= '</table>';

    if (@mail($to, $email, $message, $headers))
    {
       ?>
    <script type="text/javascript">
    window.location = "http://sbsv.test/thanks/";
    </script>      
    <?php 
    }else{
        echo 'failed';
    }
} else {
    return false;
}
?>
