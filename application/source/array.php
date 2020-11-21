<?php
  $me = [
    'age'	=> 34, 
    'firstname' => 'Olga' ,
    'lastname' 	=> 'Kozmovskaia' ,
    'favourite_movies' 	=> ['My Own Private Idaho', 'Her', 'Matrix'],
  ];

  $me['hobbies'] = ['cooking', 'reading', 'walking'];

  $husbandsHobbies = ['reading', 'gaming', 'music'];

  $me['hobbies']['husbandHobbies'] = $husbandsHobbies;

  var_dump(count($me['hobbies']));
  var_dump(count($me['hobbies']['husbandHobbies']));

  $me['hobbies'][] = 'Taxidermy';

  $me['lastname'] = 'Durant';
  print_r($me);

  
  $soulmate = [
    'age'	=> 31, 
    'firstname' => 'Aleksandr' ,
    'lastname' 	=> 'Ismagilov' ,
    'favourite_movies' 	=> ['James Bond', 'Black Mirror', 'Harry Potter'],
    'hobbies' => ['walking', 'driving', 'travels', 'reading']
  ];

  $hobbiesChild = array_merge($me['hobbies'], $soulmate['hobbies']);
  print_r($hobbiesChild);

  $hobbiesChild2 = array_intersect($me['hobbies'], $soulmate['hobbies']);
  print_r($hobbiesChild2);

?>