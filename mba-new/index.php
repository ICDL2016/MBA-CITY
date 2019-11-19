<?php require_once '_header.php'; ?>

<div class="main">
    <div class="main-slider owl-carousel">
        <div class="main-slider__block main-slider__block1">
            <div class="container main-slider__block-container">
                <div class="main-slider__block-human main-slider__block1-human">
                    <img src="img/slider/h2.png" alt="human" class="human-1">
                </div>
            </div>
        </div>
        <div class="main-slider__block main-slider__block2">
            <div class="container main-slider__block-container">
                <div class="main-slider__block-human main-slider__block2-human">
                    <img src="img/slider/h4.png" alt="human" class="human-2">
                </div>
            </div>
        </div>
        <div class="main-slider__block main-slider__block3">
            <div class="container main-slider__block-container">
                <div class="main-slider__block-human main-slider__block3-human">
                    <img src="img/slider/h1.png" alt="human" class="human-3">
                </div>
            </div>
        </div>
    </div>
    <div class="container position-relative">
        <div class="main-form__wrapper">
            <h2 class="main-form__header">Начните обучение бесплатно</h2>
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

<?php require_once '_video.php'; ?>

    <div class="stats">
<?php require_once '_stats.php'; ?>
    </div>

<div class="choose">
    <h2 class="title">ВЫБЕРИТЕ СФЕРУ ОБУЧЕНИЯ</h2>
<?php require_once '_choose.php'; ?>
    <div class="choose-bottom"></div>
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

<form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
  <?php require '_form2.php'; ?>
</form>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
    <script src="js/checkbox.js"></script>
<?php require_once '_end.php'; ?>