<?php
function test($x,$y)
{
    return($x<=>$y)?'red':'green';
}
echo test(2,1);
echo test(2*2,4);
echo test((3*2),6);
echo test(6,5);
?>
