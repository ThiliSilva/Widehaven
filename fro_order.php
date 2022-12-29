<?php
session_start(); 

	  if(isset($_POST["btnSubmit"]))
	  {
		      $email = $_POST["SELECT * FROM `tbllogin` WHERE `email` = '".$email."' "]; 
		      $item_Name = $_POST["Item_Name"];
		      $price = $_POST["Price"];
		      $size = $_POST["select1"];
			  $qty = $_POST["select2"];
		  
		     
		  		 
		  $con = mysqli_connect("localhost:3306","root","","widehavendb");
		    if(!$con)
			{
				die("Sorry, We are facing a tecnical issue");
			}
		  
		  $sql = "INSERT INTO `tblfrock_order` (`fro_id`, `email`, `item_Name`, `price`, `size`, `qty`) VALUES (NULL, '" .$email."', '".$item_Name."', '".$price."', '".$size."', '".$qty."');";
		  mysqli_query($con,$sql);
		  
		  mysqli_close($con);
		  
		  header('Location:mycart.php');
	  }
	
	?>