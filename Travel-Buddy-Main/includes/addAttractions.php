<?php
// Check if the form for adding new attractions is submitted
if (isset ($_POST['newAttractions'])) {
    // Retrieve data from the form
    $DestinationID = $_POST['DestinationID'];
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Location = $_POST['Location'];
    $AdmissionFee = $_POST['AdmissionFee'];
    $OpeningHours = $_POST['OpeningHours'];
    $ImageURL = $_POST['ImageURL'];

    // Connection string
    include ('./connect.php');

    // SQL query to insert new attraction into the database
    $query = "INSERT INTO attractions (DestinationID, Name, Description, Location, AdmissionFee, OpeningHours, ImageURL) VALUES ('$DestinationID', '$Name', '$Description', '$Location', '$AdmissionFee', '$OpeningHours', '$ImageURL')";

    // Execute the query
    $attraction = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($attraction) {
        // Redirect to the destination details page with the DestinationID in the URL
        header("Location: ../admin/destinationDetails.php?DestinationID=" . $DestinationID);
    } else {
        // Display error message if the query fails
        echo "Failed" . mysqli_error($connect);
    }
} else {
    // Display error message if the form submission is unexpected
    echo "You should not be here!";
}
?>