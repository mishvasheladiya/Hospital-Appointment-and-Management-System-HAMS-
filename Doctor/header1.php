<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Top bar styles */
        .top-bar {
            background-color: #f8f9fa;
            padding: 8px 0;
            font-size: 14px;
        }
        .top-bar a {
            text-decoration: none;
            color: #0056b3;
        }
        .top-bar i {
            color: #0056b3;
            margin-right: 5px;
        }

        /* Main navbar styles */
        .navbar {
            background-color:rgb(91, 100, 150); 
            padding: 15px 0;
        }
        .navbar .nav-link {
            color: white;
            margin-right: 15px;
        }
        .navbar .nav-link:hover {
            color: #a2c8fc;
        }
        .navbar .btn-appointment {
            background-color: #e8f0ff;
            color: #1f2b6c;
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
            font-weight: bold;
        }
        .navbar .btn-appointment:hover {
            background-color: #d0e0ff;
        }
        .navbar .search-icon {
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-right: 15px;
        }
        .navbar-brand img {
            height: 40px;
        }
    
    </style>
</head>
<body>
    <!-- Top Bar -->
<div class="container">
    <div class="top-bar">
        <div class="container d-flex justify-content-between">
            <div>
                <i class="fas fa-phone-alt"></i> EMERGENCY <a href="tel:+237681582955">(+91) 987-654-321</a>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i> LOCATION - <a href="#">123 street, Morbi Road, Rajkot, Gujrat, India </a>
            </div>
            <div>
                <i class="#"></i> Login and register
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="Meddical.svg" alt="Medical Logo">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="doctor.php">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <!-- Login Button -->
            <a href="category.php">
                 <button class="btn btn-appointment">Login</button>
            </a>

        </div>
    </div>
</nav>
</body>
</html>