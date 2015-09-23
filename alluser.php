<html>
<head>
<title>Kodayickal-Resume Creator</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pure-min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.css"></script>
<style>body{
padding-top: 70px;
}
.card {
width: 350px;
height: 390px;
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
.container-width{
width:550px;
padding:60px;
}
</style>
<?php include 'webcomponents/navigation.php'; ?>
<div class="container-width">
<?php
	
        $query= " ";
        $sql=mysqli_query($conn,"select * from userdetails where mobile like '%$query%' or name like '%$query%' or pincode like '%$query%' order by name");
        $number=mysqli_num_rows($sql);
    
	 if( mysqli_num_rows($sql) > 0) {?>
		 <form action="user.php" method="post">
		<div class="result"><h1><?php echo $number; echo '-Results Found for- ';echo $query;?></h1></div><?php 
	while($rws = mysqli_fetch_array($sql)){
				echo '<div class="mdl-grid">';?>
		<br>
<div class="card l-box padd mdl-cell mdl-cell--2-col">
<h2><?php echo $rws['name']; ?></h2><br>
<p><?php echo $rws['address1'];?><br>
<?php echo $rws['address2']; ?><br>
<?php echo $rws['address3']; ?><br>
<b><?php echo $rws['mobile']; ?></b><br></p>

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
<input type="hidden" name="mobile" value="<?php echo $rws['mobile'];?>" >
<input value="Edit This Profile"  class="btn btn-primary btn-lg" type="submit"  >
</div>
</div>
