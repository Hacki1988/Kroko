<?php
$sentence = " A  glittering  gem     is    not   enough.  ";

function correctSpacing($sentence) {
  
  return trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $sentence)));
}

var_dump(correctSpacing($sentence));
?>
