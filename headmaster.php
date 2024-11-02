<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1920x1080/?business,store');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 30px;
            margin-top: 100px;
        }
        h1, h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav-link {
            transition: background-color 0.3s, color 0.3s;
        }
        .nav-link:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }
        .nav-link.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h1><i class="fas fa-store"></i> Welcome to the Point of Sale System</h1>
    <h3>Admin: <?= htmlspecialchars($_SESSION['admin_email']); ?></h3>
    <nav class="nav nav-pills flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link" href="dashboard.php">Dashboard</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="admin/index.php">Admins</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="customers.php">Customers</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="categories.php">Categories</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="products.php">Products</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="orders.php">Orders</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="order_products.php">Order Products</a>
    </nav>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>