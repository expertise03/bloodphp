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

</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Announcement Detail</h1>
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
                                    <form role="form" action="" method="post">

                                        <?php
                                            // Include database connection
                                            include 'dbconnect.php';

                                            // Fetch ID from GET request
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                
                                                // Fetch the current announcement data from the database
                                                $qry = "SELECT * FROM announce WHERE id = '$id'";
                                                $result = mysqli_query($conn, $qry);

                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                } else {
                                                    echo "Error: " . mysqli_error($conn);
                                                }

                                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                    $announcement = mysqli_real_escape_string($conn, $_POST['announcement']);
                                                    $bloodneed = mysqli_real_escape_string($conn, $_POST['bloodneed']);
                                                    $dat = mysqli_real_escape_string($conn, $_POST['dat']);
                                                    $organizer = mysqli_real_escape_string($conn, $_POST['organizer']);
                                                    $requirements = mysqli_real_escape_string($conn, $_POST['requirements']);

                                                    // Update query
                                                    $updateQry = "UPDATE announce SET announcement='$announcement', bloodneed='$bloodneed', dat='$dat', organizer='$organizer', requirements='$requirements' WHERE id='$id'";

                                                    // Execute the query
                                                    if (mysqli_query($conn, $updateQry)) {
                                                        echo "<p class='text-success'>The selected announcement has been updated successfully.</p>";
                                                    } else {
                                                        echo "<p class='text-danger'>Error updating record: " . mysqli_error($conn) . "</p>";
                                                    }
                                                }
                                            }
                                        ?>

                                        <div class="form-group">
                                            <label for="announcement">Announcement Title</label>
                                            <input class="form-control" type="text" name="announcement" id="announcement" value="<?php echo isset($row['announcement']) ? $row['announcement'] : ''; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="bloodneed">Blood Type Needed</label>
                                            <input class="form-control" type="text" name="bloodneed" id="bloodneed" value="<?php echo isset($row['bloodneed']) ? $row['bloodneed'] : ''; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="dat">Date and Time</label>
                                            <input class="form-control" type="date" name="dat" id="dat" value="<?php echo isset($row['dat']) ? $row['dat'] : ''; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="organizer">Organizer</label>
                                            <input class="form-control" type="text" name="organizer" id="organizer" value="<?php echo isset($row['organizer']) ? $row['organizer'] : ''; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="requirements">Requirements</label>
                                            <textarea class="form-control" rows="4" name="requirements" id="requirements" required><?php echo isset($row['requirements']) ? $row['requirements'] : ''; ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-success">Update Announcement</button>

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
    text-align: center;
    color: #CCC;
    padding: 10px;
    position: fixed;
    width: 100%;
    bottom: 0;
}

footer p {
    margin: 0;
}
</style>

</html>
