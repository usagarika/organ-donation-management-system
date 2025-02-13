<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

<header>
    <nav class="navbar navbar-light bg-dark justify-content-between" style="font-family: 'Poppins', sans-serif; font-weight:400; color:white; text-transform:uppercase">
        <a href="index.php" class="navbar-brand" style="text-decoration:none; font-weight:700; color:White;">Home</a>
        <a class="navbar-brand" style="font-weight:700;color:White;">Dashboard</a>
        <a class="btn btn-warning" href="index.php" role="button">Log Out</a>
    </nav>
</header>

<div class="container-fluid" style="font-style: 'Poppins', sans-serif;">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body b1" id="Row1">
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'register');
                    $que = "SELECT * FROM registration";
                    $val = mysqli_query($con, $que);
                    $cont = mysqli_num_rows($val) - 1;
                    ?>
                    <h5 class="card-title">Total Users</h5>
                    <h2 style="font-weight: bold;font-size:40px"><?php echo $cont; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body b2" id="Row1">
                    <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'register');
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM organ_requests ";

                    $values = mysqli_query($connection, $query);

                    if (!$values) {
                        die("Query failed: " . mysqli_error($connection));
                    }

                    $cont = mysqli_num_rows($values);

                    mysqli_close($connection);
                    ?>
                    <h2 style="font-weight: bold;font-size:40px"><?php echo $cont; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body b3" id="Row1">
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'register');
                    $que = "SELECT COUNT(DISTINCT(REGISTRATION_ID)) FROM donor";
                    $val = mysqli_query($con, $que);
                    $cont = "";
                    while ($row = mysqli_fetch_assoc($val)) {
                        $cont = $row['COUNT(DISTINCT(REGISTRATION_ID))'];
                    }
                    ?>
                    <h5 class="card-title">Total Donors</h5>
                    <h2 style="font-weight: bold;font-size:40px"><?php echo $cont; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body b4" id="Row1">
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'register');
                    $que = "SELECT COUNT(DISTINCT(REGISTRATION_ID)) AS registration_count FROM donor";
                    $val = mysqli_query($con, $que);
                    $cont = "";
                    while ($row = mysqli_fetch_assoc($val)) {
                        $cont = $row['registration_count'];
                    }                    
                    ?>
                    <h5 class="card-title">Donation Records</h5>
                    <h2 style="font-weight: bold;font-size:40px"><?php echo $cont; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Cards -->

    <!-- Start of Tables -->

    <h3 class="font-weight-bolder text-center">Users</h3>

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'register');
    $query = "SELECT * FROM registration WHERE REGISTRATION_ID != 38";
    $values = mysqli_query($connection, $query);
    ?>
    <table class="table table-hover table-striped my-3">
        <thead class="thead-dark th">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Blood Group</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Zip Code</th>
        <th>Action</th>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($values)) {
            $REGISTRATION_ID = $row['REGISTRATION_ID'];
            $FIRST_NAME = $row['FIRST_NAME'];
            $LAST_NAME = $row['LAST_NAME'];
            $AGE = $row['AGE'];
            $BLOOD_GROUP = $row['BLOOD_GROUP'];
            $Gender = $row['Gender'];
            $EMAIL = $row['EMAIL'];
            $Phone  = $row['Phone'];
            $ADDRESS = $row['ADDRESS'];
            $ZIPCODE = $row['ZIPCODE'];
            $PASSWORD= $row['PASSWORD'];
            ?>
            <tbody>
            <tr>
                <td><?php echo $REGISTRATION_ID; ?></td>
                <td><?php echo $FIRST_NAME; ?></td>
                <td><?php echo $LAST_NAME; ?></td>
                <td><?php echo $AGE; ?></td>
                <td><?php echo $EMAIL; ?></td>
                <td><?php echo $BLOOD_GROUP; ?></td>
                <td><?php echo $Gender; ?></td>
                <td><?php echo $Phone; ?></td>
                <td><?php echo $ADDRESS;?></td>
                <td><?php echo $ZIPCODE;?></td>

                <td><a class="btn btn-danger" href="delete.php?REGISTRATION_ID=<?php echo $REGISTRATION_ID ?>">Delete</a></td>
            </tr>
            </tbody>
            <?php
        }
        $connection->close();
        ?>

    </table>

    <!-- Total Request -->
    <h3 class="font-weight-bolder text-center">Requests</h3>
    <!-- Add PHP code for Requests table here -->
    <!-- Total Request -->

    <!-- Total Donors -->
    <h3 class="font-weight-bolder text-center">Donors</h3>
    <!-- Add PHP code for Donors table here -->
    <!-- Total Donors -->

    <h3 class="font-weight-bolder text-center">Donation Records</h3>
    <!-- Add PHP code for Donation Records table here -->
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>

<style>
    #Row1 {
        color:black;
        height:180px;
        width: 350px;
        margin-top:60px;
        margin-bottom:60px;
    }

    .b1{
        background: #007BFF;
    }
    .b2{
        background: #28A745;
    }
    .b3{
        background: #FFC107;
    }
    .b4{
        background: #17A2B8;
    }
    .th{
        color: #519259;
    }
    .card{
        border: 1px solid rgba(0, 0, 0, 0)!important;
    }
</style>
