<!DOCTYPE html>
<html>

<head>
    <!-- Meta charset and title -->
    <meta charset="UTF-8" />
    <title>Add Attraction</title>
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
                <h1 class="display-5 mt-4 mb-4">Add Attraction</h1>
            </div>
        </div>
        <?php

        // Check if addAttractions is set in the URL
        if (isset ($_GET['addAttractions'])) {
            // Get the destinationID from the URL
            $destinationID = $_GET['DestinationID'];
        }
        // Display the form
        echo '
        <div class="container">
            <div class="row">
                <form action="../includes/addAttractions.php" method="POST">
                    <!-- Hidden input field to store the destinationID -->
                    <input type = "hidden" name = "DestinationID" value = "' . $destinationID . '">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" aria-describedby="Name">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description" name="Description"
                            aria-describedby="Enter Description">
                    </div>
                    <div class="mb-3">
                        <label for="Location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="Location" name="Location"
                            aria-describedby="Enter Location">
                    </div>
                    <div class="mb-3">
                        <label for="AdmissionFee" class="form-label">Admission Fee</label>
                        <input type="decimal" class="form-control" id="AdmissionFee" name="AdmissionFee"
                            aria-describedby="Enter Admission Fee">
                    </div>
                    <div class="mb-3">
                        <label for="OpeningHours" class="form-label">Opening Hours</label>
                        <input type="text" class="form-control" id="OpeningHours" name="OpeningHours"
                            aria-describedby="Enter Opening Hours">
                    </div>
                    <div class="mb-3">
                        <label for="ImageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="ImageURL" name="ImageURL"
                            aria-describedby="ImageURL">
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-dark" name="newAttractions">Submit</button>
                </form>
            </div>
        </div>
        '; ?>
    </div>
</body>

</html>