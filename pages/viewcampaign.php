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
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            padding-top: 50px;
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

        table.table {
            width: 100%;
            background-color: #fff;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
        }

        table.table th,
        table.table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table.table tr:hover {
            background-color: #f1f1f1;
        }

        table.table th {
            background-color: #3498db;
            color: white;
        }

        footer {
            background-color: #424558;
            color: #CCC;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
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
                        <h1 class="page-header">Campaign Details</h1>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of available campaign
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Campaign Name</th>
                                                <th>Organizer Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Campaign</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "dbconnect.php";

                                            $qry = "SELECT * FROM campaigndb";
                                            $result = mysqli_query($conn, $qry);

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>
                                                        <td>" . $row['cname'] . "</td>
                                                        <td>" . $row['oname'] . "</td>
                                                        <td>" . $row['phn'] . "</td>
                                                        <td>" . $row['cdate'] . "</td>
                                                        <td>" . $row['descp'] . "</td>
                                                    </tr>";
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
