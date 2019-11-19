<?php require_once '_header.php'; ?>

  <div class="video">
    <div class="video-wrapper aboutpage-wrapper">
      <div class="video-block aboutpage-video" onclick="play1(event)">

        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="124.512px" height="124.512px" viewBox="0 0 124.512 124.512" style="enable-background:new 0 0 124.512 124.512;" xml:space="preserve"><g> <path d="M113.956,57.006l-97.4-56.2c-4-2.3-9,0.6-9,5.2v112.5c0,4.6,5,7.5,9,5.2l97.4-56.2C117.956,65.105,117.956,59.306,113.956,57.006z"/></g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g></svg>
      </div>

      <div class="breadcrumbs aboutpage-breadcrumbs">
        <div class="container">
          <div class="breadcrumbs-wrapper">
            <i class="fa fa-home breadcrumbs-house"></i>
            <div class="breadcrumbs-main">
              <a href="index.php">Главная</a>
            </div>
            <i class="fa fa-arrow-right"></i>
            <div class="breadcrumbs-current">
              <a href="about.php">
                Об Академии
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="divPlayer1"></div>
  </div>

  <div class="stats">
    <?php require_once '_stats.php'; ?>
  </div>

  <div class="about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require '_about.php'; ?>
  </div>


<?php require_once '_advantages.php'; ?>

  <div class="about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require '_about.php'; ?>
  </div>

<?php require_once '_start.php'; ?>

  <form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
    <?php require '_form2.php'; ?>
  </form>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
  <script src="js/checkbox.js"></script>
<?php require_once '_end.php'; ?>