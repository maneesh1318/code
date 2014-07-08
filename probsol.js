function loadXMLDoc(file,id)
{
//alert("Hi");
/*if(file=='model/login.php' && document.getElementById('id_login').innerHTML=='Logout'){
	document.getElementById('id_login').innerHTML=='Login';
}
login_check();*/
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(id).innerHTML=xmlhttp.responseText;
	if(file=="model/talk.php"){
		//alert(document.getElementById(id).innerHTML);
		//eval(document.getElementById(id).innerHTML);
		FB.XFBML.parse();
	}
	//$("#xyz").load("user_name_at_top.php");
    }
}
xmlhttp.open("GET",file,true);
xmlhttp.send();
}

function login()
{
	//alert("Hi");
	document.getElementById("err_msg_1").innerHTML="";
	document.getElementById("err_msg_2").innerHTML="";
	var uname=document.getElementById("id_username").value;
	var passwd=document.getElementById("id_password").value;
    //alert(uname);
	 
	if(uname.length<6){
		document.getElementById("err_msg_1").innerHTML="User Name Invalid. Must be atleast 5 character long";
		return;
	}
	if(passwd.length<6){
		document.getElementById("err_msg_2").innerHTML="Password must me 6 charater long";
		return;
	}
	var filter = /^[a-zA-Z0-9]+$/;
	if (!filter.test(uname)) {
		document.getElementById("err_msg_1").innerHTML="User Name must contain only characters and numbers";
		return;
	}
	if (!filter.test(passwd)) {
		document.getElementById("err_msg_2").innerHTML="Password must contain only characters and numbers";
		return;
	}
	$.post("model/login2.php",
	{
    uname:uname,
	passwd:passwd,
	},
	function(data,status){
		//alert(data);
		if(data==1){
		    alert("Logged In");
			loadXMLDoc('model/login.php','main_content');
		}
		else{
			alert("Login Failed:Wrong Username or Password");
		}
	});
	
}
function register()
{
	document.getElementById("r_err_msg_2").innerHTML="";
	document.getElementById("r_err_msg_3").innerHTML="";
	document.getElementById("r_err_msg_4").innerHTML="";
	document.getElementById("r_err_msg_5").innerHTML="";
	document.getElementById("r_err_msg_6").innerHTML="";
	document.getElementById("r_err_msg_7").innerHTML="";
	document.getElementById("r_err_msg_8").innerHTML="";
	var uname=document.getElementById("r_input_1").value;
	var fname=document.getElementById("r_input_2").value;
	var lname=document.getElementById("r_input_3").value;
	var passwd=document.getElementById("r_input_4").value;
	var cpasswd=document.getElementById("r_input_5").value;
	var email=document.getElementById("r_input_6").value;
	var mob=document.getElementById("r_input_7").value;
	var filter = /^[a-zA-Z]+$/;
	if(fname.length==0){
		document.getElementById("r_err_msg_2").innerHTML="Invalid Name";
		return;
	}
	if (!filter.test(fname)) {
		//alert("First Name Invalid");
		document.getElementById("r_err_msg_2").innerHTML="Invalid Name";
		return;
	}
	if(lname.length==0){
		document.getElementById("r_err_msg_3").innerHTML="Invalid Name";
		return;
	}
	if (!filter.test(lname)) {
		document.getElementById("r_err_msg_3").innerHTML="Invalid Name";
		return;
	}
	if(!(document.getElementById("r1").checked||(document.getElementById("r2").checked))){
		document.getElementById("r_err_msg_4").innerHTML="Select Gender";
		return;
	}
	if(document.getElementById("r1").checked){
		var gen="Male";
	}
	else{
		var gen="Female";
	}
	if(passwd.length<6){
		document.getElementById("r_err_msg_5").innerHTML="Password Must 6 Character long";
		return;
	}
	var filter = /^[a-zA-Z0-9]+$/;
	if (!filter.test(passwd)) {
		document.getElementById("r_err_msg_5").innerHTML="Password must contain only characters and numbers";
		return;
	}
	if(passwd!=cpasswd){
		document.getElementById("r_err_msg_5").innerHTML="Password and Confirm password not equal";
		return;
		
	}
	var pattern = new RegExp(/[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if(!pattern.test(email)){
		document.getElementById("r_err_msg_7").innerHTML="Invalid Email";
		return;
	}
	var filter2 = /^[0-9]+$/;
	if (!filter2.test(mob)) {
		document.getElementById("r_err_msg_8").innerHTML="Invalid Mobile No";
		return;
	}
	if(mob.length!=10){
		document.getElementById("r_err_msg_8").innerHTML="Invalid Mobile No";
		return;
	}
	$.post("model/register2.php",
	{
    uname:uname,
	fname:fname,
	lname:lname,
	passwd:passwd,
	gen:gen,
	email:email,
	mob:mob,
	},
	function(data,status){
		//alert(status);
		if(data==1){
		    alert("Registered");
			loadXMLDoc('model/login.php','main_content');
		}
		else{
			alert("Not Registered");
			loadXMLDoc('model/register.php','main_content');
		}
	});
	
}
function user_name_avail()
{
	//alert('Hi');
	document.getElementById("r_err_msg_1").innerHTML="";
	var uname=document.getElementById("r_input_1").value;
	if(uname.length<6){
		document.getElementById("r_err_msg_1").innerHTML="User Name Invalid.<br/> Must be atleast 5 character long";
		return 0;
	}
	var filter = /^[a-zA-Z0-9]+$/;
	if (!filter.test(uname)) {
		document.getElementById("r_err_msg_1").innerHTML="User Name must contain<br/> only characters and numbers";
		return 0;
	}
	$.post("model/user_name_availability.php",
	{
    uname:uname,
	},
	function(data,status){
		//alert(data);
		if(data==1){
		    //alert("Available");
			//return 1;
			document.getElementById("r_err_msg_1").innerHTML="Available";
			document.getElementById("reg_Btn").disabled=false;
		}
		else{
			//alert("Not Available");
			//return 0;
			document.getElementById("r_err_msg_1").innerHTML="Not Available";
			document.getElementById("reg_Btn").disabled=true;
		}
	});
}

function logout()
{
	var t=1;
	$.post("model/logout.php",
	{
    t:t,
	},
	function(data,status){
		//alert(data);
		if(data==1){
		    loadXMLDoc('model/login.php','main_content');
		}
		else{
			//alert("Not Logged In");
		}
	});
}
function post_comment()
{
	var p=document.getElementById("textbox").value;
	//alert(p.length);
	if(p.length==0){
		//alert(p.length);
		return;
	}
	$.post("model/post_problem2.php",
	{
    p:p,
    },
	function(data,status){
		//alert(data);
		loadXMLDoc('model/post_problem.php','main_content');
	});
}

function solve(probid)
{
	//alert(probid);
	$.post("model/solution.php",
	{
    probid:probid,
    },
	function(data,status){
		//alert(status);
		document.getElementById('main_content').innerHTML=data;
	});
}

function post_solution(probid)
{
	var sol=document.getElementById('sol_text').value;
	//alert(sol);
	$.post("model/submit_solution.php",
	{
    probid:probid,
	sol:sol,
    },
	function(data,status){
		//alert(status);
		//document.getElementById('main_content').innerHTML=data;
		solve(probid);
	});
}

function view_solution(probid)
{
	//alert(probid);
	$.post("model/view_solution.php",
	{
    probid:probid,
	},
	function(data,status){
		//alert(data);
		document.getElementById('main_content').innerHTML=data;
		//solve(probid);
	});
}

function mark_correct(probid,sol_id,i,sol_num)
{
	//alert(sol_id);
	var j=1;
	var str="chk_bx";
	for(j=1;j<=sol_num;j++){
	nstr=str+j;
	if(j!=i){
	if(document.getElementById(nstr).disabled==true) {document.getElementById(nstr).disabled=false;continue;}
	if(document.getElementById(nstr).disabled==false) {document.getElementById(nstr).disabled=true;continue;}
	}
	}
	if(document.getElementById(str+i).checked){
		var r = confirm("Problem Will Close and user will get 1 point. Are you sure");
	}
	if(r==false) return;
	$.post("model/final_submit.php",
	{
    probid:probid,
	sol_id:sol_id,
	},
	function(data,status){
		//alert(data);
		//document.getElementById('main_content').innerHTML=data;
		//solve(probid);
		loadXMLDoc('model/login.php','main_content');
	});
}
