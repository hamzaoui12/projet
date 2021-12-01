<h2 class="text-danger text-start mb-4">Inscription</h1>
<form method="POST" action="http://localhost/total/app/controllers/sign-up/index.php">
  <div class="mb-3">
    <input type="email" name="email" class="form-control" id="email-total" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="mb-3">
    <input type="passwsord" name="password" class="form-control" id="password-total" placeholder="password">
  </div>
  <div class="mb-3">
    <input type="passwsord" name="confirmPassword" class="form-control" id="password-confirm-total" placeholder="confirm password">
  </div>
  <div class="mb-3">
    <input type="username" name="username" class="form-control" id="username-total" placeholder="username">
  </div>
  <div class="mb-3">
    <input type="adresse" name="adresse" class="form-control" id="adresse-total" placeholder="adresse">
  </div>
  <div class="mb-3">
    <input type="ville" name="ville" class="form-control" id="ville-total" placeholder="ville">
  </div>
  <div class="d-grid gap-2 mt-4">
    <button type="submit" class="btn btn-danger">S'inscrire</button>
  </div>
   <p class="text-danger mt-3">Vous avez déjà un compte ? <a href="./compte.php">me connecter.</a></p>
</form>
