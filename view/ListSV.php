<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
    <h2>Danh Sach Sinh Vien</h2>
	<form action="../controller/SVController.php?mode=viewListSV" method="Post">
        <select name="idKhoa">
            <?php
                for($i = 1; $i <= sizeof($listKhoa); $i++) {
                    echo "
                        <option value='".$listKhoa[$i]->idKhoa."'>".$listKhoa[$i]->tenKhoa."</option>
                    ";
                }
            ?>
        </select>
        <input type="submit" value="xem" />
		<a style="text-decoration: none; padding: 5px 10px; background: blue; color: white" href="../controller/SVController.php?mode=add">ADD</a>
		<table border="1">
		<tr>
			<th>Ma SV</th>
			<th>Ho Ten</th>
			<th>Gioi tinh</th>
			<th>Khoa</th>
		</tr>
	<?php
		for($i = 1; $i <= sizeof($listSV); $i++) {
            echo "
            <tr>
			    <td>".$listSV[$i]->idSV."</td>
			    <td>".$listSV[$i]->hoTen."</td>
			    <td>".$listSV[$i]->gioiTinh."</td>
			    <td>".$listSV[$i]->idKhoa."</td>
		    ";
            echo "<td>
                <a href='../controller/SVController.php?mode=update&id=".$listSV[$i]->idSV."'>Update</a>
                <a href='../controller/SVController.php?action=delete&id=".$listSV[$i]->idSV."'>Delete</a>
            </td>";
            echo "</tr>";
        }
	?>
		</table>
	</form>
</body>
</html>
</body>
</html>