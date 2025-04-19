<?php
include ('../includes/config.php');
include ('../includes/functions.php');
secure();
if (isset ($_GET['delete'])) {
    $DestinationID = $_GET['DestinationID'];
    //Connection string
    include ('../includes/connect.php');
    $query = "DELETE FROM destination WHERE `DestinationID`='$DestinationID'";
    $destination = mysqli_query($connect, $query);
    if ($destination) {
        header("Location: ../admin/destination.php");
    } else {
        echo "Failed" . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
