//=======jquery for signup page======
function validAlfabets(){
let std_name=$("#std_name1").val();
std_name=std_name.replace(/[^A-Za-z ]/g, '');
$("#std_name1").val()=std_name.toUpperCase();
// /g for global checking

if(std_name=='')
  {
	alert("Please Enter Name....");
	$("#std_name1").focus();
	return false;
  }

}
function checkValidateSignUP(){
let std_name1=$("#std_name1").val();
let std_email1=$("#std_email1").val();
let std_pass1=$("#std_pass1").val();
let std_password1=$("#std_password1").val();
let dob=$("#dob").val();
let phone=$("#Phone").val();
let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if(std_name1=='')
  {
	alert("Please Enter Name....");
	$("#std_name1").focus();
	return false;
  }

if(std_email1=='')
  {
	alert("Please Enter Email ID....");
	$("#std_email1").focus();
	return false;
  } 
if(!mail_regex.test(std_email1))
  {
	alert("Please Enter Valid Email ID....");
	$("#std_email1").focus();
	return false;
  } 
if(std_pass1=='')
  {
	alert("Please Enter Password....");
	$("#std_pass1").focus();
	return false;
  }
if(std_dob=='')
  {
	alert("Please Enter Password....");
	$("#std_pass1").focus();
	return false;
  }
if(std_phone=='')
  {
	alert("Please Enter Password....");
	$("#std_pass1").focus();
	return false;
  }
if(std_pass1=='')
  {
	alert("Please Enter Password....");
	$("#std_pass1").focus();
	return false;
  }
}

//=======jquery for login page======

function checkValidatelogin(){
// let std_email=document.getElementById("std_email").value;
// let std_pass=document.getElementById("std_pass").value;
let std_email=$("#std_email").val();
let std_pass=$("#std_pass").val();
let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zAZ0-9]{2,4})+$/;


if(std_email=='')
  { 
	alert("Please Enter Email....");
	$("#std_email").focus();
	return false;
  }

if(!mail_regex.test(std_email))
  {
	alert("Please Enter Valid Email ID....");
	$("#std_email").focus();
	return false;
  }

if(std_pass=="")
  {
	alert("Please Enter Password....");
	$("#std_pass").focus();
	return false;
  }
}

//=====jquery for appointment=====

// function validphone2() {
// let mob=$("#std_phone2").val();
// let std_phone=mob.replace(/[^0-9]/g,'');
// let regx=/^[6-9]{1}[0-9]{9}$/;
// if(regx.est(mob)){
// 	alert('not valid');
//  }
//   $("#std_phone2").val()=std_phone;
// }

// function validAlfabets2(){
// let std_name=$("#std_name2").val();
// std_name = std_name.replace(/[^A-Za-z ]/g, '');
// $("#std_name2").val()=std_name.toUpperCase();
// // /g for global checking

// if(std_name=='')
//  {
// 	alert("Please Enter Name....");
// 	$("#std_name2").focus();
// 	return false;
//  }

// }


// function checkValidateappointment(){
// 	let std_name=$("#std_name2").val();
// 	//let std_phone=$("#std_phone2").val();
// 	let std_email=$("#std_email2").val();
// 	let date=$("#date").val();
// 	let time=$("#time").val();
// 	let appointmentfor=$("#appointmentfor").val();
// 	// ==== use the pattern we get the phone number first digit is 6-9 and other 9 digits are 0-9 =====
// 	   let regx = /^[6-9]{1}[0-9]{9}$/;
// 	// it match the pattern and the pattern it match then return true other wise return false;
// 	let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zAZ0-9]{2,4})+$/;
// if(std_name=='')
//   {
// 	alert("Please Enter Name....");
// 	$("#std_name2").focus();
// 	return false;
//   }
// if(std_email=='')
//   {
// 	alert("Please Enter Email ID....");
// 	$("#std_email2").focus();
// 	return false;
//   }
// if(!mail_regex.test(std_email))
//   {
// 	alert("Please Enter Valid Email ID....");
// 	$("#std_email2").focus();
// 	return false;
//   }
// //  if(std_phone=='')
// //   {
// // 	alert("Please Enter Phone Number....");
// // 	$("#std_phone2").focus();
// // 	return false;
// //   }
// // if(std_phone.length<10)
// //   {
// // 	alert("Please Enter Atleast 10 digits...");
// // 	$("#std_phone2").focus();
// // 	return false;
// //   }
// if(!regx.test(std_phone))
//   {
// 	alert("Please Enter Valid Phone Number....");
// 	$("#std_phone2").focus();
// 	return false;
//   }
// if(date=='')
//   {
// 	alert("Please Enter Date....");
// 	$("#date").focus();
// 	return false;
//   }
// if(time=='')
//   {
// 	alert("Please Enter Time....");
// 	$("#time").focus();
// 	return false;
//   }
// if(appointmentfor=='')
//   {
// 	alert("Please Enter Service....");
// 	$("#appointmentfor").focus();
// 	return false;
//   }
// }
