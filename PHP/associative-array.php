<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $owners = [];
        $files = [];
        foreach($files as $k => $v) {
            $owners[$owner][] = $file;
        }

        return $owners;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));

// output should be
// [
//     "Randy" => ["Input.txt", "Output.txt"],
//     "Stan"  => ["Code.py"]
// ]