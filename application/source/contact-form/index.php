<?php
  //Message vars
  $msg = '';
  $msgClass = '';

  // Check the submit is not empty
  if(filter_has_var(INPUT_POST, 'submit')) {
    // get php mailer for mail()
    require 'php-mailer/PHPMailerAutoload.php';
    // create a new php mailer instance
    $mail = new PHPMailer;
    // tell PHPMailer to use SMTP
    $mail->isSMTP();

    // Enable SMTP debugging
    // 0 = off(for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    // Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    
    // Set the hostname of the mail server
    $mail->Host='smtp.gmail.com';
    // if your network does not support SMTP, over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port=587;
    //Whether to use SMTP authentication
    $mail->SMTPAuth=true;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure='tls';

    $mail->Username = 'olga.kozmovskaia@gmail.com';
    $mail->Password = '123456';
    
    // get form-data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check that required fields are not empty
    if(!empty($name) && !empty($email) && !empty($message)) {
      // validate Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-warning';
      } else {
        // send data from post to email
        //Set who the message is to be sent to
        $mail->addAddress('olga.kozmovskaia@gmail.com');


        $mail->Subject = 'Contact From'.$name;
        $mail->Body = '
        Contact Form
        Name: '.$name.'
        Email: '.$email.'
        Message: '.$message.'
        ';

        // Email headers
        $headers = 'MIME-Version: 1.0'.'\r\n';
        $headers .= 'Content-Type: text/html; charset=UTF-8'.'\r\n';
        $headers .= 'From: ' .$name.'<'.$email.'>'.'\r\n';

        if(!$mail->send()){
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        } else {
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
        }
      }
      
    } else {
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-warning';
    }

  };

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.css">
</head>
<body class="m-5">
  <nav class="navbar  navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Contact Form</a>
      </div>
    </div>
  </nav>

  <!-- Form -->

  <div class="container">
    <!-- Alert message -->
    <?php if ($msg != ''): ?>
      <div class="mt-4 alert alert-dismissible <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif ?>

      <form class="mt-4" method="post" action="">
        <fieldset>
          <div class="form-group">
            <label for="name">Fullname</label>
            <input value = "<?php echo $name; ?>" name="name" type="text" class="form-control" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input value = "<?php echo $email; ?>" name="email" type="email" class="form-control"  placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" rows="3"><?php echo $message; ?></textarea>
          </div> 
            <button name="submit" type="submit" class="btn btn-primary">Send</button>
        </fieldset>
      </form>
  </div>
  
</body>
</html>