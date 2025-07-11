
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermatology Doctor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6fc;
        }

        .header-section {
            background-color: #1E2A47;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .header-section h1 {
            font-size: 2.5rem;
        }

        .header-section p {
            font-size: 1rem;
            opacity: 0.8;
        }

        .doctor-card {
            background-color: white;
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .doctor-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .doctor-card .card-body {
            padding: 20px;
        }

        .doctor-card h5 {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .doctor-card p {
            color: #666;
        }

        /* Styling the buttons with #1E2A47 */
        .btn-primary {
            background-color: #1E2A47 !important;
            border: none;
            border-radius: 6px;
            color: white !important;
        }

        .btn-primary:hover {
            background-color: #2a3b5b !important;
        }

        .book-btn {
            margin-top: 10px;
            background-color: #1E2A47 !important;
            color: white !important;
            border: none;
            border-radius: 6px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }

        .book-btn:hover {
            background-color: #2a3b5b !important;
        }

        /* Styling for the collapsible section */
        .collapse-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <?php include('../Patient/header.php'); ?>

    <!-- Header Section -->
    <div class="header-section">
        <h1>Dermatology Doctor List</h1>
        <p>Find experienced dermatologists for all your skin and cosmetic concerns.</p>
    </div>

    <!-- Doctor List Section -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Doctor 1 -->
            <div class="col-md-4">
                <div class="doctor-card card">
                    <img src="../image/dd.jpg" alt="Doctor Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Mona Shingsla</h5>
                        <p class="card-text">Dermatologist, MBBS, MD - Dermatology</p>
                        <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#doctor1-details">View Profile</button>
                    </div>
                    <div id="doctor1-details" class="collapse collapse-details">
                    <p><strong>Experience:</strong> 5+ Years</p>
                    <p><strong>Location:</strong> Rajkot</p>
                    <p><strong>Specialties:</strong> Acne treatment, Psoriasis, Cosmetic procedures</p>
                    <p><strong>Contact:</strong> mona@medical.com</p>
                        <a href="../Patient/appointment.php"><button class="book-btn btn">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php include('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
