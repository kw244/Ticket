<?php 

    include('phpqrcode/qrlib.php'); 
     
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $codeContent = htmlspecialchars($_POST['message']);
    
    
    $tempDir = "temp/";
    $webDir = "http://www.blocksacademy.com/ticket/";
    
    // generate filename
    $fileName = 'testtest.png'; 

    $pngFilePath = $tempDir.$fileName; 
    $httpFilePath = $webDir . $pngFilePath;
    
    
	$mail_content = '
        <html>
            <head>
              <title>Your QR code</title>
            </head>
            <body>
              <p>Show this QR code for entry</p>
              <img src="'.$httpFilePath.'" />
            </body>
        </html>
    ';
    
    $mail_subject = "QR code for ".$name;
    $fromEmail = 'hello@blocksacademy.com';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: "Blocks Academy" <'.$fromEmail.'>\r\n';

    //Generate QR code png file using library
    QRcode::png($codeContent, $pngFilePath, QR_ECLEVEL_M, 5); 

    // displaying 
    echo 'Your QR code has been sent';

    //TODO: try using phpmailer to send SMTP
    //send notification email with QR code
	mail($email, $mail_subject, $mail_content, $headers, "-fhello@blocksacademy");

    