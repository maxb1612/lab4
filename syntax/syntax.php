<?php

include "Singleton.php";
include "ChildClass.php";

$arr = array();

$a = 1245450;
echo $a . '<br/>';

$a = '12.142 hi';
echo $a . '<br/>';
echo (int)$a . '<br/>';
echo (float)$a . '<br/>';

$a = 'str';
$$a = "qwertyuiop";
echo "$a" . '<br/>';
echo "$str" . '<br/>';
echo "$a ${$a}" . '<br/>';

echo '<br/>';

$array = array(
    "str" => "index is string",
    42    => 'index is int',
    "second dimension" => array(
        "third dimension" => array(
            51 => "inside of third dimension"
        ),
        "end of array" => 0
    )
);

foreach ($array as $item)
{
    var_dump($item);
    echo '<br/>';
}

echo "{$array["second dimension"]["third dimension"][51]}".'<br/>';

echo '<br/>';

$new_array = implode(", ", $array);
echo "$new_array".'<br/>';

$new_array = explode(", ", $new_array);
foreach ($new_array as $item)
{
    echo "$item".'<br/>';
}

echo '<br/>';

$single_obj = Singleton::getInstance();
$single_obj2 = Singleton::getInstance();
$single_obj2->setData(52);
print_r($single_obj);

echo '<br/>';

$child_obj = new ChildClass(100);
print_r($child_obj->getValue());
echo '<br/>';
print_r($child_obj::getInstance());
echo '<br/>';
$child_obj2 = ChildClass::getInstance();
print_r($child_obj2);
