<?php include('./app/views/headers/html-header.php'); ?>
  <body class="bg-light">
    <!-- Navigation -->
    <?php include('./app/views/headers/connect.php'); ?>
    <div class="container">
      <!-- Sign-In -->
      <div class="total-login row">
        <div class="col-4"></div>
        <div class="col-4">
          <?php include('./app/views/sign-in/index.php'); ?>
        </div>
        <div class="col-4"></div>
      </div>
    </div>
  </body>
  <footer class="blockquote text-center"><p>TotalEnergies &copy; <?php echo date("Y"); ?></p></footer>
</html>