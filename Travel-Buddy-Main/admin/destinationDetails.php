<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Discover Dash - Destinations</title>
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

        .container {
            margin: 20px;
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }

        .banner {
            margin: 0px;
            background-color: black;
            color: white;
            padding-left: 50px;
            padding: 10px;
        }

        .header {
            padding-left: 50px;
            background-color: #CECECE;
            color: white;
            border-radius: 5px;
        }

        .location {
            padding: 20px;
        }

        .button-align {
            display: flex;
            justify-content: center;
        }

        .add-more {
            margin: 50px;
        }

        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .description {
            font-size: 30px;
        }

        .img-sizing {
            height: 200px;
            object-fit: cover;
        }

        .details {
            display: flex;
            flex-direction: row;
            justify-content: bottom;
            align-items: center;
            align-self: center;
            gap: 50px;
        }

        .location {
            display: flex;
            flex-direction: column;
            justify-content: left;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body>
    <?php
    // Include navigation bar
    include ('../reusables/nav.php');
    // Check if details or DestinationID is set in GET request
    if ((isset ($_GET['details'])) || (isset ($_GET['DestinationID']))) {
        $destinationID = $_GET['DestinationID'];
        // Establish database connection
        $connect = mysqli_connect('localhost', 'root', 'root', 'discoverdash');
        // $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758296', 'MAHkWClFt4KkT', 'if0_35758296_discoverdash');
        // Query to retrieve destination details
        $destinationQuery = "SELECT City, Country, Climate, BestTimeToVisit, Description
                            FROM destination 
                            WHERE DestinationID = $destinationID";
        $destinationResult = mysqli_query($connect, $destinationQuery);

        if ($destinationResult) {
            // Fetch destination details
            $destinationRow = mysqli_fetch_assoc($destinationResult);
            $city = $destinationRow['City'];
            $country = $destinationRow['Country'];
            $Description = $destinationRow['Description'];
            $Climate = $destinationRow['Climate'];
            $BestTimeToVisit = $destinationRow['BestTimeToVisit'];
            // Display destination details
            echo '<div class="row">
                <div class="col">
                    <h1 class="display-5 mt-4 mb-4 banner">Destination: ' . $city . ', ' . $country . '</h1>
                    <div class="container location">
                        <div>
                            <p class="description">' . $Description . '</p>
                            </div>
                        <div class="details">
                            <h5>Current climate:</h5> 
                            <p>' . $Climate . '</p>
                        </div>
                        <div class="details">
                            <h5>Best Time To Visit:</h5> 
                            <p>' . $BestTimeToVisit . '</p>
                        </div>
                    </div>
                </div>
            </div>';
        }
        // Query to retrieve attractions for the destination
        $query = "SELECT attractions.*
                FROM attractions
                INNER JOIN destination 
                ON attractions.DestinationID = destination.DestinationID
                WHERE attractions.DestinationID = $destinationID";
        $results = mysqli_query($connect, $query);
        if ($results) {
            // Check if there are any attractions found
            if (mysqli_num_rows($results) > 0) {
                // Output the attractions and destination details
                echo '  <div class="header">
                        <h2 class="display-6">Top attractions at this location</h2>
                        </div>';
                echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
                foreach ($results as $result) {
                    echo '
                    <div class="container">
                        <div class="col">
                            <div class="card h-100">
                                <img src="' . $result['ImageURL'] . '" class="card-img-top img-sizing img-fluid" alt="destination image">
                                <div class="card-body">
                                    <h4 class="card-title">' . $result['Name'] . '</h4>
                                    <p class="card-title country">' . $result['Location'] . '</h6>
                                    <p class="card-text">' . $result['Description'] . '</p>
                                    <p class="card-text"><strong>Opening Hours:</strong> ' . $result['OpeningHours'] . '</p>
                                    <p class="card-text"><strong>Admission Fee:</strong> $' . $result['AdmissionFee'] . '</p>
                                    <div class="deleteBtn">
                                        <form method="GET" action="../includes/deleteAttraction.php">
                                            <input type = "hidden" name = "AttractionID" value = "' . $result['AttractionID'] . '">
                                            <button type="submit" name="deleteAttraction" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>';
                }
                echo '</div>';
            } else {
                echo "No attractions found.";
            }
            // Button to add more attractions
            echo '
            </div>
            <div class=button-align>
            <form method="GET" action="./newattraction.php">
            <input type = "hidden" name = "DestinationID" value = "' . $destinationID . '">
            <button type="submit" name="addAttractions" class="btn btn-dark add-more">Add More</button>
            </form>
            </div>';
        } else {
            echo "Failed" . mysqli_error($connect);
        }
    } else {
        echo "You should not be here!";
    }
    ?>
</body>

</html>