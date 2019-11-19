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
        <a href="diploma.php">
            Скорейшее получение официального диплома
        </a>
      </div>
    </div>
  </div>
</div>

<div class="video diploma-video">
    <div class="video-wrapper diploma-video__wrapper">
        <div class="video-block diploma-video__block video-form__show" onclick="play1(event)">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="124.512px" height="124.512px" viewBox="0 0 124.512 124.512" style="enable-background:new 0 0 124.512 124.512;" xml:space="preserve"><g> <path d="M113.956,57.006l-97.4-56.2c-4-2.3-9,0.6-9,5.2v112.5c0,4.6,5,7.5,9,5.2l97.4-56.2C117.956,65.105,117.956,59.306,113.956,57.006z"/></g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g></svg>
        </div>

        <div class="container position-relative">
            <div class="main-form__wrapper diploma-form__wrapper">
                <h2 class="main-form__header diploma-form__header">Скорейшее получение официального диплома</h2>
                <form class="main-form header-form">
                    <h4 class="main-form__title diploma-form__title">Заполните имя в своем дипломе</h4>
                    <h3 class="main-form__title diploma-form__title2">Начните обучение и закажите доставку диплома</h3>
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
    <form class="main-form header-form">
        <h4 class="main-form__title diploma-form__title">Заполните имя в своем дипломе</h4>
        <h3 class="main-form__title diploma-form__title2">Начните обучение и закажите доставку диплома</h3>
        <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
        <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
        <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнению и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
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
  <?php require '_form.php'; ?>
</form>

<div class="about diploma-about">
  <h2 class="title about-title">
      Пройдите обучение в Бизнес Академии МБА СИТИ
      и станьте высокооплачиваемым специалистом
      в интересной Вам сфере деятельности
  </h2>
<?php require_once '_about.php'; ?>
</div>

<a href="#" class="diploma-choose__btn">Выберите необходимую профессию для получения диплома</a>


<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>