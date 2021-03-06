<?php session_start();?>
<!doctype html>
<!-- justification.php
	Justification Pending
	This page provides a field entry to allow the user to submit their justification for late arrival using a on-screen keyboard.
	
	Copyright Isaac Mercer 2016
	All Rights Reserved
-->
<html>
<head>
<style>
#zeropad {
	width: calc(10% - 25px);	
	margin-bottom: 2px;
}
.mdl-button {
	min-width: 50px !important; 
	
}
#loadingoverlay {
	width: 100%;
	height: 100%;
	z-index: 55;
	position:absolute;
	left:0;
	top:0;
	right: 0;
	bottom: 0;	
	background-color: #fff;
	display: none;
	text-align:center;
}
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/material.min.css">

<script defer src="js/material.min.js"></script>
<meta charset="utf-8">
<title>School Signin</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> 
<!--<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Glendowie College Sign In</span>
      <div class="mdl-layout-spacer"></div>
      <div id="time"></div>
    </div>
  </header>-->
<main class="mdl-layout__content">
    <div class="page-content" > 
          <h4 style="text-align:center">Good Morning <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['familyname'];?>!, Please enter a short justification for your late arrival.</h4>
          <div style="text-align:center">
<?php if (isset ($_GET['error'])) { echo '<i style="color: red; text-align: center;">Please enter a valid input and try again</i>';}?></div>
   	  <div style="width: 50%;margin:auto;">
            <form action="api/process.php" method="get" id="initialform" onSubmit="document.getElementById('loadingoverlay').style.display = 'block';">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" rows= "1" id="reasonfield" name="justification"/>
			    <label class="mdl-textfield__label" for="reasonfield">Justification</label>
              </div>
            </form>
                       
        </div>
        <div class="mdl-grid" style="text-align:center">
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'q'; document.getElementById('reasonfield').focus()">Q</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'w'; document.getElementById('reasonfield').focus()">W</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'e'; document.getElementById('reasonfield').focus()">E</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'r'; document.getElementById('reasonfield').focus()">R</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 't'; document.getElementById('reasonfield').focus()">T</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'y'; document.getElementById('reasonfield').focus()">Y</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'u'; document.getElementById('reasonfield').focus()">U</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'i'; document.getElementById('reasonfield').focus()">I</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'o'; document.getElementById('reasonfield').focus()">O</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'p'; document.getElementById('reasonfield').focus()">P</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value.slice(0, -1); document.getElementById('reasonfield').focus()"><i class="material-icons">backspace</i></button></div>
</div>
	</div>
            <div class="mdl-grid" style="text-align:center">
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'a'; document.getElementById('reasonfield').focus()">A</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 's'; document.getElementById('reasonfield').focus()">S</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'd'; document.getElementById('reasonfield').focus()">D</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'f'; document.getElementById('reasonfield').focus()">F</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'g'; document.getElementById('reasonfield').focus()">G</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'h'; document.getElementById('reasonfield').focus()">H</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'j'; document.getElementById('reasonfield').focus()">J</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'k'; document.getElementById('reasonfield').focus()">K</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'l'; document.getElementById('reasonfield').focus()">L</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('loadingoverlay').style.display = 'block'; document.getElementById('initialform').submit();
"><i class="material-icons">send</i></button></div>
</div>
 <div class="mdl-grid" style="text-align:center">
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'z'; document.getElementById('reasonfield').focus()">Z</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'x'; document.getElementById('reasonfield').focus()">X</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'c'; document.getElementById('reasonfield').focus()">C</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'v'; document.getElementById('reasonfield').focus()">V</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'b'; document.getElementById('reasonfield').focus()">B</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'n'; document.getElementById('reasonfield').focus()">N</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + 'm'; document.getElementById('reasonfield').focus()">M</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"><button class="mdl-button mdl-js-button mdl-button--raised"  onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + '.'; document.getElementById('reasonfield').focus()">.</button></div>
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"></div>  <div class="mdl-cell mdl-cell--1-col" id="zeropad"></div>
</div>
 <div class="mdl-grid" style="text-align:center">
  <div class="mdl-cell mdl-cell--1-col" id="zeropad"></div><div class="mdl-cell mdl-cell--1-col" id="zeropad"></div><div class="mdl-cell mdl-cell--5-col"><button style="width: 100%" class="mdl-button mdl-js-button mdl-button--raised" onClick="document.getElementById('reasonfield').value = document.getElementById('reasonfield').value + ' '; document.getElementById('reasonfield').focus()">          </button></div>
</div>
	</div>
        <div id="loadingoverlay">
    	<div style="padding: 25px">
    		<div class="mdl-spinner mdl-js-spinner is-active" style="width:300px; height: 300px;"></div>
        </div>
    </div>
  </main>
</div>
<!--<script type="application/javascript">
setInterval(function(){
  	var date = new Date();
	var n = date.toDateString();
	var time = date.toLocaleTimeString();
	
	document.getElementById('time').innerHTML = n + ' ' + time;
}, 1000);
</script>-->
</body>
</html>
