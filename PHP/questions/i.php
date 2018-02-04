<?php
$a=array('apple','orange','banana','pear');

switch(($a[2])) {
  case 'apple': echo 'a';
    break;
  case 'orange': echo 'o';
    break;
  case 'banana': echo 'b';
  case 'pear': echo 'p';
  default: echo 'unknown';
}
?>
