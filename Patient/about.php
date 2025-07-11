<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header Section with Background Image */
        .about-header {
            background: url('../image/innovative-operating-room-design-for-advanced-medical-care-and-technology-photo.jpg') no-repeat center center/cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .about-header .overlay {
            background: rgba(255, 255, 255, 0.6);
            color: black;
            padding: 20px;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            width: 100%;
        }

        /* About Content */
        .about-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            margin: 60px auto;
            gap: 50px;
        }

        /* Left Side Text */
        .about-text {
            flex: 1;
        }

        .about-text h3 {
            color: #007bff;
            font-size: 18px;
            text-transform: uppercase;
        }

        .about-text h2 {
            font-size: 32px;
            margin-top: 5px;
            font-weight: bold;
        }

        .about-text ul {
            list-style: none;
            padding: 0;
        }

        .about-text ul li {
            font-size: 18px;
            margin: 8px 0;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-top: 10px;
        }

        /* Right Side Image */
        .about-image {
            flex: 1;
            background: url('../image/people-at-hospital-background-blue-medical-backdrop-healthcare-support-2C5YFNK.jpg') no-repeat center center/cover;
            height: 500px;
            width: 100%;
            border-radius: 10px;
        }

        /* Team Section */
        .team-section {
            padding: 60px 20px;
            text-align: center;
        }

        .team-section h2 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 30px;
        }

        .team-member {
            display: inline-block;
            width: 250px;
            margin: 20px;
            text-align: center;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
        }

        .team-member h3 {
            font-size: 18px;
            margin-top: 10px;
            color: #333;
        }

        .team-member p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <?php include('../Patient/header.php'); ?>
    <div class="container">
        <!-- About Header Section -->
        <section class="about-header">
            <div class="overlay">
                <h2>WELCOME TO <img src="../image/Meddical.svg" alt="Medical Logo"></h2>
            </div>
        </section>
        
        <!-- About Content Section -->
        <section class="about-content">
            <div class="about-text">
                <h3>WELCOME....!</h3>
                <h2><b>Best Care for Your Good Health</b></h2>
                <p>We are dedicated to providing the best healthcare services with advanced technology and compassionate care. Our goal is to ensure that every patient receives the highest quality treatment tailored to their individual needs.</p>
                <ul><b>
                    <li>Comprehensive healthcare solutions</li>
                    <li>Advanced diagnostic and treatment options</li>
                    <li>Expert medical professionals</li>
                    <li>Compassionate and personalized care</li>
                </ul></b>
            </div>
            <div class="about-image"></div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-member">
                <img src="../image/people 3.webp" alt="Dr. Sarah">
                <h3>Mishva Sheladiya</h3>
                <p>Manager</p>
            </div>
            <div class="team-member">
                <img src="../image/people 1.jpg" alt="Dr. Mike">
                <h3>Aditya Sheladiya</h3>
                <p>Founder</p>
            </div>
            <div class="team-member">
                <img src="../image/people 2.png" alt="Dr. Emma">
                <h3>Mirali Sheladiya</h3>
                <p>Department Head</p>
            </div>
        </section>
    </div>
    <?php include('../Patient/footer.php')?>
</body>
</html>
