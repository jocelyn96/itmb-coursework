<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { text-align: center; 	font-family: Calibri;  }
		p.p-centre { text-align: center; font-family: Arial; }
		p { font color:#FFF;}
		#cogs { display: block; padding-top: 20px; margin-left: auto; margin-right: auto; }		
		body{background-color:#CFF;}
	</style>
</head>
<body>

<h1> Welcome To Smart Counties R Us Management System</h1>

<p class="p-centre"></p>
<p class="p-centre"></p>

<div align="center">
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>REGISTER</h1>
    <p>Please fill in this form to create an account as a resident.</p>
    <hr>
    
    <div class="section_a">
    <label for="title"><b>Title</b></label>
    <select name="Title">
    <option value="Select">Select</option>
  <option value="Miss">Miss</option>
  <option value="Mrs">Mrs</option>
  <option value="Mr">Mr</option>
  <option value="Dr">Dr</option>
</select>
    
    <label for="forename"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="forename" required>
    
    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
    </div>

    <div class="section_b">
    <label for="gender"><b>Gender</b></label>
    <select name="gender">
    <option value="Select">Select</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
    
    <label for="age-bracket"><b>Age Bracket</b></label>
    <select name="age">
    <option value="Select">Select</option>
  <option value="18-24">18-24</option>
  <option value="25-32">25-32</option>
  <option value="33-45">33-45</option>
  <option value="46+">46+</option>
</select>

    <label for="area"><b>Area</b></label>
    <input type="text" placeholder="Select Area" name="area" required>
    </div>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </br>

    

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Register</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
