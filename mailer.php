<?php
    require_once './vendor/autoload.php';

   use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
   use Symfony\Component\Mailer\Transport;
   use Symfony\Component\Mailer\Mailer;
   use Symfony\Component\Mime\Email;
   

   

   $transport = Transport::fromDsn('smtp://fernlabphp@gmail.com:jiznilczabxqzvkg@smtp.gmail.com:587');

   $mailer = new Mailer($transport);

   $email = (new Email());
    
   $email->from('fernlabphp@gmail.com');

   $email->to(
    'fernlabphp@gmail.com'
   );

   $email->subject('test');

   $email->text('Testing');

   $email->text('TESTING');

   $mailer->send($email);
    



?>

<!DOCTYPE html>
<html>
    

    <head>
        MESSAGE SENT!<br><br>
    </head>
    <body>
        
    
        
        
    </body>
</html>

