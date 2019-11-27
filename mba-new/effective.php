<?php require_once '_header.php'; ?>

  <div class="main">
    <div class="effective-slider">
      <div class="main-slider__block main-slider__block1 effective-slider__block">
        <div class="container main-slider__block-container">
          <div class="main-slider__block-human main-slider__block1-human">
            <img src="img/eff-books.png" alt="books" class="effective-books">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="main-form__wrapper effective-wrapper">
        <h2 class="main-form__header effective-header">Эффективная система освоения материала</h2>
        <form class="main-form header-form">
          <?php require '_form.php'; ?>
        </form>
      </div>
    </div>
  </div>

  <form class="main-form mobile-form mb-1">
    <?php require '_form.php'; ?>
  </form>

  <div class="popular">
    <?php require_once '_popular.php'; ?>
  </div>

  <div class="about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require_once '_about.php'; ?>
  </div>

<?php require_once '_start.php'; ?>

  <form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
    <?php require '_form2.php'; ?>
  </form>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
  <script src="js/checkbox.js"></script>
<?php require_once '_end.php'; ?>