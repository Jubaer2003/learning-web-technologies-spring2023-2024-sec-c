<?php

$array = [1, 2, 3, 4, 5];

$search_num = 9;

$found = false;

foreach ($array as $value) 
{
    if ($value == $search_num) {
        $found = true;
        break;
    }
}

if ($found) 
{
    echo "Found.";
} 

else 
{
    echo "Not found.";
}

?>