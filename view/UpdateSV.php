<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/SVController.php?action=update">
        <label style="display: block; width: 250px">Id sinh vien: </label>
		<input readonly type="text" name="idSV" value="<?php echo $sv->idSV ?>" /> <br />
		<label style="display: block; width: 250px">Ten sinh vien: </label>
		<input type="text" name="hoTen" value="<?php echo $sv->hoTen ?>" /> <br />
		<label style="display: block; width: 250px">Gioi tinh: </label>
		<input <?php echo strcmp($sv->gioiTinh, "Nam") == 0 ? "checked" : "" ?> name="gioiTinh" type="radio" value="Nam" />
		<label>Nam</label>
		<input <?php echo strcmp($sv->gioiTinh, "Nu") == 0 ? "checked" : "" ?> name="gioiTinh" type="radio" value="Nu" />
		<label>Nu</label><br />
		<label style="display: block; width: 250px">Id khoa: </label>
		<input type="text" name="idKhoa" value="<?php echo $sv->idKhoa ?>" /> <br />
		<input type="submit" value="Update" />
    </form>
</body>
</html>