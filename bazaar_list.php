<!DOCTYPE html>
<html>
<head>
	<title>Bazaar List</title>
	<link rel="stylesheet" type="text/css" href="bazaar_list.css">
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
			
			</div>
			
			<div id="company_name">
				<p id="font">Feast House</p>
			</div>

			<div id="head_menu">
				<p  id="headerhover3">Work As Manager</p>
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
				<a class="btn btn-primary " id="button_up" href="dashboard.html" role="button">View As Member</a>
					
						</div>

				<div id="menu">
					<ul>
						<li><a href="manager.php">Dashboard</a></li>
						<li><a href="#">Meal Manage</a></li>
						<li><a href="bazaar_list.php">Bazaar List</a></li>
					</ul>
                    
                    
				</div>
            </aside>
            

            


			<div id="content">


             <center>   <h3>Make Your Bazaar List</h3> </center>
                
				<form method="POST">
					<table border="1" class="bazaarlistform" id="customers">
                    <tr >
                 <th >Product</th>
                 <th>Quantity</th>
                 <th>Price</th>
              </tr>
                  <tr>
                        <td><input type="text" name="product" placeholder="product.."></input></td>
                        <td><input type="text" name="quantity" placeholder="quanty.."></input></td>
                        <td><input type="number" name="price" placeholder="price.."></input></td>
                      </tr>
                
                 </table>
                
        <script>
                
        $(document).ready(function(){
                
        $("button").on("click", function(){
                
        var row = '<tr><td><input type="text" name="product" placeholder="product.."></input></td><td><input type="text" name="quantity" placeholder="quanty.."></input></td><td><input type="number" name="price" placeholder="price.."></input></td></tr>'
        
        $("#customers").append(row);
                
        });
                
        });
                
        </script>
        
        <button type="button" class="btn btn-primary" style="margin-left:90%;width:60px;margin-top:1%">+</button>
                    
                
                <center>
					<input type="submit" id="submit" class="btn btn-success " value="Submit" name="submit" >
                </center>
                </form>

                
                    
                        </div>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>