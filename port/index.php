<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Zeeshan's Portfolio</title>
		<!--//////// CSS ///////////-->
	    <!-- Jquery.Scollbar CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.css">
	    <!-- Materialize Icon -->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!-- Iconate CSS-->
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iconate/0.2.7/iconate.min.css">
	    <!-- BootStrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <!-- FullPage CSS -->
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css">
	    <!--My CSS-->
	    <link rel="stylesheet" href="sheet.css">
	</head>
	<body>
		<div id="navSection">
			<div class="nav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="pri.html">Privacy</a></li>
					<li><a href="hea.html">Health and Safety</a></li>
					<li><a href="car.html">Careers</a></li>
					<li><a href="soc.html">Impact on Society</a></li>
					<li><a href="fur.html">Future of Technology in Society</a></li>
					<li><a href="env.html">Computers and the Environment</a></li>
					<li><a href="fin.html">Final thoughts</a></li>
					<li><a href="txt/" role="button">source code</a></li>
				</ul>
			</div>
			<div class="clickable">
				<i id="triggerDown" class="large material-icons" style="font-size: 45px" >arrow_downward</i>
				<i id="triggerUp" class="large material-icons" style="font-size: 45px">arrow_upward</i>
				<!--<i id="triggerDown" class="fas fa-angle-double-down fa-5x"></i>
				<i id="triggerUp" class="fas fa-angle-double-up fa-5x"></i>-->
			</div>
		</div>
		<div class="container-fluid">
			<section>
				<div class="card">
					<h1>Zeeshan's Portfolio</h1>
					<br>
					<button type="button" id="pri" class="btn btn-default topic">Privacy</button>
					<br>
					<button type="button" id="hea" class="btn btn-default topic">Health and Safety</button>
					<br>
					<button type="button" id="car" class="btn btn-default topic">Career</button>
					<br>
					<button type="button" id="soc" class="btn btn-default topic">Impact on Society</button>
					<br>
					<button type="button" id="fur" class="btn btn-default topic">Future of Technology</button>
					<br>
					<button type="button" id="env" class="btn btn-default topic">Computers and the Environment</button>
					<br>
					<button type="button" id="fin" class="btn btn-default topic">Final Thoughts</button>
				</div>
			</section>
		</div>
		<!---//// Modal ////-->
		<div id="description" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Error</h4>
		      </div>
		      <div class="modal-body">
		        <p id="mod-bod">Error</p>
		        <a id="mod-bodN" href="">Continue reading</a>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
	<!--////////// JS //////////-->
	<!-- Jquery JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!-- Jquery.Scollbar JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>
	<!-- BootStrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- FullPage JS -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js'></script>
	<!-- Iconate JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iconate/0.2.7/iconate.min.js"></script>
	<!-- NiceScroll JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<!-- Fullpage JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/vendors/jquery.easings.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.3/vendors/scrolloverflow.min.js"></script>
	<!-- My JS-->
	<script >
		function OpenTopicMod(topic){
		  if (topic == "pri") {
		    $(".modal-title").text("Privacy");
		    $("#mod-bod").text("Facebook Spying on you?");
		    $("#mod-bodN").attr("href","pri.html"); 
		  } else if (topic == "hea") {
		    $(".modal-title").text("Health and Safety");
		    $("#mod-bod").text("Tips to stay health on a computer.");
		    $("#mod-bodN").attr("href","hea.html"); 
		  }else if (topic == "car") {
		    $(".modal-title").text("Career");
		    $("#mod-bod").text("What do web developers do.");  
		    $("#mod-bodN").attr("href","car.html");
		  }else if (topic == "soc") {
		    $(".modal-title").text("Impact on Society");
		    $("#mod-bod").text(" Technology in your everyday life."); 
		    $("#mod-bodN").attr("href","soc.html"); 
		  }else if (topic == "fur") {
		    $(".modal-title").text("Future of Technology");
		    $("#mod-bod").text("The furture of AI.");
		    $("#mod-bodN").attr("href","fur.html");  
		  }else if (topic == "env") {
		    $(".modal-title").text("Computers and the Environment");
		    $("#mod-bod").text("Soltion for climate change???");
		    $("#mod-bodN").attr("href","env.html");  
		  } else {
		    $(".modal-title").text("Final Thoughts");
		    $("#mod-bod").text("My final thoughts on these topics.");
		    $("#mod-bodN").attr("href","fin.html");  
		  }
		  $("#description").modal(); 
		}

		$( "#triggerDown" ).click(function() {
			$( ".nav" ).slideDown(function() {
		    	$("#triggerDown").hide();
		    	$("#triggerUp").show();
		  	});
		});

		$( "#triggerUp" ).click(function() {
			$( ".nav" ).slideUp(function() {
		    	$("#triggerDown").show();
		    	$("#triggerUp").hide();
		  	});
		});

		$(".topic").click(function(e){
			console.log(e.target.id);
			OpenTopicMod(e.target.id); 
		});

		$(document).ready(function(){
			$(".nav").hide(); 
			$("#triggerUp").hide();
		}); 
	</script>
</html>