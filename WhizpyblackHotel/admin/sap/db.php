<?php
$db = mysqli_connect("localhost", "root", "", "db_whixpy") or die("Connection failed" . mysql_error());

function dateDiff($date1, $date2)
{
    $diff = strtotime($date2) - strtotime($date1);
    return round($diff / (60 * 60 * 24));
}

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $Email = mysqli_real_escape_string($db, $_POST['email']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $troom = mysqli_real_escape_string($db, $_POST['troom']);
    $bed = mysqli_real_escape_string($db, $_POST['bed']);
    $nroom = mysqli_real_escape_string($db, $_POST['nroom']);
    $meal = mysqli_real_escape_string($db, $_POST['meal']);
    $cin = mysqli_real_escape_string($db, $_POST['cin']);
    $cout = mysqli_real_escape_string($db, $_POST['cout']);
    $nodays = dateDiff($cin, $cout);


    $checkQuery = mysqli_query($db, "SELECT * FROM roombook WHERE TRoom = '$troom' AND (cin <= '$cout' AND cout >= '$cin')");
if (mysqli_num_rows($checkQuery) > 0) {
    $_SESSION['error'] = "The room is already reserved for the selected dates. please reserve on another day";
    echo '<script type="text/javascript">
            alert("The room is already reserved for the selected dates. please reserve on another day");
            location.href = "reservation.php";
          </script>';
    exit();
}

$query = mysqli_query($db, "INSERT INTO roombook (Title, FName, LName, Email,  Phone, TRoom, Bed, NRoom, Meal, cin, cout, nodays)
VALUES ('$title', '$fname', '$lname', '$Email', '$phone', '$troom', '$bed', '$nroom', '$meal', '$cin', '$cout', '$nodays')");

if ($query) {
    $_SESSION['success'] = "Your Reservation has been completed";
    $_SESSION['id'] = mysqli_insert_id($db);
    echo '<script type="text/javascript">
            alert("Your Reservation has been completed");
            location.href = "reservation.php";
          </script>';
    exit();
} else {
    $_SESSION['error'] = "Sorry, you can't access";
    echo '<script type="text/javascript">
            alert("Sorry, you can\'t access");
            location.href = "reservation.php";
          </script>';
}
}