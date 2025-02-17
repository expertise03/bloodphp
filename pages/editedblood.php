<!DOCTYPE html>
<html lang="en">

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

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="editblood.php" method="post">

                                        <?php
                                            include 'dbconnect.php';

                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                // Retrieving values from the form
                                                $name = $_POST["name"];    
                                                $gender = $_POST["gender"];
                                                $dob = $_POST["dob"];
                                                $weight = $_POST["weight"];
                                                $bloodgroup = $_POST["bloodgroup"];
                                                $address = $_POST["address"];
                                                $contact = $_POST["contact"];
                                                $bloodqty = $_POST["bloodqty"];
                                                $collection = $_POST["collection"];
                                                $id = $_POST['id'];

                                                // Update query
                                                $qry = "UPDATE blood SET name='$name', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', address='$address', contact='$contact', bloodqty='$bloodqty', collection='$collection' WHERE id='$id'";
                                                $result = mysqli_query($conn, $qry); // query executes

                                                if (!$result) {
                                                    echo "ERROR: " . mysqli_error($conn);
                                                } else {
                                                    echo "SUCCESSFULLY UPDATED";
                                                }
                                            }
                                        ?>

                                        <!-- Input fields for the form -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="text" class="form-control" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <input type="text" class="form-control" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input type="number" class="form-control" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Collection</label>
                                            <input type="text" class="form-control" name="collection" required>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
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

<footer>
    <p>&copy; <?php echo date("Y"); ?>: Developed By Naseeb Bajracharya</p>
</footer>

<style>
footer {
   background-color: #424558;
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
</style>

</html>
