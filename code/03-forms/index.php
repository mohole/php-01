<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exchange data between pages</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style>
    .container {
      margin-top: 30px;
    }

    label {
      margin-top: 10px;
    }

    .config {
      background: #eee;
      padding: 10px;
      margin-bottom: 30px;
    }

  </style>

</head>

<?php 

$type = isset($_GET["type"]) ? $_GET["type"] : "GET";

?>


<body>

  <section class="container">
    <form method="GET" class="config">
      <select name="type" class="form-select">
        <option value="POST">POST</option>
        <option value="GET" selected>GET</option>
      </select>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <h3>User signup (<?php echo($type); ?> method)</h3>
    <form method="<?php echo($type); ?>" action="receiver.php">
      <label for="user">Username:</label>
      <input
        class="form-control"
        type="text" 
        name="user"
        placeholder="example: starlight99"
        minlength="4"
        required
      >

      <label for="email">Email:</label>
      <input 
        class="form-control" 
        type="email" 
        name="email" 
        placeholder="awesome@user.com"
        required
      >
      
      <label for="age">Age:</label>
      <input 
        class="form-control" 
        type="number" 
        name="age" 
        value="24"
      >

      <label for="job">Job title:</label>
      <select name="job" class="form-select">
        <option value="ninja">Ninja</option>
        <option value="superhero" selected>Superhero</option>
        <option value="ranger">Power Ranger</option>
        <option value="wizard">Wizard</option>
      </select>

      <label for="tos">
        <input type="checkbox" name="tos" required>
        Accept Terms of Service
      </label>
      
      <hr>

      <button type="submit" class="btn btn-primary">Sign up</button>
      <button type="reset" class="btn btn-light">Reset</button>

    </form>

  </section>

</body>

</html>