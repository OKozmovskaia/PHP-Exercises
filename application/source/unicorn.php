<h2>Exercise 10 'Are you a human, a cat or a unicorn ?'</h2>

<?php

if (isset($_GET['who'])){
	// get the vars
  $user = htmlentities($_GET['who']);
  $human = 'https://media.giphy.com/media/3Hw9ggazsWYtC8YzJW/giphy.gif';
  $cat = 'https://media.giphy.com/media/SVYrs1hU0SiAf1nw1n/giphy.gif';
  $unicorn = 'https://media.giphy.com/media/UWRyZHCsHtBFS/giphy.gif';

  $renderGif;

  switch($user) {
    case 'human': $renderGif = $human;
    break;
    case 'cat': $renderGif = $cat;
    break;
    case 'unicorn': $renderGif = $unicorn;
    break;
  }
?>
  <br><img width='300px' src= <?php echo $renderGif ?> ><br>
<?php
}
?>

<!-- Form for get values -->

<br>
<form method="get" action="">
	<!-- get value -->
	<label for="who">Who you are?</label><br><br>
		<input type="radio" name="who" value="human">
		<label for="human">Human</label><br>
		<input type="radio" name="who" value="cat">
		<label for="cat">Cat</label><br>
    <input type="radio" name="who" value="unicorn">
		<label for="unicorn">Unicorn</label>
    <br><br>

	<input type="submit" name="submit" value="Show me"><br>
</form>
<br><br>