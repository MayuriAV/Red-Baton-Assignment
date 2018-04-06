<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet3.css">
</head>
<body>
<?php 
session_start();
session_destroy();
header("location:luckylogin.html");	
?>
</body>
</html>