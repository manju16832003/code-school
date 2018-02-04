<?php
$name = "Good Bye";
class X
{
    public $name = "Hello World";
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$y = new X($name);
echo $y->name;
echo "Done";
?>
