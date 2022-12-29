<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport"  content="width=device-width, initial-scale=1">
<title>HELP_WIDEHAVEN </title>
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<style>
	.Container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px
}
.search-box
		{
			display: inline-flex;
			width: 60%;
			border-radius: 20px;
		}
		.h1
{
	text-align: center;
	color:indigo
}
		img {
			border-style: groove;
			border-radius: 25px;
		}
.footer hr
{
	background: black;
	height: 1px;
	margin: 20px;
	display: bottom;
}
p
{
	color: black;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	font-size: 18px;
	text-align: justify
}
	</style>
	
</head>

<body>
	 <div class="header">
	  <div class="Container">
		<div class="navbar">
			<nav>
	        <div class="row">
	   
				<a href=""><img src="images/i.png" alt="" width="90" height="78"></a>
		  
			<ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li><a href="Home.html"><img src="images/h.png" alt="" width="37" height="39"></a></li>
				 <li><a href="mycart.php"><img src="images/cc.png" width="46" height="34" alt=""></a></li>
				<li><a href="condition.html"><img src="images/x.png" width="45" height="40" alt=""></a></li>
				<li><a href="help.html"><img src="images/ca.png" width="37" height="39" alt=""></a></li>
		
			  </ul>
			</div></nav>
		</div>
			
	   </div></div>
	<br>
	
<h1 align="center">Confirm your payment</h1>
	<br><br>
	<form action="confirm.php" method="POST" enctype="multipart/form-data">
	<table width="100" border="0">
	  <tbody>
		  
		 <tr>
	      <td><div class="text-center">
			  <label>First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="txtFirstName" type="txt" id="txtFirstName" required />
			</div><br></td>
        </tr>
		  
		  <tr>
	      <td><div class="text-center">
			  <label>Enter Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="txtemail" type="txt" id="txtemail" required />
			</div><br></td>
        </tr>
		  
	    <tr><div class="text-center">
	      <td><label>Select Payment Mode</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <select name="payment_mode">
					<option>Bank transfer/ Visa</option>
					<option>Paypal</option>
					<option>MasterCard</option>
					<option>Google Pay</option>
				</select><br></td>
			</div>
        </tr>
	    <tr>
	      <td><br>
			<div class="text-center">
				<label>Payment Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;<input type="date" name="date" required />
			</div><br></td>
        </tr>
		  
		  <tr>
	      <td>&nbsp;</td>
        </tr>
		  
	    <tr>
	      <td><div class="text-center">
				<input name="btnSubmit" type="submit" id="btnSubmit" value="    Confirm Payment    " />
			</div></td>
        </tr>
	    
      </tbody>
</table>
	<br>
	
	
	
	<br><br><br><br><br><br><br><br><br><br>
	

<!---------footer-------->
<section class="footer">
	<div class="Container">
		<div class="box">
			<h3>Quick Links</h3>
			<ul>
			<a href="Home.html">Home</a>
			<a href="about.html">About Us</a>
			<a href="mycart.php">My Cart</a>
			<a href="login.php">Login</a>
			<a href="Sign-In.php">Sign-In</a>
			<a href="condition.html">Terms & Conditions</a>
			<a href="help.html">Customer Care</a>
			</ul>
		</div>
		
		<div class="box">
			<h3>Follow us</h3>
			    <a href="https://www.facebook.com/">Facebook</a> 
				<a href="https://www.google.com/">Google</a> 
				<a href="https://www.instagram.com/">Instagram</a>
				<a href="https://twitter.com/?lang=en">Twitter</a>
		</div>
			
		<div class="box">
			<h3>Product Categories</h3>
			    <a href="blouse.php">Blouses</a> 
				<a href="Denims.php">Denims</a> 
				<a href="Frocks.php">Frocks</a>
		</div>
			
			<div class="box">
	            <img src="images/i.png" alt="" width="88" height="76"><br><p>WIDEHAVEN <br> @2021 Allrights reserved.</p>
				
            </div>
		
	<div class="footer-bottom">
			<hr>
			&copy; Copyright 2021 
		</div>
	</div>
	
</section>
	
	
</body>
</html>


