<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['username'], $_POST['pwd']))
{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['pwd'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
      $sql = "select email from signup where email like '".$email."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      echo "email id already present";
  }
  else
  {
    // echo "Connection Successful";
     $sql = "INSERT INTO signup (username, email, password)
     VALUES ('$username', '$email', '$password')";
if(mysqli_query($conn, $sql)){
   // echo "Records inserted successfully.";
   header('Location: bruu.html');
} else{
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
}
}
 }
}
else
{
}

?>
<html>
<head>
<style>
b
{

    margin-bottom: 25px;
}
* {
    box-sizing: border-box;
}
body
{
font-size: 25px;
font-color:red;

}
input[type=text], input[type=password]
{
padding: 10px;
margin:20px;
width: 20%;
}
button
{
	background-color: blue;
	width:10%;
	font-color:red;
	padding: 10px;
}
a
{
color: red;
}
regstr
{
width:100%;
text-align: center;
cursor:pointer:
background-color: green;
padding: 16px 20px;
}
[class*="cont"] {
    width: 100%;
}
html {
    /* The image used */
    background-image: url("im57718372.jpg");
     
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
    
<h1>REGISTER</h1>
<p>Enter the following details</p>
<b>


    <form action="register1.php" method="post">
<label for="username"><b>Username</b></label>
<input type="text" class="input-block-level" placeholder="Enter Username" name="username" required />
<p>  </p>
<label for="email"><b>Email</b></label>
<input type="text" class="input-block-level" placeholder="Enter Email" name="email" required />
<p>  </p>
<label for="pwd"><b>Password</b></label>
<input type="password" class="input-block-level" placeholder="Enter Password" name="pwd" required />
<p>  </p>
<label for="psw-repeat"><b>Re-Enter Password</b></label>
<input type="password" class="input-block-level" placeholder="Re-Enter Password" name="psw-repeat" required />
<p>By creating an account you agree to our <a href="#">Terms and Privacy</a></p>

<button class="btn btn-large btn-primary" type="submit" name="btn-signup">REGISTER</button>
</form>

<p>Already have an account? <a href="signin1.php">Sign in</a>.</p>
<b>
</body>
</html>