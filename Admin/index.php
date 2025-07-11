<?php
include('db.php');
session_start();

// =========================
// Dashboard Data Queries
// =========================

// Total Appointments
$total_appointments_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM appointment");
$total_appointments = mysqli_fetch_assoc($total_appointments_result)['total'];

// New Patients: first-time patients (those with only 1 appointment)
$new_patients_result = mysqli_query($conn, "
  SELECT COUNT(*) AS total 
  FROM (
    SELECT email
    FROM appointment 
    GROUP BY email
    HAVING COUNT(*) = 1
  ) AS new_patient_group
");

if (!$new_patients_result) {
    die("Query Failed: " . mysqli_error($conn));
}

$new_patients = mysqli_fetch_assoc($new_patients_result)['total'];


// Pending Reports (doctor_reply is empty or NULL)
$pending_reports_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM appointment WHERE doctor_reply IS NULL OR doctor_reply = ''");
$pending_reports = mysqli_fetch_assoc($pending_reports_result)['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doctor Dashboard</title>

  <!-- Google Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: url('../image/patient.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #1f2b6c;
    }

    a {
  text-decoration: none !important;
  color: inherit !important; /* or choose a specific color like #1f2b6c or #000 */
}

a:hover {
  color: #0056b3; /* change to any color you want on hover */
}


    .dashboard-container {
      padding: 40px 20px;
    }

.glass-card {
  background: rgba(255, 255, 255, 0.85);
  border-radius: 20px;
  padding: 30px;
  margin-bottom: 30px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.glass-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
}


    .stat-icon {
      font-size: 40px;
      margin-bottom: 15px;
    }

    .stat-value {
      font-size: 26px;
      font-weight: bold;
    }

    .section-title {
      font-weight: 600;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .table-hover tbody tr:hover {
      background-color: rgba(0, 123, 255, 0.05);
    }

    .list-group-item {
      background-color: rgba(255, 255, 255, 0.95);
      border: none;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .profile-info p {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .dashboard-title {
      color: white;
      padding: 15px;
      border-radius: 15px;
      margin-bottom: 30px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .stat-icon {
        font-size: 30px;
      }
      .stat-value {
        font-size: 22px;
      }
    }
  </style>
</head>

<body>
<?php include('header.php'); ?>

  <div class="container dashboard-container">
    <h1 class="dashboard-title">Doctor Dashboard</h1>

    <!-- Stats Section -->
    <div class="row g-4 mb-4">
      <div class="col-md-3 col-sm-6">
        <a href="profile.php" ><div class="glass-card text-center">
          <i class="fas fa-calendar-check stat-icon text-primary"></i>
          <h5>Total Appointments</h5>
          <p class="stat-value"><?php echo $total_appointments; ?></p>
        </div></a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="profile.php" ><div class="glass-card text-center">
          <i class="fas fa-user-injured stat-icon text-success"></i>
          <h5>New Patients</h5>
          <p class="stat-value"><?php echo $new_patients; ?></p>
        </div></a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="profile.php" ><div class="glass-card text-center">
          <i class="fas fa-file-medical stat-icon text-warning"></i>
          <h5>Pending Reports</h5>
          <p class="stat-value"><?php echo $pending_reports; ?></p>
        </div></a>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="glass-card text-center">
          <i class="fas fa-star stat-icon text-info"></i>
          <h5>Feedback</h5>
          <p class="stat-value">90%</p>
        </div>
      </div>
    </div>

    <!-- Appointments Table -->
    <div class="glass-card">
      <div class="section-title">Today's Appointments</div>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped text-center bg-white">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Patient</th>
              <th>Time</th>
              <th>Department</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Riya Shah</td>
              <td>10:00 AM</td>
              <td>Cardiology</td>
              <td><span class="badge bg-success">Confirmed</span></td>
              <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Aarav Mehta</td>
              <td>11:30 AM</td>
              <td>Neurology</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
              <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>
