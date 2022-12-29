<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet2.css">
<title>Widehaven Sign-In</title>
	<style>
		.Container {
	            max-width: 1300px;
	            margin: auto;
	            padding-left: 25px;
	            padding-right: 25px
               }
img 
{
	border-style: groove;
	border-radius: 25px;
	align-items: left
}
body
{
    background-color: lightgray;
    margin: 0;
    padding: 0;
    text-align: center;
}
	</style>
</head>

<body>
	
	
	<td><tr> <img src="images/i.png" alt="" width="90" height="78"> </tr></td>
	
<h1>Welcome to Widehaven!&nbsp;&nbsp;Please Sign In</h1>
	<div class="container"> <a href="Home.html">GO BACK</a> </div>

	
	<table width="493" height="472" align="center" bgcolor="#F3F3B2">
	
	<div class="center" align="center" >
	<form action="sign.php" method="post">
	<tr><td width="485" height="110" align="center"><div class="txt_field"><input type="text" name="txtEmail" placeholder="Email Address" required ><span></span> </div></td>
		
		</tr>
	
	
		<tr><td height="110" align="center"><div class="txt_field"><input type="password" name="txtPassword" placeholder="Password" required ><span></span>
			</div></td>
		</tr>
		
		
		<tr><td align="center"><div class="pass"><a href="">Forgot Password?</a></div>
			<br>
			
		<input type="submit" name="btnSubmit" value="&nbsp;&nbsp;&nbsp;Sign in&nbsp;&nbsp;&nbsp;" align="middle">
			<br>
			<br>
			<div class="login_link" align="center">Not a member? <a href="login.php">Login</a></div></td>
		</tr>
		
		<tr><td>
		<div class="social-icons"> <a href="https://www.facebook.com/"><img src="images/fb.png" width="51" height="47"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://www.google.com/"><img src="images/gx.png" width="53"></a></div></td></tr>
	
	</form>
	</div>
<br>
	</table>
	<br>

</body>
</html>
