<?php
require('sap/db_whixpy.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <?php require('../sap/links.php'); ?>
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-light shadow overflow-none">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" type="text" required class="form-control shadow-none" placeholder="Admin">
                </div>
                <div class="mb-3">
                    <input name="admin_password" type="password" required class="form-control shadow-none" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn btn-outline-dark w-20 shadow-none me-lg-3 me-3 mb-2">LOGIN</button>
            </div>
        </form>
    </div>  
    <li>
     <a href="../index.php" class="text-dark">Homepage</a>
    </li>

    <?php require('../sap/scripts.php'); 

    if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM `tbl_admin` WHERE `admin_name`=? AND `admin_password`=?";
    $values = [$frm_data['admin_name'], $frm_data['admin_password']];
    
    $res = select($query, $values, "ss");
    if ($res->num_rows == 1) {
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['ad_no'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo '<script>alert("Login Failed - Invalid Password or Username");</script>';
    }
}?>
</body>
</html>
