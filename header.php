<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> <!-- Google Font -->
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #007bff; /* Solid color for the navbar */
    }
    .navbar-brand {
      font-family: 'Montserrat', sans-serif; /* Use Montserrat font */
      font-weight: bold;
      color: white;
      font-size: 1.8rem; /* Increased font size */
      margin-right: auto; /* Pushes items to the right */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Shadow for a more striking look */
    }
    .nav-link {
      font-weight: bold;
      color: white;
      font-size: 1.2rem; /* Increased font size */
    }
    .nav-link:hover {
      color: #ffcc00; /* Gold color on hover */
      text-decoration: underline; /* Underline on hover for better visibility */
    }
    .dropdown-menu {
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }
    .dropdown-item:hover {
      background-color: #e9ecef;
    }
    .navbar-toggler {
      border: none;
    }
    .navbar-toggler:focus {
      box-shadow: none;
    }
    .custom-banner {
      background: url('https://source.unsplash.com/random/1920x300') no-repeat center center;
      background-size: cover;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">EpanStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto"> <!-- Align items to the right -->
        <li class="nav-item">
          <a class="nav-link" href="products.php">Master</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php">Rekap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>