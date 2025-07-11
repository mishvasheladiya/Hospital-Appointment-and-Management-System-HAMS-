<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            background-color:rgb(91, 100, 150);
            color: white;
            padding: 50px 0;
        }

        .footer h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #f8f9fa;
        }

        .footer p, .footer ul li {
            font-size: 1rem;
            color: #d1d1d1;
        }

        .footer a {
            text-decoration: none;
            color: #d1d1d1;
        }

        .footer a:hover {
            color: #42a5f5;
        }

        .social-links a {
            margin-right: 20px;
            font-size: 1.5rem;
            color: white;
        }

        .social-links a:hover {
            color: #42a5f5;
        }

        .footer input[type="email"] {
            padding: 10px;
            width: 75%;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .footer button {
            padding: 10px;
            border: none;
            background-color: #42a5f5;
            color: white;
            border-radius: 5px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #b0bec5;
        }
    </style>
</head>
<body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-3">
                <img src="Meddical.svg" alt="Doctor Logo" style="max-width: 150px;">
                <p>Committed to providing high-quality healthcare services with a personal touch.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="Schedule.php">Schedule</a></li>
                    <li><a href="patient.php">patient</a></li>
                    <li><a href="profile.php">Profile</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3">
                <h4>Contact Info</h4>
                <ul class="list-unstyled">
                    <li>Phone: (+91) 987-654-321</li>
                    <li>Email: medical@services.com</li>
                    <li>Address: 123 street, Morbi Road, Rajkot, Gujrat, India</li>
                </ul>
            </div>

            <!-- Newsletter Signup -->
            <div class="col-md-3">
                <h4>Newsletter</h4>
                <p>Subscribe to our newsletter for the latest health tips and updates.</p>
                <input type="email" placeholder="Enter your email" />
                <button type="submit">Subscribe</button>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>© 2025 Doctor Clinic - All Rights Reserved</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- FontAwesome for social icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
