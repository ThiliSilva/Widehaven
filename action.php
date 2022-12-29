 <?php
	
	  if(isset($_POST["btnSubmit"]))
	  {
		      $firstName = $_POST["txtFirstName"];
		      $lastName = $_POST["txtLastName"];
			  $email = $_POST["txtEmail"];
		      $date = $_POST["txtDate"];
			  $password = $_POST["txtPassword"];
		      $gender = $_POST["select"];
		      $age = $_POST["RadioGroup1"];
		      $address = $_POST["txtarea"];
			  $contactNo = $_POST["txtContact"];
		  
		 
		  $con = mysqli_connect("localhost:3306","root","","widehavendb");
		    if(!$con)
			{
				die("Sorry, We are facing a tecnical issue");
			}
		  
		  $sql = "INSERT INTO `tbllogin`  (`customer_id`, `firstName`, `lastName`, `email`, `date`, `password`, `gender`, `age`, `address`, `contactNo`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$email."', '".$date."', '".$password."', '".$gender."', '".$age."', '".$address."', '".$contactNo."');";
		  

		  mysqli_query($con,$sql);
		   
		  mysqli_close($con);
		  
		  header('Location:Sign-In.php');
	  }
	
	?>