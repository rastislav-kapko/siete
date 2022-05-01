<?php
include ("config.php");
$meno=$_POST["meno"]; 
$priezvisko=$_POST["priezvisko"]; 
$mesto=$_POST["mesto"];
$stat=$_POST["stat"];
$email=$_POST["email"]; 
$sprava=$_POST["sprava"]; 

//mysql_connect("localhost","root","") or die ("conect error");
//mysql_select_db ("zaklad") or die ("nepodarilo sa otvorit databazu");

$var = mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");
$sql = "insert into `kontakt` (`meno`,`priezvisko`,`mesto`,`stat`,`email`,`sprava`)
values ('$meno','$priezvisko','$mesto','$stat','$email','$sprava')";
//$res = mysql_query($sql) or die ("registration error");
$res = mysqli_query($var,$sql) or die ("registration error");

echo "<font color=\"black\"><br><strong>Správa bola úspešne odoslaná, budeme vás kontaktovať v najkratšom možnom čase.</strong>";
echo "<meta http-equiv=\"refresh\" content=\"1;URL=kontakt.php\">";

?>