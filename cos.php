<html>
<head>
<title>Cos</title>
<link rel="stylesheet" type="text/css" href="../css_pc/cos.css">
</head>
<?php include("header.php"); ?>
<body>
<div id="content" class="split left">
	
	<script>
	var i;
	var res = '';
	for(i = 0 ; i < localStorage.length ; i++)
	{
		res += localStorage.getItem(localStorage.key(i));
	}
	document.getElementById("content").innerHTML = res;

	</script>
</div>
<div id="order" class="split right"> 
	<h1> Pret Total:</h1>
	<h1 id="total"> </h1>


<form action="comanda.php" method="post">

			<input type="text" name="first"	placeholder="First Name" required>
			<input type="text" 	name="last"placeholder="Last Name" required>
			<input type="text"  name="adress" placeholder="Address" required>
			<input type="text" pattern="[0-9]{10}" title="Please enter Phone number" name="phone" placeholder="Phone" required>	
			<input style="display:none;"id="price" name="pret" value="">
					
			<button type="submit" name="comanda">Complete Order</button>	
		</form>
			<script>
	var i;
	var k = 0;
	var res = 0;
	for(i = 0 ; i < localStorage.length ; i++)
	{	if(parseInt(localStorage.getItem(localStorage.key(i)),10)>0)
		{res = parseInt(res,10) + parseInt(localStorage.getItem(localStorage.key(i)),10);
		k = k + 1;}
	else
	{ k = k + 1; }
	}
	if(k%2 == 0)
	{
	document.getElementById("total").innerHTML = res +' RON';
	document.getElementById("price").value = res +' RON';
	}
	else
	{res = res - 240;
	document.getElementById("total").innerHTML = res +' RON';
	document.getElementById("price").value = res +' RON';
	}
	</script>

</div>
 &nbsp;
 <script src="../scripts/Rgb1.js"> </script>
