<?php
function duplicateCount($str)
{
  $word_split = str_split($str);
  $final = []; 

  foreach($word_split as $char) {
    if(substr_count($str, $char) > 1) {
    	$final[] = $char;
    }
  }
  
  return count(array_unique($final));
}

print_r(duplicateCount("Konstansius"));

//Ausgabe: 2
// Weil es zwei Buchstaben sind, die mehrmals vorkommen (n und t)
?>
