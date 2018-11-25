<!--
	Names: Zeeshan B. & Vipneet J.
	Date: 02 March 2018
	Title: Quizzie: Cars
	Description: This is the cars quiz page for our program. On this page, users will be able to write a quiz about different cars. 
-->
<!DOCTYPE html>
<html>
<head>
	<!-- Sets veiwport --> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title --> 
	<title>Quizzie: Cars Quiz</title>
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
	<div class="container-fluid">
		<div id="titleHolder">
			<div class="jumbotron">
				<h1 id="title">Welcome to the Cars Quiz!</h1>
			</div>
			<div class="ajdust-1">
				<div class="row">
					<center>
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<p id="info">
								On this page you will be doing a car quiz <i class="em em-shocked_face_with_exploding_head"></i>. In this quiz there will be some questions where you will be presented with a car and you must guess the name of the car manufacturer in a text box. <strong>AT THE END OF THE QUIZ, SCROLL DOWN AND CLICK THE RESULTS BUTTON TO SEE WHAT QUESTIONS YOU GOT WRONG</strong>
							</p>
						</div>
						<div class="col-md-3"></div>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- The following block of code is used to create the questions and answers. They are created in a form and contain images, radio buttons, and text boxes -->
	<center>
		<form method="post" action="cars.php">
			<h2>Question 1</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/honda.png">
			<input type="text" name="txtHonda">
			<br><br>
			<h2>Question 2</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/ford.png">
			<input type="text" name="txtFord">
			<br><br>
			<h2>Question 3</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/lambo2.png">
			<input type="text" name="txtLambo">
			<br><br>
			<h2>Question 4</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/audi.jpg">
			<input type="text" name="txtAudi">
			<br><br>
			<h2>Question 5</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/toyota.jpg">
			<input type="text" name="txtToyota">
			<br><br>
			<h2>Question 6</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/maserati.jpg">
			<input type="text" name="txtMaserati">
			<br><br>
			<h2>Question 7</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/bmw.jpg">
			<input type="text" name="txtBMW">
			<br><br>
			<h2>Question 8</h2>
			<h3>What is this car manufacturer?</h3>
			<img class="car" src="images/mercedes.jpg">
			<input type="text" name="txtMercedes">
			<br><br>
			<input type="submit" name="button" value="Submit">
		</form>
	</center>

	<?php
		$checkButton = strip_tags($_POST['button']);

		/*this if statement is used to check if the submit button is clicked. The code to check answers will only be run if the button is clicked*/
		if ($checkButton == "Submit") 
		{
		/*The following lines of code are used to initialize variables to the values from the HTML form*/
		$honda = strip_tags($_POST['txtHonda']);
		$ford = strip_tags($_POST['txtFord']);
		$lambo = strip_tags($_POST['txtLambo']);
		$audi = strip_tags($_POST['txtAudi']);
		$toyota = strip_tags($_POST['txtToyota']);
		$maserati = strip_tags($_POST['txtMaserati']);
		$bmw = strip_tags($_POST['txtBMW']);
		$mercedes = strip_tags($_POST['txtMercedes']);
		$check = array();
		$count = 0;
		$final = false;

		/*this if statement checks to make sure that all of the questions are answered*/
		if ($honda != null && $ford != null && $lambo != null && $audi != null && $toyota != null && $maserati != null && $bmw != null && $mercedes != null) 
		{
			/*the following sets of if statements are used to determine if the user provided the correct answer or not*/
			if (strcasecmp(trim($honda), 'honda') == 0) 
			{
				$check[0] = true;
			}
			else{
				$check[0] = false; 
			}

			if (strcasecmp(trim($ford), 'ford') == 0) 
			{
				$check[1] = true;
			}
			else{
				$check[1] = false; 
			}

			if (strcasecmp(trim($lambo), 'lamborghini') == 0) 
			{
				$check[2] = true;
			}
			else{
				$check[2] = false; 
			}

			if (strcasecmp(trim($audi), 'audi') == 0) 
			{
				$check[3] = true;
			}
			else{
				$check[3] = false; 
			}

			if (strcasecmp(trim($toyota), 'toyota') == 0) 
			{
				$check[4] = true;
			}
			else{
				$check[4] = false; 
			}

			if (strcasecmp(trim($maserati), 'maserati') == 0) 
			{
				$check[5] = true;
			}
			else{
				$check[5] = false; 
			}

			if (strcasecmp(trim($bmw), 'bmw') == 0) 
			{
				$check[6] = true;
			}
			else{
				$check[6] = false; 
			}

			if (strcasecmp(trim($mercedes), 'mercedes-benz') == 0) 
			{
				$check[7] = true;
			}
			else{
				$check[7] = false; 
			}

			$final = true;
		}
		else
		{
			/*the following if statements are used to determine if any of the questions were left blank. If any were left blank, the user is told to answer it*/
			if ($honda == null) 
			{
				echo '<script>alert("You have not answered question 1. Please answer it and try submitting again.");</script>';
			}

			if ($ford == null) 
			{
				echo '<script>alert("You have not answered question 2. Please answer it and try submitting again.");</script>';
			}

			if ($lambo == null) 
			{
				echo '<script>alert("You have not answered question 3. Please answer it and try submitting again.");</script>';
			}

			if ($audi == null) 
			{
				echo '<script>alert("You have not answered question 4. Please answer it and try submitting again.");</script>';
			}

			if ($toyota == null) 
			{
				echo '<script>alert("You have not answered question 5. Please answer it and try submitting again.");</script>';
			}

			if ($maserati == null) 
			{
				echo '<script>alert("You have not answered question 6. Please answer it and try submitting again.");</script>';
			}

			if ($bmw == null) 
			{
				echo '<script>alert("You have not answered question 7. Please answer it and try submitting again.");</script>';
			}

			if ($mercedes == null) 
			{
				echo '<script>alert("You have not answered question 8. Please answer it and try submitting again.");</script>';
			}
		}

		/*this for loop is used to run through thr array of checks to determine how many questions the user got correct*/
		for ($i=0; $i < count($check); $i++) 
		{ 
			if ($check[$i] == true) 
			{
				$count++;
			}
		}

		/*this if statement is used to determine whether or not the user has answered all of the questions and pressed submit. If they have, then they will be able to see all of their results*/
		if ($final == true) 
		{
			echo '<script>alert("We hope you enjoyed the quiz. You got '.$count.' questions right. See you next time!");</script>';	
			echo '<br><center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#complete">Check Results</button></center>';	  
		}
	}
	?>
	<a href="index.php"><button>HOME</button></a>
	<!-- Modal -->
	<div class="modal fade" id="complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Results</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php
	        /*this for loop is used to determine which question is wrong so the user can be told which are wrong*/
	        	for ($i=0; $i <count($check); $i++) { 
	        		if (!$check[$i]) {
	        			echo "<p>Question #".($i + 1).":<strong>WRONG</strong></p>";
	        		}
	        	}
	        ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

