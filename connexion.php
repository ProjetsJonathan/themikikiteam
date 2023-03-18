<?php include("includes/headerAlt.php"); ?>

  <title>Login required - The Mikiki Team</title>
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
        <p>Please login to your account.</p>
      </div>
      <div class="centrage-milieu">
        <form
          action="connexion_conf.php"
          method="post"
          class="needs-validation"
          novalidate
        >
          <div class="form-group">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email"
              required="required"
            />
          </div>
          <div class="form-group">
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              required="required"
            />
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
              Login
            </button>
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
