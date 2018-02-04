<?php

$shows = simplexml_load_file("shows.xml");

foreach($shows->sitcom as $sitcom) {
   echo "{$sitcom->character} appeared in {$sitcom['name']} in {$sitcom->year}\n";
}

?>
