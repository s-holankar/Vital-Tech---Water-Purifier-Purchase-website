<!DOCTYPE html>
<html>
<head>

<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="signup.php" method="POST">
  
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
		<a href="https://www.google.com/intl/en-GB/gmail/about/#" class="social"><i class="fa fa-google"></i></a>
		<a href="https://in.linkedin.com/" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>Use your email for registration</span><br>
	  
	   <div>
        <label for="name">Username</label>
	   <center><input type="text" name="Username" id="username" placeholder="username" onkeyup="showHint(this.value)" required></center>
	   <p>Suggestions: <span id="txtHint"></span></p>

    </div>
  

    <div>
        <label for="email">Email</label>
        <center><input type="text" name="Email" id="email_id" placeholder="email id" required ></center>
        <div id="email_error"></div>
    </div>
    <br>
    <div>
        <label for="password">Password</label>
    <center> <input type="Password" name ="Password" id="password1" minlength="8" maxlength="12"required ></center><br>
	<progress max="100" value="0" id="strength" style="width:200px"></progress>
		
    </div>

    <br>
    <div>
        <label for="confirm">Confirm password</label>
        <center><input type="Password" name="Cpassword" id="Cpassword" minlength="8" maxlength="12"required ></center>
        <div id="error"></div>
    </div>
    
	  <br>
	  <button type="submit"  id="form">Sign Up </button>
</form>
<p id='message'>Password Field cannot be empty</p>
</div>
<div class="form-container sign-in-container">
	<form action="sign.php" method="POST">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
		<a href="https://www.google.com/intl/en-GB/gmail/about/#" class="social"><i class="fa fa-google"></i></a>
		<a href="https://in.linkedin.com/" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span> Use your account</span><br>
	<center><input type="email" name="email" placeholder="email" required></center><br>
	<center><input type="password" name="password" id="password" minlength="8" maxlength="12" required ></center>
  <a href="email.php">Forgot Your Password</a>
  
  <button type="submit" name="login" value="Login">signIn</button>

</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>


<script>



   const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    
     

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
		
    });

	var pass = document.getElementById("password1")
 pass.addEventListener('keyup',function() {
	 checkPassword(pass.value)

 })


function checkPassword(Password) {
	var strengthBar = document.getElementById("strength")
	var strength = 0 ;
	if (Password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)){
		strength += 1
	}

	if(Password.match(/[~<>?]+/)){
		strength += 1
	}
	if(Password.match(/[!@$%&^*()]+/)){
		strength += 1
	}
	if(Password.length > 8){
		strength += 1
	}
	switch(strength) {
		case 0:
		  strengthBar.value = 20 ;
		  break

		  case 1:
		  strengthBar.value = 40 ;
		  break  

		  case 2:
		  strengthBar.value = 60 ;
		  break 

          case 3:
		  strengthBar.value = 80 ;
		  break

		  case 0:
		  strengthBar.value = 100 ;
		  break

	}
}



























  </script>
  
  


</body>
</html>
