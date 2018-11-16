html>
<body>
<div style="margin-top: 200px;" align="center">
<h1 style="font-size: 5px;"></h1>
</div>
<script>
	var text = document.querySelector('h1');
	var font = 5;
	var flag = 0;
	function inc(){
		font++;
		text.style.fontSize = font;
		text.style.color = "red";
		text.textContent="TEXT is GROWING "+font+"pt";
		if(font==50){
		flag=1;
		}
		
	}
	function dec(){
		font--;
		text.style.fontSize = font;
		text.style.color = "magenta";
		text.textContent="TEXT is SHRINKING"+font+"pt";
		if(font==5){
		flag=0;
		}
	}
	var time = setInterval(function(){
		if(font>5 && flag==1){
			dec();
		} 
		if(font<50 && flag==0){
			inc();
		}		
		
	}, 100);
</script>
</body>
</html>
