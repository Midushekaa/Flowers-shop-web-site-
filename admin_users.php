<?php

include 'config.php'; 
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('location:login.php');
    exit(); // Stop further script execution after redirect
}

// Handle user deletion securely
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']); // Ensure the ID is an integer to avoid SQL injection

    $delete_query = mysqli_query($conn, "DELETE FROM `users` WHERE id = $delete_id") 
        or die('Query failed: ' . mysqli_error($conn));
    
    header('location:admin_users.php');
    exit(); // Stop script execution after redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- Custom Admin CSS -->
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="users">

   <h1 class="title">Users Account</h1>

   <div class="box-container">
      <?php
      // users from the database
      $select_users = mysqli_query($conn, "SELECT * FROM `users`") 
         or die('Query failed: ' . mysqli_error($conn));

      if (mysqli_num_rows($select_users) > 0) {
          while ($fetch_users = mysqli_fetch_assoc($select_users)) {
      ?>
      <div class="box">
         <p>User ID: <span><?php echo htmlspecialchars($fetch_users['id']); ?></span></p>
         <p>Username: <span><?php echo htmlspecialchars($fetch_users['name']); ?></span></p>
         <p>Email: <span><?php echo htmlspecialchars($fetch_users['email']); ?></span></p>
         <p>User Type: 
            <span style="color:<?php echo ($fetch_users['user_type'] == 'admin') ? 'var(--orange)' : ''; ?>">
               <?php echo htmlspecialchars($fetch_users['user_type']); ?>
            </span>
         </p>
         <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" 
            onclick="return confirm('Delete this user?');" class="delete-btn">
            Delete
         </a>
      </div>
      <?php
          }
      } else {
          echo '<p class="empty">No users found!</p>';
      }
      ?>
   </div>

</section>

</body>
</html>













<script src="js/admin_script.js"></script>

</body>
</html>