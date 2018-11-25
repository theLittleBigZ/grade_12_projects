<!--
	Names: Zeeshan B. & Vipneet J.
	Date: 02 March 2018
	Title: Quizzie
	Description: This is the main page for our quiz program. It contains all the basic information about the program. It also allows users to register or sign in to write quizzes.
-->
<?php
	$loggedIn = false;
	/*function CSVtoArray($file)
	{
		$row = 1;
		while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
		    $num = count($data);
		    echo "<p> $num fields in line $row: <br /></p>\n";
		    $row++;
		    for ($c=0; $c < $num; $c++) {
		        echo $data[$c] . "<br />\n";
		    }
		}
		return $array; 
	}*/

	function findUser($fileData,$user,$email)
	{
		$csv = array(); 
		$data = file($fileData, FILE_IGNORE_NEW_LINES); 
		foreach ($data as $key => $value) {
			$csv[$key] = str_getcsv($value); 
		}
		
		foreach ($csv as $key => $value) {
			$userName = in_array($user,$csv);
			$userEmail = in_array($email, $csv);
		}
		
		echo "email: $userEmail and username: $userName"; 
		/*
		if ($userName == true && $userEmail == true) {
			$return = array(true, true);
		}else if ($userName == false && $userEmail == true) {
			$return = array(false, true);
		}else if ($userName == true && $userEmail == false) {
			$return = array(true, false);
		}
		return $return; */
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
	<link rel="icon" type="icon/png" href="icon.png">
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
					<div class="col-md-12">
						<p id="info">
							This is a site where you do online quizzes on the topic of your choosing (from our selection of course <i class="em em-wink"></i>). To begin, there will be a few topics such as computer science/programming, movies, and logos. Over time, more quizzes can and will be added. If all goes well, we will have an admin portal which allows us (and hopefully Mr. Krnic if he decides to use it <i class="em em-smiley"></i>) to create quizzes on the fly without having to upload code every time.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<center>
				<div class="nicescroll-box">
					<div class="wrap">
						<center>
							<div class="card">
								<br>
								<br>
								<br>
								<a href="###"><button type="button" class="btn btn-default"<?php if (!$loggedIn) {echo "disabled";} ?>><h3>Quiz #1</h3></button></a>
								<br>
								<br>
								<br>
								<br>	 
							</div>
							<div class="card">
								<br>
								<br>
								<br>
								<a href="###"><button type="button" class="btn btn-default"<?php if (!$loggedIn) {echo "disabled";} ?>><h3>Quiz #2</h3></button></a>
								<br>
								<br>
								<br>
								<br>
							</div>
							<div class="card">
								<br>
								<br>
								<br>
								<a href="###"><button type="button" class="btn btn-default"<?php if (!$loggedIn) {echo "disabled";} ?>><h3>Quiz #3</h3></button></a>
								<br>
								<br>
								<br>
								<br>
							</div>
							<div class="card">
								<br>
								<br>
								<br>
								<a href="###"><button type="button" class="btn btn-default"<?php if (!$loggedIn) {echo "disabled";} ?>><h3>Quiz #4</h3></button></a>
								<br>
								<br>
								<br>
								<br>
							</div>
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
	        <form action="zeeIndex.php" method="post">
	        	<h4>Register</h4>
	        	<label>Username:</label>
	        	<input type="text" name="user" placeholder="Enter username">
	        	<br>
	        	<label>Password:</label>
	        	<input type="password" name="pass" placeholder="Enter Password">
	        	<br>
	        	<label>Email:</label>
	        	<input type="email" name="email" placeholder="Enter email">
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
	        	if(strip_tags($_POST != null)){
		        	$buttonClicked = strip_tags($_POST['button']);
		        	if ($buttonClicked == "Register") {
		        		$location = "userInfo.csv";
		        		$file = fopen($location, "a+");
		        		$username = strip_tags($_POST['user']);
			        	$passwd = strip_tags($_POST['pass']);	
			        	$email = strip_tags($_POST['email']);
			        	$line = array($username ,$passwd, $email);
			        	$check = findUser($location,$username, $email);

			        	if ($check[0] && $check[1]) {
			        		fputcsv($file, $line);
			        		fclose($file);
			        	}else{
			        		//echo "error";
			        		//print_r($check); 
			        	}
		        	}
		        }
	        ?>
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
<!-- Jquery JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
