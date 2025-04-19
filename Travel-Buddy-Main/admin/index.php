<?php
// log in page for admin
include ('../includes/connect.php');
include ('../includes/config.php');
include ('../includes/functions.php');

// If session id is set, redirect to admin profile page
if (isset ($_SESSION['id'])) {
  header('Location: dashboard.php');
  die();
}

if (isset ($_POST['email'])) {

  $query = 'SELECT *
    FROM users
    WHERE email = "' . $_POST['email'] . '"
    AND password = "' . md5($_POST['password']) . '"
    LIMIT 1';
  $result = mysqli_query($connect, $query);

  if (mysqli_num_rows($result)) {

    $record = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $record['id'];
    $_SESSION['email'] = $record['email'];

    header('Location: dashboard.php');
    die();

  } else {

    set_message('Incorrect email and/or password');

    header('Location: index.php');
    die();

  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Travel Buddy - Admin Log In</title>
</head>

<body>
  <?php include ('../reusables/nav.php'); ?>
  <div class="container">
    <?php echo get_message(); ?>
    <h1 class="text-center my-4">Admin Log in</h1>
    <form method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" placeholder="Email" required class="form-control">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Password" required class="form-control">
      </div>

      <input type="submit" value="Log In" class="btn btn-dark">

      <a href="signUp.php" class="btn btn-link">No account? Sign Up Here</a>

    </form>
  </div>
</body>

</html>