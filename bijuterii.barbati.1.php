<html>
<head>
<title> bijuterii_barbati1 </title>
<link rel="stylesheet" type="text/css" href="../css_pc/product.css">
<script src="../scripts/product.js"> </script>
<script src="../scripts/zoom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body> 
<?php require("header.php"); ?>


<div class="content">

	
    <div class="column" >
   <img class="imm" onclick="first()" src="Barbati/bijuterii_barbati1.jpg"> <br>
	<img class="imm" onclick="second()"src="Barbati/bijuterii_barbati11.jpg">


		
  </div>
  <div id="i1" class="column bijuterii_barbati1"  >  </div>
  <div id="i2" class="column bijuterii_barbati11"  >  </div>
	
  <div id="ceva" class="column">
    <h2>bijuterii_barbati1</h2>
    <p>Pret:189</p>
	<p>culoare:argintiu</p>
	  <?php
    if(isset($_SESSION['userId'])) {
        echo   
         '	<div >
				<button id="bijuterii_barbati1" class="addToChart"> Adauga in cos</button>
			</div>';
	}
    ?>
  </div>

  &nbsp;
</div>
<script>
document.getElementById("bijuterii_barbati1").addEventListener('click',function(){
	localStorage.setItem('bijuterii_barbati1','<div id="bijb1" class="chartitem"> <img src="Barbati/bijuterii_barbati1.jpg"> <button id="Rbijuterii_barbati1"> Remove </button> </div>');
	localStorage.setItem('pbijb1',189);
});
 </script>	
<br>
<?php require("footer.html");?>
</body>

</html> 