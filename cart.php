<?php
session_start();
include("modele.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Eiser ecommerce</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <?php include("_header.php"); ?>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Votre Panier </h2>

          </div>
          <div class="page_link">
            <a href="index.php">Accueil</a>
            <a href="cart.php">Panier</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Produit</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantité</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $ttc = 0;
              foreach ($_SESSION['panier'] as $tab) {
                $produit = find($tab['id'], "produit");
                $qte = $tab['qte'];
                $ttc = $ttc + $produit['prix'] * $qte;

              ?>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img width="150" src="<?= $produit['photo'] ?>" alt="" />
                      </div>
                      <div class="media-body">
                        <p><?= $produit['libelle'] ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?= $produit['prix']  ?>MAD</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input type="number" name="qte" data-id="<?= $produit['id'] ?>" id="sst" maxlength="12" value="<?= $qte ?>" title="Quantity:" class="input-text qty" onchange="changer_qte(this)" onkeydown="changer_qte(this)" />

                    </div>
                  </td>
                  <td>
                    <h5><?= $produit['prix'] * $qte ?>MAD</h5>
                  </td>
                </tr>
              <?php } ?>

              <tr class="bottom_button">
                <td>
                  <a class="gray_btn" href="#">Modifier le panier</a>
                </td>
                <td></td>
                <td></td>
                <td>

                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>TTC</h5>
                </td>
                <td>
                  <h5 id="ttc"><?= $ttc ?>MAD</h5>
                </td>
              </tr>

              <tr class="out_button_area">
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="checkout_btn_inner">
                    <a class="gray_btn" href="index.php">Continuez votre achat </a>
                    <a class="main_btn" href="liivraison">Suivant</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->

  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Top Products</h4>
          <ul>
            <li><a href="#">Managed Website</a></li>
            <li><a href="#">Manage Reputation</a></li>
            <li><a href="#">Power Tools</a></li>
            <li><a href="#">Marketing Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Features</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Guides</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Experts</a></li>
            <li><a href="#">Agencies</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
              <button class="click-btn btn btn-default">Subscribe</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/theme.js"></script>
  <script>
    // input=this = input
    function changer_qte(input) {

      let id = $(input).data('id');
      $.get("ajout_panier.php?id=" + id + "&qte=" + input.value, function() {
        // alert("success");
        location.reload();
      });

    }
  </script>
</body>

</html>