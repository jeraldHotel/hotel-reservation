<?php 
  require('sap/necessary.php');
  adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <?php require('sap/links.php');?>
</head>
<style>
    #dashboard-menu{
    position: fixed;
    height: 100%;
}
@media screen and (max-width: 991px){
    #dashboard-menu{
    height: auto;
    width: 100%;
}
#M-container{
    margin-top: 65px;
}
}
</style>
<body class="bg-white">
   
<?php 
 require('sap/header.php');
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="M-container">
                
            </div>
        </div>
    </div>

<?php require('../sap/scripts.php');?>
</body>
</html>