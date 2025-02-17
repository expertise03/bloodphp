<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            margin-top: 20px;
        }

        #wrapper {
            padding: 30px;
        }

        .page-header {
            color: #3498db;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .panel-default {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .panel-heading {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
            border-radius: 5px 5px 0 0;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table-striped {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table-striped th,
        .table-striped td {
            padding: 12px 15px;
            text-align: center;
        }

        .table-striped th {
            background-color: #3498db;
            color: white;
        }

        .table-striped tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-striped tr:hover {
            background-color: #f1c40f;
        }

        footer {
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            text-align: center;
            color: #ccc;
            padding-top: 10px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
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
                        <h1 class="page-header">Blood Collection</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Available Blood
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                            include "dbconnect.php";

                                            $qry = "SELECT * FROM blood";
                                            $result = mysqli_query($conn, $qry);

                                            echo "
                                            <thead>
                                                <tr>
                                                    <th>Blood Group</th>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>D.O.B</th>
                                                    <th>Weight</th>
                                                    <th>Address</th>
                                                    <th>Contact</th>
                                                    <th>Blood Quantity</th>
                                                    <th>Collection Date</th>
                                                </tr>
                                            </thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tbody>
                                                <tr class='gradeA'>
                                                    <td>".$row['bloodgroup']."</td>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['gender']."</td>
                                                    <td>".$row['dob']."</td>
                                                    <td>".$row['weight']."</td>
                                                    <td>".$row['address']."</td>
                                                    <td>".$row['contact']."</td>
                                                    <td>".$row['bloodqty']."</td>
                                                    <td>".$row['collection']."</td>
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

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

   

</body>

</html>
