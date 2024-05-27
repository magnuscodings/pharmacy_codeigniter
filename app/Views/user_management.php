<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>



  <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/navigation') ?>">

            <img src="assets/image/icon.jpeg" style="width: 50px; height: 50px;">
            Pharmacy Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <img src="../admin/image/user.png" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50px; height: 50px;">
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Admin</a></li>
                <li><a class="dropdown-item" href="#">Email:</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/') ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>




    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8 col-md-6 p-4 text-center border-2 border-info card m-3">
            <a href="settings.html" class="text-dark text-decoration-none">Account Settings</a>
        </div>
        <div class="col-8 col-md-6 p-4 text-center border-2 border-info card m-3">
            <a href="fontsize.html" class="text-dark text-decoration-none">Font Size</a>
        </div>
        <div class="col-8 col-md-6 p-4 text-center border-2 border-info card m-3">
            <a href="theme.html" class="text-dark text-decoration-none">Theme</a>
        </div>
        <div class="col-8 col-md-6 p-4 text-center border-2 border-info card m-3">
            <a href="about_management.html" class="text-dark text-decoration-none">About Management</a>
        </div>
    </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
