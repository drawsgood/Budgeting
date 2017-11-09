
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="My_Script.js"></script>
	<title>My Testicles</title>
</head>
<body>
	<div id="mainForm">
	<form action="addExpense.php" method="POST">
		<ul class="clearListStyling">
		<li><label>Amount</label>
		<input type="text" name="amount"/></li>
		<li><label>Name of expense</label>
		<input type="text" name="category"/></li>
		<li><input type="submit" name="submit" value="Submit"/></li>
		</ul>
	</form>

	<ul id="list"></ul>
	Remaining budget for the day:
	<ul id="total"></ul>

	</div>

</body>
</html>