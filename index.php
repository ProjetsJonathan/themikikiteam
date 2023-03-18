<?php
session_start();

if (isset($_SESSION['user'])) {
  require_once 'includes/headerOnline.php';
} else {
  require_once 'includes/header.php';
}
?>
<?php
if (isset($_GET['true']) == "created") {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Bravo!</strong> Votre produit a été ajouter au panier avec succes.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
}
?>

<div class="conteneur">
  <div class="centrage-top">
    <h2 class="titre-body">STOCK ARRIVAL IN:</h2>
    <br />
    <!-- emplacement du timer -->
    <div class="container">
      <div class="container-segment">
        <div class="segment-title">Hours</div>
        <div class="segment">
          <div class="flip-card" data-hours-tens>
            <div class="top">2</div>
            <div class="bottom">2</div>
          </div>
          <div class="flip-card" data-hours-ones>
            <div class="top">4</div>
            <div class="bottom">4</div>
          </div>
        </div>
      </div>
      <div class="container-segment">
        <div class="segment-title">Minutes</div>
        <div class="segment">
          <div class="flip-card" data-minutes-tens>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
          <div class="flip-card" data-minutes-ones>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
        </div>
      </div>
      <div class="container-segment">
        <div class="segment-title">Seconds</div>
        <div class="segment">
          <div class="flip-card" data-seconds-tens>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
          <div class="flip-card" data-seconds-ones>
            <div class="top">0</div>
            <div class="bottom">0</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="centrage-milieu">
    <h4 class="titre-body">Love Yourself</h4>
    <br />
    <a href="http://127.0.0.1:5500/preview.html" class="lien">Pre-order here!</a>
  </div>
</div>
</div>

<?php include("includes/footer.php"); ?>

</body>

</html>
