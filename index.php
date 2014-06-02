<?php
	include "cekSession.php";
	if ($_SESSION['s_level']=='0') $hakakses = 'ADMIN';
	elseif ($_SESSION['s_level']=='1') $hakakses = 'OPERATOR';
	elseif ($_SESSION['s_level']=='2') $hakakses = 'MANAGER';
	else $hakakses = 'SUPER ADMIN';
?>
<html>
	<head>
		<link rel="icon" type="image/png" href="images/mit.ico">
	</head>
	<body>
		<div id="header"></div>
		
		<img src="images/logo.png"> <br>
SELAMAT DATANG, <b><?=$_SESSION['s_user'];?></b>. Anda login sebagai <b><?=$hakakses;?></b>.
		
		<div id="navbar"> 
			<?php
			include "menu.php";
			?>
		</div>
		
		<div id="menuContent"> </div>
	
	</body>
</html>
