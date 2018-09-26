<?php
	$host="localhost";
	$dbname="alumini";
	$dbuser="root";
	
$name=$_POST['name'];
$batch=$_POST["batch"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$add1=$_POST["add1"];
$add2=$_POST["add2"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$country=$_POST["country"];
$inst_comp=$_POST["association"];
$nature=$_POST["nature"];
$lcity=$_POST["lcity"];
	$link=mysqli_connect($host,$dbuser,"",$dbname);
	//$conn=mysql_connect($host,$dbname,"");
	//mysql_select_db($dbname,$conn);
	
	$sql="INSERT INTO `user` values('$name','$batch','$email','$contact','$add1','$add2','$city','$state','$pin','$country','$inst_comp','$nature','$lcity');";
//foreach ($fdata as &$value) {$value;}
//$sql1="insert into user values ('array_push($fdata)')";
	
	if($result=mysqli_query($link,$sql)){
	
	echo "Successfully Registered";
	echo"<b>"; 
	echo $result;
	include("success.html");
	}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
