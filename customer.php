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

<form method="POST" >
  <div class="container">
    <h1>CUSTOMER DETAILS</h1>
    <p>Enter details of the Customer .</p>
    <hr>

    <label for="customer_id"><b>Customer id</b></label>
    <input type="text" placeholder="Enter customer id" name="customer_id" required>
	
	<label for="customer_name"><b>customer name</b></label>
    <input type="text" placeholder="Enter customer name" name="customer_name" required>
	


    <label for="customer_address"><b>customer address</b></label>
    <input type="text" placeholder="Enter customer address" name="customer_address" required>
	
	<label for="customer_mobile"><b>customer mobile</b></label>
    <input type="text" placeholder="Enter customer mobile" name="customer_mobile" required>
	
	
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="Submit" class="signupbtn">done</button>
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
   if(isset($_POST['customer_id']))
   {
   $id = $_POST['customer_id'];
   $cname = $_POST['customer_name'];
   $caddress = $_POST['customer_address'];
   $cmobile = $_POST['customer_mobile'];
 
 //$query = "INSERT INTO `customer` (`cutomer_id`, `customer_name`, `customer_address`, `customer_mobile`) VALUES ('123456', 'suraj', 'gaya', '94312')";


 

$query = "INSERT INTO customer VALUES('$id','$cname','$caddress','$cmobile')";

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
