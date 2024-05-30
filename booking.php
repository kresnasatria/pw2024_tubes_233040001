<?php





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>booking form</h3>
      
      <input type="text" name="name" required placeholder="NAME">
      <input type="email" name="email" required placeholder="EMAIL">
      <input type="text" name="text" required placeholder="PHONE NUMBER">
      <input type="text" name="text" required placeholder="ADDRESS">
      <select name="user_type">
         <option value="user">VISUAL EFFECTS</option>
         <option value="admin">VIDEOGRAPY</option>
         <option value="admin">PHOTOGRAPHY</option>
         <option value="admin">SOUND DESIGN</option>
      </select>
      <input type="submit" name="submit" value="book now" class="form-btn">
   </form>

</div>

</body>
</html>