<?php
    include_once("../model/ModelSinhVien.php");
    include_once("../model/SinhVien.php");
    class SVController {
        public function invoke() {
            //===================================================Chage View=================================================
            if(isset($_REQUEST['mode'])) {
                switch($_REQUEST['mode']) {
                    case 'show': {
                        $modelSV = new ModelSinhVien();
                        $listKhoa = $modelSV->getListKhoa();
                        $listSV = $modelSV->getListSV();
                        include_once("../view/ListSV.php");
                        break;
                    }
                    case 'add': {
                        header("Location:../view/AddSV.php");
                        break;
                    }
                    case 'update': {
                        $id = $_REQUEST['id'];
                        $modelSV = new ModelSinhVien();
                        $sv = $modelSV->getSV($id);
                        include_once("../View/UpdateSV.php");
                        break;
                    }
                    case 'viewListSV': {
                        $idKhoa = $_REQUEST['idKhoa'];
                        $modelSV = new ModelSinhVien();
                        $listKhoa = $modelSV->getListKhoa();
                        $listSV = $modelSV->getSvByKhoa($idKhoa);
                        include_once("../View/ListSV.php");
                        break;
                    }
                }
            }
            //========================================================Handle==========================================
            if(isset($_REQUEST['action'])) {
                switch($_REQUEST['action']) {
                    case 'add': {
                        $id = $_REQUEST['idSV'];
                        $name = $_REQUEST['hoTen'];
                        $sex = $_REQUEST['gioiTinh'];
                        $idKhoa = $_REQUEST['idKhoa'];
                        $modelSV = new ModelSinhVien();
                        $sv = new SinhVien($id, $name, $sex, $idKhoa);
                        $modelSV->addSV($sv);
                        header("Location:?mode=show");
                        break;
                    }
                    case 'update': {
                        $id = $_REQUEST['idSV'];
                        $name = $_REQUEST['hoTen'];
                        $sex = $_REQUEST['gioiTinh'];
                        $idKhoa = $_REQUEST['idKhoa'];
                        $modelSV = new ModelSinhVien();
                        $sv = new SinhVien($id, $name, $sex, $idKhoa);
                        $modelSV->updateSV($sv);
                        header("Location:?mode=show");
                        break;
                    }
                    case 'delete': {
                        $id = $_REQUEST['id'];
                        $modelSV = new ModelSinhVien();
                        $modelSV->deleteSV($id);
                        header("Location:?mode=show");
                        break;
                    }
                }

            }
        }
    };
    $svController = new SVController();
    $svController->invoke();
?>