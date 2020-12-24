
<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "logindemo";

$conn = new mysqli("sql207.unaux.com", "unaux_27284019", "Adi@2418","unaux_27284019_demo");

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];
$cpassword = $_POST["Cpassword"];


$sql = "INSERT INTO register (Username, Email, Password,Cpassword) 
VALUES ('$name', '$email', '$password','$cpassword')";

if($conn->query($sql) === TRUE){
	
	echo "<h1><center> Registration Successful.</center></h1>"; 
	 
}

else{
	echo "<h1><center> Registration Failed.</center></h1>"; 

}


