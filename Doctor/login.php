<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Styling */
        body {
            background: linear-gradient(to bottom, rgba(106, 156, 100, 0.8), rgba(0, 183, 255, 0.8)), 
                        url('https://source.unsplash.com/1920x1080/?healthcare,doctor,hospital');
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
        }

        /* Card Design */
        .card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.2s ease-in-out;
        }

        .card h3 {
            color: #007bff;
            font-weight: 700;
        }

        /* Input Fields */
        .form-control {
            border-radius: 30px;
            padding: 12px 20px;
        }

        .form-control:focus {
            box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.5);
            border: 1px solid #007bff;
        }

        /* Button Styling */
        .btn-primary {
            background: linear-gradient(90deg, #007bff, #0056b3);
            border: none;
            border-radius: 30px;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #003c80);
        }

        /* Footer Styling */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 0.9rem;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px 0;
        }

        /* Animations */
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

        /* Error Styles */
        .error {
            color: red;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg" style="width: 400px;">
            <h3 class="text-center mb-4">Welcome Back!</h3>
            <form id="loginForm" action="#" method="POST" novalidate>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    <span class="error" id="emailError"></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    <span class="error" id="passwordError"></span>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100 mt-3">Login</button>
                <p class="text-center mt-3">
                </p>
            </form>
        </div>
    </div>

</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "mini_project");

if (!$conn) {
    die("Database Connection Failed");
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check in Admin table
    $admin_query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password'");

    if (mysqli_num_rows($admin_query) > 0) {
        echo "
            <script>
                alert('Welcome Admin!');
                window.location.href = '../Admin/index.php'; // Adjust path as needed
            </script>
        ";
    } else {
        // Check in Doctor table
        $doctor_query = mysqli_query($conn, "SELECT * FROM doctor WHERE email='$email' AND password='$password'");
        
        if (mysqli_num_rows($doctor_query) > 0) {
            echo "
                <script>
                    alert('Welcome Doctor!');
                    window.location.href = '../Doctor/index.php'; // Adjust path as needed
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Email or Password is incorrect.');
                </script>
            ";
        }
    }
}
?>
