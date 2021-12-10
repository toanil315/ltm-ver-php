<?php
    include_once("../model/ModelAdmin.php");
    class AdminController {
        public function invoke() {
            //===================================================Chage View=================================================
            if(isset($_REQUEST['mode'])) {
                switch($_REQUEST['mode']) {
                }
            }
            //========================================================Handle==========================================
            if(isset($_REQUEST['action'])) {
                switch($_REQUEST['action']) {
                    case "login": {
                        $userName = $_REQUEST["userName"];
                        $pass = $_REQUEST["password"];
                        $modelAdmin = new ModelAdmin();
                        $checkLogin = $modelAdmin->login($userName, $pass);
                        if($checkLogin) {
                            session_start();
                            $_SESSION["status"] = "logined";
                            header("Location:./SVController.php?mode=show");
                        }
                        else {
                            header("Location:../view/Login.php");
                        }
                        break;
                    }
                }

            }
        }
    };
    $adminController = new AdminController();
    $adminController->invoke();
?>