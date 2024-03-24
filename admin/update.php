<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<style>
		body {
			background-color: #f2f2f2;
		}
		form {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			max-width: 500px;
			margin: 0 auto;
		}
		input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form>
		<h2>Update Password</h2>
		<label for="currentPassword">Current Password:</label>
		<input type="password" id="currentPassword" name="currentPassword" required>
		<label for="newPassword">New Password:</label>
		<input type="password" id="newPassword" name="newPassword" required>
		<label for="confirmPassword">Confirm Password:</label>
		<input type="password" id="confirmPassword" name="confirmPassword" required>
		<input type="submit" value="Update">
	</form>
</body>
</html>
