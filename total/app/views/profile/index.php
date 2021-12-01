<div class="container">
  <div class="row">
    <div class="col-4 text-danger">
      <form method="POST" action="http://localhost/total/app/controllers/profile/index.php">
        
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" value="<?php echo $_SESSION['user']['email']; ?>" name="email" class="form-control" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" value="<?php echo $_SESSION['user']['password']; ?>" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="username" value="<?php echo $_SESSION['user']['username']; ?>" name="username" class="form-control" id="username">
        </div> 
        <div class="mb-3">
          <label for="adresse" class="form-label">Adresse</label>
          <input type="adresse" value="<?php echo $_SESSION['user']['adresse']; ?>" name="adresse" class="form-control" id="adresse">
        </div>
        <div class="mb-3">
          <label for="ville" class="form-label">Ville</label>
          <input type="ville" value="<?php echo $_SESSION['user']['ville']; ?>" name="ville" class="form-control" id="ville">
        </div>  
        <div class="d-grid gap-2 mt-4">
          <button type="submit" class="btn btn-danger">Submit</button>
        </div>
      </form>
    </div>
    <div class="col-2"></div>
    <div class="col-6 mt-5 pl-5" style="opacity: 0.5">
      <img src="./img/user.svg" width="350px" alt="icon profile">
    </div>
  </div>
  <div class="col-4 mt-4 btn-group">
    <a class="btn btn-danger"  aria-current="disconnect" href="http://localhost/total/app/controllers/disconnect/index.php">Disconnect</a>
  </div>
</div>