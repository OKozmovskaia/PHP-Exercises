<h2>Exercise 1 'Clean your room'</h2>

<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 
$room_is_filthy = true;

if( $room_is_filthy ){
	echo "1.1. Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	echo "<br>1.1. Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>1.1. Nothing to do, room is neat.<br><br>";
};


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[1];


if( $room_filthiness ===  'health hazard'){
	echo "1.2. Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_dirty === 'filthy' OR $room_filthy === 'dirty'){
	echo "1.2. Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>1.2. Nothing to do, room is neat.<br><br>";
};

?>

<br><br>
<h2>Exercise 2 'Different greetings according to time'</h2>
<?php

// 2. "Different greetings according to time" Exercise

// Set Time Zone
date_default_timezone_set('Europe/Brussels');

$now = date('H');

// Test the value of $now and display the right message according to the specifications.

if ($now > 5 && $now <= 9) {
  echo 'Good morning!';
} else if ($now > 9 && $now <= 12) {
  echo 'Good day!';
} else if ($now > 12 && $now <= 16) {
  echo 'Good afternoon!';
} else if ($now > 16 && $now <= 21) {
  echo 'Good evening!';
} else {
  echo 'Good night!';
};

?>

<br><br>
<h2>Exercise 3 and 4 'Different greetings according to age, gender and mothertongue'</h2>

<?php
// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'], $_GET['gender'], $_GET['speaking'])){
	// get the vars
	$age = htmlentities($_GET['age']);
	$gender = htmlentities($_GET['gender']);
	$speaking = htmlentities($_GET['speaking']);

	// check the vars
	if ($age < 12) {
		echo ($speaking === 'yes') ? (
			($gender === 'man') ? 'Hello boy!' : 'Hello girl!'
			) : (
			($gender === 'man') ? 'Aloha boy!' : 'Aloha girl!'
		);	
	} elseif ($age > 12 AND $age < 18) {
		echo ($speaking === 'yes') ? (
			($gender === 'man') ? 'Hello Mister Teen!' : 'Hello Miss Teen!'
			) : (
			($gender === 'man') ? 'Aloha Mister Teen!' : 'Aloha Miss Teen!'
		);
	} elseif ($age > 18 AND $age < 115) {
		echo ($speaking === 'yes') ? (
			($gender === 'man') ? 'Hello Mister!' : 'Hello Missis!'
			) : (
			($gender === 'man') ? 'Aloha Mister!' : 'Aloha Missis!'
		);
	} else {
		echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
	};
};
// Form (complete)
?>

<br><br>
<form method="get" action="">
	<!-- get age -->
	<label for="age">Please, type your age:</label><br>
	<input type="" name="age"> <br><br>

	<!-- get sex -->
	<label for="gender">Man or woman?</label><br>
		<input type="radio" name="gender" value="man">
		<label for="man">Man</label><br>
		<input type="radio" name="gender" value="woman">
		<label for="woman">Woman</label><br><br>

	<!-- get language skill -->
	<label for="speaking">Do you speak English?</label><br>
		<input type="radio" name="speaking" value="yes">
		<label for="yes">Yes</label><br>
		<input type="radio" name="speaking" value="no">
		<label for="no">No</label><br><br>

	<input type="submit" name="submit" value="Greet me now"><br>
</form>
<br><br>

<h2>Exercise 5 and 6 'Girl Soccer team'</h2>

<?php
if (isset($_GET['nameGirl'], $_GET['ageGirl'], $_GET['genderGirl'])){
	// get the vars
	$nameGirl = htmlentities($_GET['nameGirl']);
	$ageGirl = htmlentities($_GET['ageGirl']);
	$genderGirl = htmlentities($_GET['genderGirl']);

	$defaultStatement = 'Sorry, ' .$nameGirl. ', you don\'t fit the criteria.';
	$welcomeStatement = 'Welcome, ' .$nameGirl. ', to the team!';
	$renderStatement = $defaultStatement;

	if ($ageGirl > 20 AND $ageGirl < 41 AND $genderGirl === 'woman') {
		$renderStatement = $welcomeStatement;
	};

	echo $renderStatement;
}



?>

<!-- Form for get values -->
<br><br>
<form method="get" action="">
	<!-- get name -->
	<label for="nameGirl">Please, type your name:</label><br>
	<input type="" name="nameGirl"> <br><br>

	<!-- get age -->
	<label for="ageGirl">Please, type your age:</label><br>
	<input type="" name="ageGirl"> <br><br>

	<!-- get sex -->
	<label for="genderGirl">Man or woman?</label><br>
		<input type="radio" name="genderGirl" value="man">
		<label for="man">Man</label><br>
		<input type="radio" name="genderGirl" value="woman">
		<label for="woman">Woman</label><br><br>

	<input type="submit" name="submit" value="Greet me now"><br>
</form>
<br><br>

<h2>Exercise 7 and 8 'School sucks!'</h2>

<?php
	if(isset($_GET['note'])) {
		// get the note
		$note = htmlentities($_GET['note']);

		switch($note) {
			case 4: echo 'This work is really bad. What a dumb kid!';
			break;

			case ($note > 4 AND $note < 10): echo 'This is not sufficient. More studying is required.';
			break;

			case 10: echo 'Barely enough!';
			break;

			case ($note > 10 AND $note < 15): echo 'Not bad!';
			break;

			case ($note > 14 AND $note < 19): echo 'Bravo, bravissimo!';
			break;

			case ($note > 18 AND $note < 21): echo 'Too good to be true: confront the cheater!';
			break;

			default: echo 'Add student\'s note for check his grade.';
		};
	}
?>

<!-- Form for get values -->
<br><br>
<form method="get" action="">
	<!-- get note -->
	<label for="note">Student, your note:</label><br>
	<input type="number" name="note" min="4" max="20"> <br><br>
	<input type="submit" name="submit" value="Check grade"><br>
</form>
<br><br>

<h2></h2>






