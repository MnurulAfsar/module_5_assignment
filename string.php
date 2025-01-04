<?php 
// $str = "Silken";
// $vowels = ['a', 'e', 'i', 'o', 'u'];
// $count = 0;

// for($i=0; $i< strlen($str); $i++){
//     if(in_array($str[$i], $vowels)){
//         $count++;
//     }

// }
// echo "Total vowel present in the string ".$str. "=".$count;
//method 1 for string of array
$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u'];
$length1 = strlen($strings[0]);
$count1 = 0;
for($i=0; $i<$length1; $i++){
         if(in_array($strings[0][$i], $vowels)){
            $count1++;
        }
    
}
$length2 = strlen($strings[1]);
$count2 = 0;
for($i=0; $i<$length2; $i++){
         if(in_array($strings[1][$i], $vowels)){
            $count2++;
        }
    
}
$length3 = strlen($strings[2]);
$count3 = 0;
for($i=0; $i<$length3; $i++){
         if(in_array($strings[2][$i], $vowels)){
            $count3++;
        }
    
}
$length4 = strlen($strings[3]);
$count4 = 0;
for($i=0; $i<$length4; $i++){
         if(in_array($strings[3][$i], $vowels)){
            $count4++;
        }
    
}

//echo strrev($string[0])."\n";
echo "Original String: $strings[0], Vowel Count:$count1 , Reversed String: ".strrev($strings[0])."<br>";
echo "Original String: $strings[1], Vowel Count:$count2 , Reversed String: ".strrev($strings[1])."<br>";
echo "Original String: $strings[2], Vowel Count:$count3 , Reversed String: ".strrev($strings[2])."<br>";
echo "Original String: $strings[3], Vowel Count:$count4 , Reversed String: ".strrev($strings[3])."<br>";
//echo "Total vowel present in the string ".$string[0]. "=".$count;
//method 2 preg match for string
// function countVowels($string)
// {
//     preg_match_all("/[aeiou]/i", $string, $match);
//     $count = count($match[0]);
//     return $count;
// }
// $string = "Hello World";
// $result = countVowels($string);
// print_r($result);
