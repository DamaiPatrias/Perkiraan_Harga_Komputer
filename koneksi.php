<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'phk';

$config = mysqli_connect($server,$username,$password) or die ("Koneksi gagal");

mysqli_select_db($config,$database) or die ("Database belum ada, silahkan import database");
