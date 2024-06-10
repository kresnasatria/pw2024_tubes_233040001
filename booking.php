<?php
session_start();
if( !isset($_SESSION['user_name']) ){
  header('location: login_form.php');
  exit;
}

require 'functions.php';

if(isset($_POST['book_now'])) {
    $conn = koneksi() ;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $class = $_POST['class'];

    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO booking (name, email, phone_number, address, class) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone_number, $address, $class);

    if ($stmt->execute()) {
        echo "<script>
                alert('Booked successfully');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Booking failed');
              </script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/auth.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Booking Form</h3>
      
      <input type="text" name="name" id="name" required placeholder="Name">
      <input type="email" name="email" id="email" required placeholder="Email">
      <input type="text" name="phone_number" id="phone_number" required placeholder="Phone Number">
      <input type="text" name="address" id="address" required placeholder="Address">
      <input type="text" name="class" id="class" required placeholder="Class">
      <input type="submit" name="book_now" value="Book Now" class="form-btn">
   </form>

</div>

</body>
</html>
