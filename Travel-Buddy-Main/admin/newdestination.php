<!DOCTYPE html>
<html>

<head>
    <!-- Meta charset and title -->
    <meta charset="UTF-8" />
    <title>Add Destination</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
// Include navigation
include ('../reusables/nav.php');
// Check if user has logged in, if not logged in, redirect to home page
include ('../includes/config.php');
include ('../includes/functions.php');
secure();
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Add Destination</h1>
            </div>
        </div>
        <?php

        // Check if addDestination is set in the URL
        // if(isset($_GET['addDestination'])){
        //     // Get the destinationID from the URL
        //     $destinationID = $_GET['DestinationID'];
        // }
        // Display the form
        echo '
        <div class="container">
            <div class="row">
                <form action="../includes/addDestination.php" method="POST">
                    <!-- Hidden input field to store the destinationID -->
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" id="City" name="City" aria-describedby="City">
                    </div>
                    <div class="mb-3">
                        <label for="Country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="Country" name="Country" aria-describedby="Country">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description" name="Description"
                            aria-describedby="Enter Description">
                    </div>
                    <div class="mb-3">
                        <label for="Climate" class="form-label">Climate</label>
                        <input type="text" class="form-control" id="Climate" name="Climate"
                            aria-describedby="Enter Climate">
                    </div>
                    <div class="mb-3">
                        <label for="BestTimeToVisit" class="form-label">Best time to visit</label>
                        <input type="text" class="form-control" id="BestTimeToVisit" name="BestTimeToVisit"
                            aria-describedby="BestTimeToVisit">
                    </div>
                    <div class="mb-3">
                        <label for="ImageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="ImageURL" name="ImageURL"
                            aria-describedby="ImageURL">
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-dark" name="newDestination">Submit</button>
                </form>
            </div>
        </div>
        '; ?>
    </div>
</body>

</html>