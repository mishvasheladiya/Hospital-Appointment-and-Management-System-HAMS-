<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .service-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card-body {
            padding: 20px;
        }

        .service-title {
            font-size: 22px;
            font-weight: 600;
            color: #1e2a47;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 15px;
            color: #5f6368;
            line-height: 1.6;
            height: 60px; /* Initial height limit */
            overflow: hidden;
            transition: height 0.3s ease-in-out;
        }

        .view-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #1e2a47;
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            border-radius: 25px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .view-btn:hover {
            background-color: #294b72;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php include('../Patient/header.php')?><br>

    <div class="container">
        <h2 class="text-center mb-5" style="color: #1e2a47; font-weight: 700;">Our Services</h2>
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="../image/Dermatology.jpg" alt="Dermatology Service">
                    <div class="service-card-body">
                        <div class="service-title">Dermatology</div>
                        <p class="service-description">
                            Comprehensive skin care services for all your dermatological needs. From acne treatments to skin rejuvenation, our expert dermatologists ensure healthy, glowing skin.
                        </p>
                        <div class="view-btn" onclick="toggleDescription(this)">View More</div>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="../image/Neurology.jpg" alt="Neurology Service">
                    <div class="service-card-body">
                        <div class="service-title">Neurology</div>
                        <p class="service-description">
                            Specialized care for brain and nervous system disorders. Our neurologists use state-of-the-art technology to provide accurate diagnoses and effective treatments.
                        </p>
                        <div class="view-btn" onclick="toggleDescription(this)">View More</div>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="../image/Orthopedics.jpg" alt="Orthopedics Service">
                    <div class="service-card-body">
                        <div class="service-title">Orthopedics</div>
                        <p class="service-description">
                            Expert care for bones, joints, and muscles. We offer advanced treatments for fractures, arthritis, and other musculoskeletal conditions to ensure optimal mobility.
                        </p>
                        <div class="view-btn" onclick="toggleDescription(this)">View More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <script>
        function toggleDescription(button) {
            const description = button.previousElementSibling;
            if (button.textContent === "View More") {
                description.style.height = "auto"; // Expand description
                button.textContent = "View Less";
            } else {
                description.style.height = "60px"; // Collapse description
                button.textContent = "View More";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('footer.php')?>
</body>
</html>
