<?php 
session_start(); 

?>

<?php
if(isset($_GET['c_id']))
{
	$customer_id=$_GET['c_id'];
}
$p_add=getUserIP();
$status="pending";
$sql1="SELECT * FROM `tbl_cart` WHERE (`p_add`='".$p_add."';";
$run_cart=mysqli_query($con,$sql1);
while($row_cart=mysqli_fetch_array($run_cart)) {
	
	$pro_id=$row_cart['p_id'];
	$size=$row_cart['size'];
	$qty=$row_cart['qty'];
	
	$sql2="SELECT * FROM `tblproduct` WHERE (`product_id`='".$pro_id."')";
	$run_pro=mysqli_query($con,$ql2);
	while($row_pro=mysqli_fetch_array($run_pro)) {
		
		$sub_total=$row_pro['pro_price'] * $qty;
		$customer_order="INSERT INTO `order` (`customer_id`, `amount`, `qty`, `size`, `date`, `status`) VALUES ('".$customer_id."', '".$sub_total."', '".$qty."', '".$size."', '".NOW()."', '".$status."');";
		
		$run_cus_order=mysqli_query($con,$customer_order);
		
		
		
		$pending_order="INSERT INTO `pending` (`customer_id`, `product_id`, `qty`, `size`, `status`) VALUES ('".$customer_id."', '".$pro_id."', '".$qty."', '".$size."', '".$status."');";
		
		$run_pending_order=mysqli_query($con,$pending_order);
		
		$delete_cart="DELETE * FROM `cart` WHERE (`p_add` = '".$p_add."')";
	    $run_del=mysqli_query($con,$delete_cart);
		
		echo "<script>alert('Your order has been submitted')</script>";
		echo "<script>window.location('Your order has been submitted')</script>";
	}
	
}
?>

