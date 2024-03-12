<?php
include "conn/koneksi.php";

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Perpustakaan </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="images/header.jpg" />
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        
        </div>
        <div id="menu_tanggal" align="right">
        <a href="register.php">Daftar</a> <a href="login.php">Login</a> 
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu"><center>Hari ini</center>
    	</div>
    	<div id="left_menu"><center>
        	
        	<span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " "; 
			?> </center>
        </span>

        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "home2.php";
						break;
						
					
						
											
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
    
    
  	<!-- menu Footer -->
    <div id="footer"><center>&copy Kelompok 1 <br> Kelas X6E</center></div>
    
</div>

</body>
</html>
