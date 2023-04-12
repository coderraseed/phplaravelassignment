<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
</head>
<body>

	<h1>Table Example</h1>

	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
		</tr>
		<tr>
			<td>John</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Sarah</td>
			<td>30</td>
		</tr>
		<tr>
			<td>Mike</td>
			<td>28</td>
		</tr>
		<?php
			if(isset($_POST['name']) && isset($_POST['age'])) {
				echo "<tr><td>" . $_POST['name'] . "</td><td>" . $_POST['age'] . "</td></tr>";
			}
		?>
	</table>

	<h2>Add New Entry</h2>

	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<label for="age">Age:</label>
		<input type="text" name="age" id="age">
		<input type="submit" value="Submit">
	</form>

</body>
</html>
