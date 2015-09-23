<?php require '_database/database.php'; ?>
<?php include 'webcomponents/navigation.php'; ?>

<div class="centered">
<?php
if(isset($_POST["request"])){
$mobile=$_POST['mobile'];
$sql = "SELECT * from userdetails where mobile='$mobile'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows > 0 ) 
			{
				echo '<form action="frame/resume/return.php" method="post">';
				}
			else 
				{
				echo '<form action="frame/resume/register.php" method="post">';
			}
		?>
<center><div class="page-header"><h1>Personal Information </h1></div></center>
<div class="pure-g ">
<div class="pure-u-1-3 padd">
<Legend >Name</Legend>
<input class="form-control input-lg" type="text" placeholder="Name" name="firstname" value="<?php echo $row["name"];?>" required>


<legend>Permanent Address</legend>
<input class="form-control input-lg" type="text" placeholder="Address Line 1" name="addressline1" value="<?php echo $row["address1"];?>" required>
<br>

<input class="form-control input-lg" type="text" name="addressline2" placeholder="Address Line 2" value="<?php echo $row["address2"];?>" required>
<br>

<input class="form-control input-lg" type="text" name="addressline3" placeholder="Address Line 3" value="<?php echo $row["address3"];?>" required>
<br>
<input class="form-control input-lg" type="text" name="pincode" placeholder="Pincode" value="<?php echo $row["pincode"];?>" required>
</div>
<div class="pure-u-1-3 padd">

<legend>Guardian's name</legend>
<input class="form-control input-lg" placeholder="Guardian's Name" type="text" name="gname" value="<?php echo $row["father"];?>" required>

<legend>Mobile Number</legend>
<input value="<?php echo $mobile; ?>" placeholder="Mobile No." class="form-control input-lg " type ="text" name="mnum" required>


<legend>Date of Birth</legend>
<div class="form-inline">

 <select name="dobday" class="form-control input-lg" id="dob-day" value="<?php echo $row["dayofbirth"];?>" required>
      <option value="<?php echo $row["dayofbirth"];?>"><?php echo $row["dayofbirth"];?></option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>

    <select name="dobmonth" class="form-control input-lg" id="dob-month" value="<?php echo $row["monthofbirth"];?>">
      <option value="<?php echo $row["monthofbirth"];?>"><?php echo $row["monthofbirth"];?></option>
      <option value="">-----</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>

    <select name="dobyear" class="form-control input-lg" id="dob-year" value="<?php echo $row["yearofbirth"];?>">
      <option value="<?php echo $row["yearofbirth"];?>"><?php echo $row["yearofbirth"];?></option>
      <option value="">----</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
    </select>
</div>
<legend>Gender</legend>

<select name="gender" class="form-inline form-control input-lg" required>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>

</div>

<div class="pure-u-1-3 padd">
<legend>Nationality</legend>
<input class="form-control input-lg .col-md-8" placeholder="Nationality" type="text" name="nat" value="<?php echo $row["nation"];?>" required>

<legend>Martial Status</legend>
<input class="form-control input-lg .col-md-4" type="text" placeholder="Martial Status" name="mstatus" value="<?php echo $row["marriage"];?>" required>

<legend>Relegion</legend>
<input class="form-control input-lg" type="text" name="rel" placeholder="Relegion" value="<?php echo $row["religion"];?>" required>

<legend>Languages Known</legend>
<input class="form-control input-lg" type="text" name="lann" placeholder="Languages" value="<?php echo $row["language"];?>" required>
</div></div>
<center>

<div class="padd3">
<legend >Extra</legend>
<table class="table padd"><tr><td><input type="text" class="form-control input-lg" name="extra"></td><td><input type="text"  class="form-control input-lg" name="ans1"></td>
<tr><td>
<input type="text" class="form-control input-lg" name="extra1"></td><td><input type="text" class="form-control input-lg" name="ans2"></td></tr></table>
</div>
</tbody>
</table>
</table><br>

<div class="padd3">
<legend><b>Educational Qualification</b></legend>
<table class="table ">
<tr>
<td><input  type="checkbox"  name="yesa" value="yesa" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc1" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course1" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit1" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof1" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesb" value="yesb" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc2" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course2" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit2" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof2" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesc" value="yesc" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc3" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course3" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit3" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof3" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesd" value="yesd" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc4" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course4" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit4" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof4" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yese" value="yese" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc5" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course5" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit5" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof5" placeholder="Year"></td>
</tr>

</table></div>
<div class="padd">
<legend><b>Experience</b></legend>
<table class="table">
<tr><td>
<input class="form-control" type="checkbox"  name="yes1" value="yes1" class="checkbox"> </td><td>
<input class="form-control" type="text"  name="yearsworked1" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked1" placeholder="Place worked"></td><td>
<input  class="form-control" type="text" name="duty1" placeholder="Worked as"></td></tr>

<tr><td>
<input class="form-control" type="checkbox" name="yes2" value="yes2" class="checkbox"></td><td>
<input class="form-control" type="text" name="yearsworked2" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked2" placeholder="Place worked"></td><td>
<input class="form-control"  type="text" name="duty2" placeholder="Worked as"></td></tr>

<tr><td>
<input class="form-control" type="checkbox" name="yes3" value="yes3" class="checkbox"></td><td>
<input class="form-control" type="text" name="yearsworked3" placeholder="Years Worked"></td><td>
<input class="form-control" type="text" name="placeworked3" placeholder="Place worked"></td><td>
<input class="form-control" type="text" name="duty3" placeholder="Worked as"></td></tr>

<tr><td>
<input  class="form-control" type="checkbox" name="yes4" value="yes4" class="checkbox"></td><td>
<input  class="form-control" type="text" name="yearsworked4" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked4" placeholder="Place worked"></td><td>
<input class="form-control" type="text" name="duty4" placeholder="Worked as"></td></tr>
</table></div>
<br><br>

<p>
  <input value="Create"  class="btn btn-primary btn-lg" type="submit"  name="submit">
  <input value="Reset" class="btn btn-default btn-lg" type="reset" >
</p>
<div class="alert alert-info" role="alert"><h2 class="padd">Never "Submit" an Incomplete Form , <b>Please Check all the details</b> above before submiting data<br> Once Submited data can be "Edited" using Search bar above</h2></div>
</form>
<?php } ?>
<?php
if(isset($_GET["request"])){
$mobile=$_GET['mobile'];
$sql = "SELECT * from userdetails where mobile='$mobile'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows > 0 ) 
			{
				echo '<form action="frame/resume/return.php" method="post">';
				}
			else 
				{
				echo '<form action="frame/resume/register.php" method="post">';
			}
		?>
<center><div class="page-header"><h1>Personal Information </h1></div></center>
<div class="pure-g ">
<div class="pure-u-1-3 padd">
<Legend >Name</Legend>
<input class="form-control input-lg" type="text" placeholder="Name" name="firstname" value="<?php echo $row["name"];?>" required>


<legend>Permanent Address</legend>
<input class="form-control input-lg" type="text" placeholder="Address Line 1" name="addressline1" value="<?php echo $row["address1"];?>" required>
<br>

<input class="form-control input-lg" type="text" name="addressline2" placeholder="Address Line 2" value="<?php echo $row["address2"];?>" required>
<br>

<input class="form-control input-lg" type="text" name="addressline3" placeholder="Address Line 3" value="<?php echo $row["address3"];?>" required>
<br>
<input class="form-control input-lg" type="text" name="pincode" placeholder="Pincode" value="<?php echo $row["pincode"];?>" required>
</div>
<div class="pure-u-1-3 padd">

<legend>Guardian's name</legend>
<input class="form-control input-lg" placeholder="Guardian's Name" type="text" name="gname" value="<?php echo $row["father"];?>" required>

<legend>Mobile Number</legend>
<input value="<?php echo $mobile; ?>" placeholder="Mobile No." class="form-control input-lg " type ="text" name="mnum" required>


<legend>Date of Birth</legend>
<div class="form-inline">

 <select name="dobday" class="form-control input-lg" id="dob-day" value="<?php echo $row["dayofbirth"];?>" required>
      <option value="<?php echo $row["dayofbirth"];?>"><?php echo $row["dayofbirth"];?></option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>

    <select name="dobmonth" class="form-control input-lg" id="dob-month" value="<?php echo $row["monthofbirth"];?>">
      <option value="<?php echo $row["monthofbirth"];?>"><?php echo $row["monthofbirth"];?></option>
      <option value="">-----</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>

    <select name="dobyear" class="form-control input-lg" id="dob-year" value="<?php echo $row["yearofbirth"];?>">
      <option value="<?php echo $row["yearofbirth"];?>"><?php echo $row["yearofbirth"];?></option>
      <option value="">----</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
    </select>
</div>
<legend>Gender</legend>

<select name="gender" class="form-inline form-control input-lg" required>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>

</div>

<div class="pure-u-1-3 padd">
<legend>Nationality</legend>
<input class="form-control input-lg .col-md-8" placeholder="Nationality" type="text" name="nat" value="<?php echo $row["nation"];?>" required>

<legend>Martial Status</legend>
<input class="form-control input-lg .col-md-4" type="text" placeholder="Martial Status" name="mstatus" value="<?php echo $row["marriage"];?>" required>

<legend>Relegion</legend>
<input class="form-control input-lg" type="text" name="rel" placeholder="Relegion" value="<?php echo $row["religion"];?>" required>

<legend>Languages Known</legend>
<input class="form-control input-lg" type="text" name="lann" placeholder="Languages" value="<?php echo $row["language"];?>" required>
</div></div>
<center>

<div class="padd3">
<legend >Extra</legend>
<table class="table padd"><tr><td><input type="text" class="form-control input-lg" name="extra"></td><td><input type="text"  class="form-control input-lg" name="ans1"></td>
<tr><td>
<input type="text" class="form-control input-lg" name="extra1"></td><td><input type="text" class="form-control input-lg" name="ans2"></td></tr></table>
</div>
</tbody>
</table>
</table><br>

<div class="padd3">
<legend><b>Educational Qualification</b></legend>
<table class="table ">
<tr>
<td><input  type="checkbox"  name="yesa" value="yesa" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc1" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course1" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit1" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof1" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesb" value="yesb" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc2" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course2" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit2" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof2" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesc" value="yesc" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc3" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course3" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit3" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof3" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yesd" value="yesd" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc4" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course4" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit4" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof4" placeholder="Year"></td>
</tr>
<tr>
<td><input  type="checkbox"  name="yese" value="yese" class="checkbox"> </td><td>
<td><input class="form-control input-lg" type="text" name="perc5" placeholder="Percentage"></td>
<td><input class="form-control input-lg" type="text" name="course5" placeholder="Course"></td>
<td><input class="form-control input-lg" type="text" name="instit5" placeholder="Institute Studied"></td>
<td><input class="form-control input-lg" type="text" name="yearof5" placeholder="Year"></td>
</tr>

</table></div>
<div class="padd">
<legend><b>Experience</b></legend>
<table class="table">
<tr><td>
<input class="form-control" type="checkbox"  name="yes1" value="yes1" class="checkbox"> </td><td>
<input class="form-control" type="text"  name="yearsworked1" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked1" placeholder="Place worked"></td><td>
<input  class="form-control" type="text" name="duty1" placeholder="Worked as"></td></tr>

<tr><td>
<input class="form-control" type="checkbox" name="yes2" value="yes2" class="checkbox"></td><td>
<input class="form-control" type="text" name="yearsworked2" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked2" placeholder="Place worked"></td><td>
<input class="form-control"  type="text" name="duty2" placeholder="Worked as"></td></tr>

<tr><td>
<input class="form-control" type="checkbox" name="yes3" value="yes3" class="checkbox"></td><td>
<input class="form-control" type="text" name="yearsworked3" placeholder="Years Worked"></td><td>
<input class="form-control" type="text" name="placeworked3" placeholder="Place worked"></td><td>
<input class="form-control" type="text" name="duty3" placeholder="Worked as"></td></tr>

<tr><td>
<input  class="form-control" type="checkbox" name="yes4" value="yes4" class="checkbox"></td><td>
<input  class="form-control" type="text" name="yearsworked4" placeholder="Years Worked"></td><td>
<input  class="form-control" type="text" name="placeworked4" placeholder="Place worked"></td><td>
<input class="form-control" type="text" name="duty4" placeholder="Worked as"></td></tr>
</table></div>
<br><br>

<p>
  <input value="Create"  class="btn btn-primary btn-lg" type="submit"  name="submit">
  <input value="Reset" class="btn btn-default btn-lg" type="reset" >
</p>
<div class="alert alert-info" role="alert"><h2 class="padd">Never "Submit" an Incomplete Form , <b>Please Check all the details</b> above before submiting data<br> Once Submited data can be "Edited" using Search bar above</h2></div>
</form>
<?php } ?>













