<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>

<form action="submit.php" method="GET">
	Client id:<input type="text" name="client_id" placeholder="client_id">
	<br>
	Select items:<select value="item_id" name="item_id">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br>
	Quantity:<input type="text" name="qty" placeholder="quantity">
	<br>
	Today's date:<input type="text" name="date" value="<?php echo date('m/d/y');?>"/>
	<br>
	<button type="submit"  name="submit">Submit</button>

</form>

</body>
</html>
