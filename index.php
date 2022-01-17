<?php
session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];

if($_SESSION['type']==2){
if ( empty($get))
{
   include ('master/dashboard.php');	
}

elseif ($get=='casing')
{
  include ('master/casing.php');
}

elseif ($get=='gpu')
{
  include ('master/gpu.php');
}

elseif ($get=='mobo')
{
  include ('master/mobo.php');
}

elseif ($get=='penyimpanan')
{
  include ('master/penyimpanan.php');
}

elseif ($get=='prosesor')
{
  include ('master/prosesor.php');
}

elseif ($get=='psu')
{
  include ('master/psu.php');
}

elseif ($get=='ram')
{
  include ('master/ram.php');
}

elseif ($get=='paket')
{
  include ('master/paket.php');
}

elseif ($get=='user')
{
  include ('master/user.php');
}

}else if($_SESSION['type']==1){
if ( empty($get))
{
   include ('master/dashboard2.php');	
}
elseif ($get=='paket')
{
	include ('master/history.php');
}

}else{
if ( empty($get))
{
   include ('master/dashboard2.php');	
}
elseif ($get=='view')
{
  include ('master/view.php');
}

}

?>