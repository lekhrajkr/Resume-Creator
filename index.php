<html>
<head>
<title>Kodayickal Internet Cafe</title>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.container{
	padding-top:120px;
}
body{

background-color:#e0e0e0;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
}
.card {
height:150px;
width:auto;
}
.centered {
	
  position:fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  width: 350px;
  padding: 30px;
}
.padd{
	padding:30px;
}
.padd1{
	padding:10px;
}

    .l-box {
		padding: 30px;
	  background-color: #f7f7f7;
   border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
.lol{
	background-color:#e7e7e7;
	position:fixed;
	height:100px;
	width:auto;
}
.navbar{
	  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
</style>
</head>
<body>

<?php include 'webcomponents/navigation.php'; ?>

<div class="centered l-box">

		<form class="navbar-form navbar-left" method="post" name="nob" action="user.php" autocomplete="off">
		<center><a href="index.php"><img src="img/logo.png" ></img></a>
		<center><b>Resume Creator</b></center><br>Create and Edit your Resume<br><br></center>

<input type="number" class="form-control input-lg" placeholder="Mobile No."   name="mobile" required> <br><br>
<div>
<label class="radio-inline">
  <input type="radio" name="option" id="inlineRadio1" value="a" required><p> Biodata (1 Page)
</label>
</div>
<div>
<label class="radio-inline">
  <input type="radio" name="option" id="inlineRadio2" value="b" required> Resume (2 Pages)</p>
</label>
</div>
<br>	
<div>
<input type="hidden" name="request">
<button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >Proceed</button>
</div>
</form>
</div>
<div class="card"></div>


</body>
</html>
