<?php
    class Khoa {
        public $idKhoa;
        public $tenKhoa;
        public function __construct($id, $ten) {
            $this->idKhoa = $id;
            $this->tenKhoa = $ten;
        }
    }
?>