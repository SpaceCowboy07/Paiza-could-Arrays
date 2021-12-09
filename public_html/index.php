<?php

  $names = array('Italya', 'Lacey', 'Oscar');
  echo "\n";
  echo "<ol>";
  
  foreach($names as $name){
      
      echo "<li>" . $name . "</li>";
      
  }
  
  echo "</ol>";
  
 $person =array("name" => "Lacey", "age" => 26);
 echo $person['name'] . ' is secretly ' . $person['age'] . ' years old ';
 echo "$variabile.<br>";
 $person =array("name" => "Italya", "occupation" => "vet");
 echo $person['name'] . ' is the best ' . $person['occupation'] . ' when she is not stealing animals ';
 echo "$variabile.<br>";
 $person =array("name" => "Oscar", "hobbie" => "movies");
 echo $person['name'] . ' hates to watch ' . $person['hobbie'] . ' in theaters ';
 echo "$variabile.<br>";