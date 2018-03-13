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
    <p>Please fill in this form to create an account as an SME.</p>
    <hr>
    
    <div class="section_a">
    <label for="companyname"><b>Company Name</b></label>
    <input type="text" placeholder="Enter Company Name" name="companyname" required>
    
    <label for="year"><b>Year Established</b></label>
    <input type="text" placeholder="Enter Year" name="year" required>
    </div>

    <div class="section_b">
    <label for="address"><b>Registered Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    
    <label for="number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="number" required>


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
