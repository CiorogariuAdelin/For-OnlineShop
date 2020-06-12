document.getElementById("Rbijuterii_barbati1").addEventListener("click",function(){
	document.getElementById("bijb1").remove();
	localStorage.removeItem('bijuterii_barbati1');
	localStorage.removeItem('pbijb1');
	window.location.replace("cos.php");
});