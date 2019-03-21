<!DOCTYPE html>
<html>
<head>
	<title>Room Rent</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<div id="search_box">
			<form>
  				<input id="input" type="text" name="search" placeholder="Search..">
			</form>
			</div>

			<div id="company_name">
				<p id="font">Feast House</p>
			</div>

			<div id="head_menu">
				<a href="dashboard.html" id="headerhover3">Home</a>
				<a href="event.html" id="headerhover4">Event</a>
				<a href="about.html" id="headerhover2">About</a>
			</div>

		</header>
		<div id="container">
			<aside>
				<div id="profile">
					<div id="time">

	<!-- Javascript code for time calculation  -->
						<script>
							var date = new Date();
							var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	// ..........................Time showing...........................
							document.write(days[date.getDay()]  + " - " 
							+ date.toLocaleString('en-US' , {hour : 'numeric' , hour12: true ,
							minute:'numeric' , minute60:true 
							}) );

						</script>
					</div>
					<img src="img.png">					
					<a class="btn btn-success" id="edit" href="#" role="button">Edit</a>
					<a class="btn btn-danger" id="logout" href="#" role="button">Logout</a>
					<div class="button_up">
					<a class="btn btn-primary" id="button_up" href="manager.php" role="button">View as Manager</a>
					<script>
					
					</script>
					</div>
				</div>

				<div id="menu">
					<ul>
						<li><a href="dashboard.html">Dashboard</a></li>
						<li><a href="#">Meal Rate</a></li>
						<li><a href="#">Bazaar List</a></li>
						<li><a href="#">Current Balance</a></li>
						<li><a href="room_rent.php">Room Rent</a></li>
						<li><a href="#">Current Status</a></li>
						<li><a href="#">Current Manager</a></li>
						<li><a href="#">Manager History</a></li>


					</ul>
				</div>
			</aside>


			<content>
			<center><h2 style="font-family: Pacifico;margin-top: 5%;">Room rent</h2></center>

			<div style="width: 90%;
    height: 300px;
	box-shadow: 0px 0px 2px black;
	margin-top: 4%;
	margin-left:5%;
	font-size:25px;
	background:#e3d6fc;
">
                        <br>
                    
	<div style="margin-left:25%;font-family: Pacifico;"> 
	<label >Master Room Rent </label>
	</div>
	<div style="margin-left:25%;">
<?php
include_once("admin_config.php");
$result = mysqli_query($conn,"SELECT master_room FROM roomrent");

while ($res=mysqli_fetch_array($result))
{	
	echo "= " .$res['master_room']."" ;
	
}?>
</div>
<br/>
	<div style="margin-left:25%;font-family: Pacifico;	"> 
	<label ><h3>Indivisual Seat Rent :</h3></label>
	</div>
	<div style="margin-left:25%;">
<?php
include_once("admin_config.php");
$result = mysqli_query($conn,"SELECT individual_seat FROM roomrent");

while ($res=mysqli_fetch_array($result))
{	
	echo "= ".$res['individual_seat']."";
	
}?>
</div>
                </div>
  
    </content>
	
		<div id="footer">
		</div>
	</div>
</body>
</html>