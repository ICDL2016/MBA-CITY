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
          <a href="getprice.php">
            Узнать стоимость
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="main getprice-main">
    <div class="effective-slider">
      <div class="main-slider__block main-slider__block1 effective-slider__block">
        <div class="container main-slider__block-container">
          <div class="main-slider__block-human main-slider__block1-human getprice-man__wrapper">
            <img src="img/slider/h4.png" alt="girl" class="effective-books profession-man getprice-man">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="main-form__wrapper effective-wrapper getprice-wrapper">
        <h2 class="main-form__header effective-header getprice-header">Узнайте стоимость обучения в МБА СИТИ</span></h2>
        <form class="main-form header-form">
          <?php require '_form.php'; ?>
        </form>
      </div>
    </div>
  </div>

  <form class="main-form mobile-form mb-1">
    <?php require '_form.php'; ?>
  </form>

<?php require_once '_discount.php';?>

  <div class="about getprice-about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require_once '_about.php'; ?>
  </div>

<?php require_once '_advantages.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>