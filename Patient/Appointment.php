
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background: url('image/pexels-shvetsa-3845126.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-overlay {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .hero-overlay h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .hero-overlay p {
            font-size: 20px;
        }

        .appointment-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 50px 15px;
            gap: 30px;
            flex-wrap: wrap;
        }

        .appointment-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            flex: 1;
            max-width: 500px;
        }

        .schedule-box {
            background: #12204d;
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            flex: 1;
            max-width: 400px;
        }

        .schedule-box h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .schedule-box p {
            display: flex;
            justify-content: space-between;
            font-size: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 0;
        }

        .emergency-contact {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }

        .form-control, .form-select {
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .submit-btn {
            width: 100%;
            background: #12204d;
            color: white;
            font-size: 18px;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background: #0f1a3b;
        }
    </style>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var date = document.getElementById("date").value;
            var time = document.getElementById("time").value;

            if (name == "" || email == "" || phone == "" || date == "" || time == "") {
                alert("All fields must be filled out.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php include('../Patient/header.php'); ?>

<div class="container appointment-container">
    <div class="appointment-box">
        <h3><strong>Book an Appointment</strong></h3>
        <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="gender" name="gender">
                        <option selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="col-md-6">
                    <input type="time" class="form-control" id="time" name="time">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="weight" placeholder="Weight" required>
                </div>
                <div class="col-md-6 form-group">
                    <select class="form-select" name="blood_group" required>
                        <option selected disabled>Blood Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <select class="form-select" name="diabetes" id="diabetes" required>
                        <option selected disabled>Diabetes</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <select class="form-select" name="bp" id="bp" required>
                        <option selected disabled>Blood Pressure (BP)</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="col-12 form-group">
                    <textarea class="form-control" name="medical_report" rows="3" placeholder="Till any medical report...?(Yes/No)" required></textarea>
                </div>
                <div class="form-group">
                    <select class="form-select" name="doctor_type" required>
                        <option selected disabled>Choose Doctor type</option>
                        <option>Neurology</option>
                        <option>Dermatologist</option>
                        <option>Orthopedic</option>
                    </select>
                </div>
                <div class="col-12 form-group file-upload" id="fileUploadContainer">
                    <label for="medicalReport" class="form-label">Upload Medical Report:</label>
                    <input type="file" class="form-control" name="medical_report" id="medicalReport">
                </div>
            </div>
            <button type="submit" name="appointment" class="submit-btn">SUBMIT</button>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var medicalReportInput = document.querySelector("textarea[name='medical_report']");
        var fileUploadContainer = document.getElementById("fileUploadContainer");

        fileUploadContainer.style.display = "none";

        medicalReportInput.addEventListener("input", function () {
            var value = medicalReportInput.value.trim().toLowerCase();
            if (value === "yes") {
                fileUploadContainer.style.display = "block";
            } else {
                fileUploadContainer.style.display = "none";
            }
        });
    });
</script>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "mini_project");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['appointment'])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $appointment_date = $_POST["date"];
    $appointment_time = $_POST["time"];
    $weight = $_POST["weight"];
    $blood_group = $_POST["blood_group"];
    $diabetes = $_POST["diabetes"];
    $bp = $_POST["bp"];
    $doctor_type = $_POST["doctor_type"];

    $file_name = "";
    if (isset($_FILES["medical_report"]) && $_FILES["medical_report"]["error"] == 0) {
        $file_name = $_FILES["medical_report"]["name"];
        $file_tmp = $_FILES["medical_report"]["tmp_name"];
        $upload_dir = "uploads/";
        move_uploaded_file($file_tmp, $upload_dir . $file_name);
    }

    $sql = "INSERT INTO appointment (name, gender, email, phone, appointment_date, appointment_time, weight, blood_group, diabetes, bp, medical_report, doctor_type)
            VALUES ('$name', '$gender', '$email', '$phone', '$appointment_date', '$appointment_time', '$weight', '$blood_group', '$diabetes', '$bp', '$file_name', '$doctor_type')";

    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
                alert('Your Appointment is Booked!');
                window.location.href='../Patient/P_main.php';
            </script>
        ";
    } else {
        echo "Data Not Inserted: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
