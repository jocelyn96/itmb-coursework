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
<p><b>LOGIN</b></p>
<form action="">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>

    <span class="psw">Forgot <a href="#">password?</a></span>
 
</form>
</div>

<div align="center">
<p><b> REGISTER </b></p>
	<button><a href='<?php echo site_url('main/registerres')?>'>Resident</a></button>
    <button><a href='<?php echo site_url('main/orders')?>'>SME</a></button>
    <button><a href='<?php echo site_url('main/orders')?>'>Council</a> </button> 
</div>
</body>
</html>
