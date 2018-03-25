<html>
<body>
<?php
$name[]="sathya";
$name[]="balaji";
$name[]="hari";
$name[]="karthik";
$name[]="ravi";
$name[]="suriya";

echo "<pre>";
print_r($name);
$a1=array_slice($name,3,4);
print_r($a1);

$name2 []="sathya";
$name2 []="poorna";
$name2 []="raj";
$name2 []="aravind";
$name2 []="azhar";
print_r($name2);
$total=array_merge($name,$name2);  
print_r($total);


?>
</body>
</html>