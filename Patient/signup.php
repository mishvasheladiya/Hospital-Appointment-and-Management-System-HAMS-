<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, rgba(106, 156, 100, 0.8), rgba(0, 183, 255, 0.8)),
                  url('https://source.unsplash.com/1920x1080/?healthcare,doctor,hospital');
      background-size: cover;
      background-position: center;
      height: 100vh;
      font-family: 'Roboto', sans-serif;
      color: #ffffff;
    }

    .card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
      width: 400px;
      animation: fadeIn 1.2s ease-in-out;
    }

    .card h3 {
      color: #007bff;
      font-weight: 700;
    }

    .form-control {
      border-radius: 30px;
      padding: 12px 20px;
    }

    .btn-primary {
      background: linear-gradient(90deg, #007bff, #0056b3);
      border-radius: 30px;
      padding: 12px 20px;
      font-weight: bold;
      text-transform: uppercase;
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #0056b3, #003c80);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .error {
      color: red;
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5">
      <h3 class="text-center mb-4">Sign Up</h3>
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
        <p class="text-center mt-3 text-dark">Already have an account? <a href="../Patient/login.php">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "mini_project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Sanitize inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check if email already exists
    $check = mysqli_prepare($conn, "SELECT id FROM patient WHERE email = ?");
    mysqli_stmt_bind_param($check, "s", $email);
    mysqli_stmt_execute($check);
    mysqli_stmt_store_result($check);

    if (mysqli_stmt_num_rows($check) > 0) {
        echo "<script>alert('Email is already registered.');</script>";
    } else {
        // Insert new user
        $stmt = mysqli_prepare($conn, "INSERT INTO patient (name, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password); // NOTE: Consider hashing the password in real apps
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Account created successfully.'); window.location.href='../Patient/login.php';</script>";
        } else {
            echo "<script>alert('Failed to create account.');</script>";
        }
    }

    mysqli_stmt_close($check);
}
?>
