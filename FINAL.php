<!DOCTYPE html>		
<html>
<head>
	<title>WP</title>
	<link rel="stylesheet" href="FINAL.css">
</head>
<body>



	<?php
	if (isset($_POST['clack'])){
	$dream=$_POST["dream"];
	$willpower=$_POST["willpower"];
	$sacrifice=$_POST["sacrifice"];

	}
	
	?>
	<h3 align="center">

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- here &nbsp ; add spaces-->
	<font size="4">
		<a href="try.html">Eren</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="herr.html"> Lee</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="baackk.html">A1 </a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="deus.html">A2</a>&nbsp;&nbsp;&nbsp;&nbsp;

					<form name="avonlea"action="maram.php" method="post" onsubmit=" return katie()">
		
		<div id="y1">
			<label>YourDream</label>
<input name="dream" id="n1" class="t1" type="text" placeholder="tell us about your dream" >
<input type="button"  id="btn1" class="aa" value="Click">
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
		<label>YourWill</label>
<input name="willpower" size="30" id="n2" class="t1"  placeholder="how high and strong is your WillPower">
<input type="button"  id="btn2" class="aa" value="Press">
<br>	
<br>
<br>
		<label>YourSacrifice</label>
<input name="sacrifice" size="50" id="n3" class="t1"placeholder="tell us about your sacrifice bc in order to get  , u need to give ">
<input  type="button"  id="btn3" class="aa" value="Clack"  name="clack" >
</div>
<button type="submit">Soo</button>
</form>
<script >
const btn1= document.getElementById("btn1");//document.querySelector(".aa");
const btn2= document.getElementById("btn2");
const btn3= document.getElementById("btn3");
var content = document.getElementById("n1");//document.querySelector(".t1") ;


const SpeechRecognition= window.SpeechRecognition ||window.webkitSpeechRecognition; 
const recognition = new SpeechRecognition() ;

//recognition.start();

	recognition.onstart=function(){
	console.log("voice is activated , u can to microphone") ;
};
recognition.onresult = function(event)  {
	const current =event.resultIndex ;
	const transcript = event.results[current][0].transcript;
	content.value = transcript;
	readOutLoud(transcript);
};
recognition.onresult = function(event)  {
	const current =event.resultIndex ;
	const transcript = event.results[current][0].transcript;
	content.value = transcript;
	readOutLoud(transcript);
};
btn1.addEventListener("click",() => {
	recognition.start();
	content = document.getElementById("n1");
});

btn2.addEventListener("click",() => {
	content = document.getElementById("n2");
	recognition.onresult = function(event)  {
		const current =event.resultIndex ;
		const transcript = event.results[current][0].transcript;
		content.value = transcript;
		readOutLoud(transcript);
	};
	recognition.start();
});

btn3.addEventListener("click",() => {
	//recognition.start();
	content = document.getElementById("n3");

	recognition.onresult = function(event)  {
		const current =event.resultIndex ;
		const transcript = event.results[current][0].transcript;
		content.value = transcript;
		readOutLoud(transcript);
	};
	recognition.start();
});
function kaite() {
  var x = document.forms["avonlea"]["dream"].value;
  var y = document.forms["avonlea"]["willpower"].value;
  var z = document.forms["avonlea"]["sacrifice"].value;
  if (x == "")  {
    alert("Name must be filled out");
    return false ;
  }
}


</script>						
</h3>
</body>
</html>