<?php
include ('../includes/config.php');
include ('../includes/functions.php');
secure();
if (isset ($_GET['deleteAttraction'])) {
    $AttractionID = $_GET['AttractionID'];
    //Connection string
    include ('../includes/connect.php');
    $query = "DELETE FROM attractions WHERE `AttractionID`='$AttractionID'";
    $destination = mysqli_query($connect, $query);
    if ($destination) {
        header("Location: ../admin/attractions.php");
    } else {
        echo "Failed" . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
