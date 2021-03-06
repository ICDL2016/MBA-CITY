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
          <a href="actual.php">Каталог курсов</a>
        </div>
        <i class="fa fa-arrow-right"></i>
        <div class="breadcrumbs-current">
          <a href="page-course.php">
            Полный курс кулинарного дела КУЛИНАР-ЭКСПЕРТ
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="video diploma-video forauth-video">
    <div class="video-wrapper diploma-video__wrapper forauth-video__wrapper">
      <div class="video-block diploma-video__block video-form__show" onclick="play1(event)">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="124.512px" height="124.512px" viewBox="0 0 124.512 124.512" style="enable-background:new 0 0 124.512 124.512;" xml:space="preserve"><g> <path d="M113.956,57.006l-97.4-56.2c-4-2.3-9,0.6-9,5.2v112.5c0,4.6,5,7.5,9,5.2l97.4-56.2C117.956,65.105,117.956,59.306,113.956,57.006z"/></g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g></svg>
      </div>

      <div class="container position-relative">
        <div class="main-form__wrapper diploma-form__wrapper">
          <h2 class="main-form__header diploma-form__header forauth-form__header" style="opacity: 0; height: 60px">ФИТНЕС-ТРЕНЕР</h2>
          <form class="main-form header-form">
            <h4 class="main-form__title">Начните обучение бесплатно</h4>
            <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
            <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
            <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
            <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнению и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
            <input type="text" name="phone" placeholder="Введите ваш телефон" required>
            <div class="form-checkbox__block">
              <input class="form-checkbox" type="checkbox" name="checkbox" id="ch" checked required>
              <label class="form-label" for="ch">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
            </div>
            <button class="main-form__submit">Начать обучение бесплатно</button>
            <div class="main-form__bottom">
              И посмотреть мой документ об образовании <br>
              <span>СЕГОДНЯ 25.04.2019</span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="divPlayer1"></div>
  </div>

  <form class="main-form video-form">
    <h3>Полный курс кулинарного дела КУЛИНАР-ЭКСПЕРТ</h3>
    <form class="main-form header-form">
      <h4 class="main-form__title">Начните обучение бесплатно</h4>
      <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
      <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
      <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
      <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнению и должно содержать
        правильный электронный адрес (например, example@mail.ru)
      </div>
      <input type="text" name="phone" placeholder="Введите ваш телефон" required>
      <div class="form-checkbox__block">
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch3" checked required>
        <label class="form-label" for="ch3">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
      </div>
      <button class="main-form__submit">Начать обучение бесплатно</button>
      <div class="main-form__bottom">
        И посмотреть мой документ об образовании <br>
        <span>СЕГОДНЯ 25.04.2019</span>
      </div>
    </form>
  </form>

  <form class="main-form mobile-form mb-1">
    <h3 class="mobile-form__header">Полный курс кулинарного дела КУЛИНАР-ЭКСПЕРТ</h3>
      <h4 class="main-form__title">Начните обучение бесплатно</h4>
      <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
      <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
      <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
      <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнению и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
      <input type="text" name="phone" placeholder="Введите ваш телефон" required>
      <div class="form-checkbox__block">
          <input class="form-checkbox" type="checkbox" name="checkbox" id="ch" checked required>
          <label class="form-label" for="ch">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
      </div>
      <button class="main-form__submit">Начать обучение бесплатно</button>
      <div class="main-form__bottom">
          И посмотреть мой документ об образовании <br>
          <span>СЕГОДНЯ 25.04.2019</span>
      </div>
  </form>

  <div class="forauth-program">
      <div class="forauth-program__title">Программа курса обучения <span>«КУЛИНАР-ЭКСПЕРТ»</span></div>
      <?php require_once '_programs.php'; ?>
  </div>

  <div class="about actual-about">
    <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
    </h2>
    <?php require_once '_about.php'; ?>
  </div>

<?php require_once '_advantages.php'; ?>

<div class="pagecourse-mobile">
    <h2 class="pagecourse-mobile__title">Полный курс кулинарного дела КУЛИНАР-ЭКСПЕРТ</h2>
    <img src="img/page-course/page-course-food.png" alt="food">
</div>

