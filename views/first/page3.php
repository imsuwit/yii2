<h1>
    การส่งค่า Array</h1>
<?php

$arr1 = array(1,2,3,4,5);
print_r($arr1);
echo "<hr/>";

$arr2 = [1,2,3,4,5];
print_r($arr2);
echo "<hr/>";

$arr3 = ['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5];
print_r($arr3);
echo "<hr/>";

echo $arr3['a']."  ส่งค่า arr3[a]";
echo "<hr/>";

$xyz=$arr3['b'];
echo $xyz."  ส่งค่า xyz=arr3[b]";
echo "<hr/>";