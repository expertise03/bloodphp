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

</head>

<body>
<div id="wrapper">

<?php include 'includes/donornav.php'?>

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

                    <?php

                    include "../pages/dbconnect.php";

                    $qry="select * from campaigndb";
                    $result=mysqli_query($conn,$qry);

                    echo"
                    <thead>
                    <tr>
                        <th>Campaign Name</th>
                        <th>Organizer Name</th>
                        <th>Phone Number</th>
                        <th>Date of Campaign</th>
                        <th>Description</th>
                    </tr>
                    </thead>";

                    while($row=mysqli_fetch_array($result)){
                        echo"<tbody>
                        <tr>
                            <td>".htmlspecialchars($row['cname'])."</td>
                            <td>".htmlspecialchars($row['oname'])."</td>
                            <td>".htmlspecialchars($row['phn'])."</td>
                            <td>".htmlspecialchars($row['cdate'])."</td>
                            <td>".htmlspecialchars($row['descp'])."</td>
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

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

<style>
footer {
   background-color: #424558;
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0;
   height: 35px;
   text-align: center;
   color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}

/* Table Styling */
.table {
    margin-bottom: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
}

.table-bordered {
    border: 1px solid #ddd;
	background-color:#007BFF;
	color: white;
}

.table td{
	color: black;
}

.table-hover tbody tr:hover {
    font-weight: bold;
    color: #007BFF;
    background-color: #f5f5f5; 
}


/* Add some space at the bottom of the page */
body {
    padding-bottom: 50px; /* Adjust this to prevent footer overlap */
}
</style>

</html>
