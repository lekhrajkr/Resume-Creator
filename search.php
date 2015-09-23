<?php require '_database/database.php'; ?>
<html>
<head>
<title>Kodayickal-Resume Creator</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pure-min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.css"></script>
<style>
.container{
	padding-top:120px;
	    text-shadow: 0 1px 1px rgba(0,0,0,.3);
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
body{
	margin-bottom:100px
padding-top: 110px;
background-color:#333;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
		
}
.card {
height:150px;
width:auto;
}
.padd{
padding:10px;
float:left;
}
.navbar{
	  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.padd1{
padding:10px;
}
td{
	padding:2px;
	font-size:12px;
}
.l-box {
	width: 350px;

padding: 30px;
background-color: #f7f7f7;
border-radius: 2px;
-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.le{
	font-family:tahoma;
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
  color:#ffffff;
}
.lol{
background-color:#e7e7e7;
position:fixed;
height:100px;
width:auto;
}
.container-width{
width:550px;
padding:60px;
}
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}
</style>
<?php
		if($_POST)
		{
        $query=$_POST['mobile'];
        $sql=mysqli_query($conn,"select * from userdetails where mobile like '%$query%' or name like '%$query%' or pincode like '%$query%' order by name");
        $number=mysqli_num_rows($sql);
    }?>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header form-group">
      <a class="navbar-brand" href="index.php">Kodayickal Internet Cafe</a> 
    </div>
	
   <form class="navbar-form navbar-left" action="search.php" method="post" autocomplete="off">
        <div class="form-group">
          <input type="text" name="mobile" value="<?php echo $query; ?>" class="form-control" placeholder="Search..." >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Search</button>
      </form>

  </div>
</nav>
<div class="container">
<div class="row">
<?php 
	 if( mysqli_num_rows($sql) > 0) {?>
		
<div class="result le"><h1><?php echo $number; echo '-Results found for- ';echo $query;?></h1></div>
<?php 
while($rws = mysqli_fetch_array($sql)){
 ?>
<div class="col-lg-4 padd">
<div class="l-box ">


<table class="padd1">
<tr><td>Name </td>
<td><h2><?php echo $rws['name']; ?></h2></td></tr>
<tr>
<td>Address</td><td>
<?php echo $rws['address1'];?></td></tr>
<tr>
<td></td></tr>

<tr>
<td>Pincode</td><td>
<?php echo $rws['pincode']; ?>
</td>
</tr>
</table>

<input type="hidden" name="mobile" value="<?php echo $rws['mobile'];?>" ><br>
<a href="user.php?mobile=<?php echo $rws["mobile"]; ?>&option=a&request=edit&status=edit#biodata"  class="btn btn-primary "   >Biodata</a>
<a href="user.php?mobile=<?php echo $rws["mobile"]; ?>&option=b&request=edit&status=edit#resume"  class="btn btn-default "   >Resume</a>
</div>
</div>
	 <?php echo ''; } } else {echo '<div class="centered "><div class="le"><h1> No Result found </h1><br><h2> ';echo $query; echo ' not found ....</h2></div><form action="search.php" method="post"><div class="form-group form-inline"><input type="text" value=';echo "$query";echo ' placeholder="Search..." class="form-control " name="mobile"><input type="submit" class="btn btn-primary" value="Go"></form></div></div>';}?>
	 </div>
</div>
<div class="card"></div>

</body>
</html>
