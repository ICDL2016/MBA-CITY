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
          <a href="minprice.php">
            Стоимость
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="start profession-start__wrapper minprice-start">
    <div class="container">
      <div class="row">
        <div class="col-md-12 profession-start">
          <div class="start-top profession-start__top">
            <h2 class="start-title profession-start__title minprice-start__title">Минимальная стоимость обучения <span>Зарегистрируйтесь, чтобы начать обучение бесплатно и узнать стоимость со скидкой</span></h2>
          </div>
          <form class="main-form start-form profession-form">
            <?php require '_form2.php'; ?>
          </form>
          <div class="start-img minprice-start__img">
            <img src="img/start.png" alt="start">
          </div>
        </div>
      </div>
    </div>
  </div>

  <img src="img/start.png" alt="start" class="profession-girl minprice-girl">

  <form class="main-form mobile-form mb-1">
    <?php require '_form.php'; ?>
  </form>

  <div class="minprice-discount">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 justify-content-center">
          <div class="minprice-discount__img">
            <img src="img/50disc.png" alt="50%">
          </div>
        </div>
        <div class="col-6">
          <div class="minprice-discount__text">
            скидка <br> в этом <br> месяце!
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require_once '_about.php'; ?>
  </div>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>