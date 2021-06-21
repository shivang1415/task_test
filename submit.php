<?php
	include_once 'db-inc.php';

	if(isset($_GET['submit'])){

	$client_id=$_GET['client_id'];
	$item_id=$_GET['item_id'];
	$qty=$_GET['qty'];
	$date=date('m/d/y');
}

	$sql = "INSERT INTO orders(client_id,item_id,qty,date) VALUES ($client_id,$item_id,$qty,$date);";

	mysqli_query($conn, $sql);

	

	