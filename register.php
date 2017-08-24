<html>
<title>
</title>
<head>
<link rel="stylesheet" href="style.css"/>
<style>
.hidden{
	display:none;
}

</style>

</head>

<body>
<div class="inside">
	<div class="first second">
		<ul>
			<li class="third">first</li>
			<li class="third">Second</li>
			<li class="third">Third</li>
		</ul>
	</div>
</div>


<form action = "controller/studentConnection.php" method="Post">
<fieldset>
<legend>Student info</legend>
	<table>
		<tr> 
			<td>First name: </td>
			<td> <input id="fname" type='text' name='Fname'>
				<span id="fnameError"></span>
		</tr>

		<tr> 
			<td>Middle name: </td>
			<td> <input type='text' name='Mname' required>			
		</tr>

		<tr> 
			<td>Last name: </td>
			<td> <input id="lname" type='text' name='Lname'>
			<td id="lnamemsg" class="hidden"> Enter the Last Name </td>
		</tr>

		<tr> 
			<td>Gender </td>
			<td> 
				<input type='radio' name='Gender' value='Male'	> Male <br>
				<input type='radio' name ='Gender' value= 'Female'> Female
			</td>
		</tr>

		<tr> 
			<td>Age </td>
			<td> <input type='number' name='Age' min='1' max='30'>
		</tr>
		
		<tr> 
			<td>Class </td>
			<td>
			<select id="class" name= 'Class'>
				 <option></option>
				 <option>1 </option>
				 <option>2 </option>
				 <option>3 </option>
				 <option>4</option>
				 <option>5</option>
				 <option>6</option>
				 <option>7</option>
				<option>8</option>
				<option>9</option>
					 
			</select>
			</td>
		</tr>

		<tr>
			<td></td>
			<td><input id="submit" type= 'submit' value='Submit'></td>
		</tr>
	</table>
</fieldset>
</form>


<input type = "submit" value = "View!" onclick = "view.php" />
</body>

<script src="jquery.js" ></script>
<script>
$(document).ready(function(){
	console.log("ready");	

	var invalid=false;
	$("#submit").click(function(){	
			var name = $("input#fname").val();

			var lname = $("#lname").val();
			
			var age = $("#age").val();
			
			var clas = $("#class").val();
			
			var gender = $('input[name=Gender]:checked').val();
			
		
			if(name!="" && lname!="" && age!="" && clas!="" && gender!="" ){
				checkName(name);
				checkAge(age);				
			}
			
			else{
				invalid=true;			
				getPost();				
				alert ("ERROR:111");
				stayOnThisPage(invalid);
			}	
		
	})
	
	function getPost(){
		console.log("getPost");
        $.get("https://www.w3schools.com/jquery/demo_test.asp", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });		
	}
	
	function stayOnThisPage(invalid){
		console.log(invalid);
		if(invalid==true){
			console.log('not submitted');
			window.location.assign("http://localhost/php/crud/register.php");
		}		
	}
	
	function checkName(name){
		if(name.length < 3){
			$("span#fnameError").text('FirstName is less than 3 characters');
			$("span#fnameError").css('color',"red");
			return false;
		}else{
			$("span#fnameError").hide();
		}
	}
	
	function checkAge(age){
		if(age<22){
			alert ("not allowed!")
			return false;
		}
	}
	
	$a= $(this).closest(".third");
	$(".third").click(function(){
		alert("clicked");
		console.log($a);
		$(".third").css({"color":"blue"});
	})
	
});

</script>
</html>