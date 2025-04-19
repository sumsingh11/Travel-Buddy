<?php
include('../includes/connect.php');
include('../includes/config.php');
include('../includes/functions.php');

if (isset($_POST['first'])) {

  if ($_POST['first'] and $_POST['last'] and $_POST['email'] and $_POST['password']) {

    $query = 'INSERT INTO users (
        first,
        last,
        email,
        password
      ) VALUES (
        "' . mysqli_real_escape_string($connect, $_POST['first']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['last']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
        "' . md5($_POST['password']) . '"
      )';

    try {
      mysqli_query($connect, $query);
      set_message('User has been added');
    } catch (Exception $e) {
      echo 'Error: ' . $e->getMessage();
      die();
    }
  }

  // redirect to log in page
  header('Location: index.php');
  die();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Discover Dash - Admin Sign Up</title>
</head>

<body>
  <?php include('../reusables/nav.php'); ?>
  <div class="container">
    <h1 class="text-center mt-5">Sign Up</h1>
    <!-- Form for getting user email and password -->
    <form method="post" class="mt-5">
      <div class="form-group">
        <label for="first">First Name</label>
        <input type="text" class="form-control" name="first" placeholder="First Name" required>
      </div>

      <div class="form-group">
        <label for="last">Last Name</label>
        <input type="text" class="form-control" name="last" placeholder="Last Name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <input type="submit" class="btn btn-dark mt-3" value="Sign Up">
    </form>
  </div>
</body>

</html>