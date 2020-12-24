<?php
//database connection
$con=mysqli_connect("sql207.unaux.com", "unaux_27284019", "Adi@2418","unaux_27284019_demo");

if(!$con){
	echo "No DB connection";
}
//varibales to take input from form 
$password = $_POST['Password'];
$cpassword = $_POST['Cpassword'];
//selection of database where the input data will be stored
mysqli_select_db($con,'demo');


if(isset($_POST['submit'])){

$reg= "insert into reset(Password,Cpassword) values ('$password', '$cpassword')";
$result=mysqli_query($con,$reg);
}

if($reg){
	echo "<Center><h2>Password Updated Successful</h2></center>";
	
}
else{
	echo "<center><h2> Password Not Updated</h2></center>";
}
?>