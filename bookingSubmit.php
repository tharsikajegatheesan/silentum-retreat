<?php
    include_once 'connect.php';
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];
$package = $_POST['package'];
$message = $_POST['message'];

// SQL INSERT
$sql = "INSERT INTO bookings ( name, email, phone, checkin, checkout, guests, package, message)
        VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$guests', '$package', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Booking submitted successfully!');
          </script>";
          header("Location:index.html");
} else {
    echo "<script>
            alert('Error occurred while submitting the booking.');
          </script>";
}

mysqli_close($conn);
?>
