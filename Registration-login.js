
function validation(){
	var name = document.getElementById('name').value;
	var user = document.getElementById('usr').value;
	var email = document.getElementById('email').value;
	var pass = document.getElementById('pass').value;
	var conpass = document.getElementById('conpass').value;

	
	var correct_way = /^[A-Z a-z]+$/;
	if(name.length<=2 || name.length>15){
		document.getElementById('name1').innerHTML=" *Name  length must be between 2 and 15";
		return false;	
	}
	if((user.length <=2) || (user.length > 20)){
		document.getElementById('usr1').innerHTML= " **User Length must be between 2 and 20";
		return false;
		}
	
	if(!isNaN(name)){
		document.getElementById('name1').innerHTML= " Only character are allow";
		return false;
		}
	if(name.match(correct_way))
		true;
		else{
		document.getElementById('name1').innerHTML= " Only alphabets are allow";
		return false;	
	}
	if(!isNaN(user)){
		document.getElementById('usr1').innerHTML= " Only character are allow";
		return false;
		}
	if(user.match(correct_way))
		true;
		else{
		document.getElementById('usr1').innerHTML= " Only alphabets are allow";
		return false;	
	}
	
	if((pass.length <=5) || (pass.length > 16)){
		document.getElementById('pass1').innerHTML= " **Password Length must be between 5 and 16";
		return false;
		}
	if(pass != conpass){
		document.getElementById('conpass1').innerHTML= " **Password Not Match";
		return false;
		}
	

	
}