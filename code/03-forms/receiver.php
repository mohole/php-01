<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up complete</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style>
    .container {
      margin-top: 30px;
    }
  </style>

</head>
<body>

<?php 

// $_GET , $_POST , $_REQUEST
$user = $_REQUEST["user"];
$email = $_REQUEST["email"];
$job = $_REQUEST["job"];
$tos = $_REQUEST["tos"];

if ($tos == 'on') {
  $tos = 'YES';
} else {
  $tos = 'NO';
}

?>

<section class="container">
  <h1>Signup complete!</h1>
  <p>A quick recap of yout data:</p>
  <ul>
    <li><strong>User:</strong> <?php echo($user); ?></li>
    <li><strong>Email:</strong> <?php echo($email); ?></li>
    <li><strong>Job title:</strong> <?php echo($job) ?></li>
    <li><strong>Accepted TOS:</strong> <?php echo($tos) ?></li>
  </ul>
</section>

</body>
</html>