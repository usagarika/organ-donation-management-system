<?php
// Check if all required fields are present in $_POST
$required_fields = ['FIRST_NAME', 'LAST_NAME', 'dateofbirth', 'BLOOD_GROUPr', 'Gender', 'EMAIL', 'PASS_WORD', 'confirm_password', 'phoneR', 'ADD_RESSr', 'ZIP_CODE'];
foreach ($required_fields as $field) {
    if (!isset($_POST[$field])) {
        die("Required field '$field' is missing from the form data.");
    }
}

$FIRST_NAME = $_POST['FIRST_NAME'];
$LAST_NAME = $_POST['LAST_NAME'];
$dateofbirth = $_POST['dateofbirth'];
$AGE = date_diff(date_create($dateofbirth), date_create('today'))->y;
$BLOOD_GROUPr = $_POST['BLOOD_GROUPr'];
$Gender = $_POST['Gender'];
$EMAIL = $_POST['EMAIL'];
$PASS_WORD = $_POST['PASS_WORD']; // Use the provided password directly
$confirm_password = $_POST['confirm_password']; // Use the provided confirm password directly

if ($PASS_WORD !== $confirm_password) {
    die("Passwords did not match");
}

$phoneR = $_POST['phoneR'];
$ADD_RESSr = $_POST['ADD_RESSr'];
$ZIP_CODE = $_POST['ZIP_CODE'];

// Connection to database server
$con = new mysqli('localhost', 'root', '', 'register');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepared statement to insert data
$stmt = $con->prepare("INSERT INTO registration(`FIRST_NAME`, `LAST_NAME`, `Date of Birth`, `BLOOD_GROUP`, `Gender`, `EMAIL`, `PASSWORD`, `Phone`, `ADDRESS`, `ZIPCODE`)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $FIRST_NAME, $LAST_NAME, $dateofbirth, $BLOOD_GROUPr, $Gender, $EMAIL, $PASS_WORD, $phoneR, $ADD_RESSr, $ZIP_CODE);

if ($stmt->execute() === TRUE) {
    echo "Registered Successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
