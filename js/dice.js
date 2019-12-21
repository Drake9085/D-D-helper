var prev=0;
function dice(st){
			var rnd = Math.floor(Math.random()*st)+1;
			
			var par= document.getElementById("ses");
			
			if(par.innerHTML=="Result: "){
				console.log(st)
				par.innerHTML+=rnd;
				prev+=rnd;
			}else{
				prev+=rnd;
				par.innerHTML+=" + "+rnd+" = "+prev;
				
			}
}
function cu(){
	console.log("hi");
	var par= document.getElementById("ses");
	par.innerHTML="Result: ";
	prev=0;
}
