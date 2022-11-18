<style>
    .nav-bar{
        background-color: #444;
        color: white;
        padding: 5px 10px;
    }
</style>
<?php
    $active_menu_link = 'active'; // For settings to be dynamic
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Covid19 Vaccinated Records</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mc-auto">
      <li class="nav-item <?php echo $active_menu_link; ?>">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item <?php echo $active_menu_link; ?>">
        <a class="nav-link" href="#">Add Records</a>
      </li>
    </ul>
  </div>
</nav>