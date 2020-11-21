<html>
  <head><title>Hi!</title></head>
  <body>
    <?php $_name = 'Olga';
          $_age = 34;
          $_eyesColor = 'green';
          $_family = array('Aleksandr', 'Vasilii', 'Antonina');
          $_amIHungry = false;
    ?>
    	<p>Hi! My name is <?php echo $_name; ?>.</p>
      <p>I am <?php echo $_age; ?> years old.</p>
      <p>My eyes are <?php echo $_eyesColor; ?>.</p>
      <p>My husband called <?php echo $_family[0]; ?>, father - <?php echo $_family[1]; ?> and mother - <?php echo $_family[2]; ?>.</p>
      <p>Am I hungry?  <?php if($_amIHungry)  {echo 'Yes!';}  else  {echo 'Not yet!';} ?></p>
  </body>
</html>