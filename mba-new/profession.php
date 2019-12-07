<?php require_once '_header.php'; ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs-wrapper">
      <i class="fa fa-home breadcrumbs-house"></i>
      <div class="breadcrumbs-main">
        <a href="index.php">Главная</a>
      </div>
      <i class="fa fa-arrow-right"></i>
      <div class="breadcrumbs-main">
        <a href="actual.php">Кулинария</a>
      </div>
      <i class="fa fa-arrow-right"></i>
      <div class="breadcrumbs-current">
        <a href="profession.php">
          Администратор гостиницы
        </a>
      </div>
    </div>
  </div>
</div>

<div class="main profession-main">
  <div class="effective-slider">
    <div class="main-slider__block main-slider__block1 profession-slider__block">
      <div class="container main-slider__block-container">
        <div class="main-slider__block-human main-slider__block1-human profession-main__wrapper">
        </div>
      </div>
    </div>
  </div>
  <div class="container position-relative">
    <div class="main-form__wrapper effective-wrapper profession-wrapper">
      <h2 class="main-form__header effective-header profession-header">Профессия<span>Администратор гостиницы</span></h2>
      <form class="main-form header-form">
        <?php require '_form.php'; ?>
      </form>
    </div>
  </div>
</div>

<form class="main-form mobile-form mb-1">
  <?php require '_form.php'; ?>
</form>

<div class="profession-text container">
  <div class="profession-text__title">Выберите сферу и профессию, по которой хотите стать дипломированным специалистом</div>
  <div class="profession-text__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores illo iusto quisquam! Aliquam aliquid atque beatae ipsa molestiae nobis perferendis quia sed vel. Blanditiis incidunt ullam unde. Cumque dicta dignissimos error, hic in modi, optio quibusdam quidem sapiente voluptatem voluptatum!</div>
  <div class="profession-text__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias at atque deserunt et exercitationem facilis nemo nostrum, obcaecati placeat porro quis ratione sit suscipit tempora temporibus. Debitis, perspiciatis?</div>
  <div class="profession-text__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias distinctio eaque ex ipsum laboriosam, nisi perspiciatis sed vero. Ad, velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur cum ducimus harum illo, iure libero mollitia, nam necessitatibus neque nihil nostrum officiis perspiciatis provident quaerat quas quis repellat rerum sed sunt temporibus ullam voluptate.</div>
</div>

<div class="stats">
  <?php require_once '_stats.php'; ?>
</div>

<div class="about">
  <h2 class="title about-title profession-title">
    Получите официальный диплом <span>по специальности администратор гостиницы</span>
  </h2>
  <?php require_once '_about.php'; ?>
</div>

<img src="img/prof-girl.png" alt="start" class="profession-girl">

<div class="start profession-start__wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12 profession-start">
        <div class="start-top profession-start__top">
          <h2 class="start-title profession-start__title">Профессия <span>Администратор гостиницы</span></h2>
        </div>
        <form class="main-form start-form profession-form">
          <?php require '_form2.php'; ?>
        </form>
        <div class="start-img profession-start__img">
          <img src="img/prof-girl.png" alt="start">
        </div>
      </div>
    </div>
  </div>

  <div class="profession-start__bg"></div>
</div>

<form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
  <?php require '_form2.php'; ?>
</form>

<a href="#" class="profession-all">Смотреть все профессии</a>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>