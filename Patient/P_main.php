
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('../image/patient.jpg') no-repeat center center fixed ;
            background-size: cover;
        }

        .content-container {
            padding: 50px 0;
            text-align: center;
            color: white;
        }

        .features {
            padding: 80px 0;
            text-align: center;
            background: rgba(30, 42, 71, 0.8);
            color: white;
            margin-top: 20px;
            border-radius: 15px;
        }

        .feature-box {
            padding: 30px;
            border-radius: 15px;
            background: white;
            color: #333;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .appointment {
            padding: 80px 0;
            background: rgba(255, 255, 255, 0.9);
            text-align: center;
            margin-top: 20px;
            border-radius: 15px;
        }

        .btn-custom {
            font-size: 20px;
            padding: 12px 30px;
            border-radius: 30px;
            transition: 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <?php include('../Patient/header.php'); ?>

    <div class="container content-container">
        <h1>Welcome to Our Healthcare System</h1>
        <p>Your Health, Our Priority</p>
        <a href="Doctorcategory.php" class="btn btn-primary btn-lg btn-custom">Book an Appointment</a>
    </div>

    <section class="container features">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>Experienced Doctors</h4>
                    <p>Get the best treatment from highly skilled professionals.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>24/7 Support</h4>
                    <p>Emergency healthcare assistance anytime, anywhere.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>Advanced Facilities</h4>
                    <p>State-of-the-art medical technology and equipment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container appointment">
        <h2>Book an Appointment</h2>
        <p>Schedule your consultation with our specialists.</p>
        <a href="Doctorcategory.php" class="btn btn-success btn-lg btn-custom">Get Started</a>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
