
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="My_Script.js"></script>
	<title>My Testicles</title>
</head>
<body>
	<form action="addExpense.php" method="POST">
		<ul>
		<li><label>Number</label>
		<input type="text" name="amount"/></li>
		<li><label>Name of expense</label>
		<input type="text" name="category"/></li>
		<li><input type="submit" name="submit" value="Append"/></li>
		</ul>
	</form>

	<ul id="list"></ul>
	<ul id="total"></ul>

</body>
</html>