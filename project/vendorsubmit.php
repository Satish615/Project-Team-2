<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "killing";
$dbname = "grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$zipcode= $_POST["zipcode"];
$state = $_POST["state"];
$mobile = $_POST["mobile"];
$login = $_POST["login"];
$password = $_POST["password"];


$sql = "INSERT INTO customer (seller_id, seller_firstname, seller_lastname, seller_email, seller_address, seller_city, seller_zipcode, seller_state, seller_phonenumber, seller_login, seller_password)
VALUES (DEFAULT, '$firstname', '$lastname', '$email', '$address', '$city', '$zipcode', '$state', '$mobile', '$login', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for signing up with Grocery online, please take a look at our products page";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
