<?php
// Connection string
include ('../includes/connect.php');
// Check if the form for editing attraction is submitted
if (isset ($_POST['updateAttraction'])) {
    // Retrieve data from the form
    $AttractionID = $_POST['AttractionID'];
    $DestinationID = $_POST['DestinationID'];
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Location = $_POST['Location'];
    $AdmissionFee = $_POST['AdmissionFee'];
    $OpeningHours = $_POST['OpeningHours'];
    $ImageURL = $_POST['ImageURL'];

    // SQL query to update destination into the database
    $query = "UPDATE attractions SET DestinationID='$DestinationID', Name='$Name', Description='$Description', Location='$Location', AdmissionFee='$AdmissionFee', OpeningHours='$OpeningHours', ImageURL='$ImageURL' WHERE AttractionID='$AttractionID'";


    $attraction = mysqli_query($connect, $query);
    if ($attraction) {
        header("Location: ../admin/attractions.php");
    } else {
        echo "Error" . mysqli_error($connect);
    }
} else {
    echo "You shouldn't be here!";
}
mysqli_close($connect);