<script src="../scripts/Rgb2.js"> </script>
<script src="../scripts/Rgb3.js"> </script>
<script src="../scripts/Rgb4.js"> </script>
<script src="../scripts/Rgb5.js"> </script>
<script src="../scripts/Rgb6.js"> </script>
<script src="../scripts/Rtb1.js"> </script>
<script src="../scripts/Rtb2.js"> </script>
<script src="../scripts/Rtb3.js"> </script>
<script src="../scripts/Rtb4.js"> </script>
<script src="../scripts/Rtb5.js"> </script>
<script src="../scripts/Rtb6.js"> </script>
<script src="../scripts/Rjb1.js"> </script>
<script src="../scripts/Rjb2.js"> </script>
<script src="../scripts/Rjb3.js"> </script>
<script src="../scripts/Rjb4.js"> </script>
<script src="../scripts/Rjb5.js"> </script>
<script src="../scripts/Rjb6.js"> </script>
<script src="../scripts/Rcb1.js"> </script>
<script src="../scripts/Rcb2.js"> </script>
<script src="../scripts/Rcb3.js"> </script>
<script src="../scripts/Rcb4.js"> </script>
<script src="../scripts/Rcb5.js"> </script>
<script src="../scripts/Rcb6.js"> </script>
<script src="../scripts/Rcsb1.js"> </script>
<script src="../scripts/Rcsb2.js"> </script>
<script src="../scripts/Rcsb3.js"> </script>
<script src="../scripts/Rcsb4.js"> </script>
<script src="../scripts/Rcsb5.js"> </script>
<script src="../scripts/Rcsb6.js"> </script>
<script src="../scripts/Rpanb1.js"> </script>
<script src="../scripts/Rpanb2.js"> </script>
<script src="../scripts/Rpanb3.js"> </script>
<script src="../scripts/Rpanb4.js"> </script>
<script src="../scripts/Rpanb5.js"> </script>
<script src="../scripts/Rpanb6.js"> </script>
<script src="../scripts/Rlb1.js"> </script>
<script src="../scripts/Rlb2.js"> </script>
<script src="../scripts/Rlb3.js"> </script>
<script src="../scripts/Rlb4.js"> </script>
<script src="../scripts/Rlb5.js"> </script>
<script src="../scripts/Rlb6.js"> </script>
<script src="../scripts/Rpb1.js"> </script>
<script src="../scripts/Rpb2.js"> </script>
<script src="../scripts/Rpb3.js"> </script>
<script src="../scripts/Rpb4.js"> </script>
<script src="../scripts/Rpb5.js"> </script>
<script src="../scripts/Rpb6.js"> </script>
<script src="../scripts/Rpab1.js"> </script>
<script src="../scripts/Rpab2.js"> </script>
<script src="../scripts/Rpab3.js"> </script>
<script src="../scripts/Rpab4.js"> </script>
<script src="../scripts/Rpab5.js"> </script>
<script src="../scripts/Rpab6.js"> </script>
<script src="../scripts/Rpub1.js"> </script>
<script src="../scripts/Rpub2.js"> </script>
<script src="../scripts/Rpub3.js"> </script>
<script src="../scripts/Rpub4.js"> </script>
<script src="../scripts/Rpub5.js"> </script>
<script src="../scripts/Rpub6.js"> </script>
<script src="../scripts/Rbijb1.js"> </script>
<script src="../scripts/Rbijb2.js"> </script>
<script src="../scripts/Rbijb3.js"> </script>
<script src="../scripts/Rbijb4.js"> </script>
<script src="../scripts/Rbijb5.js"> </script>
<script src="../scripts/Rbijb6.js"> </script>
<script src="../scripts/Rceb1.js"> </script>
<script src="../scripts/Rceb2.js"> </script>
<script src="../scripts/Rceb3.js"> </script>
<script src="../scripts/Rceb4.js"> </script>
<script src="../scripts/Rceb5.js"> </script>
<script src="../scripts/Rceb6.js"> </script>
<script src="../scripts/Rocb1.js"> </script>
<script src="../scripts/Rocb2.js"> </script>
<script src="../scripts/Rocb3.js"> </script>
<script src="../scripts/Rocb4.js"> </script>
<script src="../scripts/Rocb5.js"> </script>
<script src="../scripts/Rocb6.js"> </script>
<script src="../scripts/Rgeb1.js"> </script>
<script src="../scripts/Rgeb2.js"> </script>
<script src="../scripts/Rgeb3.js"> </script>
<script src="../scripts/Rgeb4.js"> </script>
<script src="../scripts/Rgeb5.js"> </script>
<script src="../scripts/Rgeb6.js"> </script>
<script src="../scripts/Rporb1.js"> </script>
<script src="../scripts/Rporb2.js"> </script>
<script src="../scripts/Rporb3.js"> </script>
<script src="../scripts/Rporb4.js"> </script>
<script src="../scripts/Rporb5.js"> </script>
<script src="../scripts/Rporb6.js"> </script>
<script src="../scripts/Rsapb1.js"> </script>
<script src="../scripts/Rsapb2.js"> </script>
<script src="../scripts/Rsapb3.js"> </script>
<script src="../scripts/Rsapb4.js"> </script>
<script src="../scripts/Rsapb5.js"> </script>
<script src="../scripts/Rsapb6.js"> </script>
<script src="../scripts/Rpsb1.js"> </script>
<script src="../scripts/Rpsb2.js"> </script>
<script src="../scripts/Rpsb3.js"> </script>
<script src="../scripts/Rpsb4.js"> </script>
<script src="../scripts/Rpsb5.js"> </script>
<script src="../scripts/Rpsb6.js"> </script>
<script src="../scripts/Rtsb1.js"> </script>
<script src="../scripts/Rtsb2.js"> </script>
<script src="../scripts/Rtsb3.js"> </script>
<script src="../scripts/Rtsb4.js"> </script>
<script src="../scripts/Rtsb5.js"> </script>
<script src="../scripts/Rtsb6.js"> </script>
<script src="../scripts/Rgsb1.js"> </script>
<script src="../scripts/Rgsb2.js"> </script>
<script src="../scripts/Rgsb3.js"> </script>
<script src="../scripts/Rgsb4.js"> </script>
<script src="../scripts/Rgsb5.js"> </script>
<script src="../scripts/Rgsb6.js"> </script>
<script src="../scripts/Rtrb1.js"> </script>
<script src="../scripts/Rtrb2.js"> </script>
<script src="../scripts/Rtrb3.js"> </script>
<script src="../scripts/Rtrb4.js"> </script>
<script src="../scripts/Rtrb5.js"> </script>
<script src="../scripts/Rtrb6.js"> </script>
<script src="../scripts/Rbocb1.js"> </script>
<script src="../scripts/Rbocb2.js"> </script>
<script src="../scripts/Rbocb3.js"> </script>
<script src="../scripts/Rbocb4.js"> </script>
<script src="../scripts/Rbocb5.js"> </script>
<script src="../scripts/Rbocb6.js"> </script>
<script src="../scripts/Rpanb1.js"> </script>
<script src="../scripts/Rpanb2.js"> </script>
<script src="../scripts/Rpanb3.js"> </script>
<script src="../scripts/Rpanb4.js"> </script>
<script src="../scripts/Rpanb5.js"> </script>
<script src="../scripts/Rpanb6.js"> </script>
<script src="../scripts/Rsneab1.js"> </script>
<script src="../scripts/Rsneab2.js"> </script>
<script src="../scripts/Rsneab3.js"> </script>
<script src="../scripts/Rsneab4.js"> </script>
<script src="../scripts/Rsneab5.js"> </script>
<script src="../scripts/Rsneab6.js"> </script>
<script src="../scripts/Rtf1.js"> </script>
<script src="../scripts/Rtf2.js"> </script>
<script src="../scripts/Rtf3.js"> </script>
<script src="../scripts/Rtf4.js"> </script>
<script src="../scripts/Rtf5.js"> </script>
<script src="../scripts/Rtf6.js"> </script>
<script src="../scripts/Rjf1.js"> </script>
<script src="../scripts/Rjf2.js"> </script>
<script src="../scripts/Rjf3.js"> </script>
<script src="../scripts/Rjf4.js"> </script>
<script src="../scripts/Rjf5.js"> </script>
<script src="../scripts/Rjf6.js"> </script>
<script src="../scripts/Rcf1.js"> </script>
<script src="../scripts/Rcf2.js"> </script>
<script src="../scripts/Rcf3.js"> </script>
<script src="../scripts/Rcf4.js"> </script>
<script src="../scripts/Rcf5.js"> </script>
<script src="../scripts/Rcf6.js"> </script>
<script src="../scripts/Rcsf1.js"> </script>
<script src="../scripts/Rcsf2.js"> </script>
<script src="../scripts/Rcsf3.js"> </script>
<script src="../scripts/Rcsf4.js"> </script>
<script src="../scripts/Rcsf5.js"> </script>
<script src="../scripts/Rcsf6.js"> </script>
<script src="../scripts/Rpanf1.js"> </script>
<script src="../scripts/Rpanf2.js"> </script>
<script src="../scripts/Rpanf3.js"> </script>
<script src="../scripts/Rpanf4.js"> </script>
<script src="../scripts/Rpanf5.js"> </script>
<script src="../scripts/Rpanf6.js"> </script>
<script src="../scripts/Rlf1.js"> </script>
<script src="../scripts/Rlf2.js"> </script>
<script src="../scripts/Rlf3.js"> </script>
<script src="../scripts/Rlf4.js"> </script>
<script src="../scripts/Rlf5.js"> </script>
<script src="../scripts/Rlf6.js"> </script>
<script src="../scripts/Rpf1.js"> </script>
<script src="../scripts/Rpf2.js"> </script>
<script src="../scripts/Rpf3.js"> </script>
<script src="../scripts/Rpf4.js"> </script>
<script src="../scripts/Rpf5.js"> </script>
<script src="../scripts/Rpf6.js"> </script>
<script src="../scripts/Rpaf1.js"> </script>
<script src="../scripts/Rpaf2.js"> </script>
<script src="../scripts/Rpaf3.js"> </script>
<script src="../scripts/Rpaf4.js"> </script>
<script src="../scripts/Rpaf5.js"> </script>
<script src="../scripts/Rpaf6.js"> </script>
<script src="../scripts/Rpuf1.js"> </script>
<script src="../scripts/Rpuf2.js"> </script>
<script src="../scripts/Rpuf3.js"> </script>
<script src="../scripts/Rpuf4.js"> </script>
<script src="../scripts/Rpuf5.js"> </script>
<script src="../scripts/Rpuf6.js"> </script>
<script src="../scripts/Rbijf1.js"> </script>
<script src="../scripts/Rbijf2.js"> </script>
<script src="../scripts/Rbijf3.js"> </script>
<script src="../scripts/Rbijf4.js"> </script>
<script src="../scripts/Rbijf5.js"> </script>
<script src="../scripts/Rbijf6.js"> </script>
<script src="../scripts/Rcef1.js"> </script>
<script src="../scripts/Rcef2.js"> </script>
<script src="../scripts/Rcef3.js"> </script>
<script src="../scripts/Rcef4.js"> </script>
<script src="../scripts/Rcef5.js"> </script>
<script src="../scripts/Rcef6.js"> </script>
<script src="../scripts/Rocf1.js"> </script>
<script src="../scripts/Rocf2.js"> </script>
<script src="../scripts/Rocf3.js"> </script>
<script src="../scripts/Rocf4.js"> </script>
<script src="../scripts/Rocf5.js"> </script>
<script src="../scripts/Rocf6.js"> </script>
<script src="../scripts/Rgef1.js"> </script>
<script src="../scripts/Rgef2.js"> </script>
<script src="../scripts/Rgef3.js"> </script>
<script src="../scripts/Rgef4.js"> </script>
<script src="../scripts/Rgef5.js"> </script>
<script src="../scripts/Rgef6.js"> </script>
<script src="../scripts/Rporf1.js"> </script>
<script src="../scripts/Rporf2.js"> </script>
<script src="../scripts/Rporf3.js"> </script>
<script src="../scripts/Rporf4.js"> </script>
<script src="../scripts/Rporf5.js"> </script>
<script src="../scripts/Rporf6.js"> </script>
<script src="../scripts/Rsapf1.js"> </script>
<script src="../scripts/Rsapf2.js"> </script>
<script src="../scripts/Rsapf3.js"> </script>
<script src="../scripts/Rsapf4.js"> </script>
<script src="../scripts/Rsapf5.js"> </script>
<script src="../scripts/Rsapf6.js"> </script>
<script src="../scripts/Rpsf1.js"> </script>
<script src="../scripts/Rpsf2.js"> </script>
<script src="../scripts/Rpsf3.js"> </script>
<script src="../scripts/Rpsf4.js"> </script>
<script src="../scripts/Rpsf5.js"> </script>
<script src="../scripts/Rpsf6.js"> </script>
<script src="../scripts/Rtsf1.js"> </script>
<script src="../scripts/Rtsf2.js"> </script>
<script src="../scripts/Rtsf3.js"> </script>
<script src="../scripts/Rtsf4.js"> </script>
<script src="../scripts/Rtsf5.js"> </script>
<script src="../scripts/Rtsf6.js"> </script>
<script src="../scripts/Rgsf1.js"> </script>
<script src="../scripts/Rgsf2.js"> </script>
<script src="../scripts/Rgsf3.js"> </script>
<script src="../scripts/Rgsf4.js"> </script>
<script src="../scripts/Rgsf5.js"> </script>
<script src="../scripts/Rgsf6.js"> </script>
<script src="../scripts/Rtrf1.js"> </script>
<script src="../scripts/Rtrf2.js"> </script>
<script src="../scripts/Rtrf3.js"> </script>
<script src="../scripts/Rtrf4.js"> </script>
<script src="../scripts/Rtrf5.js"> </script>
<script src="../scripts/Rtrf6.js"> </script>
<script src="../scripts/Rbocf1.js"> </script>
<script src="../scripts/Rbocf2.js"> </script>
<script src="../scripts/Rbocf3.js"> </script>
<script src="../scripts/Rbocf4.js"> </script>
<script src="../scripts/Rbocf5.js"> </script>
<script src="../scripts/Rbocf6.js"> </script>
<script src="../scripts/Rpanf1.js"> </script>
<script src="../scripts/Rpanf2.js"> </script>
<script src="../scripts/Rpanf3.js"> </script>
<script src="../scripts/Rpanf4.js"> </script>
<script src="../scripts/Rpanf5.js"> </script>
<script src="../scripts/Rpanf6.js"> </script>
<script src="../scripts/Rsneaf1.js"> </script>
<script src="../scripts/Rsneaf2.js"> </script>
<script src="../scripts/Rsneaf3.js"> </script>
<script src="../scripts/Rsneaf4.js"> </script>
<script src="../scripts/Rsneaf5.js"> </script>
<script src="../scripts/Rsneaf6.js"> </script>


</body>
<?php include("footer.html"); ?>
</html>