<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        #wrapper {
            padding: 20px;
        }

        .panel {
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .panel-heading {
            background-color:blue;
            color: #fff;
            font-size: 20px;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .panel-body {
            padding: 30px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
        }

        .table th {
            background-color:#3498db;
            color: white;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .fa-pencil {
            font-size: 18px;
            color: #3a4b8b;
            transition: color 0.3s ease;
        }

        .fa-pencil:hover {
            color: #2e3a6e;
        }

        .page-header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        footer {
            background-color: #424558;
            padding: 10px;
            text-align: center;
            color: #CCC;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Donor's Details</h1>
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
                                                <th><i class='fa fa-pencil'></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "dbconnect.php";
                                            $qry = "SELECT * FROM donor";
                                            $result = mysqli_query($conn, $qry);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "
                                                    <tr>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['username']}</td>
                                                        <td>{$row['guardiansname']}</td>
                                                        <td>{$row['gender']}</td>
                                                        <td>{$row['dob']}</td>
                                                        <td>{$row['weight']}</td>
                                                        <td>{$row['bloodgroup']}</td>
                                                        <td>{$row['email']}</td>
                                                        <td>{$row['address']}</td>
                                                        <td>{$row['contact']}</td>
                                                        <td><a href='editform.php?id={$row['id']}'><i class='fa fa-pencil'></i></a></td>
                                                    </tr>
                                                ";
                                            }
                                            ?>
                                        </tbody>
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
