<?php
$s = 'Dude, this is so awesome!';

function averageWordLength($s) {
	$news = str_replace(['.', '!', ',', '?'], "", $s);
  	return str_word_count($news) / str_word_count($s);
}

print_r(averageWordLength($s));
?>
