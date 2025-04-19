<?php
function secure()
{

  if (!isset($_SESSION['id'])) {
    echo '<script>
        alert("You are not logged in as Admin, please log in first.");
        window.location.href = "/";
      </script>';
    die();

  }

}

function set_message($message)
{

  $_SESSION['message'] = $message;

}

function get_message()
{

  if (isset($_SESSION['message'])) {

    echo '<p style="padding: 0 1%;" class="error">
        <i class="fas fa-exclamation-circle"></i> 
        ' . $_SESSION['message'] . '
      </p>
      <hr>';
    unset($_SESSION['message']);

  }

}