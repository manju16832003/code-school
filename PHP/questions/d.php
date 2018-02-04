<?php
class Y
{
    public $x = 'Y';
    public function foo()
    {
        $b = new Z();
        $b->bar();
        return $this->x;
    }
}

class Z extends Y
{
    public function bar()
    {
        $this->x = 'Z';
    }
}

$a = new Y();
echo $a->foo();
?>
