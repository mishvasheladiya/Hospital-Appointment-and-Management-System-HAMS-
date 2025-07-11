
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All Doctors</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #f0f4f8, #fefefe);
    }

    .category-title {
      font-size: 2rem;
      font-weight: 600;
      color: #1E2A47;
      margin-bottom: 30px;
      border-left: 5px solid #1E2A47;
      padding-left: 15px;
    }

    .doctor-card {
      background-color: white;
      border-radius: 16px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
      padding: 20px;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
    }

    .doctor-card img {
      width: 160px;
      height: 160px;
      object-fit: cover;
      border-radius: 12px;
      margin-right: 25px;
      border: 2px solid #dee2e6;
    }

    .doctor-info h5 {
      font-weight: 600;
      color: #1E2A47;
    }

    .book-btn {
      background-color: #1E2A47;
      color: white;
      padding: 8px 18px;
      border-radius: 6px;
      margin-top: 10px;
      text-decoration: none;
    }

    .book-btn:hover {
      background-color: #142033;
      color: white;
    }

    .profile-card {
      border-radius: 20px;
      overflow: hidden;
      margin-top: 60px;
    }

    .profile-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .list-group-item {
      border: none;
      padding-left: 0;
    }

    .profile-info h4 {
      color: #007b8f;
    }

    .btn-primary {
      background-color: #007b8f;
      border: none;
    }

    .btn-primary:hover {
      background-color: #005f6b;
    }
  </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="container py-5">

  <!-- Neurology Section -->
  <div class="card shadow-lg profile-card mb-5">
    <div class="row g-0">
      <div class="col-md-4 d-flex flex-column align-items-center justify-content-center bg-light p-4">
        <img src="../image/n.jpg" alt="Dr. Jensi Patel" class="profile-img" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
        <div class="text-center mt-3 profile-info">
          <h4>Dr. Jensi Patel</h4>
          <p class="text-muted">Neurology</p>
        </div>
      </div>
      <div class="col-md-8 p-4">
        <h3 class="mb-3">Profile Information</h3>
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item"><strong>Specialization:</strong> Neurologist, MBBS, MD - Neurology</li>
          <li class="list-group-item"><strong>Experience:</strong> 4+ Years</li>
          <li class="list-group-item"><strong>Contact:</strong> +91 91234 56789</li>
          <li class="list-group-item"><strong>Email:</strong> jensi@medical.com</li>
          <li class="list-group-item"><strong>Clinic Address:</strong> NeuroCare Clinic, Rajkot, Gujarat</li>
        </ul>
        <h5>About</h5>
        <p class="text-muted">
          Dr. Jensi Patel is an experienced neurologist with a focus on epilepsy, stroke management, and headache treatment. She provides compassionate care using the latest neurological techniques.
        </p>
        <a href="../Patient/plogin.php" class="btn btn-primary mt-3 px-4">Book Appointment</a>
      </div>
    </div>
  </div>

  <!-- Dermatology Section -->
  <div class="card shadow-lg profile-card mb-5">
    <div class="row g-0">
      <div class="col-md-4 d-flex flex-column align-items-center justify-content-center bg-light p-4">
        <img src="../image/dd.jpg" alt="Dr. Mona Shingsla" class="profile-img" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
        <div class="text-center mt-3 profile-info">
          <h4>Dr. Mona Shingala</h4>
          <p class="text-muted">Dermatology</p>
        </div>
      </div>
      <div class="col-md-8 p-4">
        <h3 class="mb-3">Profile Information</h3>
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item"><strong>Specialization:</strong> Dermatologist, MBBS, MD - Dermatology</li>
          <li class="list-group-item"><strong>Experience:</strong> 5+ Years</li>
          <li class="list-group-item"><strong>Contact:</strong> +91 90123 45678</li>
          <li class="list-group-item"><strong>Email:</strong> mona@medical.com</li>
          <li class="list-group-item"><strong>Clinic Address:</strong> SkinGlow Clinic, Rajkot, Gujarat</li>
        </ul>
        <h5>About</h5>
        <p class="text-muted">
          Dr. Mona Shingala is an expert dermatologist specializing in acne, psoriasis, and cosmetic skin treatments. She uses modern techniques to bring out healthy, glowing skin in her patients.
        </p>
        <a href="../Patient/plogin.php" class="btn btn-primary mt-3 px-4">Book Appointment</a>
      </div>
    </div>
  </div>

  <!-- Orthopedics Section -->
  <div class="card shadow-lg profile-card mb-5">
    <div class="row g-0">
      <div class="col-md-4 d-flex flex-column align-items-center justify-content-center bg-light p-4">
        <img src="../image/a.jpg" alt="Dr. Rajdeep Raiyani" class="profile-img" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
        <div class="text-center mt-3 profile-info">
          <h4>Dr. Rajdeep Raiyani</h4>
          <p class="text-muted">Orthopedics</p>
        </div>
      </div>
      <div class="col-md-8 p-4">
        <h3 class="mb-3">Profile Information</h3>
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item"><strong>Specialization:</strong> Orthopedic Surgeon</li>
          <li class="list-group-item"><strong>Experience:</strong> 8+ Years</li>
          <li class="list-group-item"><strong>Contact:</strong> +91 98765 43210</li>
          <li class="list-group-item"><strong>Email:</strong> rajdeep@medical.com</li>
          <li class="list-group-item"><strong>Clinic Address:</strong> Rajkot Bone & Joint Clinic, Gujarat</li>
        </ul>
        <h5>About</h5>
        <p class="text-muted">
          Dr. Rajdeep Raiyani is a skilled orthopedic surgeon dedicated to improving mobility and quality of life for patients. He specializes in joint replacement surgeries, treating sports injuries, and spinal procedures with excellent patient outcomes.
        </p>
        <a href="../Patient/plogin.php" class="btn btn-primary mt-3 px-4">Book Appointment</a>
      </div>
    </div>
  </div>

</div>


<?php include('../Patient/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
