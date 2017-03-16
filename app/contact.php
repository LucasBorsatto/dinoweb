<?
$email = $_POST['email'];
$name = $_POST['name'];
$text = $_POST['text-message'];
$to = "lucas.borsatto@dinocloudconsulting.com";
$subject = "Consulta Web Dino";
$message = '<html>
          <head>
              <title>Consulta desde la Web DinoCloud</title>
          </head>
          <body>
          <h1>Nueva Consulta</h1>
            <p><strong>Nombre y Apellidos:</strong> '.$name.'</p>
            <p><strong>Email:</strong> '.$email.'</p>
            <p><strong>Mensaje:</strong> '.$text.'</p>
          </body>
        </html>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$email."\r\n";
  if(mail($to,$subject,$message,$headers))
  {
    header('Location: http://www.dinocloudconsulting.com/');
  }
  else
  {
    ?><script>alert("Error al intentar enviar el mail. Intente nuevamente!");</script><?
    header('Location: http://www.dinocloudconsulting.com/');
  }
?>
