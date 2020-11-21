<h2>Exercise 1</h2>

<?php
  $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
  foreach ($pronouns as $elem) {
    if($elem === 'He/She') {
      echo $elem.' codes<br>';
    } else {
      echo $elem.' code<br>';
    }
  }
?>

<br><br>
<h2>Exercise 2</h2>

<?php
  // $num = 0;
  // while ($num < 121) {
  //   echo $num.'<br>';
  //   $num++;
  // }

  for ($i = 0; $i < 121; $i++) {
    echo $i.'<br>';
  }
?>

<br><br>
<h2>Exercise 3</h2>

<?php
  $countries = ['AR' => 'Argentina', 'AU' => 'Australia', 'AT' => 'Austria', 'BE' => 'Belgium', 'BR' => 'Brazil', 'CA' => 'Canada', 'CN' => 'China', 'DE' => 'Germany', 'FR' => 'France', 'RU' => 'Russia'];
  $countryISO = array_keys($countries);
  $insertHTML = '';
  
  foreach ($countryISO as $country) {
    $insertHTML .= '<option value="'.$country.'">'.$country.'</option>';
  };
?>

<form action="">
<label for="cars">Choose a country:</label><br><br>

<select name="country">
  <?php echo $insertHTML ?>
</select>
</form>