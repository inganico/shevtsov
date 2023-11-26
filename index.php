<?php require 'numVal.php'?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Alex Shevtsov</title>
</head>
<body>
  
  <div class="page-bg">
    <div class="stripe">
      <span class="stripe__span"></span>
      <div class="container">
        <header class="header">
          <a class="header__logo" href="#">
            <img class="header__logo-img" src="img/logo.svg" alt="Logo - Alex Shevtsov">
          </a>
          <nav class="nav">
            <ul class="nav__list reset-list">
              <li class="nav__item">
                <a class="nav__link" href="#">Обо мне</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Наставничество</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Мероприятия</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Кейсы</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Отзывы</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Контакты</a>
              </li>
            </ul>
          </nav>
          <address class="address">
            <a class="address__tel" href="tel:83451233445">
              <svg class="address__svg" width="19" height="19" viewBox="0 0 19 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_56)">
                <path d="M17.329 12.492C16.228 12.492 15.147 12.3198 14.1226 11.9813C13.6119 11.8071 13.0304 11.9423 12.6972 12.2818L10.6753 13.8082C8.3304 12.5565 6.886 11.1125 5.65139 8.78525L7.13283 6.81598C7.51772 6.43161 7.65578 5.87012 7.49038 5.34329C7.15039 4.31352 6.97769 3.23302 6.97769 2.1316C6.97774 1.33592 6.33041 0.688599 5.53478 0.688599H2.23233C1.43675 0.688599 0.789429 1.33592 0.789429 2.1315C0.789429 11.2516 8.20897 18.6711 17.329 18.6711C18.1246 18.6711 18.7719 18.0237 18.7719 17.2281V13.9349C18.7719 13.1393 18.1246 12.492 17.329 12.492ZM17.7729 17.2281C17.7729 17.473 17.5738 17.672 17.329 17.672C8.75968 17.672 1.78849 10.7008 1.78849 2.13155C1.78849 1.88668 1.98751 1.68766 2.23238 1.68766H5.53483C5.7797 1.68766 5.97872 1.88668 5.97872 2.13155C5.97872 3.33984 6.16848 4.5257 6.53969 5.64913C6.59139 5.815 6.54943 5.98668 6.38164 6.16135L4.66455 8.43543C4.54945 8.5881 4.53137 8.7925 4.61772 8.96273C6.01919 11.7174 7.72213 13.4203 10.4963 14.8418C10.665 14.93 10.8719 14.9116 11.0251 14.7959L13.3514 13.0335C13.4689 12.916 13.6451 12.874 13.8041 12.9281C14.9353 13.3018 16.1212 13.4911 17.329 13.4911C17.5738 13.4911 17.7729 13.6901 17.7729 13.935V17.2281Z"/>
                </g>
              </svg>
              <span class="address__text" >8-345-123-34-45</span>
            </a>
            <button class="burger">
              <span class="burger__span"></span>
              <span class="burger__span"></span>
              <span class="burger__span"></span>
            </button>
          </address>
        </header>
      </div>
      
      <main class="main">
        <section class="success">
          <div class="container">
            <div class="success__content">
              <h1 class="success__title">Создаю условия для вашего успеха</h1>
              <p class="success__desc">Когда ваше время и энергия лучше сфокусированы, стремление к новым возможностям&nbsp;становится реальностью,  ваш успех зависит от ваших действий</p>
              <span class="success__desc success__desc_text">Ваш успех зависит от ваших действий</span>
              <img class="success__img" src="img/men.png" alt="Мужчина в костюме">
            </div>
            <div class="success__grid">
              <button class="success__btn success__btn_record">
                <svg class="success__svg" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 4.29346V20.952H4.37326M20.9618 21L1 1" stroke="#0B3461" stroke-width="2"/>
                </svg>
                  <span class="success__btn_text-1">Записаться на консультацию</span>
                  <span class="success__btn_text-2">Записаться</span>
                </button>
              <button class="success__btn success__btn_free">
                <svg class="success__svg" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 4.29346V20.952H4.37326M20.9618 21L1 1" stroke="white" stroke-width="2"/>
                </svg>
                <span class="success__btn_text-1">Бесплатная консультация</span>
                <span class="success__btn_text-2">Заказать звонок</span>
              </button>
              <div class="purpose purpose__left">
                <span class="purpose__num"><?=$sumOfDigits?></span>
                <p class="purpose__desc">техник для достижения целей</p>
                <span class="purpose__desc_text">техники</span>
              </div>
  
              <div class="purpose purpose__right">
                <span class="purpose__num purpose__num_css"><?=$exchangeRateGBP?></span>
                <p class="purpose__desc">увеличение личной продуктивности</p>
                <span class="purpose__desc_text">продуктивности</span>
              </div>
            </div>
          </div>
        </section>

        <section class="modal">
          <div class="modal__box">
            <button class="modal__close"></button>
            <div class="message">
              <h2 class="modal__title">Закажите обратный звонок</h2>
              <form class="form" id="form">
                <div class="form__container">
                  <label class="form__label">
                    <input class="form__input" type="text" placeholder="имя" id="username" name="username">
                  </label>
                  <label class="form__label">
                    <input  class="form__input" type="number" placeholder="телефон" id="phone" name="number">
                  </label>
                </div>
                <div class="container-check">
                  <input class="form__input-check" type="checkbox" id="checkbox_1" name="2">
                  <label for="checkbox_1" class="form__label-check">Согласен на сохранение и обработку <span class="form__label-check_span">персональных данных</span></label>
                </div>
                
                <button class="form__btn  success__btn_free" type="submit">
                  <svg class="success__svg" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 4.29346V20.952H4.37326M20.9618 21L1 1" stroke="white" stroke-width="2"/>
                  </svg>
                  <span class="success__btn_text-1 success__btn_text-btn">Заказать обратный звонок</span>
                </button>
            </form>
            </div>
            
          </div>
        </section>
      </main>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/localSt.js"></script>
  </div> 
</body>
</html>