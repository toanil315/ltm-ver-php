<?php
    class SinhVien {
        public $idSV;
        public $hoTen;
        public $gioiTinh;
        public $idKhoa;
        public function __construct($id, $name, $sex, $idKhoa) {
            $this->idSV = $id;
            $this->hoTen = $name;
            $this->gioiTinh = $sex;
            $this->idKhoa = $idKhoa;
        }
    }
?>