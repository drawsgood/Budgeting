
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Budget</title>
</head>
<body>
	<span id="clock"></span>
	<div class="container" style="margin-top:20px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Bossy Budgeter</h3>
					</div>
					<div class="panel-body">
						<form action="addExpense.php" method="POST">
							<div class="form-group">
								<label>Amount</label>
								<input type="number" placeholder="Numbers Only" class="form-control" name="amount"/>
								<?php if(isset($errors['amount'])) { echo $errors['amount']; } ?>
							</div>
							<div class="form-group">
								<label>Name of expense</label>
								<input type="text" pattern="[A-Za-z\\s]*" class="form-control" name="category" placeholder="Alphabetical Characters Only" />
							</div>
							<button type="submit" name="submit" class="btn btn-lg btn-block btn-success">Submit</button>
						</form>
					</div>
					<div style="padding: 0px 15px 0px 15px" class="row">
						<div class="col-md-12">
								<h5>Today's Spending</h5>
								<table class="table table-bordered table-hover table-striped" id="list">
									<tr>
										<td style="font-weight: bold">Cost</td>
										<td style="font-weight: bold">Category</td>
									</tr>
								</table>
						</div>
					</div>
					<div style="padding: 0px 15px 0px 15px;" class="row">
						<div class="col-md-12">
							<h5">Remaining budget for the day:</h5>
							<div class="panel panel-default" style="border-radius: 10px">
								<div class="panel-body bg-primary" style="border-radius: 10px;"> 
									<p id="total"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="My_Script.js"></script>
</body>
</html>