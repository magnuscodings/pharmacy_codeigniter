<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
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

    <div class="container p-0 mt-0">
      <h5>Sales</h5>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Paracetamol</td>
            <td>Liquid</td>
            <td>
              <a href="" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
          <tr>
            <td>Biogesic</td>
            <td>Tablet</td>
            <td>
              <a href="" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
          <tr>
            <td>Multivitamins</td>
            <td>vitamins</td>
            <td>
              <a href="" class="btn btn-primary">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
        </tbody>
      </table>
      <div class="row justify-content-end">
        <div class="col-1 mt-3">
          <a href="" class="text-decoration-none btn btn-primary">Add</a>
        </div>
        <div class="col-1 mt-3">
          <a href="" class="text-decoration-none btn btn-primary">Delete</a>
        </div>
      </div>
      
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          "pageLength": 5
        });
      });
    </script>
    
  </body>
</html>
