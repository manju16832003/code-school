<?php
// a.php
$val*=$val;
?>

<?php
// main_script.php
function chgvalue($val) {
include('a.php');
include_once('a.php');
return $val;
}
echo chgvalue(2);
?>
