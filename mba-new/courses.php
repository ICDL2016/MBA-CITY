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
        <a href="courses.php">
            Кулинария
        </a>
      </div>
    </div>
  </div>
</div>

<div class="page-title actual-title">
  <div class="container">
    <div class="page-title__wrapper courses-title__wrapper text-center">
      <div class="page-title__text courses-title__text">
        <div class="page-title__top courses-title__top">КУЛИНАРИЯ И ПИЩЕВОЕ ПРОИЗВОДСТВО</div>
        <div class="page-title__bottom courses-title__bottom">Выберите курс обучения</div>
      </div>
    </div>
  </div>
</div>

<div class="choose courses-choose">
  <?php require_once '_courses-choose.php'; ?>
</div>

<?php require_once '_video.php'; ?>
<div class="stats">
  <?php require_once '_stats.php'; ?>
</div>
<?php require_once '_advantages.php'; ?>

<div class="about">
    <h2 class="title about-title">
        Пройдите обучение в Бизнес Академии МБА СИТИ
        и станьте высокооплачиваемым специалистом
        в интересной Вам сфере деятельности
    </h2>
  <?php require_once '_about.php'; ?>
</div>
<?php require_once '_start.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
    <script src="js/catalog.js"></script>
<?php require_once '_end.php'; ?>