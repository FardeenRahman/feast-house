<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
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
			<h2>Admin Panel</h2>
			</div>

			<div id="company_name">
				<p id="font">Feast House</p>
			</div>

			<div id="head_menu">
					<a class="btn btn-danger" href="#" role="button">Logout</a>
                
			</div>

		</header>
		<div id="container">
			<aside>
				<div id="menu">
                        <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Dashboard')" >Dashboard</button>
                                <button class="tablinks" onclick="openCity(event, 'Assign_manager')">Assign Manager</button>
                                <button class="tablinks" onclick="openCity(event, 'Room_rent')" >Room Rent</button>
                                <button class="tablinks" onclick="openCity(event, 'Current_manager')">Current Manager</button>
                                <button class="tablinks" onclick="openCity(event, 'Manager_history')">Manager History</button>

                              </div>
                              
                              <div id="Dashboard" class="tabcontent">
                              
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/image3.jpg" alt="Los Angeles" style="width:100%;height:500px">
      </div>

      <div class="item">
        <img src="images/image7.jpg" alt="Chicago" style="width:100%;height:500px">
      </div>
    
      <div class="item">
        <img src="images/image.jpg" alt="New york" style="width:100%;height:500px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

                            </div>
                              
                              <div id="Assign_manager" name="Assign_manager"" class="tabcontent">
                                <center>
                                    <h3>Assign A New Manager</h3>
                                </center> 
                              </div>
                              
        <div id="Room_rent" class="tabcontent">
                    <center><h3>Room rent</h3></center>
            <div id="roomrent">
                <div id="roomrentdesign">
                    <form method="POST" id="rentform">
                            <br>
                    <label >Master Room Rent</label>
                    <input type="Number" class="form-control" placeholder="Enter Master Room Rent" name="master_room">
                    <br>
                    <label >Individual Seat Rent</label>
                    <input type="Number" class="form-control" placeholder="Enter Individual Seat Rent" name="individual_seat">
                    <br>
                    <input type="submit" class="btn btn-success" id="sub"  value="Insert" name="submit" >                    
                    <input type="submit" class="btn btn-primary" id="up"  value="Update" name="update" >
                  <script>
$(document).ready(function(){
  $("#up").click(function(){
    
    $("input[name=Assign_manager]").id("defaultOpen" , true);
  });
});
                  </script>  
<?php
                    include_once("admin_config.php");
                    if(isset($_POST['submit']))
	                  {
		                  $master_room = $_POST['master_room'];
		                  $individual_seat = $_POST['individual_seat'];
		                  $result=mysqli_query($conn,"Insert into roomrent(master_room,individual_seat) values('$master_room','$individual_seat')");
                      
                    }
                    else if(isset($_POST['update']))
	                  {
		                  $master_room = $_POST['master_room'];
		                  $individual_seat = $_POST['individual_seat'];
		                  $result=mysqli_query($conn,"UPDATE roomrent SET master_room='$master_room',individual_seat='$individual_seat'");
                    }
                    
?>


                </div>
                <div id="roomrentshow">
                        <br>
                    
                        <label >Master Room Rent :</label>
<?php
include_once("admin_config.php");
$result = mysqli_query($conn,"SELECT master_room FROM roomrent");

while ($res=mysqli_fetch_array($result))
{	
	echo $res['master_room'];
	
}?>


                        <br>
                        <br>
                    <label >Indivisual Seat Rent :</label>
<?php
include_once("admin_config.php");
$result = mysqli_query($conn,"SELECT individual_seat FROM roomrent");

while ($res=mysqli_fetch_array($result))
{	
	echo "".$res['individual_seat']."";
	
}?>
                </div>
                
            </form>
            </div>
        </div>

                              <div id="Current_manager" class="tabcontent">
                                <center>
                                        <h3>Current Manager</h3>
                                </center>
                                
                                  </div>
                              <div id="Manager_history" class="tabcontent">
                                    <center>
                                            <h3>Manager History</h3>
                                    </center>
                              </div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
		</aside>
		</div>
		<div id="footer">
            <center>Copyright by Sakib Al Islam & Fardeen Rahman</center>
		</div>
	</div>
</body>
</html>



