
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6fc;
        }

        .category-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%; /* Ensures equal height for all cards */
        }
        .category-card:hover {
            transform: scale(1.05);
            transition: 0.3s ease;
        }
        .category-card .card-body {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%; /* Ensures the content stretches to fill the card */
        }
        .category-card img {
            border-radius: 12px;
            height: 200px; /* Control the height of images for uniformity */
            object-fit: cover; /* Ensure the image covers the area without distorting */
        }
        .category-btn {
            background-color: #1E2A47;
            color: white !important;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            margin-top: auto; /* Pushes the button to the bottom */
        }
        
    </style>
</head>
<body>
    
    <?php include('../Patient/header.php')?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <!-- Card for Dermatology -->
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="../image/Dermatology.jpg" class="card-img-top" alt="Dermatology">
                    <div class="card-body">
                        <h5 class="card-title">Dermatology</h5>
                        <p class="card-text">Expert dermatologists for skin care and treatments.</p>
                        <a href="../Patient/Dermatology.php" class="category-btn">View Doctors</a>
                    </div>
                </div>
            </div>
            <!-- Card for Neurology -->
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="../image/Neurology.jpg" class="card-img-top" alt="Neurology">
                    <div class="card-body">
                        <h5 class="card-title">Neurology</h5>
                        <p class="card-text">Experienced neurologists for brain and nervous system.</p>
                        <a href="../Patient/Neurology.php" class="category-btn">View Doctors</a>
                    </div>
                </div>
            </div>
            <!-- Card for Orthopedics -->
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="../image/Orthopedics.jpg" class="card-img-top" alt="Orthopedics">
                    <div class="card-body">
                        <h5 class="card-title">Orthopedics</h5>
                        <p class="card-text">Specialists to treat bone, joint, and muscle disorders.</p>
                        <a href="../Patient/Orthopedics.php" class="category-btn">View Doctors</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php include('../Patient/footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
