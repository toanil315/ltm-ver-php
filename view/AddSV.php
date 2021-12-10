<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/SVController.php?action=add">
        <label style="display: block; width: 250px">Id sinh vien: </label>
		<input type="text" name="idSV"  /> <br />
		<label style="display: block; width: 250px">Ten sinh vien: </label>
		<input type="text" name="hoTen"  /> <br />
		<label style="display: block; width: 250px">Gioi tinh: </label>
		<input name="gioiTinh" type="radio" value="Nam" />
		<label>Nam</label>
		<input name="gioiTinh" type="radio" value="Nu" />
		<label>Nu</label><br />
		<label style="display: block; width: 250px">Id khoa: </label>
		<input type="text" name="idKhoa" /> <br />
		<input type="submit" value="Add" />
    </form>
</body>
</html>