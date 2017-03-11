
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calle A</title>
	<link rel="stylesheet" href="bootstrap.min.css"/>
	<script src="jquery.js"></script>
	
	<style>
	
		.semaforo{
			height: 200px;
			margin-bottom: 10px;
			border-radius: 50px;
		}
	</style>
	
</head>
<body>
  
	<div class="row">
		<div id="rojo" class="col col-sm-offset-3 col-sm-6 label-danger semaforo"></div>
		
	</div>
    <div class="row">
		<div id="amarillo" class="col col-sm-offset-3 col-sm-6 label-warning semaforo"></div>
		
	</div>

    
    <div class="row">
		<div id="verde" class="col col-sm-offset-3 col-sm-6 label-success semaforo"></div>
		
	</div>
	    
	    	 	    

	
			<script>
				
				var color ="rojo";
	             $(".semaforo").hide();
				$("#"+color).show();
				
		
				
				function ciclo(){
					
					
					if(color=="rojo"){
						color="verde";
					}
				
				else if(color =='amarillo'){
					color="rojo";
				}
				else if(color =="verde"){
					color="amarillo";
				}
				 $(".semaforo").hide();
				$("#"+color).show();
					actualizar(color);
					
				     }
				
				
	function actualizar(ccc){
		
		$.ajax({
			
		url:'server.php',
			method:'post',
			data:{'color':color},
			success:function(info){
				console.log(info);
			}
	});
				
		}		
				
		  /*
var r=0, g=0, y=0,atm=0;
		
function star(){
	if(atm==0){
		atm=1;
		red();
		 
	}
}
		
val =1000;
	
		function red(){
			
			if(r==0){
				
			if(g=1 || y==1){
       document.getElementById("red").style.background="red";
	   document.getElementById("green").style.background="white";
				document.getElementById("yellow").style.background="white";
				r=1;
				y=0;
				g=0;
			}
				
			
			else if(g==0 && y==0)
			{
				document.getElementById("red").style.background="red";
				localStorage.setItem("calle1","a");
				r=1;
			}
				
			}
		else {
			document.getElementById("red").style.background="white";
			r=0;
		}
		
		if(atm==1){
    setTimeout("green()",val);
			
		}
		
		
		}
		
		
		
		function yellow(){
			
				if(y==0){
				
			if(g=1 || r==1){
       document.getElementById("yellow").style.background="yellow";
	   document.getElementById("green").style.background="white";
				document.getElementById("red").style.background="white";
				r=0;
				y=1;
				g=0;
			}
				
			
			else if(g==0 && r==0)
			{
				document.getElementById("yellow").style.background="yellow";
				localStorage.setItem("calle1",'b');
				y=1;
			}
				
			}
		else {
			document.getElementById("yellow").style.background="white";
			y=0;
		}
		
		if(atm==1){
    
			setTimeout("red()",val);
		}
		
			
			
		}
		
		
		function green(){
				if(g==0){
				
			if(y=1 || r==1){
       document.getElementById("green").style.background="green";
	   document.getElementById("red").style.background="white";
				document.getElementById("yellow").style.background="white";
				r=0;
				y=0;
				g=1;
			}
				
			
			else if(r==0 && y==0)
			{
				document.getElementById("green").style.background="green";
				localStorage.setItem("calle1",'c');
				g=1;
			}
				
			}
		else {
			document.getElementById("green").style.background="white";
			g=0;
		}
		
		if(atm==1){
    
			setTimeout("yellow()",val);
		}
		
			
			
		}
				
		
	star();
	*/
    </script>

 
		
		
	
	
</body>
</html>