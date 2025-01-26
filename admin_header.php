

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

      <!-- custom admin css file link  -->
      <link rel="stylesheet" href="admin_style.css">


      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
   <p>Username: 
      <?php 
         echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'Guest'; 
      ?>
   </p>
   <p>Email: 
      <?php 
         echo isset($_SESSION['admin_email']) ? $_SESSION['admin_email'] : 'Not available'; 
      ?>
   </p>
   <a href="logout.php" class="delete-btn">Logout</a>
   <div>New <a href="login.php">Login</a> | <a href="register.php">Register</a></div>
</div>

   </div>

</header>