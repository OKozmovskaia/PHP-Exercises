<?php
  //Message vars
  $msg = '';
  $msgClass = '';

  // Check for submit
  if(filter_has_var(INPUT_POST, 'submit')) {
   
    // get form-data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if(!empty($name) && !empty($email) && !empty($message)) {
      // Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-warning';
      } else {

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
            <label for="name">Name</label>
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
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
  </div>
  
</body>
</html>