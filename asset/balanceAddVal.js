function loadBalanceAddForm(address){
	document.getElementById("extraFormSpace").innerHTML = "";
	fetch(address)
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("extraFormSpace").innerHTML = content; });
	document.getElementById("outerBox").style.display = "none";
}

function closeBalanceAddForm(){
	document.getElementById("extraFormSpace").innerHTML = "";
	document.getElementById("outerBox").style.display = "block";
}