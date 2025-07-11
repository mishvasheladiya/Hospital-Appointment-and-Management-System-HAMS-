
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Category</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* General Styles */
        body {
            background: #eef5f9; /* Light hospital theme background */
            font-family: 'Poppins', sans-serif;
        }

        /* Page Title */
        .page-title {
            text-align: center;
            color: #004a99; /* Dark blue */
            font-weight: bold;
            font-size: 28px;
        }

        /* Category Box Styling */
        .category-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        .category-box {
            width: 300px;
            height: 200px;
            background: white;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border: 2px solid transparent;
        }

        .category-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(0, 74, 153, 0.5); /* Blue border glow */
        }

        .category-box i {
            font-size: 50px;
            margin-bottom: 15px;
        }

        /* Doctor Box */
        .doctor {
            color: #007bff; /* Hospital blue */
            border-top: 5px solid #007bff;
        }

        /* Patient Box */
        .patient {
            color: #28a745; /* Hospital green */
            border-top: 5px solid #28a745;
        }

        /* Button Styling */
        .category-box span {
            font-size: 22px;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div>
        
</head>
<body>
    <?php include('../Patient/header.php')?><br><br><br>

    <!-- Page Title -->
    <h1 class="page-title">Select Your Role</h1>

    <!-- Category Selection -->
    <div class="container category-container">
        <div class="row text-center">
            <div class="col-md-5">
                <div class="category-box doctor" onclick="window.location.href='Doctor/login.php'">
                    <i class="fas fa-user-md"></i>
                    <span>Doctor</span>
                </div>
            </div>
            <div class="col-md-5 ms-auto">
                <div class="category-box patient" onclick="window.location.href='../Patient/login.php'">
                    <i class="fas fa-user-injured"></i>
                    <span>Patient</span>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
<?php include('../Patient/footer.php')?>
</body>

</html>
