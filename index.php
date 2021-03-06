<?php
  include'functions.php';
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP_TASK</title>

  <script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <style>
    .form-upload {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-upload .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
  </style>


</head>

<body class="text-center">
    <form class="form-upload" enctype='multipart/form-data' action='functions.php' method='post'>
        <label for="email" class=" sr-only">Email</label>
        <input class="form-control" type="email" name="email" class="form-control middle" placeholder="Email" required>
        <label>Upload Product CSV file Here</label>
        <input class="form-control"  type='file' name='file' id="file" required>
        </br>
        <input class="btn btn-lg btn-primary btn-block" type='submit' name='submit' value='Upload Files' >
        

    </form>
</body>
</html>




