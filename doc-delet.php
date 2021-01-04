<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($con, $_POST['user-name']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness-world-with-php-mysql-master";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM users WHERE name=$name";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>

 

</head>
<body>
<div class="container-fluid"> 
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="indexdoc.php"><h2>FITNESS WORLD</h2></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
		
				<li><a href="logout.php" style="margin-top: 24%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
		
			
   
	
			</ul>
		</div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
		<div class="main">

  <!--==============================header=================================-->

  <header>
    
    
    <nav>
     
      <ul class="menu">
     
      

       
      </ul>
    </nav>
    </nav>
  </header>
  <!--==============================content================================-->
  <div>
    
<div class="container">


  <div class="page-header">
   <h1 class="h2"><a class="btn btn-default" href="view-user.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View all Users</a></h1>
    </div>
    
	<div class="page-header">
      
      <h1 class="h2"><a class="btn btn-default" href="register.php"></span> &nbsp; Add User </a></h1>

    </div>

   <div class="page-header">
      
      <h1 class="h2"><a class="btn btn-default" href="doc-delet.php"></span> &nbsp; Delete User </a></h1>

    </div>
   <div class="form-group">
     <label for="name">Enter Details</label>
     <input name="user-name" placeholder="Enter Name" type="text" maxlength="20" required class="form-control" />
   </div>

  <div class="form-group text-center">
     <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
  </div>
    
  <?php
  if(isset($errMSG)){
      ?>
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
  }
  else if(isset($successMSG)){
    ?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
  }
  ?>   


  </div>
  <!--==============================footer=================================-->
  <footer>
    <p>© 2020 Fitness World</p>
  </footer>
</div>
	</div>

</div>

</body>
</html>

