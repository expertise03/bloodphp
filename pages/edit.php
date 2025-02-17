<?php
// Ensure database connection
include 'dbconnect.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if all required POST data are set and not empty
    if (isset($_POST["name"], $_POST["guardiansname"], $_POST["gender"], $_POST["dob"], $_POST["weight"], $_POST["bloodgroup"], $_POST["email"], $_POST["address"], $_POST["contact"], $_POST["id"])) {
        
        // Sanitize inputs to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $guardiansname = mysqli_real_escape_string($conn, $_POST["guardiansname"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
        $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
        $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
        $bloodgroup = mysqli_real_escape_string($conn, $_POST["bloodgroup"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $address = mysqli_real_escape_string($conn, $_POST["address"]);
        $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);

        // Update query
        $qry = "UPDATE donor SET name='$name', guardiansname='$guardiansname', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', email='$email', address='$address', contact='$contact' WHERE id='$id'";
        
        // Execute the query and check for errors
        if (mysqli_query($conn, $qry)) {
            echo "Successfully updated!";
            // Optionally, redirect to another page after successful update
            // header("Location: editview.php");
        } else {
            echo "ERROR: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
}

?>

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
                                    <form role="form" action="" method="post">

                                        <!-- Form Inputs for User -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Guardian's Name</label>
                                            <input type="text" class="form-control" name="guardiansname" value="<?php echo isset($guardiansname) ? $guardiansname : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" name="gender" value="<?php echo isset($gender) ? $gender : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="number" class="form-control" name="weight" value="<?php echo isset($weight) ? $weight : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <input type="text" class="form-control" name="bloodgroup" value="<?php echo isset($bloodgroup) ? $bloodgroup : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="<?php echo isset($address) ? $address : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" name="contact" value="<?php echo isset($contact) ? $contact : ''; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
                                        </div>
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
