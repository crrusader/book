<script>
	document.documentElement.innerHTML="Enter your Javascript code!";
	document.body.style.backgroundColor="black";
	document.body.style.color="lightgreen";
	document.body.contentEditable=true;
	document.body.className="inner";
	var evil = document.querySelector(".inner");
	evil.onkeyup=function(){
		eval(evil.innerText);
	}
</script>