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
          <a href="remind.php">
            Восстановление пароля
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="login container">
    <div class="login-img text-center">
      <img src="img/login/remind-lock.png" alt="lock">
    </div>

    <div class="login-form text-center">
      <h3 class="login-title">Восстановление пароля</h3>
      <div class="login-auth remind-hint">Если вы забыли пароль, введите ваш E-Mail:</div>
      <form action="" class="login-form__form">
        <input class="form-input__email login-form__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
        <button class="login-btn p404-btn">Восстановить</button>
      </form>

      <img src="img/login/remind-bd.png" alt="border" class="login-border remind-border">
    </div>

    <a href="login.php" class="login-remind">Войти в учебный кабинет</a>
  </div>


<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<script>
    // псевдовалидация

    $('.login-form__email').on('click', function () {
        if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
            $(this).parent().children('.form-input__span-email').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-email').hide();
        $(this).parent().children('.login-form__email').removeClass('border-red');
    });

    $('.login-btn').on('click', function () {
        event.preventDefault();
        let send = true;

        if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
            $(this).parent().children('.form-input__span-email').show();
            $(this).parent().children('.login-form__email').addClass('border-red');
            send = false;
        }

        if (send === true) {
            $(this).parent().submit();
        }
    });
</script>

<?php require_once '_end.php'; ?>