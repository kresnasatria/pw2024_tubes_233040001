<?php
include 'config_customers.php';

if(isset($_POST['book_now'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone_number = $_POST['phone_number'];
   $address = $_POST['address'];
   $class = $_POST['class'];

   $query = "INSERT INTO booking(name, email, phone_number, address, class) VALUES('$name', '$email', '$phone_number', '$address', '$class')";
   mysqli_query($conn, $query); 
   header('location: index.php');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>booking form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/auth.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>booking form</h3>
      
      <input type="text" name="name" id="name" required placeholder="NAME">
      <input type="email" name="email" id="email" required placeholder="EMAIL">
      <input type="text" name="phone_number" id="phone_number" required placeholder="PHONE NUMBER">
      <input type="text" name="address" id="address" required placeholder="ADDRESS">
      <input type="text" name="class" id="address" required placeholder="CLASS">
      <input type="submit" name="book_now" value="book now" class="form-btn">
   </form>

</div>

</body>
</html>