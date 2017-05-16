<?php
	
	$nombre = $_POST['userName'];
	$emailFrom = $_POST['userEmail'];
	$telefono = $_POST['userPhone'];
	$mensaje = "Mensaje enviado por $nombre:\n\n" . $_POST['userMsg'] . "\n\n Tel. de $nombre: " . $telefono;

	$emailTo = 'info@veterinariario.com.uy'; //Correo de recepcion de la veterinaria.
	$asunto = 'Mensaje enviado desde la Web - Veterinaria Rio';
	$headers = "From: $emailFrom \r\n";

	$result = mail($emailTo, $asunto, $mensaje, $headers);

	if ($result)
    {
    	echo "<script>alert(\"El correo ha sido enviado correctamente\")</script>";
		echo "<script>setTimeout(\"location.href = '/index.html';\",1500);</script>";
    	
        //header("Location: /index.html");
    }
    else {
        echo "sending mail failed: " . $mail->ErrorInfo;
    }

?>
