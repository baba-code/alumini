<?php include("header.html"); ?>
<html>
	<head>
		<title>IIC Alumini Team Registration</title>
		<link rel="stylesheet" href="alm.css" type="text/css">
	</head>
<body>
		<code>* Mandatory Options to fill  </code>
		<fieldset width="70%"><legend>Registration Form</legend>
			
			<form action="reg.php" method="post">
			<table>
			<tr>	<td  >*Name</td><td><input type ="text" name="name" placeholder="Full Name"></td></tr>
					<td>*Batch </td><td><select name="batch">
						<option>----Select your Batch Year----</option>
			<?php for($i=1997,$j=1999;$i<2017;$i++)
			{
				echo "<option>".$i."-".$j."</option>";
				$j++;
				} ?>
</select> 
</td></tr></tr>

			<tr><td id="labels" >*Email</td><td> <input type="text" name="email" placeholder="example@iic.ac.in"> </td></tr>
			<tr><td id="labels" >*Contact</td><td><input type="text" name="contact" placeholder="eg. 999 999 9999"> </td></tr>
		<tr>	<td id="labels" >*Address</td><td><input type="textarea" name="add1" column="2" placeholder="Address"> </td></tr>
				&nbsp <td></td><td><input type="textarea" name="add2" column="2"> </td></tr>
		<tr>	<td id="labels" >*City</td><td><input type="text" name="city" placeholder="City"> </td></tr>
				<tr><td id="labels" >*State</td><td><input type="text" name="state" placeholder="State"> </td></tr>
				<tr><td id="labels" >*Postal/Zip Code</td><td><input type="text" name="pin" placeholder="eg. 110010"> </td></tr>
				<tr><td id="labels" >*Country</td><td><input type="text" name="country" placeholder="eg. India"> </td></tr>
				
				
				</table>
				<b>Details about Work and Associations</b>
				<table> 
				<tr><td>*Presentally Associated with :-- <td><select name="association"> <option> Institute </option>
					<option> Company </select>
					 
					<tr><td>Course/Designation<td><input type="text" name="nature" placeholder="eg.Developer"> </td></tr>
					<tr><td>Presently Locality at CIty <td><input type="text" name="lcity" placeholder="Current City"> </td></tr>
				<tr><td><input type="submit" value="Submit" width="100"> <td><input type="reset" value="Reset">
					</table>	 
						
				</form>
				<pre>Thanks for visiting us</pre>
	</fieldset>
		</body>
	</html>
	