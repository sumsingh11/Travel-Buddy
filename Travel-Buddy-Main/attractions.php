<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Travel Buddy - Attractions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles for attractions */
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

        .img-sizing {
            height: 200px;
            /* Set the height of the images */
            object-fit: cover;
            /* Ensure the entire image is visible within the card */
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
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
                <h1 class="display-5 mt-4 mb-4">Attractions</h1>
            </div>
        </div>
        <!-- PHP code to fetch attractions from the database -->
        <?php
        // Establish database connection
       $connect = mysqli_connect(
    'sql110.infinityfree.com',  // Hostname
    'if0_38491123',             // Username
    'SkKs1W40YX1x2',            // Password (insert your real password)
    'if0_38491123_discoverdash'          // Database name (replace XXX with the actual database suffix)
);

        // Query to select all attractions
        $query = 'SELECT * FROM attractions';
        // Execute the query
        $attractions = mysqli_query($connect, $query);

        // Check for database connection errors
        if (mysqli_connect_error()) {
            die ("Connection error: " . mysqli_connect_error());
        }

        // Display attractions in a grid layout
        echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
        foreach ($attractions as $attraction) {
            echo '
            <div class="col">
                <div class="card h-100">
                    <img src="' . $attraction['ImageURL'] . '" class="card-img-top img-sizing img-fluid" alt="destination image">
                    <div class="card-body">
                        <h4 class="card-title">' . $attraction['Name'] . '</h4>
                        <p class="card-title country">' . $attraction['Location'] . '</h6>
                        <p class="card-text">' . $attraction['Description'] . '</p>
                        <p class="card-text"><strong>Opening Hours:</strong> ' . $attraction['OpeningHours'] . '</p>
                        <p class="card-text"><strong>Admission Fee:</strong> $' . $attraction['AdmissionFee'] . '</p>
                    </div>
                </div>
            </div>';
        }
        echo '</div>';
        ?>
    </div>
</body>

</html>