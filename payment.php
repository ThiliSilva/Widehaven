<?php 
session_start(); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport"  content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
<title>Payment</title>
	
	<style>
	.Container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px
}
		img {
			border-style: groove;
			border-radius: 25px;
		}
.h1 {
			text-align: center;
			color:indigo;
	}
.body
{
	background-color:lightgray;
	padding-left: 50px;
	padding-right: 50px
}
p
{
	color: black;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
	font-size: 20px;
	text-align: justify
}
.footer hr
{
	background: black;
	height: 1px;
	margin: 20px;
	display: bottom;
}
p1
{
	color: black;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	font-size: 18px;
	text-align: justify
}
	</style>
	<script>
	function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	</script>
</head>

<body>
	<div class="header">
	<div class="Container">
	<div class="navbar">
		<nav>
		<div class="row">
		 <img src="images/i.png" width="90" height="78" alt="">
		
			<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			    <li><a href="Home.html"><img src="images/h.png" alt="" width="37" height="39"></a></li>
				 <li><a href="mycart.php"><img src="images/cc.png" width="46" height="34" alt=""></a></li>
				<li><a href="login.php"><img src="images/l.png" width="45" height="40" alt=""></a></li>
				<li><a href="help.html"><img src="images/ca.png" width="37" height="39" alt=""></a></li>
				
			</ul>
		  </div> </nav>
	    </div></div></div>
	<div class="box">
	<?php
		?>
		<h1 align="center">---------- Payment Options ----------</h1><br><br>
		<table align="center">
		<tbody>
			<tr>
				<td></td>
				<td><a href="confirm.php"><img src="images/offline-payment.jpg" name="go" width="249" height="142"></a></td>
			</tr>
			<tr>
				<td><a href="https://www.paypal.com/us/signin"><img src="images/pay.png" width="249" height="179"></a></td>
				<td><img src="images/ma.png" width="264" height="179"></td>
				<td><img src="images/v.png" width="249" height="179"></td>
			</tr>
			<tr align="center">
				<td></td>
			   <td><a href="https://pay.google.com/gp/w/u/0/home/signup?sctid=5190513576153167"><img src="images/google.png" width="267" height="179"></a></td>
			</tr>
			</tbody>
		</table>
	  	
	
		</p>
	</div>
	
	
	<br>
	<br>
	
	<br>
	<br>
	
	<br>
	<br>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	
	
	<button class="open-button" onclick="openForm()"><b>Chat</b><img src="images/m.png" alt="" width="25" height="25"></button>

<div class="chat-popup" id="myForm">
  <form action="ac.php" class="form-container">
    <h1>Chat </h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
	
		
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
	            <img src="images/i.png" alt="" width="88" height="76"><br><p1>WIDEHAVEN <br> @2021 Allrights reserved.</p1>
				
            </div>
		
	<div class="footer-bottom">
			<hr>
			&copy; Copyright 2021 
		</div>
	</div>
	
</section>
</body>
</html>