<div class="start profession-start__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 profession-start">
                <div class="start-top profession-start__top">
                    <h2 class="start-title pagecourse-start__title">Полный курс кулинарного дела КУЛИНАР-ЭКСПЕРТ</h2>
                </div>
                <form class="main-form start-form profession-form">
                    <form class="main-form mobile-form start-mobile__form mt-2 mb-md-2 mb-0">
                        <h4 class="main-form__title">Начните обучение <span>бесплатно</span></h4>
                        <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
                        <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
                        <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
                        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
                        <input type="text" name="phone" placeholder="Введите ваш телефон" required>
                        <div class="form-checkbox__block">
                            <input class="form-checkbox" type="checkbox" name="checkbox" id="ch2" checked required>
                            <label class="form-label" for="ch2">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
                        </div>
                        <button class="main-form__submit">Начать обучение бесплатно</button>
                        <div class="main-form__bottom">
                            И посмотреть мой документ об образовании <br>
                            <span>СЕГОДНЯ 25.04.2019</span>
                        </div>
                    </form>
                </form>
                <div class="start-img pagecourse-start__img">
                    <img src="img/page-course/page-course-food.png" alt="food">
                </div>
            </div>
        </div>
    </div>

    <div class="profession-start__bg pagecourse-start__bg"></div>
</div>

<form class="main-form mobile-form start-mobile__form mt-0 mt-mb-2 mb-md-2 mb-4">
    <h4 class="main-form__title">Начните обучение <span>бесплатно</span></h4>
    <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
    <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
    <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
    <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
    <input type="text" name="phone" placeholder="Введите ваш телефон" required>
    <div class="form-checkbox__block">
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch2" checked required>
        <label class="form-label" for="ch2">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
    </div>
    <button class="main-form__submit">Начать обучение бесплатно</button>
    <div class="main-form__bottom">
        И посмотреть мой документ об образовании <br>
        <span>СЕГОДНЯ 25.04.2019</span>
    </div>
</form>


<div class="popular-wrapper">
        <h2 class="title">Другие курсы раздела <br> КУЛИНАРИЯ</h2>
        <div class="popular-slider owl-carousel">
            <div class="popular-slide">
                <div class="popular-blocks">
                    <div class="popular-block popular-block1">
                        <div class="popular-block__descr">
                            Эксперт по развитию личности,
                            лидерству и достижению цели
                        </div>
                    </div>
                    <div class="popular-block popular-block2">
                        <div class="popular-block__descr">
                            Курсы немецкого языка
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-slide">
                <div class="popular-blocks">
                    <div class="popular-block popular-block1">
                        <div class="popular-block__descr">
                            Курсы немецкого языка
                        </div>
                    </div>
                    <div class="popular-block popular-block2">
                        <div class="popular-block__descr">
                            Управление и организация услуг
                            в сфере маркетинга и рекламы
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-slide">
                <div class="popular-blocks">
                    <div class="popular-block popular-block3">
                        <div class="popular-block__descr">
                            Курсы немецкого языка
                        </div>
                    </div>
                    <div class="popular-block popular-block4">
                        <div class="popular-block__descr">
                            Управление и организация услуг
                            в сфере маркетинга и рекламы
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-slide">
                <div class="popular-blocks">
                    <div class="popular-block popular-block1">
                        <div class="popular-block__descr">
                            Эксперт по развитию личности,
                            лидерству и достижению цели
                        </div>
                    </div>
                    <div class="popular-block popular-block2">
                        <div class="popular-block__descr">
                            Управление и организация услуг
                            в сфере маркетинга и рекламы
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-slide">
                <div class="popular-blocks">
                    <div class="popular-block popular-block4">
                        <div class="popular-block__descr">
                            Эксперт по развитию личности,
                            лидерству и достижению цели
                        </div>
                    </div>
                    <div class="popular-block popular-block3">
                        <div class="popular-block__descr">
                            Управление и организация услуг
                            в сфере маркетинга и рекламы
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once '_modal.php'; ?>
<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
    <script>
        $(document).ready(function () {

            function mainTitleFont() {
                if ($('.main-form__header').text().length > 33) {
                    if ($(window).width() > 400) {
                        $('.main-form__header').css('font-size', '26px')
                    } else {
                        $('.main-form__header').css('font-size', '20px')
                    }
                }
            }

            mainTitleFont();
            $('.main-form__header').css({
                opacity: 1,
                height: 'auto'
            });

            if ($('.main-form__header').text().length > 33) {
                $(window).resize(mainTitleFont)
            }
        })
    </script>
<?php require_once '_end.php'; ?>
