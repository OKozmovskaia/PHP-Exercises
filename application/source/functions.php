
<?php
// 1. Capitalize the first letter 
$firstUp = '1. Capitalize the first letter: '.ucfirst('olga').'<br><br>';
echo($firstUp);

// Display current year
$nowYear = '2. Display current year: '.date('Y').'<br><br>';
echo($nowYear);

// Display current date and time
$now = '3. Display current date and time: '.date('d-m-Y H:i:s').'<br><br>';
echo($now);

// Sum function
function sum ($a, $b) {
  $typeofA = gettype($a);
  $typeofB = gettype($b);
  
    if($typeofA === 'number' AND $typeofB === 'number') {
      return '4 and 5. Sum: '.$a + $b.'<br><br>';
    } else {
      echo('4 and 5. Error: argument is not a number.<br><br>');
    }
};

$a = 'olga';
$b = 5;
echo(sum($a, $b));

// Returns an acronym
function acronym($str) {
  $bigLetter = ucwords($str);
  $strArray = explode(' ', $bigLetter);
  foreach($strArray as $word) {
    $acronym .= $word[0];
  }
  return '6. Acronym: '.$acronym.'<br><br>';
};

echo(acronym('hello big world!'));

// Replace
$string = 'chaenichthys';
echo('7. Replace: '.str_replace('ae', 'æ', $string).'<br><br>');

// Alert messages

$email = false;
$msgEr = '8. Incorrect email address';
$msgClassEr = 'error';
$msgInf = '8. Email address correct';
$msgClassInf = 'info';

if ($email):?>
    <div class="<?php echo $msgClassEr; ?>"><?php echo $msg; ?></div>
<?php  else: ?>
    <div class="<?php echo $msgClassInf; ?>"><?php echo $msgInf; ?></div>   
<?php endif;

// Generate random words

function generateWord($lengthWord) {
  $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  $newWord = '';
  $index = array_rand($alphabet, $lengthWord);
  
  for($i = 0; $i < $lengthWord; $i++){
    $indexLetter = $index[$i];
    $newWord .= $alphabet[$indexLetter];
  }

  echo($newWord);
  
};

?>
<br><br>
<div>Short word: <?php echo isset($_POST['submit'])? generateWord(5): ''; ?></div><br>
<div>Long word: <?php echo isset($_POST['submit'])? generateWord(15): ''; ?></div>
<br><br>
<form action="" method="POST">
  <input type="submit" name="submit" value="Generate new unknown words">
</form>


