<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>


	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="bg">
	<div class="container-fluid ">
	<div class="row">
	
		
	<form class="form col-md-4 form_container" method="POST">
  			<div class="form-group">
  				<center><h3 class="color">Sign Up</h3> </center><br/>
				    <label class="color">User Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Enter Name">
				    </div>
            <div class="form-group ">
              <label class="color">Email</label>
              <input type="email" name="email" class="form-control" name="email" placeholder="Enter email">
            </div>
				    <div class="form-group ">
				    <label class="color">Password</label>
				    <input type="password" class="form-control" name="password"  placeholder="Enter Password">
				  	</div>

            <div class="form-group ">
              <label class="color">Re-type Password</label>
              <input type="password"  class="form-control" name="retype_password" placeholder="Re-type the Password">
            </div>

            <div class="form-group ">
              <label class="color">Permanent Address</label>
              <input type="address" name="permanent_address" class="form-control" name="permanent_address" placeholder="Enter Your Permanent Address">
            </div>

			       <div class="form-group ">
              <label class="color">Phone Number</label>
              <input type="number" name="phone" class="form-control" name="phone" placeholder="Enter Your Phone Number">
            </div><br/>
            
				  <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>

			

	</form>



</body>
</html>

<?php
include_once('config.php');
if(isset($_POST['submit'])){
  
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $password = $_POST['password'] ;
  $retype_password = $_POST['retype_password'] ;
  $permanent_address = $_POST['permanent_address'] ;
  $phone = $_POST['phone'] ;

  $result = mysqli_query($conn , "INSERT into registration (name ,email,password,retype_password,permanent_address , phone) 
            VALUES('$name' ,'$email' ,'$password' ,'$retype_password' ,'$permanent_address' ,'$phone')");

          if($result){
          header("Location:dashboard.html");
          }
          else{
            echo "Insert";
          }
}

?>