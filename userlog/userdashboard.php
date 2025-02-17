<<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BDMS Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Chart.js for Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->
    <style>
        /* Dynamic Gradient Background */
        body {
            background: linear-gradient(-45deg, black,rgb(120, 67, 199),rgb(123, 61, 122), #fbc2eb);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            min-height: 100vh;
            color: white;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Card Hover Effect */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Footer Styling */
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center fw-bold">🩸 Blood Donation Dashboard</h2>
        <div class="row mt-4">

            <!-- Blood Available -->
            <div class="col-md-3">
                <div class="card text-white bg-success shadow">
                    <div class="card-body text-center">
                        <i class="fas fa-tint fa-3x"></i>
                        <h4 class="mt-2">Available Blood</h4>
                        <?php include 'counter/dashbloodcount.php';?>
                        <a href="userviewblood.php" class="btn btn-light btn-sm mt-2">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Campaigns Made -->
            <div class="col-md-3">
                <div class="card text-white bg-warning shadow">
                    <div class="card-body text-center">
                        <i class="fas fa-flag fa-3x"></i>
                        <h4 class="mt-2">Campaigns</h4>
                        <?php include 'counter/dashboardcampaigncount.php';?>
                        <a href="userviewcampaigns.php" class="btn btn-light btn-sm mt-2">View Campaigns</a>
                    </div>
                </div>
            </div>

            <!-- Announcements -->
            <div class="col-md-3">
                <div class="card text-white bg-info shadow">
                    <div class="card-body text-center">
                        <i class="fas fa-bullhorn fa-3x"></i>
                        <h4 class="mt-2">Announcements</h4>
                        <?php include 'counter/dashannouncecount.php';?>
                        <a href="userviewannouncement.php" class="btn btn-light btn-sm mt-2">View Announcements</a>
                    </div>
                </div>
            </div>

            <!-- Donate Blood -->
            <div class="col-md-3">
                <div class="card text-white bg-danger shadow">
                    <div class="card-body text-center">
                        <i class="fas fa-hand-holding-medical fa-3x"></i>
                        <h4 class="mt-2">Donate Blood</h4>
                        <a href="useraddblood.php" class="btn btn-light btn-sm mt-2">Donate Now</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Blood Donations Graph -->
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">📊 Blood Donations Over Time</h5>
                        <canvas id="bloodChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js for Graph -->
    <script>
        const ctx = document.getElementById('bloodChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Donations',
                    data: [10, 25, 40, 35, 50, 70], // Replace with real data
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });
    </script>

</body>
</html>
