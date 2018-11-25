<!--
Zeeshan, Gawshan, Vipneet
Alogrythm assignment 
ICS4U1
A.Krnic
SDSS School grid With A-Star 
-->
<!DOCTYPE html>
<html>
<head>
	<title>Maze solver</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="sheet.css">
	<script src="assets/p5.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
	<h1>Maze below</h1>
	<br>
	<h2>Starting node:</h2>
	<p>col:[<?php echo $_POST["startC"]; ?>] row:[<?php echo $_POST["startR"]; ?>]</p>
	<br>
	<h2>Ending node:</h2>
	<p>col:[<?php echo $_POST["endC"]; ?>] row:[<?php echo $_POST["endR"]; ?>]</p>
</body>
	<script type="text/javascript">
		//Global Vars; 
		var col = 35; 
		var row = 35;
		var bg; 
		var grid = new Array(col);
		var openSet = [];
		var closedSet = [];
		var startPos;
		var endPos;
		var trail = []; 
		var h;
		var w;
		var noTrail = false;

		Array.prototype.remove = function(element) {//delete node from set (open or closed)
		    for (var i = this.length - 1; i >= 0; i--) {
				if (this[i] == element) {
					this.splice(i,1); 
				}
			}
		};

		function heur(node, end) { //find shortest distance between current and end node
			var distance = abs(node.y-end.y) + abs(node.x-end.x);
			return distance;
		}

		//function to create spot/location object (consturcter funtion)
		function spot(x, y){
			this.f = 0;
			this.g = 0;
			this.h = 0;
			this.x = x; 
			this.y = y;
			this.nextTo = [];
			this.before =undefined;
			this.wall = false;
			this.show = function(color){
				if(color == "na"){
					noFill(); 
				}else{
					fill(color);
				}
				if (this.wall) {
					fill(0);
				}
				noStroke();
				rect(this.x*w,this.y*h, w-1,h-1)
			}
			this.findNext = function(grid) {
				if(y < col-1){
					this.nextTo.push(grid[this.y+1][this.x]);
				}
				if(y > 0){
					this.nextTo.push(grid[this.y-1][this.x]);
				}
				if(x < row-1){
					this.nextTo.push(grid[this.y][this.x+1]);
				}
				if(x < row-1){
					this.nextTo.push(grid[this.y][this.x-1]);
				}
			}
			if(random(1) < 0.2){
				this.wall = true;
			}
		}

		function setup(){ //p5 function to create canvas and starting paratmers   
			createCanvas(500,500); // makes the canvas 
			bg = loadImage("back.jpg");//loads background image
			console.log('Start');
			//sets cell width and height 
			w = width/col;
			h = height/row;
			//remove later
			//makes 2d array
			for (var i = 0; i < col; i++) {
				grid[i] = new Array(row);
			}
			//sets spots/cells in the 2d array
			for (var y = 0; y < col; y++) {
				for (var x = 0; x < row; x++) {
					grid[y][x] = new spot(x,y);
				}
			}
			//finds the nodes next to all other nodes 
			for (var y = 0; y < col; y++) {
				for (var x = 0; x < row; x++) {
					grid[y][x].findNext(grid);
				}
			}
			//sets start and end pos;
			startPos = grid[<?php echo $_POST["startC"]; ?>][<?php echo $_POST["startR"]; ?>];
			startPos.wall = false; 
			endPos = grid[<?php echo $_POST["endC"]; ?>][<?php echo $_POST["endR"]; ?>];
			endPos.wall = false; 

			//adds the current start Pos to openSet to start the eval
			openSet.push(startPos);
		}

		function draw() { //p5 function that refreshes canvas every 30-60 times a second
			if (openSet.length > 0) {
				var path = 0; //the assumed losted f (cost) value
				for (var i = 0; i < openSet.length; i++) { //loops through all open possible routes
					if(openSet[i].f < openSet[path].f){ //tries to find one with a lower f score
						path = i;//sets it to the new optimul path 
					}
				}
				var current = openSet[path]; //sets the current var to the current node
				if (current === endPos) { //if the current is the end then algo is done
					alert("done");
					noLoop(); 
				}
				openSet.remove(current); //removes the current node from array of nodes needed to be checked 
				closedSet.push(current); //adds tje current node to list of eval'd nodes
				var nextNode = current.nextTo; 
				for (var i = 0; i < nextNode.length; i++) {
					var node = nextNode[i];
					if(!closedSet.includes(node) && node != undefined && !node.wall){
						var temp = current.g + 1;
						if (openSet.includes(node)){
							if (temp < node.g) {
								node.g = temp; 
							}
						}
						else{
							node.g = temp;
							openSet.push(node); 
						}
						node.h = heur(node,endPos);
						node.f = node.g + node.h;
						node.before = current;  
					}
				}
			}else{
				alert("NO PATH POSSIBLE");
				noTrail = true; 
				noLoop();
			}
			background(0);
			for (var i = 0; i < col; i++) {
				for (var j = 0; j < row; j++) {
					grid[i][j].show(255);
				}
			}
			//change all eval spots to red 
			for (var i = 0; i < closedSet.length; i++) {
				closedSet[i].show("na");
			}
			//change all possible spot to be eval'd to green
			for (var i = 0; i < openSet.length; i++) {
				openSet[i].show("na");
			}
			//creates array with the path
			if(!noTrail){
				trail = []; 
				temp = current;
				trail.push(temp); 
				while(temp.before){
					trail.push(temp.before);
					temp = temp.before; 
				}
			}
			//displays the path
			for (var i = 0; i < trail.length; i++) {
				trail[i].show(color(0,0,255));
			}
		}
	</script>
</html>