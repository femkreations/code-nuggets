// JavaScript Document


function preventEventHandlers(){
	document.getElementById("frmContact").onsubmit= function(){
		var myErrorMessage=document.getElementById("errorMessage");
		if(document.getElementById("name").value == ""){
			myErrorMessage.innerHTML="Please Enter a valid name for the form";
			return false;
		}
		else {
			myErrorMessage.innerHTML="All fields are entered correctly";
			return true;
		}
	}
	document.getElementById("checkYes").onclick=function(){
			if(document.getElementById("checkYes").checked){
				document.getElementById("tourSelection").style.display="block";
			}
			else{
				document.getElementById("tourSelection").style.display="none";
			}
		
	}
	document.getElementById("tourSelection").style.display="none";
}

window.onload=function(){
	preventEventHandlers();
}

