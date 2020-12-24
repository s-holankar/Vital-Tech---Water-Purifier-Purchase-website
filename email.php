
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    
<style>

body {
	background:midnightblue;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}


h1 {
	font-weight: bold;
    margin: 10;
    text-align: center;
}

.resetcontainer {
	background-color:white;
	border-radius: 10px;
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 30%;
	min-height: 480px;
}

label
{
    display:block; 
    width:x; 
    height:y;
    text-align: center;
}

</style>


	
</head>
<body>
<div class="resetcontainer">
<form action="forgot.php" method="POST">
    <h1>Reset Password</h1>
    <br>
	<div>
        <label for="Email">User Email Address</label><br><br>
      <center><input type="email" name="email"  required></center>
      
    <br>
	<br>
	<center><button>Submit</button></center>
</form>
</div>
</body>
</html>