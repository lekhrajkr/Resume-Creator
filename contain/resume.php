
<div class="heg">RESUME</div>

<div class="introb">
<?php echo $name; ?> 
</div>
<div class="intro">
<?php echo $address1 ?> <br>
<?php echo $address2; ?><br>
<?php echo $address3; ?><br>
<?php echo $pincode; ?><br>
Mobile no. : <?php echo $mobile; ?>
</div>
<hr>
<div class="heg">Personal Details</div>
<br><br><br><br>
<table align="center">
<tr>
<td>Name</td>
<td><?php echo $name ?></td>
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
<td><?php echo $mobile; ?></td>
</tr>
<tr>
<td>Date of birth</td>
<td><?php echo $day; echo"/"; echo $month; echo"/"; echo $year; ?></td>
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
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="space"></div><br>
<div class="heg">Educational Qualifications</div>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <td>Sl no.</td>
            <td>Year </td>
            <td>Course</td>
            <td>Institute </td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $eduy1; ?></td>
            <td><?php echo $educ1; ?></td>
            <td><?php echo $edui1; ?></td>
        </tr>

        <tr>
            <td>2</td>
            <td><?php echo $eduy2; ?></td>
            <td><?php echo $educ2; ?></td>
            <td><?php echo $edui2; ?></td>
        </tr>

        <tr>
            <td>3</td>
            <td><?php echo $eduy3; ?></td>
            <td><?php echo $educ3; ?></td>
            <td><?php echo $edui3; ?></td>
        </tr>
		<tr>
            <td>4</td>
            <td><?php echo $eduy4; ?></td>
            <td><?php echo $educ4; ?></td>
            <td><?php echo $edui4; ?></td>
        </tr>
    </tbody>
</table>


<div class="space"></div>



<?php
echo "<ul>";
if(isset($_POST["yes1"]))
{
	echo "<div class=heg2>Work Experience</div>";
	echo "<br>";
echo "<li>"; echo "$worky1"; echo "    worked as   "; echo "$workd1"; echo "   at $workp1";
}
else
{
	
}
if(isset($_POST["yes2"]))
{

echo "<li>"; echo "$worky2"; echo "    worked as   "; echo "$workd2"; echo "   at $workp2";
}else
{
	
}
if (isset($_POST["yes3"]))
{
	
echo "<li>"; echo "$worky3"; echo "    worked as   "; echo "$workd3"; echo "   at $workp3";
}else{
	
}
if(isset($_POST["yes4"]))
{
echo "<li>"; echo "$worky4"; echo "    worked as   "; echo "$workd4"; echo "   at $workp4";
}
else{
	
}
?>
	
	
</ul>
<hr>
<div class="heg">Declaration</div>
<h4> I hereby declare that all the details furnished above are true to the best of my knowledge and belief.</h4>
<br>
<br><b>
Place :<br>
Date :</b>
<div class="sign"><?php echo $name ?></div>
