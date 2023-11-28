<?php
  $userType = session()->get('userType');

  $cookiesAccepted = isset($_COOKIE['cookiesAccepted']);

if (!$cookiesAccepted && $userType === 'Customer') {
    setcookie('cookiesAccepted', 'true', time() + 3600);
}
?>


<br><br><br><br>
<div class="bodyContainer">
<div class="row row-cols-1 row-cols-md-3 g-5">
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/MamaNature.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Natures Products</h5>
        <p class="card-text">Natures Products.</p> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/BeesAreUs.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Fresh Honey</h5>
        <p class="card-text">Locally Sourced Honey.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/JohnHayes.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Fresh Veg</h5>
        <p class="card-text">Fresh Veg.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/FarmFreshFoods.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Farm To Table</h5>
        <p class="card-text">From Farm to your table daily.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/GrangeEggBasket.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Free Range Eggs</h5>
        <p class="card-text">Free Range Eggs.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="<?= base_url('assets/images/suppliers/GreatGreensPlusMore.jpg') ?>" alt="Supplier Image">
      <div class="card-body">
        <h5 class="card-title">Fresh Veg</h5>
        <p class="card-text">Fresh Veg.</p>
      </div>
    </div>
  </div>
</div>
</div>

<?php if ($cookiesAccepted) : ?>
    <div class="cookies-message">
        Cookies are accepted. You can now use certain features.
    </div>
<?php else : ?>
    <div class="cookies-message">
        This website uses cookies. <a href="/accept-cookies">Accept Cookies</a>
    </div>
<?php endif; ?>