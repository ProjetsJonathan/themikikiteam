<?php include("includes/headerAlt.php"); ?>

  <title>Preorder - The Mikiki Team</title>
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
          <button type="button" class="btn btn-dark">Sign in</button>
          <button type="button" class="btn btn-light">Sign up</button>
        </div>
      </div>
      <div class="titre-second centrage-top">
        <h2 class="texte">Your preorder</h2>
      </div>
      <div class="conteneur centrage-milieu">
        <div>
          <img class="image-produit" src="img/love-yourself-noir.jpg" alt="" />
        </div>
        <div class="box-form">
          <form action="précommande-offline.html">
            <div>
              <h4 class="titre-body">Features !</h4>
              <ul class="list-group">
                <li class="list-group-item">
                  <img src="img/check.png" alt="checkmark" /><span>&nbsp;</span
                  >Soft touch fabric
                </li>
                <li class="list-group-item">
                  <img src="img/check.png" alt="checkmark" /><span>&nbsp;</span
                  >Machine washable
                </li>
                <li class="list-group-item">
                  <img src="img/check.png" alt="checkmark" /><span>&nbsp;</span
                  >Tumble dry low
                </li>
              </ul>
              <div class="detail">
                <a href="" class="link btn-light">Details</a>
              </div>
            </div>
            <br />
            <div class="text-center">
              <h4 class="titre-body">Color !</h4>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="form-check form-check-inline color-noir">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="couleur"
                    id="black"
                    value="black"
                  />
                  <label class="form-check-label" for="black"> Black </label>
                </div>
                <div class="form-check form-check-inline color-rouge">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="couleur"
                    id="red"
                    value="red"
                  />
                  <label class="form-check-label" for="red"> Red </label>
                </div>
              </nav>
            </div>
            <br />
            <div class="text-center">
              <h4 class="titre-body">Size !</h4>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="xs"
                    value="xs"
                  />
                  <label class="form-check-label" for="xs"> XS </label>
                </div>
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="s"
                    value="s"
                  />
                  <label class="form-check-label" for="s"> S </label>
                </div>
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="m"
                    value="m"
                  />
                  <label class="form-check-label" for="m"> M </label>
                </div>
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="l"
                    value="l"
                  />
                  <label class="form-check-label" for="l"> L </label>
                </div>
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="xl"
                    value="xl"
                  />
                  <label class="form-check-label" for="xl"> XL </label>
                </div>
                <div class="form-check form-check-inline size">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="taille"
                    id="xxl"
                    value="xxl"
                  />
                  <label class="form-check-label" for="xxl"> XXL </label>
                </div>
              </nav>
            </div>
            <div class="text-center">
              <p class="texte">
                You order, we start production and you receive your product as soon
                as it is made.
              </p>
            </div>
            <div class="text-center button-group">
              <button
                type="submit"
                class="btn btn-primary"
                name="validerFrm"
                value="valider"
              >
                Order Now !
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <a href=""
              ><img
                src="img/socials/whatsapp.png"
                alt="whatsapp de the mikiki team"
                class="icons"
            /></a>
          </div>
          <div class="col-4">
            <a href="https://www.instagram.com/themikiki/?hl=fr"
              ><img
                src="img/socials/instagram.png"
                alt="instagram de the mikiki team"
                class="icons"
            /></a>
          </div>
          <div class="col-4">
            <a href="http://"
              ><img
                src="img/socials/snapchat.png"
                alt="snapchat de the mikiki team"
                class="icons"
            /></a>
          </div>
        </div>
      </div>
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
