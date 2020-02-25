<!DOCTYPE html>
<html>
<body>

<?php
shuzu();
function shuzu(){
$arr=array();
for ($i=1;$i<=10;$i++)
{
$arr[$i-1]=2*$i-1;
echo $arr[$i-1];
echo"<br>";
}
}
?>

</body>