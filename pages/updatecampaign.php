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
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
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
            margin-bottom: 30px;
        }

        .panel-heading {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table {
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table th {
            background-color: #3498db;
            color: white;
        }

        .btn-edit {
            color: green;
            font-size: 20px;
            transition: transform 0.2s ease;
        }

        .btn-edit:hover {
            transform: scale(1.2);
            color: #27ae60;
        }

        footer {
            background-color: #424558;
            color: #ccc;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            line-height: 100%;
        }

        .panel-body {
            padding: 30px;
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
                        <h1 class="page-header">Edit Campaign Details</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Available Campaigns
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                        include "dbconnect.php";

                                        $qry = "SELECT * FROM campaigndb";
                                        $result = mysqli_query($conn, $qry);

                                        echo "<thead>
                                                <tr>
                                                    <th>Campaign Name</th>
                                                    <th>Organizer Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Date of Campaign</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                              </thead>";

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tbody>
                                                    <tr>
                                                        <td>" . $row['cname'] . "</td>
                                                        <td>" . $row['oname'] . "</td>
                                                        <td>" . $row['phn'] . "</td>
                                                        <td>" . $row['cdate'] . "</td>
                                                        <td>" . $row['descp'] . "</td>
                                                        <td>
                                                            <a href='updatecampaignform.php?id=" . $row['id'] . "' class='btn-edit'>
                                                                <i class='fa fa-pencil'></i> Edit
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
