<?php
include ('../includes/connect.php');
include ('../includes/config.php');
include ('../includes/functions.php');
secure();
// Query the database for the user details using user id from sessio
$query = 'SELECT * FROM users WHERE id = ' . $_SESSION['id'];
// try catch the query
try {
  $result = mysqli_query($connect, $query);
  $user = mysqli_fetch_assoc($result);
} catch (Exception $e) {
  echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Discover Dash - Admin Dashboard</title>
</head>

<body>
  <?php include ('../reusables/nav.php'); ?>
  <div class="container">
    <h1 class="text-center mt-5">User Profile</h1>
    <div class="mt-5">
      <p><strong>First Name:</strong>
        <?php echo $user['first']; ?>
      </p>
      <p><strong>Last Name:</strong>
        <?php echo $user['last']; ?>
      </p>
      <p><strong>Email:</strong>
        <?php echo $user['email']; ?>
      </p>
      <a href="./destination.php" class="btn btn-dark">Manage Destination</a>
      <a href="./attractions.php" class="btn btn-dark">Manage Attractions</a>
      <a href="logout.php" class="btn btn-danger">Log Out</a>
    </div>
  </div>
</body>

</html>