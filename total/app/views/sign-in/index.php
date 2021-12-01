<h2 class="text-danger text-start mb-4">Mon Club TotalEnergies</h1>
<form method="POST" action="http://localhost/total/app/controllers/sign-in/index.php">
  <div class="mb-3">
    <input type="email" name="email" class="form-control" id="email-total" aria-describedby="emailHelp" placeholder="email">
    <div class="invalid-feedback">
      Bad email.
    </div>
  </div>
  <div class="mb-3">
    <input type="passwsord" name="password" class="form-control" id="password-total" placeholder="password">
    <div class="invalid-feedback">
      Bad password.
    </div>
  </div>
  <div class="d-grid gap-2 mt-4">
    <button type="submit" class="btn btn-danger">S'identifier</button>
  </div>
  <p class="text-danger mt-3">Pas encore membre ? <a href="./sign-up.php">créer un compte.</a></p>
</form>