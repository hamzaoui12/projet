<?php include('./app/controllers/session-security/index.php'); ?>
<?php include('./app/views/headers/html-header.php'); ?>
  <body class="bg-light">
   <?php include('./app/views/headers/connect-header.php'); ?>
    <div class="container">
      <div class="total-profile">
        <?php include('./app/views/profile/index.php'); ?>
      </div>
    </div>
  </body>
  <footer  class="blockquote text-center"><p>TotalEnergies &copy; <?php echo date("Y"); ?></p></footer>
</html>