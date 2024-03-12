//=========== Use for type only Alfabets and Space ==============
function validphone() {
let mob=document.getElementById("std_phone").value;
let std_phone=mob.replace(/[^0-9]/g,'');
let regx=/^[6-9]{1}[0-9]{9}$/;
if(regx.est(mob)){
	alert('not valid');
}
document.getElementById("std_phone").value=std_phone;
}

function validAlfabets(){
let std_name=document.getElementById("std_name").value;
std_name = std_name.replace(/[^A-Za-z ]/g, '');
document.getElementById("std_name").value=std_name.toUpperCase();
// /g for global checking

if(std_name=='')
{
alert("Please Enter Name....");
document.getElementById("std_name").focus();
return false;
}

}
function checkValidate(){
	alert('Mam');
let std_name=document.getElementById("std_name").value;
// let std_phone=document.getElementById("std_phone").value;
let std_email=document.getElementById("std_email").value;
let std_pass=document.getElementById("std_pass").value;
// ==== use the pattern we get the phone number first digit is 6-9
//and other 9 digits are 0-9 =====
// let regx = /^[6-9]{1}[0-9]{9}$/;
// ==== use the pattern we get the roll number first digit is 3 and
//second digit is 4 and other 9 digits are 0-9 =====
// let regx_roll = /^[3]{1}[4]{1}[0-9]{9}$/;
// it match the pattern and the pattern it match then return true
//other wise return false;
let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zAZ0-
9]{2,4})+$/;
// ^ :It denotes the start of the expression.
// $ :It denotes the end of the expression.
if(std_name=='')
{
alert("Please Enter Name....");
document.getElementById("std_name").focus();
return false;
}
// if(std_phone=='')
// {
// alert("Please Enter Phone Number....");
// document.getElementById("std_phone").focus();
// return false;
// }
// if(std_phone.length<10){
// alert("Please Enter Atleast 10 digits...");
// document.getElementById("std_phone").focus();
// return false;
// }
// if(!regx.test(std_phone))
// {
// alert("Please Enter Valid Phone Number....");
// document.getElementById("std_phone").focus();
// return false;
// }
if(std_email=='')
{
alert("Please Enter Email ID....");
document.getElementById("std_email").focus();
return false;
}
if(!mail_regex.test(std_email))
{
alert("Please Enter Valid Email ID....");
document.getElementById("std_email").focus();
return false;
}
if(std_pass=='')
{
alert("Please Enter Password....");
document.getElementById("std_pass").focus();
return false;
}
// if(std_name!='' && std_phone!='' && std_course!='' && std_roll!='' &&
// std_email!='' && std_pass!=''){
// alert("Successfully Submited.\nThank You");
// return true;
// }
}