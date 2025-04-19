<?php
// Connection string
include ('../includes/connect.php');
// Check if the form for editing destination is submitted
if (isset ($_POST['updateDestination'])) {
    // Retrieve data from the form
    $DestinationID = $_POST['DestinationID'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    $Description = $_POST['Description'];
    $Climate = $_POST['Climate'];
    $BestTimeToVisit = $_POST['BestTimeToVisit'];
    $ImageURL = $_POST['ImageURL'];


    // SQL query to update destination into the database
    $query = "UPDATE destination SET City='$City', Country='$Country', Description='$Description', Climate='$Climate', BestTimeToVisit='$BestTimeToVisit', ImageURL='$ImageURL' WHERE DestinationID='$DestinationID'";

    $destination = mysqli_query($connect, $query);
    if ($destination) {
        header("Location: ../admin/destination.php");
    } else {
        echo "Error" . mysqli_error($connect);
    }
} else {
    echo "You shouldn't be here!";
}
mysqli_close($connect);
