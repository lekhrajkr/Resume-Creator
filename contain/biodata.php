<div class="biodata_renew">Biodata</div>

<div class="heads1"><b>Personal Information</b></div>
<div class="personal_details">
<table align="center">
<tr>
<td>Name</td>
<td><b><?php echo $name ?><b></td>
</tr>
<tr>
<td>Guardian's name</td>
<td><?php echo $father; ?></td>
</tr>
<tr>
<td>Permanent Address</td>
<td><?php echo $address1; ?></td>
</tr>
<tr><td></td><td><?php echo $address2; ?></td></tr>
<tr><td></td><td><?php echo $address3; ?></td></tr>
<tr><td></td><td><?php echo $pincode; ?></td></tr>
<tr>
<td>Nationality</td>
<td><?php echo $nation; ?></td>
</tr>
<tr>
<td>Languages Known</td>
<td><?php echo $language; ?></td>
</tr>
<tr>
<td>Mobile number</td>
<td><b><?php echo $mobile; ?><b></td>
</tr>
<tr>
<td>Date of birth</td>
<td><b><?php echo $day; echo"/"; echo $month; echo"/"; echo $year; ?></b></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $gender; ?></td>
</tr>
<tr>
<td>Religion</td>
<td><?php echo $relegion; ?></td>
</tr>
<tr>
<td>Martial Status</td>
<td><?php echo $marriage; ?></td>
</tr>
<tr>
<td><?php echo $extra; ?></td>
<td><?php echo $ans1; ?></td>
</tr>
<tr>
<td><?php echo $extra1; ?></td>
<td><?php echo $ans2; ?></td>
</tr>
</table>
</div>
<?php

if(isset($_POST["yesa"]))
{
	echo '<div class="heads1"><b> Educational Qualifications </b> </div>';
echo "<ul><li>"; echo $educ1; echo"</li></ul>";
}
else
{	
}
if(isset($_POST["yesb"]))
{

echo "<ul><li>"; echo $educ2;  echo"</li></ul>";
}else
{
	
}
if(isset($_POST["yesc"]))
{

echo "<ul><li>"; echo $educ3;  echo"</li></ul>";
}else
{
	
}if(isset($_POST["yesd"]))
{

echo "<ul><li>"; echo $educ4;  echo"</li></ul>";
}else
{
	
}
if(isset($_POST["yese"]))
{

echo "<ul><li>"; echo $educ5;  echo"</li></ul>";
}else
{
	
}
?>
<?php

if(isset($_POST["yes1"]))
{
	echo '<div class="heads1"> <b>Work Experience </b></div>';
echo "<ul><li>"; echo "$worky1"; echo "    worked as   "; echo "$workd1"; echo "   at $workp1 . </li></ul>";
}

if(isset($_POST["yes2"]))
{

echo "<ul><li>"; echo "$worky2"; echo "    worked as   "; echo "$workd2"; echo "   at $workp2  . </li></ul>";
}else
{
	
}
if (isset($_POST["yes3"]))
{
	
echo "<ul><li>"; echo "$worky3"; echo "    worked as   "; echo "$workd3"; echo "   at $workp3 . </li></ul>";
}else{
	
}
if(isset($_POST["yes4"]))
{
echo "<ul><li>"; echo "$worky4"; echo "    worked as   "; echo "$workd4"; echo "   at $workp4 .  </li></ul>";
}
else{

}
	
?>
<center><b>Declaration</b></center>
<div>
<h4> I hereby declare that all the details furnished above are true to the best of my knowledge and belief.</h4>
Place :<br>
Date :
</div>
<div class="sign"><?php echo $name ?></div>

