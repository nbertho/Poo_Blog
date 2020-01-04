<?php
  /*
    ./app/vues/users/loginForm.php
    Variables disponibles :
      -
   */
 ?>


<div class="card-panel">
  <div class="row">
    <form class="col-md-6 col-md-offset-3" action="users/login/authorization" method="post">
    <h5>Connexion to the BackOffice</h5>
    <br>
    <div class="input-field">
      <i class="material-icons prefix">account_circle</i>
      <input id="pseudo" type="text" class="validate" name="login">
      <label for="pseudo">Pseudo</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">error</i>
      <input id="mdp" type="password" class="validate" name="pwd">
      <label for="mdp">Password</label>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-info waves-effect waves-light">Connect</button>
    </div>
    </form>
  </div>
</div>
