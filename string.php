<?php
$strings = ["Hello", "World", "PHP", "Programming"];
    function countVowels($string)
    {
        preg_match_all("/[aeiou]/i", $string, $matches);
        $vcount= count($matches[0]);
        $reversestr=strrev($string);
        echo "Original String: ".$string.", Vowel Count: ".$vcount.", Reversed String: ".$reversestr;
    };

    
    foreach($strings as $string){
    $reasult = countVowels($string) . PHP_EOL;
    echo $reasult;
    };

?>