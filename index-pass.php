<?php

$pass="27";
echo $pass."<br/>";
$enccrypt=crypt($pass);
echo $enccrypt."<br/>";
$encmd5=md5($pass);
echo $encmd5."<br/>";
$encsha1=sha1($pass);
echo $encsha1."<br/>";
?>

