<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post" action="../controller/AdminController.php?action=login">
		<label style="display: block; width: 250px">User Name: </label>
		<input type="text" name="userName" /> <br />
		<label style="display: block; width: 250px">Password: </label>
		<input type="password" name="password" /> <br />
		<input type="submit" value="Login" /><br />
	</form>
</body>
</html>