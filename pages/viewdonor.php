<html>

<head>

<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">

<style>
    /* Body and container styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .container-fluid {
        padding-top: 40px;
    }

    /* Header styles */
    .page-header {
        font-size: 36px;
        color: #3498db; /* Changed to blue */
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Panel header styles */
    .panel-default {
        background-color: #ffffff;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .panel-heading {
        background-color: #3498db; /* Changed to blue */
        color: white;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        padding: 15px;
        border-radius: 8px 8px 0 0;
    }

    /* Table styling */
    .table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .table-striped th,
    .table-striped td {
        padding: 15px 20px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 14px;
    }

    .table-striped th {
        background-color: #3498db; /* Changed to blue */
        color: white;
    }

    .table-striped tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table-striped tr:hover {
        background-color: #f1c40f;
        cursor: pointer;
    }

    /* Footer styles */
    footer {
        background-color: #424558;
        color: #ccc;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 40px;
        text-align: center;
        padding: 10px 0;
    }

    footer p {
        margin: 0;
        font-size: 14px;
        color: #ccc;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .page-header {
            font-size: 28px;
        }

        .panel-body {
            padding: 10px;
        }
    }
</style>

</head>

<body>
<div id="wrapper">

<?php include 'includes/nav.php'?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Donors Detail</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Total Records of Available Donors
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php
                                    include "dbconnect.php";

                                    $qry = "SELECT * FROM donor";
                                    $result = mysqli_query($conn, $qry);

                                    echo "
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Guardian's Name</th>
                                            <th>Gender</th>
                                            <th>D.O.B</th>
                                            <th>Weight</th>
                                            <th>Blood Group</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tbody>
                                        <tr>
                                            <td>".$row['name']."</td>
                                            <td>".$row['username']."</td>
                                            <td>".$row['guardiansname']."</td>
                                            <td>".$row['gender']."</td>
                                            <td>".$row['dob']."</td>
                                            <td>".$row['weight']."</td>
                                            <td>".$row['bloodgroup']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['address']."</td>
                                            <td>".$row['contact']."</td>
                                        </tr>
                                        </tbody>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>        
                </div>
            </div>    
        </div>    
    </div>
</div>

</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
