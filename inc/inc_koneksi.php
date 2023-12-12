<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "learning";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}