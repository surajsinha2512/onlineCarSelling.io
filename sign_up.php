<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="id"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>
	
	<label for="username"><b> Username </b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	
	 <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
	<label for="contact"><b> Contact</b></label>
    <input type="text" placeholder="Enter Contact" name="contact" required>

    
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>



<?php
error_reporting(0);
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "SUPERCAR";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   // get values form input text and number
   if(isset($_POST['email']))
   {
   $mail = $_POST['email'];
   $usr = $_POST['username'];
   $pass = $_POST['psw'];
   $mobile = $_POST['contact'];
 
 //$query = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_mobile`) VALUES ('123456', 'suraj', 'gaya', '94312')";


 

$query = "INSERT INTO admin VALUES('$mail','$usr','$pass','$mobile')";

   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data inserted ';
   }else{
       echo 'Data Not inserted';
   }
   mysqli_close($connect);
   }

?>


</body>
</html>
