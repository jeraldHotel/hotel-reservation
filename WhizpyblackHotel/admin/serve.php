<?php
$db = mysqli_connect("localhost", "root", "", "db_whixpy") or die("Connection failed" . mysqli_error($db));

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteQuery = "DELETE FROM roombook WHERE id = $id";
    mysqli_query($db, $deleteQuery);
    header("Location: serve.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
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
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
<body class="bg-white">
    <?php require('sap/header.php') ?>

    <h2 class="col-lg-6 ms-auto p-2">Room Booked</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="M-container">
                <?php
                $query = mysqli_query($db, "SELECT * FROM roombook");
                $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                ?> 

                <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Room Type</th>
                        <th>Bed</th>
                        <th>No. of Rooms</th>
                        <th>Meal</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>No. of Days</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['FName']; ?></td>
                        <td><?php echo $row['LName']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['TRoom']; ?></td>
                        <td><?php echo $row['Bed']; ?></td>
                        <td><?php echo $row['NRoom']; ?></td>
                        <td><?php echo $row['Meal']; ?></td>
                        <td><?php echo $row['cin']; ?></td>
                        <td><?php echo $row['cout']; ?></td>
                        <td><?php echo $row['nodays']; ?></td>
                        <td>
                            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')"><i class=" p-3 text-dark bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require('sap/scripts.php');?>
</body>
</html>