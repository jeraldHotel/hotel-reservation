<?php
session_start();
include "sap/db.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>
  body {
    font-family: 'Open Sans', sans-serif;
}
.row{
}
.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
  }
#wrapper {
    width: 100%;
}
.col-md-12{
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 992px) {
    .col-md-12 {
      float: left;
    }
    .col-md-12 {
      width: 100%;
    }
}
.navbar-default {
    background-color: #f5f5f5;
    border-color: #e7e7e7;
}

.sidebar-collapse {
    width: 250px;
    position: fixed;
    height: 100%;
    z-index: 1;
    overflow-x: hidden;
    padding-top: 20px;
}

.navbar-side {
    margin-left: -250px;
    left: 250px;
    width: 250px;
    position: fixed;
    height: 100%;
    background-color: #000000;
    z-index: 2;
    overflow-y: auto;
    border-right: 1px solid #e7e7e7;
}

.navbar-default .navbar-nav > li > a {
    color: #333;
}

#page-wrapper {
    padding: 0 15px;
    min-height: 568px;
    background-color: #fff;
    position: inherit;
    margin-left: 250px;
    border-left: 1px solid #e7e7e7;
}

.page-header {
    margin: 20px 0 20px;
    font-size: 22px;
}

.panel-primary {
    border-color: #428bca;
}

.panel-heading {
    background-color: #000000;
    color: #fff;
    border-color: #428bca;
}

.panel-body {
    padding: 15px;
}
.form-group {
    margin-bottom: 15px;
  }
.form-group label {
    font-weight: bold;
}

.form-group .form-control {
    width: 100%;
}

.btn-primary {
    background-color: #428bca;
    border-color: #357ebd;
}

.well {
    background-color: #f5f5f5;
    border: none;
    padding: 20px;
    margin-bottom: 0;
}
</style>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../index.php" class="ms-3 text-light"><i class="bi bi-home"></i> Homepage</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                PERSONAL INFORMATION
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Title*</label>
                                        <select name="title" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Rev.">Rev.</option>
                                            <option value="Rev. Fr">Rev. Fr.</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="fname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="lname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nationality*</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="Sri Lankan" checked>Philipine cit.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="Non Sri Lankan">Non Philipine cit.
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                  
                            <div class="col-md-6 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        RESERVATION INFORMATION
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom" class="form-control" required>
                                                <option value selected></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                <option value="Guest House">GUEST HOUSE</option>
                                                <option value="Single Room">SINGLE ROOM</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
                                                <option value selected></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                <option value="None">None</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
                                                <option value selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control" required>
                                                <option value selected></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Half Board">Half Board</option>
                                                <option value="Full Board">Full Board</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="well">
                                <h4>HUMAN VERIFICATION</h4>
                                <p>Type Below this code <?php $Random_code = rand(); echo $Random_code; ?> </p><br />
                                <p>Enter the random code<br /></p>
                                <input type="text" name="code1" title="random code" />
                                <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                <input type="submit" name="submit" class="btn btn-primary">
                                <?php
                                if (isset($_POST['submit'])) {
                                    $code1 = $_POST['code1'];
                                    $code = $_POST['code'];
                                    if ($code1 != "$code") {
                                        $msg = "Invalid code";
                                    } else {

                                        $con = mysqli_connect("localhost", "root", "", "db_whixpy");
                                        $check = "SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                        $rs = mysqli_query($con, $check);
                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        if ($data[0] > 1) {
                                            echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                                        } else {
                                            $new = "Not Confirm";
                                            $query = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) 
                                            VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                            if (mysqli_query($db, $newUser)) {
                                                echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                            } else {
                                                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                            }
                                        }
                                        $msg = "Your code is correct";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                              </div>
                </div>
            </div>

            <?php require('sap/scripts.php');?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.metisMenu.js"></script>
            <script src="assets/js/custom-scripts.js"></script>
        </body>
        </html>