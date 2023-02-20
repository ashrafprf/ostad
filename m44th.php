<?php
//Q1
$strings = array("apple", "banana", "orange", "kiwi", "pear");

$sorted_strings = sort_strings_by_length_asc($strings);

function sort_strings_by_length_asc(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}
print_r($sorted_strings);


//Q2
$string1 = "Hello, ";
$string2 = "world!";
$result = concatenate_strings_in_reverse_order($string1, $string2);

function concatenate_strings_in_reverse_order(string $string1, string $string2): string {
    return $string1 . strrev($string2);
}
echo $result;

//Q3
$arra = array(1, 2, 3, 4, 5);
$new_arr = remove_first_and_last_element($arra);

function remove_first_and_last_element(array $arra): array {
    array_shift($arra);
    array_pop($arra);
    return $arra;
}
print_r($new_arr);

//Q4
$str1 = "This is a string with only letters and whitespace";
$str2 = "This is a string with a number: 123";
$result1 = contains_only_letters_and_whitespace($str1);
$result2 = contains_only_letters_and_whitespace($str2);
function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[A-Za-z\s]+$/', $str) === 1;
}
echo $result1 ? "true" : "false"; // true
echo $result2 ? "true" : "false"; // false

//Q5
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(5, 4, 3, 2, 1);
$arr3 = array(1, 3, 5, 2, 4);
$result1 = find_second_largest_number($arr1);
$result2 = find_second_largest_number($arr2);
$result3 = find_second_largest_number($arr3);


function find_second_largest_number(array $arr): ?float {
    $max = $arr[0];
    $second_max = null;
    foreach ($arr as $num) {
        if ($num > $max) {
            $second_max = $max;
            $max = $num;
        } elseif ($num != $max && ($second_max === null || $num > $second_max)) {
            $second_max = $num;
        }
    }
    return $second_max;
}
echo $result1; // 4
echo $result2; // 4
echo $result3; // 4

?>
