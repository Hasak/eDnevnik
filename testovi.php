<?php session_start();
include('db.php');?>
<html>
	<head>
		<title>Social 3D</title>
		<link rel="shortcut icon" href="favicon.ico"/>
		<link rel="stylesheet" type="css/txt" href="style.css"/>
		<script type="text/javascript" src="jav.js"></script>
	</head>
	<body bgcolor="black">
		<?php include("includ.php");?>
			<?php if(isset($_SESSION['user']))
					echo "<center><p>sad ce fizika listici</p></center>";
				else
					echo "<p align='center'>Moras biti logovan</p>";
			?>
		<?php include("ftincld.php");?>
	</body>
</html>