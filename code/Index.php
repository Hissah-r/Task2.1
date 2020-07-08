<?php 


$connect = mysqli_connect("localhost","root","","dbrobot");
if (mysqli_connect_errno()){
die ("cant connect to db" .mysqli_connect_error());

}
else{
echo 'db is connect';
}
?>

<html>

<head>
<meta charset="UTF-8">
</head>

<body>
<?php

if(isset($_POST['forward1']))
$forward1 = 'forward1';
elseif (isset($_POST['left1']))
$left1 = 'left1';
elseif (isset($_POST['right1']))
$right1 = 'right1';
elseif (isset($_POST['stop1']))
$stop1 = 'stop1';
elseif (isset($_POST['backward1']))
$backward1 = 'backward1';

$query = " insert INTO move (forward1,left1,right1,stop1,backward1) VALUES ('".$forward1."','".$left1."','".$right1."','".$stop1."','".$backward1."')";
$result = mysqli_query($connect,$query);
if($result)
{ 
echo ' data is inserted';
}
else {
echo ' error';
}

?>
	<head>
		<title> Control Panel </title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
	
	<p> Hi! can you move me please? </p>
<?
<form action= '' method = 'POST'>

<div class= " control" > 
	
	<a href ="forwards.php" > <button type="submit" class= "f1" name="forward1"value="forwards"> <img src = "images/forwards.svg"  width="100" height="100"></button></a>
	<br>
	<a href ="left.php" ><button type="submit"class = "l1" name="left1"value="left"> <img src = "images/left.svg" width="100" height="100"> </button></a>
	<a href ="stop.php" ><button type="submit"class = "s1" name="stop1"value="stop"> <img src = "images/stop.svg" width="100" height="100"> </button></a>
	<a href ="right.php" ><button type="submit"class = "r1" name="right1"value="right"> <img src = "images/right.svg" width="100" height="100"> </button></a>
	<br>
	<a href ="backwards.php" ><button type="submit"class = "b1" name="backward1"value="backwards"> <img src = "images/backwards.svg" width="100" height="100"> </button></a>
	
	</div>
	</form>
	?>
</body>

</html>

<?php

mysqli_close($connect);
?>

