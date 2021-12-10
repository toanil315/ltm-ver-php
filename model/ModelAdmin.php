<?php
    class ModelAdmin {
        public function __construct() {}
        public function login($userName, $pass) {
            $checkLogin = false;
            $link = mysqli_connect("localhost:3325", "root", "");
            mysqli_select_db($link, "test888");
            $sqlString = "Select * from admin where UserName='$userName' and Password='$pass';";
            $result = mysqli_query($link, $sqlString);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $checkLogin = true;
            }
            return $checkLogin;
        }
    }
?>