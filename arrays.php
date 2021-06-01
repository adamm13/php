<?php

// TODO: add the even_numbers array here
$even_numbers = [2,4,6,8,10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

?>

Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)
Array
(
    [0] => Jake
    [1] => Eric
    [2] => John
    [3] => Jessica
    [4] => Beth
    [5] => Sandra
)
