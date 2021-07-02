<?php
$servername='sql107.epizy.com';
$username='epiz_27155342';
$password='Lojo2057';
$dbname = "epiz_27155342_muzhalo";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>