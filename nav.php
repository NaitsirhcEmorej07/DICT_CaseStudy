<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .nav-bar{
        background-color: #444;
        color: white;
        padding: 5px 10px;
    }

</style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    $active_menu_link = 'active'; // For settings to be dynamic
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand px-4" href="#">Covid19 Vaccinated Records</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end px-4" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item <?php echo $active_menu_link; ?>">
        <a class="nav-link" href="index.php">Dashboard</a>
      </li>
      <li class="nav-item <?php echo $active_menu_link; ?>">
        <a class="nav-link" href="records.php">Records</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>



