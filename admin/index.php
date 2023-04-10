<?php require('inc/db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin/css/style.css?v=<?php echo time(); ?>"/>
  <style>
    * {
      text-decoration: none;
      list-style: none !important;
      font-family: "Poppins", sans-serif;
    }

    .h-font {
      font-family: "Merienda", cursive;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }

    .custom-bg {
      background-color: #2ec1ac;
      border: 1px solid #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
      border-color: #279e8c;
    }

    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;
    }

    .login-form {
      position: absolute;
      left: 50%;
      top: 50%;
      width: 400px;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body class="bg-light">
  <div class="login-form text-center rounded bg-white overflow-hidden shadow">
    <form method="POST">
      <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
      <div class="p-4">
        <div class="mb-3">
          <input name="admin_name" required type="text" class="form-control shodow-none text-center" placeholder="Admin Name">
        </div>
        <div class="mb-3">
          <input name="admin_pass" required type="password" class="form-control shodow-none text-center" placeholder="Password">
        </div>
        <button name="login" type="submit" class="btn custom-bg shadow-none">LOGIN</button>
      </div>

    </form>
  </div>



  <?php
  if (isset($_POST['login'])) {
    $frm_data = filtration($_POST);
    $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
    $res = select($query, $values, "ss");
    if ($res->num_rows == 1) {
      echo "get admin";
    } else {
      echo <<<alert
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  }
 
  ?>


  <?php require('inc/script.php') ?>
</body>

</html>