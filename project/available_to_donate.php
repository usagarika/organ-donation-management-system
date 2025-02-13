<?php
// Sanitize the input to prevent SQL injection
$user = isset($_REQUEST['EMAIL']) ? htmlspecialchars($_REQUEST['EMAIL']) : '';

// Validate and sanitize user input to prevent SQL injection
$con = new mysqli('localhost', 'root', '', 'register');
$qu1 = "SELECT * FROM registration WHERE EMAIL = '" . $con->real_escape_string($user) . "'";
$values = mysqli_query($con, $qu1);

echo "Query 1: $qu1 <br>";

$BLOOD_GROUP = "";
$Gender = "";
while ($row = mysqli_fetch_assoc($values)) {
    $BLOOD_GROUP = $row['BLOOD_GROUP'];
    $Gender = $row['Gender'];
}

$qu2 = "SELECT organ_requests.REQUEST_ID, registration.FIRST_NAME, registration.LAST_NAME, registration.phone, organ_requests.ORGAN_TYPE, organ_requests.BLOOD_GROUP, organ_requests.QUANTITY, organ_requests.REQUEST_TYPE, organ_requests.ADDRESS, organ_requests.REQUEST_TIME
        FROM organ_requests
        RIGHT JOIN registration
        ON organ_requests.REGISTRATION_ID = registration.REGISTRATION_ID
        WHERE organ_requests.BLOOD_GROUP = '" . $con->real_escape_string($BLOOD_GROUP) . "'";
$val2 = mysqli_query($con,$qu2);

// Check for errors
if (!$val2) {
    echo "Error: " . mysqli_error($con);
} 
else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available to Donate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Available to Donate</title>
    <!-- ICON -->
</head>
<body>

<div style="font-family: 'Poppins', sans-serif; font-weight:400">
        <header class="sticky-top">
            <nav class="navbar navbar-expand-sm  justify-content-between" style="background-color: #212529;">
                <a href="logged_in.php?EMAIL=<?php echo $user?>" class="navbar-brand" style="font-weight:700; color:White;">
                   Home
                </a>
                <a  class="navbar-brand" style="font-weight:700;color:White;">
                   ORGAN DONATION
                </a>
                <a class="btn btn-warning" href="index.php" role="button">Log out</a>
            </nav>
        </header>

        <div class="header">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Requests For Organ</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" style="padding: 25px 0px 25px;" src="images/donateee.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->


    <div class="container-fluid">
        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Requests For Organ</h3>
        <table class="table my-3 table-striped">
            <thead class="thead-dark">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Organ Type</th>
                <th>Blood Group</th>
                <th>Quantity</th>
                <th>Request Type</th>
                <th>Address</th>
                <th>Request Time</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                // Process the query result
                while ($row = mysqli_fetch_assoc($val2)) {
                    $REQUEST_ID = $row['REQUEST_ID'];
                    $FIRST_NAME = $row['FIRST_NAME'];
                    $LAST_NAME = $row['LAST_NAME'];
                    $phoneN = $row['phone'];
                    $ORGAN_TYPE = $row['ORGAN_TYPE'];
                    $BLOOD_GROUPn = $row['BLOOD_GROUP'];
                    $QUANTITY = $row['QUANTITY'];
                    $REQUEST_TYPE = $row['REQUEST_TYPE'];
                    $ADDRESS = $row['ADDRESS'];
                    $REQUEST_TIME = $row['REQUEST_TIME'];
                ?>
                <tr>
                    <td><?php echo $FIRST_NAME; ?></td>
                    <td><?php echo $LAST_NAME; ?></td>
                    <td><?php echo $phoneN; ?></td>
                    <td><?php echo $ORGAN_TYPE; ?></td>
                    <td><?php echo $BLOOD_GROUPn; ?></td>
                    <td><?php echo $QUANTITY; ?></td>
                    <td><?php echo $REQUEST_TYPE; ?></td>
                    <td><?php echo $ADDRESS; ?></td>
                    <td><?php echo $REQUEST_TIME;?></td>
                    <?php
                    // Assuming $Gender is defined somewhere before this code block
                    if ($Gender == 'Male') {
                    ?>
                        <td><a class="btn btn-primary" role="button" href="organ_don_req_M.php?EMAIL=<?php echo $user ?>&BLOOD_GROUP=<?php echo $REQUEST_ID ?>">Register to Donate</a></td>
                    <?php
                    } else {
                    ?>
                        <td><a class="btn btn-primary" role="button"  href="organ_don_req_F.php?EMAIL=<?php echo $user ?>&BLOOD_GROUP=<?php echo $REQUEST_ID ?>">Request to Donate</a></td>
                    <?php
                    }
                    ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
<style>
    .header{
        background-color: #fcc358;
    }
</style>
