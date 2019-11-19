<?php require_once '_header.php'; ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs-wrapper">
      <i class="fa fa-home breadcrumbs-house"></i>
      <div class="breadcrumbs-main">
        <a href="index.php">Главная</a>
      </div>
      <i class="fa fa-arrow-right"></i>
      <div class="breadcrumbs-current">
        <a href="actual.php">
            Каталог курсов
        </a>
      </div>
    </div>
  </div>
</div>

<div class="page-title actual-title">
  <div class="container">
    <div class="page-title__wrapper">
      <img src="img/cap.png" alt="cap">
      <div class="page-title__text">
        <div class="page-title__top">Актуальные и востребованные онлайн курсы</div>
        <div class="page-title__bottom">Выберите сферу обучения</div>
      </div>
    </div>
  </div>
</div>

<div class="choose actual-choose">
  <?php require_once '_choose.php'; ?>
</div>

<div class="stats actual-stats">
  <?php require_once '_stats.php'; ?>
</div>

<div class="popular actual-popular">
  <?php require_once '_popular.php'; ?>
</div>

<div class="about actual-about">
  <h2 class="title about-title">
    ПОЛУЧИТЕ ОФИЦИАЛЬНЫЙ ДИПЛОМ ПО СПЕЦИАЛЬНОСТИ АДМИНИСТРАТОР ГОСТИНИЦЫ
  </h2>
<?php require_once '_about.php'; ?>
</div>

<?php require_once '_start.php'; ?>

<form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
  <?php require '_form.php'; ?>
</form>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
    <script src="js/checkbox.js"></script>
<?php require_once '_end.php'; ?>