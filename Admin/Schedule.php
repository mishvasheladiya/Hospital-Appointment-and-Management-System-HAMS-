<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .schedule-container {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #123456;
            text-align: center;
            margin-bottom: 20px;
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .schedule-table th, .schedule-table td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #42a5f5;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
            font-size: 1rem;
        }

        .available {
            background-color: #c8e6c9;
        }

        .unavailable {
            background-color: #ef9a9a;
        }
    </style>
</head>
<body>
<?php include('header.php')?>

<div class="schedule-container">
    <h2>Weekly Schedule</h2>
    <table class="schedule-table">
        <thead>
            <tr>
                <th>Day</th>
                <th>Morning (9 AM - 12 PM)</th>
                <th>Afternoon (1 PM - 4 PM)</th>
                <th>Evening (5 PM - 8 PM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Monday</td>
                <td class="available">Available</td>
                <td class="unavailable">Unavailable</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td class="available">Available</td>
                <td class="available">Available</td>
                <td class="unavailable">Unavailable</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td class="available">Available</td>
                <td class="unavailable">Unavailable</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td class="unavailable">Unavailable</td>
                <td class="available">Available</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td class="available">Available</td>
                <td class="available">Available</td>
                <td class="unavailable">Unavailable</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td class="available">Available</td>
                <td class="unavailable">Unavailable</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td class="unavailable">Unavailable</td>
                <td class="unavailable">Unavailable</td>
                <td class="unavailable">Unavailable</td>
            </tr>
        </tbody>
    </table>
</div>
<?php include('footer.php')?>
</body>
</html>
