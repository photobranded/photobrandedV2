<?php
$subject    = 'E-mail for Photobranded'; // Subject of your email
$to         = 'phatproductphotography@gmail.com'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_POST['name'] . ' <br/>' .
              'E-mail: ' . $_POST['email'] . ' <br/>' .
              'Phone: ' . $_POST['phone'] . ' <br/>' .
              'Website: ' . $_POST['website'] . ' <br/>' .
              'Message: ' . $_POST['message'];
mail($to, $subject, $message, $headers);
// if (@mail($to, $subject, $message, $headers))
//{
  //echo 'sent';
//}
//else
//{
  //echo 'failed';
//}
?>
