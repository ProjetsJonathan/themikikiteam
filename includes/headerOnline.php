<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/timer.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <script src="js/timer.js" defer></script>

    <title>The Mikiki Team</title>
  </head>
  <body>
    <div id="main">
      <div class="header conteneur">
        <div class="menu">
          <a href="index.html"
            ><img
              src="/img/logo-site-mike.jpg"
              alt="logo of the website"
              class="logo-header"
          /></a>
        </div>
        <div class="menu">
          <h1 class="titre">THE MIKIKI TEAM</h1>
        </div>
        <div class="menu button-group">
        <a href="https://sqwazyxter-formation.com/monCompte.php" class="logo"><font color="white">Mon compte</font></a>
        </div>
      </div>
      <div>
      <div class="container">
        <div class="col-md-12">
          <?php
          if (isset($_GET['err'])) {
            $err = htmlspecialchars($_GET['err']);
            switch ($err) {
              case 'current_password':
                echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                break;
              case 'success_password':
                echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                break;
              case 'retype_password':
                echo "<div class='alert alert-danger'>Les mots de passe ne correspondent pas ! </div>";
                break;
            }
          }
          ?>

        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Changer mon mot de passe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="layouts/change_password.php" method="POST">
                <label for='current_password'>Mot de passe actuel</label>
                <input type="password" id="current_password" name="current_password" class="form-control" required />
                <br />
                <label for='new_password'>Nouveau mot de passe</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required />
                <br />
                <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                <input type="password" id="new_password_retype" name="new_password_retype" class="form-control"
                  required />
                <br />
                <button type="submit" class="btn btn-success">Sauvegarder</button>
              </form>
            </div>
      </div>
      