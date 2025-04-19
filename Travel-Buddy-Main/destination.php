<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Travel Buddy - Destinations</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles for destinations */
        .country {
            color: gray;
            font-size: 12px;
            margin-top: -5px;
        }

        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        .buttons {
            display: flex;
            justify-content: space-around;

        }
    </style>
</head>

<body>
    <!-- Include navigation bar -->
    <?php include ('reusables/nav.php') ?>
    <!-- Main container -->
    <div class="container">
        <!-- Page header -->
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Destinations</h1>
            </div>
        </div>

        <?php
        // Establish database connection
        $connect = mysqli_connect(
    'sql110.infinityfree.com',  // Hostname
    'if0_38491123',             // Username
    'SkKs1W40YX1x2',            // Password (insert your real password)
    'if0_38491123_discoverdash'          // Database name (replace XXX with the actual database suffix)
);
        // Query to select all destinations
        $query = 'SELECT * FROM destination';
        // Execute the query
        $destinations = mysqli_query($connect, $query);

        // Check for database connection errors
        if (mysqli_connect_error()) {
            die ("Connection error: " . mysqli_connect_error());
        }

        // Display destinations in a grid layout
        echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
        foreach ($destinations as $destination) {
            echo '
            <div class="col">
                <div class="card">
                    <!-- Destination image -->
                    <img src="' . $destination['ImageURL'] . '" class="card-img-top img-sizing img-fluid" alt="destination image" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <!-- Destination city -->
                        <h4 class="card-title">' . $destination['City'] . '</h4>
                        <!-- Destination country -->
                        <h6 class="card-title country">' . $destination['Country'] . '</h6>
                        <!-- Destination description -->
                        <p class="card-text">' . $destination['Description'] . '</p>
                        <!-- Form to view more details -->
                        <div class="buttons">
                        <div class="viewmore">
                        <form method="GET" action="destinationDetails.php">
                            <!-- Hidden input field to pass DestinationID -->
                            <input type = "hidden" name = "DestinationID" value = "' . $destination['DestinationID'] . '">
                            <!-- Button to submit the form -->
                            <button type="submit" name="details" class="btn btn-dark">View More</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        echo '</div>'; // Close the grid layout
        ?>
    </div> <!-- Close the main container -->
</body>

</html>