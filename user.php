<html>
<?php
if(isset($_GET["request"])){
$option=$_GET["option"];
$mobile=$_GET["mobile"];
}
if(isset($_POST["request"])){
$option=$_POST["option"];
$mobile=$_POST["mobile"];
}
?>
<head>
<title><?php echo $mobile; ?></title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pure-min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.css"></script>
<style>
body{
	padding:30px;
		
padding-top: 70px;
background-color:#e0e0e0;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
}
.personaldeta{
	padding:50px
}
td{
	padding:20px;
}
	.padd{
	padding:35px;
}
	.padd3{
	padding:135px;
}
.navbar{
	  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
body{
	background-color:#e0e0e0;
}

</style>

</head>
<body>
<?php
if ($option =="a")
{
	?> <?php require 'biodata_input.php' ?>

<?php	
}
else if($option == "b")
{?>
	<?php include 'resume_input.php'; ?>
<?php
}
else
{
}
	?>

</body>
</html>
