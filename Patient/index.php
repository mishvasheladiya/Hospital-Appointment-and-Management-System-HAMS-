
<?php
// Ensure this is the FIRST thing in the file!
include('../Patient/header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        
        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background-color: #f0f8ff; 
        }

        /* Left Side Content */
        .hero-content {
            max-width: 50%;
        }

        .hero-content h3 {
            color: #3b82f6;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-content h1 {
            font-size: 40px;
            font-weight: bold;
            margin: 10px 0;
            color: #1f2b6c;
        }

        .hero-content .btn-primary {
            background-color: #3b82f6;
            border: none;
            padding: 12px 24px;
            border-radius: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        .hero-content .btn-primary:hover {
            background-color: #1e3a8a;
        }

        /* Right Side Image */
        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .hero-image img {
                max-width: 80%;
            }
        }

        /* Contact us */

        .contact-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.contact-section h2 {
    font-size: 2.5rem;
    font-weight: bold;
}

.contact-section h4 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.contact-section p {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

/* Welcome Section */
.welcome-section {
    background-color:rgb(255, 255, 255);
    padding: 100px 0;
    text-align: center;
    border-bottom: 4px solid #007bff;
}

.welcome-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.welcome-section h1 {
    font-size: 3rem;
    font-weight: 700;
    color: #007bff;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.welcome-section h2 {
    font-size: 2rem;
    font-weight: 500;
    color: #333;
    margin-bottom: 30px;
}

.welcome-section p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .welcome-section h1 {
        font-size: 2.5rem;
    }

    .welcome-section h2 {
        font-size: 1.75rem;
    }

    .welcome-section p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .welcome-section h1 {
        font-size: 2rem;
    }

    .welcome-section h2 {
        font-size: 1.5rem;
    }

    .welcome-section p {
        font-size: 0.95rem;
    }
}

       /* Types of Treatment */
       .treatment-section {
            padding: 30px;
            background: #f9f9f9;
            text-align: center;
            border-radius: 10px;
            margin-top: 20px;
        }

        .treatment-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            justify: center;
            margin-right : 80px;
        }


        /* Ratings Section */
        .ratings-section {
            padding: 50px;
            text-align: center;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }

        .star-rating {
            color: #ff9800;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
<div class="container">
    <section class="hero">
        <!-- Left Side -->
        <div class="hero-content">
            <h3>Caring for Life</h3>
            <h1>Leading the Way in Medical Excellence</h1>
            
            <a href="../Patient/category.php">
                <button class="btn btn-primary">Get Start -></button>
            </a>
        </div>

        <!-- Right Side Image -->
        <div class="hero-image">
            <img src="../image/doctor.png" alt="Doctor Image">
        </div>
    </section>
</div>
<!-- welcome -->

<div class="container">
    <section class="welcome-section">

            <div class="welcome-content">
                <h1>WELCOME TO MEDICAL</h1>
                <h2>A Great Place to Receive Care</h2>
                <p>
                Welcome, we prioritize your health and well-being. Our dedicated team is here to provide compassionate care and support every step of the way. Thank you for choosing us for your healthcare needs.
                </p>
            </div>
    </section>
</div>
        <!-- type of treatment -->

        <div class="container">
    <section class="treatment-section">
        <h2>Types of Treatment</h2><br><br>
        
        <div class="row">
            <div class="col-3 treatment-box">
                <h4>Cardiology</h4>
                <p>Advanced heart care with top specialists.</p>
            </div>
            <div class="col-3 treatment-box">
                <h4>Neurology</h4>
                <p>Expert treatment for neurological disorders.</p>
            </div>
            <div class="col-3 treatment-box">
                <h4>Orthopedics</h4>
                <p>Best care for bones and joint problems.</p>
            </div>
        </div>
    </section>
</div>



        <!-- rating -->

<div class="container">
    <section class="ratings-section">
        <h2>What Our Patients Say</h2>
        <p class="star-rating">★★★★★</p>
        <p>"Exceptional service! The doctors and staff are highly professional and caring."</p>
    </section>
</div>

<?php include('../Patient/footer.php')?>
</body>
</html>
