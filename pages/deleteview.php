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
        /* Blue theme colors */
        footer {
            background-color: #004085;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #FFF;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #d6e9f9; /* Light blue hover */
        }

        .table-responsive {
            margin-bottom: 20px;
        }

        .delete-btn {
            color: #c82333; /* Red icon for delete */
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .delete-btn:hover {
            color: darkred;
        }

        .panel-heading {
            font-size: 18px;
            background-color: #007bff; /* Blue header */
            color: white;
            padding: 10px;
        }

        .panel-body {
            padding: 20px;
        }

        .page-header {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #007bff; /* Blue title */
        }

        .btn-primary {
            background-color: #0056b3; /* Blue buttons */
            border-color: #004085;
        }

        .btn-primary:hover {
            background-color: #003366;
            border-color: #00224d;
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
                        <h1 class="page-header">Delete Donors Detail</h1>
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
                                            $qry = "select * from donor";
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
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "
                                                <tbody>
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
                                                        <td>
                                                            <a href='delete.php?id={$row['id']}' class='delete-btn' title='Delete Record'>
                                                                <i class='fa fa-trash'></i>
                                                            </a>
                                                        </td>
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
