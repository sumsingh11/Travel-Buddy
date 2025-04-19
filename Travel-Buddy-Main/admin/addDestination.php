<?php
// Check if the form for adding new destinations is submitted
if (isset($_POST['newDestination'])) {
    // Retrieve data from the form
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    $Description = $_POST['Description'];
    $Climate = $_POST['Climate'];
    $BestTimeToVisit = $_POST['BestTimeToVisit'];
    $ImageURL = $_POST['ImageURL'];

    // Connection string
    include('../includes/connect.php');

    // SQL query to insert new destination into the database
    $query = "INSERT INTO destination (City, Country, Description, Climate, BestTimeToVisit, ImageURL) VALUES ('$City', '$Country', '$Description', '$Climate', '$BestTimeToVisit', '$ImageURL')";

    // Execute the query
    $destination = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($destination) {
        // Redirect to the destination details page with the DestinationID in the URL
        header("Location: ../destination.php");
    } else {
        // Display error message if the query fails
        echo "Failed" . mysqli_error($connect);
    }
} else {
    // Display error message if the form submission is unexpected
    echo "You should not be here!";
}
?>