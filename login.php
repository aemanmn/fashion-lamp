<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
  $email=$_POST['useremail'];
  $password=md5($_POST['password']);
  $query=mysqli_query($conn,"call login('$email','$password')");
$num=mysqli_fetch_array($query);
if($num>0)
{
$_SESSION['login']=$_POST['useremail'];
header("location:index.php");
}
else
{
$_SESSION['login']=$_POST['useremail'];
echo "<script>alert('Invalid  login details');</script>";
$extra="login.php";
}
}
?>


 <?php include('layouts/header.php');?>
 <div style="height: 600px; width: 2000px; background-color: #F2F2F2; 
	background-image: url(img/banner/b6.png); background-repeat: no-repeat">

    <style >
        
.login-page {
  
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: grey;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: black;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  
  background: #bdbdbd; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #bdbdbd, #404040);
  background: -moz-linear-gradient(right, #bdbdbd, #404040);
  background: -o-linear-gradient(right, #bdbdbd, #404040);
  background: linear-gradient(to left, #bdbdbd, #404040);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<legend>
<div class="login-page">
<fieldset stlye= "align-center">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" placeholder="Email id" name="useremail" required />
      <input type="password" placeholder="password" name="password" required />
      <button type="submit" name="login">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</fieldset>
</legend>
</div>
<script >
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>


<?php include('layouts/footer.php');?>