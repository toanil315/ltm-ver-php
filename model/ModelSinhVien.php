<?php
    include_once("SinhVien.php");
    include_once("Khoa.php");
    class ModelSinhVien {
        public function __construct() {}
        public function getListSV() {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Select * from sinhvien";
            $result = mysqli_query($link, $sqlString);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $id = $row["IdSV"];
                $name = $row["HoTen"];
                $gioiTinh = $row["GioiTinh"];
                $idKhoa = $row["IdKhoa"];
                $listSV[++$i] = new SinhVien($id, $name, $gioiTinh, $idKhoa);
            }
            return $listSV;
        }

        public function getSV($idSV) {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Select * from sinhvien where IdSV='$idSV'";
            $result = mysqli_query($link, $sqlString);
            while($row = mysqli_fetch_array($result)) {
                $id = $row["IdSV"];
                $name = $row["HoTen"];
                $gioiTinh = $row["GioiTinh"];
                $idKhoa = $row["IdKhoa"];
                $sv = new SinhVien($id, $name, $gioiTinh, $idKhoa);
            }
            return $sv;
        }

        public function getSvByKhoa($idKhoa) {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Select * from sinhvien where IdKhoa='$idKhoa'";
            $result = mysqli_query($link, $sqlString);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $id = $row["IdSV"];
                $name = $row["HoTen"];
                $gioiTinh = $row["GioiTinh"];
                $idKhoa = $row["IdKhoa"];
                $listSV[++$i] = new SinhVien($id, $name, $gioiTinh, $idKhoa);
            }
            return $listSV;
        }

        public function addSV($sv) {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Insert into sinhvien(IdSV, HoTen, GioiTinh, IdKhoa) 
                Values($sv->idSV, '$sv->hoTen', '$sv->gioiTinh', '$sv->idKhoa');";
            $result = mysqli_query($link, $sqlString);
        }

        public function updateSV($sv) {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Update sinhvien set HoTen='$sv->hoTen', GioiTinh='$sv->gioiTinh', IdKhoa='$sv->idKhoa' where IdSV='$sv->idSV'";
            $result = mysqli_query($link, $sqlString);
        }

        public function deleteSV($id) {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Delete from sinhvien where IdSV='$id'";
            $result = mysqli_query($link, $sqlString);
        }

        public function getListKhoa() {
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Select * from khoa";
            $result = mysqli_query($link, $sqlString);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $id = $row["IdKhoa"];
                $name = $row["TenKhoa"];
                $listKhoa[++$i] = new Khoa($id, $name);
            }
            return $listKhoa;
        }
    }
?>