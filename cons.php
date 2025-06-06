

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Консультация</title>
    <link href="http://km/assets/css/headfoot.css" rel="stylesheet">
    <link href="http://km/assets/css/cons.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <header>
            <a href="http://km/index.html"><img src="http://km/assets/images/logo.svg" alt="logo" class="logo-header"></a>
            <div class="middle">
            <a href="http://km/index.html">Абонементы</a>
                <a href="http://km/index.htmls">Тренера</a>
                <a href="http://km/index.html">ЧаВо</a>
            </div>
            <nav>
                <ul>
                    <li>
                        <p class="phone"><img src="http://km/assets/images/phone.svg" alt="труба">8 800 000 00 00
                        </p>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="section">
                <div class="squares">
                    <div class="wrapper">
                    <?php if (isset($registration_message)) : ?>
                            <div id="registration-message" style="color: red;"><?php echo $registration_message; ?></div>
                        <?php endif; ?>
                        <form action="cons.php" method="post">
                            <img src="http://km/assets/images/yep.svg" alt="yep" class="yep">
                            <div class="text">
                                <span>
                                    Чтобы получить консультацию, можете позвонить по номеру 8 800 000 00 00 или оставить
                                    свой номер и с мы с вами свяжемся
                                </span>
                            </div>
                            <div class="input-box">
                                <input name="phone_number" type="tel" pattern="[8][0-9]{10}" placeholder="Телефон" required>
                            </div>
                            <div class="botton-regauth">
                                <a>
                                    <button type="submit" class="submit" value="cons">Отправить</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
    <div class="footer-content">
      <div class="contact">
        <p><img src="http://km/assets/images/phone_foot.svg" alt="Phone"> 8 800 000 00 00</p>
      </div>
      <nav class="navigation">
        <a href="#">Абонементы</a>
        <a href="#">Тренера</a>
        <a href="#">ЧаВо</a>
      </nav>
      <div class="social">
        <a href="#"><img src="http://km/assets/images/vk.svg" alt="VK"></a>
        <a href="#"><img src="http://km/assets/images/tg.svg" alt="Telegram"></a>
      </div>
    </div>
    <p class="copyright">Copyright 2024. Все права защищены.</p>
  </footer>
    </div>

</body>

</html>