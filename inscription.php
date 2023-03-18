<?php include("includes/headerAlt.php"); ?>

  <title>Register - The Mikiki Team</title>
  <style>
    .login-form {
        width: 340px;
        margin: 50px auto;
    }
  
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  
    .login-form h2 {
        margin: 0 0 15px;
    }
  
    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }
  
    .btn {
        font-size: 15px;
        font-weight: bold;
    }

    .form-group{
      color: white;
    }
  </style>
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
        <div class="menu">
          <span></span>
        </div>
      </div>
      <div class="titre-second centrage-top text-center texte">
        <p>Create an account.</p>
      </div>
      <div class="centrage-milieu">
        <form
          action="inscription_traitement.php"
          method="post"
          class="needs-validation"
          novalidate
        >
          <div class="form-group">
            <label>NOM *</label>
            <input
              type="text"
              name="nom"
              class="form-control"
              placeholder="Entrez votre NOM"
              required="required"
              autocomplete="off"
            />
            <div class="valid-feedback">Parfait !</div>
            <div class="invalid-feedback">Indiquez votre Nom!</div>
          </div>
          <div class="form-group">
            <label>Prénom *</label>
            <input
              type="text"
              name="prenom"
              class="form-control"
              placeholder="Entrez votre prénom"
              required="required"
              autocomplete="off"
            />
            <div class="valid-feedback">Parfait !</div>
            <div class="invalid-feedback">Indiquez votre Prénom!</div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email *</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Entrez votre Email"
              required="required"
              autocomplete="off"
            />
            <div class="valid-feedback">Parfait !</div>
            <div class="invalid-feedback">Indiquez votre Email!</div>
          </div>
          <div class="form-group">
            <label>Mot de passe *</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Entrez votre mot de passe"
              required="required"
              autocomplete="off"
            />
            <div class="valid-feedback">Parfait !</div>
            <div class="invalid-feedback">Indiquez votre Mot de passe!</div>
          </div>
          <div class="form-group">
            <label>Re-tapez le mot de passe *</label>
            <input
              type="password"
              name="password_retype"
              class="form-control"
              placeholder="Re-tapez le mot de passe"
              required="required"
              autocomplete="off"
            />
            <div class="valid-feedback">Parfait !</div>
            <div class="invalid-feedback">
              Veuiller retaper votre Mot de passe!
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
              Inscription
            </button>
          </div>
          <div class="form-group">
            <a href="connexion.html"
              >se connecter</a
            >
          </div>
          <div class="form-group">
            <p>Tous les champs avec un (*) sont obligatoire</p>
          </div>
        </form>
      </div>
    </div>

    <div id="footer">
      <div>
        <p class="text-center texte">© The Mikiki Team - All right reserved</p>
      </div>
    </div>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
