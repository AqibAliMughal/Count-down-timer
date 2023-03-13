<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Count Down</title>

<style type="text/css">
body{
	background-color: #ececec;
	border-left: 10px solid #ccc;
	border-right: 10px solid #ccc;
	margin: 0px;
	padding: 0;
	font-family: 'Lato', sans-serif;
}	
header, footer{
	color: #fff;
	background-color: yellowgreen;
	font-size: 22px;
	font-weight: 700;
	letter-spacing: 2px;
	padding: 3px;
	box-sizing: border-box;
	box-shadow: 2px 3px 8px gray;
}

header{
	margin-bottom: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

footer{
	margin-top: 10px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;	
}

header:hover, footer:hover{
	color: purple;
	background-color: #f4f1ec;
	cursor: pointer;
	transition: 0.5s;
}

.timer-div{
	background-color: gray;
	width: 220px;
	text-align: center;
	margin: 20px;
	padding: 15px;
	border-radius: 10px;
	box-shadow: 2px 3px 8px gray;

}

.timer{
	font-size: 66px;
	font-weight: bolder;
	letter-spacing: 10px;
	color: #fff;
	background-color: skyblue;
	border-radius: 5px;
	margin: 2px;
}

.btn{
	padding: 15px;
	color: white;
	width: 100px;
	margin: 5px;
	cursor: pointer;
}

.start{
	background-color: yellowgreen;
}

.stop{
	background-color: tomato;
}

.restart{
	background-color: navy;
}

</style>
</head>
<body>

<center>
<!-- HEADER -->
	<?php 
	function headerFunction($headingTitle) {?>
	<header><h2><u> <?php echo $headingTitle ?> </u></h2></header>
	 <?php
	 }
	 headerFunction("Count down Timer");	
	?>

<div class="timer-div">
<span class="timer" id="hour"> 00 </span>
<span class="timer" id="minute"> 00 </span>
<span class="timer" id="seconds"> 00 </span>
</div>

<br> 
<button class="start btn" onclick="start()">Start</button>
<button class="stop btn" onclick="stop()">Stop</button>
<br>
<button class="restart btn" onclick="restart()">Restart</button>
</center>

<script type="text/javascript" language="javascript">
var hour = document.getElementById('hour');
var minute = document.getElementById('minute');
var second = document.getElementById('seconds');

var hourPrompt = prompt("Welcome, Enter Hours: ");
var minutePrompt = prompt("Enter Minutes: ");
var secondPrompt = prompt("Enter Seconds: ");

var hours = Number(hourPrompt);
var minutes = Number(minutePrompt);
var seconds = Number(secondPrompt);


var id = null;

hour.innerHTML = hours;
minute.innerHTML = minutes;
second.innerHTML = seconds;

function timer(){
	if(seconds == 0){
		if(minutes >= 1){
			seconds = 59;
			minutes--;
		}
	}
	console.log(seconds);
	seconds--;

	second.innerHTML = seconds;
	minute.innerHTML = minutes;

	if(minutes == 0){
		if(hours >= 1){
			minutes = 59;
			hours--;
		}
	}
	second.innerHTML = seconds;
	minute.innerHTML = minutes;
	hour.innerHTML = hours;

	if(hours == 0 && minutes == 0 && seconds == 0){
		clearInterval(id);
	}
}


function start(){
	if( hours == 0 && minutes == 0 && seconds == 0){
		alert("Your time is out please restart.");
	}
	else{
		id = setInterval("timer()", 1000);
	}
}

function stop() {
	clearInterval(id);
}
	
function restart(){
	hours = hourPrompt = prompt("Your time is Out, Continue by Entering Hours: ");
	minutes = minutePrompt = prompt("Enter Minutes: ");
	seconds = secondPrompt = prompt("and Enter Seconds: ");

	hour.innerHTML = hours;
	minute.innerHTML = minutes;
	second.innerHTML = seconds;
}
</script>

<center>
<!-- FOOTER -->
<?php
footerFunction();
function footerFunction()
{
?>
<footer>
<div>
	<p><strong> HIDAYA-ID: </strong></p>
	<p>19955 - Aqib Ali Mughal</p>
</div>	
</footer>
<?php 
} 
?>
</center>
</body>
</html>