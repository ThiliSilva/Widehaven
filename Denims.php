<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport"  content="width=device-width, initial-scale=1 ">
	<link rel="stylesheet" type="text/css" href="stylesheet3.css">
<title>Widehaven</title>
	<style>
	.Container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px
}
body
{
	background-color:lightgray;
	padding-left: 50px;
	padding-right: 50px
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
p1
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
				<img src="images/i.png" alt="" width="90" height="78">
		  
			<ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li><a href="Home.html"><img src="images/h.png" alt="" width="37" height="39"></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="mycart.php"><img src="images/cc.png" width="46" height="34" alt=""></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="condition.html"><img src="images/x.png" width="43" height="38" alt=""></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="help.html"><img src="images/ca.png" width="33" height="35" alt=""></a></li>
				
			  </ul>
			</div></nav>
			</div> </div></div>
		
	<table width="1356" height="639" border="0">
	  <tbody>
	    <tr>
	      <td width="351" height="635">
			  <form action="cart.php" method="post">
				  <form action="fro_order.php" method="post">
				<img src="images/Denim/3.jpg" width="302" height="361" alt=""/>
			<h3>SKINNY HIGH WAIST JEAN</h3> <p>LKR 4,450.00<br>&nbsp;&nbsp;&nbsp;
				Size
				<select name="select1" id="select1">
			      <option>25</option>
				  <option>26</option>
				  <option>27</option>
				  <option>28</option>
				  <option>29</option>
				  <option>30</option>
				  <option>31</option>
				  <option>32</option>
				  <option>33</option>
				  <option>34</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
				  Qty<select name="select2" id="select2">
			      <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  </select><br>
				  <input name="btnSubmit" type="submit" id="btnSubmit" value="Order" >
				  <input name="Item_Name" type="hidden" value="SKINNY HIGH WAIST JEAN" >
				   <input name="Price" type="hidden" value="LKR 4,450.00" ></p>
					   </form>
			  </form></td>
			
	      <td width="322">
			   <form action="cart.php" method="post">
				   <form action="fro_order.php" method="post">
				<img src="images/Denim/2.jpg" width="302" height="361" alt=""/>
			<h3>LOW WAIST RIPPED JEAN</h3> <p>LKR 3,750.00<br>&nbsp;&nbsp;&nbsp;
			Size
				<select name="select1" id="select1">
				  <option>26</option>
				  <option>27</option>
				  <option>28</option>
				  <option>29</option>
				  <option>30</option>
				  <option>31</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
				  Qty<select name="select2" id="select2">
			      <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  </select><br>
		     <input name="btnSubmit" type="submit" id="btnSubmit" value="Order" >
				  <input name="Item_Name" type="hidden" value="LOW WAIST RIPPED JEAN" >
				   <input name="Price" type="hidden" value="LKR 3,750.00" > </p>
					    </form>
			  </form></td>
			
	      <td width="356">
			   <form action="cart.php" method="post">
				   <form action="fro_order.php" method="post">
				<img src="images/Denim/1.jpg" width="302" height="361" alt=""/>
			<h3>MID WAIST JEAN</h3> <p>LKR 3,875.00<br>&nbsp;&nbsp;&nbsp;
				Size
				<select name="select1" id="select1">
				  <option>26</option>
				  <option>29</option>
				  <option>30</option>
				  <option>31</option>
				  <option>32</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
				  Qty<select name="select2" id="select2">
			      <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  </select><br>
		     <input name="btnSubmit" type="submit" id="btnSubmit" value="Order" >
				  <input name="Item_Name" type="hidden" value="MID WAIST JEAN" >
				   <input name="Price" type="hidden" value="LKR 3,875.00" ></p>
					    </form>
			  </form></td>
			
	      <td width="309">
			   <form action="cart.php" method="post">
				   <form action="fro_order.php" method="post">
				<img src="images/Denim/4.jpg" width="302" height="361" alt=""/>
			<h3>SLEEVELESS JUMPSUIT</h3> <p>LKR 4,690.00<br>&nbsp;&nbsp;&nbsp;
				Size
				<select name="select1" id="select1">
				  <option>25</option>
				  <option>27</option>
				  <option>28</option>
				  <option>29</option>
				  <option>30</option>
				  <option>31</option>
				  <option>32</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
				  Qty<select name="select2" id="select2">
			      <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  </select><br>
		      <input name="btnSubmit" type="submit" id="btnSubmit" value="Order" >
				  <input name="Item_Name" type="hidden" value="SLEEVELESS JUMPSUIT" >
				   <input name="Price" type="hidden" value="LKR 4,690.00" ></p>
					    </form>
			  </form></td>
        </tr>
	    
      </tbody>
</table>
	<br>
	
	
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
