<?php 
session_start(); 

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport"  content="width=device-width, initial-scale=1">
<title>Cart </title>
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
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
.h1
{
	text-align: center;
	color:indigo
}
p
{
	color: black;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
	font-size: 18px;
	text-align: justify
}
		p1
{
	color: black;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
	font-size: 12px;
	text-align: justify
}
.footer hr
{
	background: black;
	height: 1px;
	margin: 20px;
	display: bottom;
}
.h6
{
	text-align: right;
	color: black;
}
.table1
{
	border:thin;
	text-align: center;
}
.table1 .h3
{
	text-align: center;
}
.table1 .h4
{
	text-align: right;
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
		  
			<ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li><a href="Home.html"><img src="images/h.png" alt="" width="37" height="39"></a></li>
				 <li><a href="condition.html"><img src="images/x.png" width="45" height="40" alt=""></a></li>
              <li><a href="login.php"><img src="images/l.png" width="45" height="40" alt=""></a></li>
				<li><a href="help.html"><img src="images/ca.png" width="37" height="39" alt=""></a></li>
				
			  </ul>
			</div></nav>
			</div>
			
		 </div></div>
	
	<h1 align="center">--------------------Shopping Cart--------------------</h1><br>
	
	<div class="Container">
	<table width="40" height="26">
		<thead align="center">
			   <th width="13%">Serial No.</th>
		        <th width="24%">Name</th>
			    <th width="14%">Price</th>
				<th width="12%">Quantity</th>
			    <th width="12%">Size</th>	
		<td width="25%"></thead>
		<tbody align="center">
			<?php
			$total=0;
			if(isset($_SESSION['cart']))
			 {
			
			    foreach($_SESSION['cart'] as $key => $value)
			      {
				    $sr=$key+1;
				    $total=((int)$total+(int)$value['Price']);
			        $Item_Name=$value["Item_Name"];
					
					
				   echo"
				       <tr>
				       <td>$sr</td>
				       <td>$value[Item_Name]</td>
				       <td>$value[Price]</td>
					  
				       <td><input type='number' class='text' value='$value[Quantity]' min='1' max='3'></td>
					    <td><select name='select' id='select' class='text' value='$value[Size]'</td>>
				                               <option>Small</option>
					                            <option>Medium</option>
												 <option>Large</option>
                             </select>
							  
							  <td>
						   <form action'cart.php' method='GET'>
					             
								  <input name='Remove_Item' type='submit' value='   Remove   '>
					              <input name='Item_Name' type='hidden' value='$value[Item_Name]'>
					       </form></td> 
	
						   </tr>

				       ";
			     }
			}
			?>
		
		
		</tbody>
	</table>

<br><br>
		<table1 align="center" border="1">
		<tbody>
			
	<h3>Total : </h3>
		<h4> <?php echo $total; ?> </h4>
		<br>
			 
		<form action="login.php" method="post">
			<div class="container">
			<input type="radio" name="RadioGroup1" value="Under 18" id="RadioGroup1_0" checked />
              <label><span style="text-align: center">Cash On Delivery</label>
		  </div><br>
	     <input name="btnSubmit" type="submit" id="btnSubmit" value="    Make Purchase    " />
	  </form>
	
			</tbody>
</table1>
		</div>
<br><br>
	
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
