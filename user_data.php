<?php

//variables
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$data=$name.",".$email.",".$gender;
$file="user.csv";

//function

file_put_contents($file, $data. PHP_EOL, FILE_APPEND);

print "<h2 align=center> Thank you for your time</h2>";


?>