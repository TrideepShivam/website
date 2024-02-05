function js(){	
	let x = document.getElementsByClassName("txt");
	for(i=0;i<x.length;i++){
		x[i].style.border="1px solid grey";
	}	
	let name = document.getElementById("name");
	let dob = document.getElementById("dob");
	let whatsapp = document.getElementById("whatsapp");
	let pname = document.getElementById("pname");
	let pdob = document.getElementById("pdob");
	let pwhatsapp = document.getElementById("pwhatsapp");
	let mode = document.getElementById("paymentMode");
	let online = document.getElementById("onlineMode");
	let offline = document.getElementById("offlineMode");
	if(name.value=="" || name.value==" " || checkAlphabate(name.value)){
		alert("Invalid Name. This is required field, Please use only Alphabates and spaces.");
		name.style.border="1px solid red";
		return "error";
	}else if(dob.value=="" || dob.value==" " || checkDate(dob.value)){
		name.style.border="1px solid grey";
		alert("Invalid Birth Year. You can enter the value between 1950 to 2012.");
		dob.style.border="1px solid red";
		return "error";
	}else if(whatsapp.value=="" || whatsapp.value==" " || whatsapp.value.length!=10){
		dob.style.border="1px solid grey";
		alert("Invalid Whatsapp number. Please use only 10 digits.");
		whatsapp.value="";
		whatsapp.style.border="1px solid red";
		return "error";
	}else if(pname.value=="" || pname.value==" " || checkAlphabate(name.value)){
		alert("Invalid Partner Name. This is required field, Please use only Alphabates and spaces.");
		whatsapp.style.border="1px solid grey";
		pname.style.border="1px solid red";
		return "error";
	}else if(pdob.value=="" || pdob.value==" " || checkDate(pdob.value)){
		pname.style.border="1px solid grey";
		alert("Invalid Birth Year. You can enter the value between 1950 to 2012.");
		pdob.style.border="1px solid red";
		return "error";
	}else if(pwhatsapp.value=="" || pwhatsapp.value==" " || pwhatsapp.value.length!=10){
		pdob.style.border="1px solid grey";
		alert("Invalid Whatsapp number. Please use only 10 digits.");
		pwhatsapp.value="";
		pwhatsapp.style.border="1px solid red";
		return "error";
	}else if(online.checked==false&&offline.checked==false){
		pwhatsapp.style.border="1px solid grey";
		alert("Please choose the Payment Mode.");
		mode.style.border="1px solid red";
		return "error";
	}else{
		mode.style.border="1px solid grey";
		online.checked?mode="online":mode="offline";
		let team ={name:name.value,dob:dob.value,whatsapp:whatsapp.value,partner:pname.value,pdob:pdob.value,pwhatsapp:pwhatsapp.value,paymentMode:mode};
		ajax(JSON.stringify(team));
		
	}	
}

function ajax(data){/* data variable */
	const xhr = new XMLHttpRequest();
	xhr.onload = function(){
		let form =document.getElementById("form1");
		let details =document.getElementById("details");
		let container = document.getElementById("formContainer");		
		form.style.display="none";
		details.style.display="none";		
		container.innerHTML=this.responseText;
	}
	xhr.open("POST","response/response.php?v="+data,true);
	xhr.send();
}

function openHelp(){document.getElementById('helpBoxContainer').style.height='100%';}
function checkAlphabate(str){
	var regex= /^[A-Za-z ]+$/;
	return !regex.test(str);
}
function checkDate(year){
	if(year>2012 || year<1950){
		return true;
	}else{
		return false;
	}
}
