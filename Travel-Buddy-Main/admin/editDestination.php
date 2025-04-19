<?php
$DestinationID = $_GET['DestinationID'];
include ("../includes/connect.php");
$query = "SELECT * FROM destination WHERE `DestinationID` = '$DestinationID'";
$destinations = mysqli_query($connect, $query);
$result = $destinations->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Destination</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Update Destination</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="POST" action="../includes/updateDestination.php">
                    <!--name is important, it should be the same as updateDestination.php -->
                    <input type="hidden" name="DestinationID" value="<?php echo $result['DestinationID']; ?>">
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" id="City" name="City" aria-describedby="City"
                            value="<?php echo $result['City']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="Country" name="Country" aria-describedby="Country"
                            value="<?php echo $result['Country']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description" name="Description"
                            aria-describedby="Enter Description" value="<?php echo $result['Description']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Climate" class="form-label">Climate</label>
                        <input type="text" class="form-control" id="Climate" name="Climate"
                            aria-describedby="Enter Climate" value="<?php echo $result['Climate']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="BestTimeToVisit" class="form-label">Best time to visit</label>
                        <input type="text" class="form-control" id="BestTimeToVisit" name="BestTimeToVisit"
                            aria-describedby="BestTimeToVisit" value="<?php echo $result['BestTimeToVisit']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ImageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="ImageURL" name="ImageURL"
                            aria-describedby="ImageURL" value="<?php echo $result['ImageURL']; ?>">
                    </div>

                    <!--name is important, it should be the same as updateDestination.php -->
                    <button type="submit" name="updateDestination" class="btn btn-primary">Update Destination </button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>