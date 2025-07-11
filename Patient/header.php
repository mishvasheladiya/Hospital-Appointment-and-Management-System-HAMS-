<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Header HTML -->
<header>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
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
    .navbar {
        background-color: rgb(91, 100, 150); 
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
    .navbar-brand img {
        height: 40px;
    }
    .user-info {
        color: #fff;
        margin-right: 10px;
        font-size: 0.9rem;
        font-style: italic;
    }
  </style>

  <!-- Top Bar -->
  <div class="container">
    <div class="top-bar d-flex justify-content-between">
      <div><i class="fas fa-phone-alt"></i> EMERGENCY <a href="#">(+91) 987-654-321</a></div>
      <div><i class="far fa-clock"></i> WORK HOUR - 08:00am to 10:00pm Everyday</div>
      <div><i class="fas fa-map-marker-alt"></i> LOCATION - <a href="#">123 Morbi Rd, Rajkot</a></div>
    </div>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="../image/Meddical.svg" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="../Patient/index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../Patient/about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="../Patient/services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="../Patient/doctor.php">Doctors</a></li>
          <li class="nav-item"><a class="nav-link" href="../Patient/contact.php">Contact</a></li>
        </ul>

        <?php if (isset($_SESSION['email'])): ?>
          <div class="user-info">
            <?= isset($_SESSION['role']) ? ucfirst($_SESSION['role']) : 'User'; ?>: <?= htmlspecialchars($_SESSION['email']); ?>
          </div>
          <a href="../Patient/profile.php"><button class="btn btn-appointment me-2">Profile</button></a>
          <a href="../Patient/logout.php"><button class="btn btn-appointment text-danger">Logout</button></a>
        <?php else: ?>
          <a href="../Patient/category.php"><button class="btn btn-appointment">Login</button></a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</header>
