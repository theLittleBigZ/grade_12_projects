<!--
	Names: Zeeshan B. & Vipneet J.
	Date: 02 March 2018
	Title: Quizzie
	Description: This is the main page for our quiz program. It contains all the basic information about the program. It also allows users to register or sign in to write quizzes. It also contains the links to get to the quiz pages.
-->

<?php
	//the below checks if the user has logged in
	if (strip_tags($_GET != null) && strip_tags($_GET['submit']) == "Continue") {
		$loggedIn = true; 
	} else{
		$loggedIn = false;
		echo'<script>alert("Welcome to Quizzie! Please register or sign-in and then you will be able to write quizzes.");</script>';
	}
	//CUSTOM function to find user
	function findUser($fileData,$user,$type)
	{
		//VARIABLES ARE CREATED HERE*/
		$test;
		$csv = array(); 
		$data = file($fileData, FILE_IGNORE_NEW_LINES); 
		$userinfo = array();
		//creates an array of the users data 
		foreach ($data as $key => $value) {
			$csv[] = str_getcsv($value);
		}
		//checks users entered data to database data
		foreach ($csv as $key => $value) { 
		if (trim($value[0]) == trim($user)) {
				$userNameExists = true;
				$userinfo = $value; 
				break;
			}
			else{
				$userNameExists = false;
			}
		}
		
		if ($userNameExists) {
			$test = 1; 
		}
		elseif (!$userNameExists) {
			$test = 2; 
		}
		 
		if ($type == 0) {
			return $test;
		}
		elseif ($type == 1) {
			return $userinfo;
		}
		
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Sets veiwport --> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title --> 
	<title>Welcome to Quizzie!</title>
	<!-- Icon -->
	<link rel="icon" type="icon/png" href="images/icon.png">
	<!--//////////////////// CSS Files /////////////////////// -->
	<!-- Emoji CSS --> 
	<link rel="stylesheet" type="text/css" href="https://afeld.github.io/emoji-css/emoji.css">
	<!-- Font Awesome CSS --> 
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- FullPage CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css">
    <!-- My CSS --> 
    <link rel="stylesheet" type="text/css" href="sheet.css">
    <!-- Jquery JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
	<button type="button" id="loginBtn" class="btn btn-primary" data-toggle="modal" data-target="#signup">Register/Login</button>
	<div class="container-fluid">
		<div id="titleHolder">
			<div class="jumbotron">
				<h1 id="title">Quizzie</h1>
				<p id="byLine"><a href="http://sdsscomputers.com/ZeeshanBadr">Zeeshan Badr</a>&nbsp;&nbsp;<i class="em em-atom_symbol"></i>&nbsp;&nbsp;<a href="http://sdsscomputers.com/VipneetJohar">Vipneet Johar</a></p>
			</div>
			<div class="ajdust-1">
				<div class="row">
					<center>
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<p id="info">
								This is a site where you do online quizzes on the topic of your choosing (from our selection of course <i class="em em-wink"></i>). To begin, there will be a few topics such as computer science/programming, movies, and logos. Over time, more quizzes can and will be added. If all goes well, we will have an admin portal which allows us (and hopefully Mr. Krnic if he decides to use it <i class="em em-smiley"></i>) to create quizzes on the fly without having to upload code every time.
							</p>
						</div>
						<div class="col-md-3"></div>
					</center>
				</div>
			</div>
		</div>
			<!-- THE FOLLOWING SETS OF DIVS AND LINKS ARE USED TO CREATE THE BUTTONS TO GET TO THE QUIZZES-->		
			<div class="row">
			<center>
				<div class="nicescroll-box">
					<div class="wrap">
						<center>
							<form>
								<div class="card">
									<br>
									<br>
									<br>
									<a href="logos.php"<?php if (!$loggedIn){echo 'class="btn btn-default disabled"';}else{echo 'class="btn btn-default"';} ?>><h3>Logos</h3></a>
									<br> 
									<br>
									<br>
									<br>	 
								</div>
								<div class="card">
									<br>
									<br>
									<br>
									<a href="cars.php"<?php if (!$loggedIn){echo 'class="btn btn-default disabled"';}else{echo 'class="btn btn-default"';} ?>><h3>Cars</h3></a>
									<br>
									<br>
									<br>
									<br>
								</div>
								<div class="card">
									<br>
									<br>
									<br>
									<a href="cs.php"<?php if (!$loggedIn){echo 'class="btn btn-default disabled"';}else{echo 'class="btn btn-default"';} ?>><h3>Computer Science</h3></a>
									<br>
									<br>
									<br>
									<br>
								</div>
							</form>
						</center>
					</div>
				</div>
			</center>
		</div>
	</div>
	<div id="signup" class="modal fade" role="dialog">
	  	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Register/Sign-in</h4>
	      </div>
	      <div class="modal-body">
	      	<!-- THE FORM IS USED TO CREATE THE COMPONENTS ON THE REGISTER/SIGNIN WINDOW -->
	        <form action="index.php" method="post">
	        	<h4>Register</h4>
	        	<label>Username:</label>
	        	<input type="text" name="user" placeholder="Enter username">
	        	<br>
	        	<label>Password:</label>
	        	<input type="password" name="pass" placeholder="Enter Password">
	        	<br>
	      		<input type="submit" name="button" value="Register" class="btn btn-primary">
	      		<hr>
	        	<h4>Sign-in</h4>
	        	<label>Username:</label>
	        	<input type="text" name="Username" placeholder="Enter username">
	        	<br>
	        	<label>Password:</label>
	        	<input type="password" name="passwd" placeholder="Enter Password">
	        	<br>
	      		<input type="submit" name="button" value="Sign-in" class="btn btn-primary"> 
	      		<hr>	
	        </form>
	        <?php
	        /*THE FOLLOWING PHP IS USED TO DETERMINE WHICH BUTTON THE USER CLICKS, REGISTER OR SIGNIN. EITHER WAY, THE FUNCTIONS ARE USED TO CHECK IF THE USERNAME EXISTS AND IF IT DOES IF THE PASSWORD IS CORRECT OR NOT. THE USER IS GIVEN A MESSAGE FOR EACH OF THE SCENARIOS*/
	        	$signedUp = false; 
	        	$passwordCorrect = false;
	        	if(strip_tags($_POST != null)){
	        		$location = "userInfo.csv";
		        	$buttonClicked = strip_tags($_POST['button']);
		        	if ($buttonClicked == "Register") {
		        		$file = fopen($location, "a+");
		        		$username = strip_tags($_POST['user']);
			        	$passwd = strip_tags($_POST['pass']);	
			        	$line = array($username ,$passwd);
			        	$check = findUser($location,$username, 0);
     	
			        	if ($check == 2) {
			        		fputcsv($file, $line);
			        		fclose($file);
			        		echo '<script>$(document).ready(function(){$("#complete").modal();});</script>';	
			        	}
			        	else{
			        		echo "<strong>Sorry, a user with your chosen username already exists. Please try logging in or create a new account.</strong>";  		
			        	}
		        	}
		        	elseif ($buttonClicked == "Sign-in") 
		        	{
		        		$file = fopen($location, "r");
		        		$username = strip_tags($_POST['Username']);
		        		$password = strip_tags($_POST['passwd']);
		        		$userExists = findUser($location, $username, 1);
		        		$test = findUser($location, $username, 0);
		        		
		        		//print_r($userExists);
		        		if ($test == 2) {
		        			echo "Sorry, you don't seem to exist in our system. Please register.";
		        		}
		        		elseif (trim($password) == $userExists[1]) {
		        			echo "Your password is correct.";
		        			echo '<script>$(document).ready(function(){$("#complete").modal();});</script>';
		        		}
		        		else
		        		{
		        			echo "Sorry, your password is incorrect. Please try again.";
		        		}
		        		fclose($file);
		        	}
		        }
	        ?>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal -->
	<div id="complete" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <!-- THIS IS THE DROP DOWN BOX THAT COMES AND ALLOWS THE USER TO OFFICIALLY SIGNIN AND WRITE QUIZZES  -->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Next Step</h4>
	      </div>
	      <div class="modal-body">
	        <p>Click to log in and write quizzes.</p>
	      </div>
	      <div class="modal-footer">
	      	<form action="" method="get">
	        	<input type="submit" name="submit" value="Continue" class="btn btn-default">
	        </form>
	      </div>
	    </div>

	  </div>
	</div>
</body>
<!--/////////////  JavaScript Files //////////////////////-->
<!-- Firebase JS-->
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<!--// Initialize Firebase-->
<script>
  // Initialize Firebase

</script>
<!-- BootStrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- FullPage JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js'></script>
<!-- Iconate JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iconate/0.2.7/iconate.min.js"></script>
<!-- Fullpage JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/vendors/jquery.easings.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.3/vendors/scrolloverflow.min.js"></script>
<!-- Nice Scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.iframehelper.min.js"></script>
<!-- My JS-->
<script src="script.js"></script>
</html>