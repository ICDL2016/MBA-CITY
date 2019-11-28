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

  <div class="start minprice-start minprice-start__auth">
    <div class="container">
      <div class="row">
        <div class="col-md-12 profession-start">
          <div class="start-top profession-start__top">
            <h2 class="start-title profession-start__title minprice-start__title">Минимальная стоимость обучения <span>Чтобы узнать стоимость обучения по конкретной программе</span></h2>
          </div>
            <button class="minprice-btn">Выберите курс обучения</button>
          <div class="start-img minprice-start__img minprice-start__img-auth">
            <img src="img/start.png" alt="start">
          </div>
        </div>
      </div>
    </div>
  </div>

  <img src="img/start.png" alt="start" class="profession-girl minprice-girl">

  <?php require_once '_discount.php';?>

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