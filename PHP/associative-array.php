<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $owners = [];
        foreach($files as $file => $owner) {
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
print_r(FileOwners::groupByOwners($files));

// output should be
// [
//     "Randy" => ["Input.txt", "Output.txt"],
//     "Stan"  => ["Code.py"]
// ]