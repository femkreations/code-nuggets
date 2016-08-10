// JavaScript Document

var currentPos = 0;
var intervalHandle;

function beginAnimate(){
	document.getElementById("join").style.position = "absolute";
	document.getElementById("join").style.left = "0px";
	document.getElementById("join").style.top = "200px";

	intervalHandle = setInterval(animateBox, 50);

}

function animateBox(){

	currentPos+= 5;

	document.getElementById("join").style.left = currentPos + "px";

	if(currentPos >=900 ){
		clearInterval(intervalHandle);

		document.getElementById("join").style.position = "";
		document.getElementById("join").style.left = "";
		document.getElementById("join").style.top = "";
	}


}

window.onload = function(){
	setTimeout(beginAnimate, 1000);
}

