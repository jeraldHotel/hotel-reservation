<?php 
 require('sap/scripts.php');

 if (isset($_POST['get_general'])) {
     require('../sap/db_whixpy.php');
     require('../sap/necessary.php');
     adminLogin();
 
     $q = "SELECT * FROM `settings` WHERE `ad-no`=?";
     $values = [1];
     $res = select($q, $values, "i");
     $data = mysqli_fetch_assoc($res);
     $json_data = json_encode($data);
     echo $json_data;
     exit;
 }
 ?>
 