<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

if (isset($_POST['feedback'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$feedbackk= mysqli_real_escape_string($con, $_POST['feedbackk']);

	if(mysqli_query($con, "INSERT INTO feedback(email,name,feedbackk) VALUES('" . $email . "', '" . $name . "','" . $feedbackk . "')")) {
			$successmsg = "Thank you for your Valuable FeedBack Apericiated!! <a href='feedbackh.php'></a>";
		} else {
			$errormsg = "Error in registering the feedback...Please try again later!";
		}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
<script>
$(window).load(function(){
  $('.slider')._TMS({
  prevBu:'.prev',
  nextBu:'.next',
  pauseOnHover:true,
  pagNums:false,
  duration:800,
  easing:'easeOutQuad',
  preset:'Fade',
  slideshow:7000,
  pagination:'.pagination',
  waitBannerAnimation:false,
  banners:'fade'
  })
})  
</script>
</head>
<body>
<div class="container-fluid"> 
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index.php"><h2>FITNESS WORLD</h2></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav navbar-right">
    
        
    
        <li><a href="register.php" style="margin-top: 24%;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <li><a href="login.php" style="margin-top: 26%;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  
      </ul>
    </div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
    <div class="main">

  
  <!--==============================header=================================-->
  <header>

    <nav>
      <ul class="menu">
        <li><a href="indexuser.php">Home</a></li>
        <li><a href="trainingsu.php">Trainings</a></li>
        <li><a href="timetableu.php">Timetable</a></li>
        <li><a href="nutritionu.php">Nutrition</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li class="current"><a href="feedbackh.php">Feedback</a></li>
        <li><a href="contactsu.php">Contact Us</a></li>
      </ul>
    </nav>
  </header>
<div class="container">
	<div class="row  feedback-main">
		<div class="col-md-4 col-md-offset-4 well">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<fieldset>
					<legend>Feedback</legend>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

                                        <div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Your Name" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Feedback</label>
						<input type="feedback" name="feedbackk" placeholder="Your Feedback" required class="form-control" />
					</div>

					<div class="form-group text-center">
						<input type="submit" name="feedback" value="Submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	
</div>
</div>

  <!--==============================content================================-->
  <!--==============================footer=================================-->
  <footer>
    <p>© 2020 Fitness World</p>
    
  </footer>
</div>
<script>Cufon.now();</script>
</body>
</html>
