<!--
	Names: Zeeshan B. & Vipneet J.
	Date: 02 March 2018
	Title: Quizzie: Computer Science
	Description: This is the computer science quiz page for our program. On this page, users will be able to write a quiz about computer science.
-->
<!DOCTYPE html>
<html>
<head>
	<!-- Sets veiwport --> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title --> 
	<title>Quizzie: Logos Quiz</title>
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
	<!-- Below allows content to fill page -->
	<div class="container-fluid">
		<div id="titleHolder">
			<div class="jumbotron">
				<!-- content -->
				<h1 id="title">Welcome to the Computer Science Quiz!</h1>
			</div>
			<div class="ajdust-1">
				<div class="row">
					<center>
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<p id="info">
								This quiz is about Computer Science <i class="em em-shocked_face_with_exploding_head"></i> concepts and basic material we have covered over the last month. It has a bit of HTML and a bit of PHP. Only a bit though <i class="em em-stuck_out_tongue_winking_eye"></i>. <strong>AT THE END OF THE QUIZ, SCROLL DOWN AND CLICK THE RESULTS BUTTON TO SEE WHAT QUESTIONS YOU GOT WRONG</strong>
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
		<!-- quiz form -->
		<form method="post" action="cs.php">
			<h1>Question #1</h1>
			<p>Which of the below is a header tag?</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q1" value="header1">header1<br>
				<input type="radio" name="Q1" value="h1">h1<br>
				<input type="radio" name="Q1" value="hd1">hd1<br>
				<input type="radio" name="Q1" value="head1">head1<br>
			</div>
			<h1>Question #2</h1>
			<p>Which of the below is used to end a PHP code block?</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q2" value="?>">?&gt;<br>
				<input type="radio" name="Q2" value=";">;<br>
				<input type="radio" name="Q2" value=">>">&gt;&gt;<br>
				<input type="radio" name="Q2" value="'">'<br>
			</div>
			<h1>Question #3</h1>
			<p>Which of the below IS NOT a html tag</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q3" value="head">head<br>
				<input type="radio" name="Q3" value="body">body<br>
				<input type="radio" name="Q3" value="form">form<br>
				<input type="radio" name="Q3" value="pleb">pleb<br>
			</div>
			<h1>Question #4</h1>
			<p>Which of the below IS a html tag</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q4" value="edge">edge<br>
				<input type="radio" name="Q4" value="hltm">hltm<br>
				<input type="radio" name="Q4" value="form">form<br>
				<input type="radio" name="Q4" value="pleb">pleb<br>
			</div>
			<h1>Question #5</h1>
			<p>Which of the below IS a php function</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q5" value="0">pleb()<br>
				<input type="radio" name="Q5" value="1">search-array()<br>
				<input type="radio" name="Q5" value="2">array_search()<br>
				<input type="radio" name="Q5" value="3">login()<br>
			</div>
			<br>
			<h1>Question #6</h1>
			<p>Which PHP function is used to do a case insensitive string comparison?</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q6" value="0">strcasecmp()<br>
				<input type="radio" name="Q6" value="1">strcmp()<br>
				<input type="radio" name="Q6" value="2">compare()<br>
				<input type="radio" name="Q6" value="3">difference()<br>
			</div>
			<br>
			<h1>Question #7</h1>
			<p>Which of the following is a CSS attribute?</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q7" value="0">vipify<br>
				<input type="radio" name="Q7" value="1">widow<br>
				<input type="radio" name="Q7" value="2">block-inline<br>
				<input type="radio" name="Q7" value="3">orphans<br>
			</div>
			<br>
			<h1>Question #8</h1>
			<p>In Owen's grade 11 CS ISU, what was the easter egg?</p>
			<div style="display: inline-grid;">
				<input type="radio" name="Q8" value="0">Vipneet outside the window<br>
				<input type="radio" name="Q8" value="1">Zeeshan in the closet<br>
				<input type="radio" name="Q8" value="2">Mr. Krnic wearing a fedora<br>
				<input type="radio" name="Q8" value="3">Prashanth as a playable character<br>
			</div>
			<br>
			<input type="submit" name="button" value="Submit">
		</form>
	</center>

	<?php
		$checkButton = strip_tags($_POST['button']);
		
		/*this if statement is used to check if the submit button is clicked. The code to check answers will only be run if the button is clicked*/
		if ($checkButton == "Submit")
		{
		/*The following lines of code are used to initialize variables to the values from the HTML form*/
		$Q1 = strip_tags($_POST['Q1']);
		$Q2 = strip_tags($_POST['Q2']);
		$Q3 = strip_tags($_POST['Q3']);
		$Q4 = strip_tags($_POST['Q4']);
		$Q5 = strip_tags($_POST['Q5']);
		$Q6 = strip_tags($_POST['Q6']);
		$Q7 = strip_tags($_POST['Q7']);
		$Q8 = strip_tags($_POST['Q8']);
		$check = array();
		$count = 0;
		$final = false;

		/*this if statement checks to make sure that all of the questions are answered*/
		if ($Q1 != null && $Q2 != null && $Q3 != null && $Q4 != null && $Q5 != null) 
		{
			if (strcasecmp(trim($Q1), 'h1') == 0) 
			{
				$check[0] = true;
			}
			else{
				$check[0] = false; 
			}

			if (strcasecmp(trim($Q2), '?>') == 0) 
			{
				$check[1] = true;
			}
			else{
				$check[1] = false; 
			}

			if (strcasecmp(trim($Q3), 'pleb') == 0) 
			{
				$check[2] = true;
			}
			else{
				$check[2] = false; 
			}

			if (strcasecmp(trim($Q4), 'form') == 0) 
			{
				$check[3] = true;
			}
			else{
				$check[3] = false; 
			}

			if (strcasecmp(trim($Q5), '2') == 0) 
			{
				$check[4] = true;
			}
			else{
				$check[4] = false; 
			}

			if (strcasecmp(trim($Q6), '0') == 0) 
			{
				$check[5] = true;
			}
			else{
				$check[5] = false; 
			}

			if (strcasecmp(trim($Q7), '3') == 0) 
			{
				$check[6] = true;
			}
			else{
				$check[6] = false; 
			}

			if (strcasecmp(trim($Q8), '1') == 0) 
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
			if ($Q1 == null) 
			{
				echo '<script>alert("You have not answered question 1. Please answer it and try submitting again.");</script>';
			}

			if ($Q2 == null) 
			{
				echo '<script>alert("You have not answered question 2. Please answer it and try submitting again.");</script>';
			}

			if ($Q3 == null) 
			{
				echo '<script>alert("You have not answered question 3. Please answer it and try submitting again.");</script>';
			}

			if ($Q4 == null) 
			{
				echo '<script>alert("You have not answered question 4. Please answer it and try submitting again.");</script>';
			}

			if ($Q5 == null) 
			{
				echo '<script>alert("You have not answered question 5. Please answer it and try submitting again.");</script>';
			}

			if ($Q6 == null) 
			{
				echo '<script>alert("You have not answered question 6. Please answer it and try submitting again.");</script>';
			}

			if ($Q7 == null) 
			{
				echo '<script>alert("You have not answered question 7. Please answer it and try submitting again.");</script>';
			}

			if ($Q8 == null) 
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
		if ($final == true) {
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
	      	<!-- checks if the results are false if they are it alerts the user with a modal click if they so wish -->
	        <?php
	        	/*this for loop is used to determine which question is wrong so the user can be told which are wrong*/
	        	for ($i=0; $i <count($check); $i++) { 
	        		if (!$check[$i]) {
	        			echo "<p>question #".($i + 1).":<strong>WRONG</strong></p>";
	        		}
	        	}
	        ?>
	        .
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