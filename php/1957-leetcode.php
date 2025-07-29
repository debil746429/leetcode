<?php 
declare(strict_types = 1);

function makeFancyString(string $s) : string{
    $prev = $s[0];
    $ans = $prev;
    $freq = 1;

    for ($i=1; $i < strlen($s); $i++) { 
        if ($s[$i] == $prev) {
            $freq += 1;
        }else {
            $prev = $s[$i];
            $freq = 1;
        }
        if($freq < 3) $ans .= $s[$i];
    }
    return $ans;
}
?>