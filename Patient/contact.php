
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6fc;
        }

        .contact-header {
            background-color: #1E2A47;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .contact-header p {
            font-size: 1rem;
            opacity: 0.8;
        }

        .contact-container {
            padding: 40px 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: -100px;
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 12px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #1E2A47;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #2f3d6c;
        }

        .contact-info {
            margin-top: 40px;
        }

        .contact-info h4 {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 10px;
        }

        
    </style>
</head>
<body>

    <?php include('header.php'); ?>

    <!-- Contact Header Section -->
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We would love to hear from you. Feel free to reach out with any questions or feedback!</p>
    </div>

    <!-- Contact Form Section -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-container">
                    <h3 class="mb-4">Get In Touch</h3>
                    <form id="contactForm" action="#" method="POST" class="contact-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn">Send Message</button>
                    </form>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="row contact-info mt-5">
            <div class="col-md-4 text-center">
                <h4>Our Address</h4>
                <p>123 street, Morbi Road, Rajkot, Gujrat, India</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Email Us</h4>
                <p>medical@services.com</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Call Us</h4>
                <p>(+91) 987-654-321</p>
            </div>
        </div>
    </div>
<hr>
    <!-- Map Section -->
<div class="row mt-5">
    <div class="col-12">
        <h4 class="text-center mb-3">Find Us Here</h4>
        <div class="map-container" style="border-radius: 12px; overflow: hidden;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.7980632718337!2d70.79729631503791!3d22.30810808531751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca3b2ab9c481%3A0x1e63c4c7d3ebff1d!2sMorbi%20Road%2C%20Rajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1676623480364!5m2!1sen!2sin"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div></div>
<?php include('footer.php')?>
    
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "mini_project");
if($conn)
{
echo "DataBase Connected";
}else{
    echo "Not Connected";
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (email, subject, message) 
                VALUES ('$email', '$subject', '$message')";

    $result=mysqli_query($conn,$sql);

        if ($result) 
        {
            echo "Data Inserted ";
        } 
        else {
            echo "Data not Inserted";
        }
}
?>