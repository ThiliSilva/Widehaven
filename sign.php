<?php
 session_start();
	
	  if(isset($_POST["btnSubmit"]))
	  { 
			  $email = $_POST["txtEmail"];
			  $password = md5($_POST["txtPassword"]);
		      
		 
		  $con = mysqli_connect("localhost:3306","root","","widehavendb");
		    if(!$con)
			{
				die("Sorry, We are facing a tecnical issue");
			}
		  
		  $sql = "SELECT * FROM `tbllogin` WHERE (`customer_id`, `email` = '".$email."' AND `password` = '".$password."';";
		  $results=mysqli_query($con,$sql);
		  
		  if(mysqli_num_rows($results>0))
		  {
			  $row=mysqli_fetch_assoc($results);
			  $_SESSION['firstName']=$row['firstName'];
		  }
		  else
		  {
			  echo"<script>alert('Email or Password is wrong.')</script>";
		  }
		   
		  mysqli_close($con);
		  
		  header('Location:payment.php'); 
	  }
	
	?>