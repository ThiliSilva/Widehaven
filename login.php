
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	
<title>Widehaven Registration</title>
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
    text-align: center;
}

	</style>
</head>

<body>
	<table>
		<form action="action.php" method="post">
	<td><tr> <img src="images/i.png" alt="" width="90" height="78"> </tr></td>
	</table>
	<div class="regform">
	  <h1 style="text-align: center">Create an account</h1>
	  <p style="text-align: center; font-size: 18px;">Already a member ?<a href="Sign-In.php">Sign in</a>	  </p>
	</div>
	<form>
			<div id="name">
				<h2 class="name" style="text-align: center; font-size: 9px;">&nbsp;</h2>
			  <h2 class="name" style="text-align: center"><span style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif"><strong>First Name&nbsp;</strong></span>
			    <span style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">
			    <input type="text" name="txtFirstName" id="txtFirstName" required >
              </span></h2>
	  </div>
			<h2 class="name" style="text-align: center; font-size: 16px;"><span style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">Last Name&nbsp;</span> 
			  <span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">
			  <input type="text" name="txtLastName" id="txtLastName" required >
			  </span></h2>
		  
		  <h2 class="name"> Email Address&nbsp;&nbsp;<input type="text" name="txtEmail" id="txtEmail" required></h2>
		  
		  <h2 class="name">Date of Birth&nbsp;&nbsp;<input type="date" name="txtDate" id="txtDate" required ></h2>
		  
		  <h2 class="name">Password&nbsp;&nbsp;<input type="password" name="txtPassword" id="txtPassword" required ></h2>
		  
	  <h2 class="name">Gender&nbsp;&nbsp;
	    <select name="select" id="select" required>
	      <option value="Male">Male</option>
	      <option value="Female">Female</option>
        </select>
	  </h2>
		  
		 
	    <h2 class="name">Age <span style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 12px;">
			  &nbsp;&nbsp;&nbsp;<input type="radio" name="RadioGroup1" value="Under 18" id="RadioGroup1_0">
              <label><span style="text-align: center">Under</span> 18</label>
		      <span style="text-align: center; font-size: 12px;"><br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="RadioGroup1" value="18 or Older" id="RadioGroup1_1" align="Center" required >
		    <label>18 or Older</label> </span></span><span style="text-align: center"><br>
		   </span> </h2>
		  
		  
	    <h2 class="name">Contact Address&nbsp;&nbsp;<textarea name="txtarea" id="txtarea" required ></textarea></h2>
		  
		  <h2 class="name">Contact Number&nbsp;&nbsp;<input type="text" name="txtContact" id="txtContact" required ></h2>
		 
		  <p>&nbsp;</p>
		  
		  <p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 16px;">
		    <input type="checkbox" name="checkbox" id="checkbox" required >
	      I agree with terms and condtions		  </p> <br>
		  
		  <p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 16px;">
		    <input name="btnSubmit" type="submit" id="btnSubmit" title="     Create account     " value="     Create your widehaven account     ">
		  </p>
		  
		  <h2 class="name">OR		  </h2>
		  
		  <table width="351" border="1" align="center">
		    <tbody>
		      <tr bgcolor="#FFFFFF">
		        <div class="image">
					<td width="51" height="50" style="text-align: center; font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">
					<a href="https://www.google.com/"><img src="images/gx.png" alt="" width="46" height="44"/></a>
			    <div class="desc"></div></td> </div>
		        <td width="284" style="text-align: center; font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">
		          <input name="button2" type="button" id="button2" title="   Continue with Google   " value="   Continue with Google_Click icon   ">
	            </td>
	          </tr>
	        </tbody>
	    </table>
		  <table width="353" border="0" align="center">
		    <tbody>
		      <tr bgcolor="#3869BE" style="text-align: center; font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">
				  <div class="image">
		        <td width="55" height="55"><a href="https://www.facebook.com/"><img src="images/fb.png" alt="" width="44" height="41"/></a>
			    <div class="desc"></div></td> </div>
				  
		        <td width="288">
		          <input name="button3" type="button" id="button3" title="   Continue with Facebook   " value="   Continue with Facebook_Click icon   ">
	            </td>
	          </tr>
	        </tbody>
	    </table>
		  <p>&nbsp;</p>
		  <p>&nbsp; </p>
		  
</form>
	
	
	</div>
	<span style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif"></span>
	
</body>
</html>
