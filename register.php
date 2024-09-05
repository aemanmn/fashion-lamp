<?php
include('config.php');
if(isset($_POST['register']))
{
 $fname=$_POST['fname'];
 $email=$_POST['email'];
 $password=md5($_POST['password']);
$query=mysqli_query($conn,"call registration('$fname','$email','$password')");
if($query)
{
echo "<script>alert('Registration Successfull');</script>";
echo "<script>window.location.href='register.php'</script>"; 
}
else
{
echo "<script>alert('Something went wrong. Please try again.');</script>";
echo "<script>window.location.href='register.php'</script>"; 
}
}
?>
<?php include('layouts/header.php');?>


    
       

    





    
    <div id="mobile">
        <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<br>
<br>

<div style="height: 600px; width: 2000px; background-color: #F2F2F2; 
	background-image: url(img/banner/b6.png); background-repeat: no-repeat">
    
	


<form class="form-horizontal"  method="post">
  <fieldset align="center">
    <div id="legend">
      <legend align="center" style="font-size: 35px;">Register</legend>
    </div>

     
    <div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="fname">Full Name</label>
      <div class="controls">
        <input type="text" id="name" name="fname" placeholder="" class="input-xlarge" required>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" class="input-xlarge" onBlur="checkAvailability()"  required>
 <span id="user-availability-status" style="font-size:12px;"></span>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
      </div>
    </div>
    <div class="control-group">
        <br>
      <!-- Button -->
      <div class="controls">
        <input  class="btn btn-success"  id="submit" type="submit" value='Register' name="register">
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
   <p class="message">Already registered. <a href="login.php">login here</a></p>
      </div>
    </div>
  </fieldset>

  
</form>

</legend>
</div>

<?php include('layouts/footer.php');?>





<?php
include 'config.php';


?>
</body>
</html>