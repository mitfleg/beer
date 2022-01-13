<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/reset.css">
   <link rel="stylesheet" href="/css/style.css?<?= time() ?>">
   <title>Document</title>
</head>

<body>
   <header class="header">
      <a href="/" class="header-logo">
         <img src="/img/logo.svg" alt="">
         <span>BeerInfo</span>
      </a>
      <div class="header-title">Личный кабинет</div>
      <div class="header-menu">
         <span class="header-menu__name">MITFLEG</span>
         <div class="header-menu-list">
            <div class="header-menu-list__item change">Сменить пользователя</div>
            <div class="header-menu-list__item pass">Показать пароль</div>
         </div>
      </div>
   </header>

   <section class="section-main">
      <div class="container">
         <div class="tab">
            <div class="tab-list">
               <div class="tab-list__item active" id="lk">Личный кабинет</div>
               <div class="tab-list__item" id="beer">Пиво</div>
            </div>
         </div>
         <div class="main lk active" data-id="lk">
            <div class="main-header">
               <div class="main-header-info">
                  <img src="/img/temp.svg" class="main-header-info__img" alt="">
                  <div class="main-header-info-username" id="username">
                     <div class="main-subtitle">Username</div>
                     <div class="main-text">jim.marquardt</div>
                  </div>
               </div>
               <div class="main-header-change">
                  <div class="main-title">Сменить пароль</div>
                  <form class="main-header-change-form">
                     <label for="" class="main-header-change-form__label">
                        <span class="main-text">Старый пароль*</span>
                        <input type="password" id="pass">
                     </label>
                     <label for="" class="main-header-change-form__label">
                        <span class="main-text">Новый пароль*</span>
                        <input type="password" id="re-pass">
                     </label>
                     <button type="submit" class="main-btn">Изменить</button>
                  </form>
               </div>
            </div>


            <div class="main-content">
               <div class="main-content-wrapper">
                  <div class="main-title">Личные данные</div>
                  <div class="main-content-list">
                     <div class="main-content-list__item" id="uid">
                        <div class="main-subtitle">Уникальный идентификатор</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">98ac20d6-1915-476d-b0e8-d115270cba84 </div>
                     </div>
                     <div class="main-content-list__item" id="firstname">
                        <div class="main-subtitle">Имя</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">Jim </div>
                     </div>
                     <div class="main-content-list__item" id="lastname">
                        <div class="main-subtitle">Фамилия</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">Marquardt</div>
                     </div>
                     <div class="main-content-list__item" id="email">
                        <div class="main-subtitle">E-mail</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">jim.marquardt@email.com</div>
                     </div>
                     <div class="main-content-list__item" id="gender">
                        <div class="main-subtitle">Пол</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">Genderfluid</div>
                     </div>
                     <div class="main-content-list__item" id="birth">
                        <div class="main-subtitle">Дата рождения</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">1979-10-10</div>
                     </div>
                     <div class="main-content-list__item" id="address">
                        <div class="main-subtitle">Адрес</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text ">930 Kihn Mission Elmer Curve</div>
                        <div class="main-text ">Maryalicechester United States 48787-1131</div>
                     </div>
                  </div>
               </div>
               <div class="main-content-wrapper">
                  <div class="main-title">Основная информация</div>
                  <div class="main-content-list">
                     <div class="main-content-list__item" id="job">
                        <div class="main-subtitle">Работа</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text">Consulting Planner (Networking skills) </div>
                     </div>
                     <div class="main-content-list__item" id="phone">
                        <div class="main-subtitle">Номер телeфона</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text">+964 (979) 649-5768 </div>
                     </div>
                     <div class="main-content-list__item" id="card">
                        <div class="main-subtitle">Номер кредитной карты</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text">****-****-****-1137</div>
                     </div>
                     <div class="main-content-list__item" id="strah">
                        <div class="main-subtitle">Страховой номер</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text">447753807</div>
                     </div>
                     <div class="main-content-list__item subcribe" id="subscribe">
                        <div class="main-subtitle">Подписка</div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="load" style="display: none;">
                           <div class="load__item">
                              <div class="load__title">
                                 <div class="activity"></div>
                              </div>
                           </div>
                        </div>
                        <div class="main-text">План: Student</div>
                        <div class="main-text">Статус: Idle</div>
                        <div class="main-text">Метод оплаты: payment_method</div>
                        <div class="main-text">Срок: Monthly</div>
                     </div>
                     <div class="main-content-list__item">
                        <div class="main-btn">Сменить данные пользователя</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main beer " data-id="beer">
            <div class="main-title" id="brand">Hoegaarden</div>
            <div class="main-style pl20" id="style">Light Hybrid Beer</div>
            <div class="main-wrapper ">
               <div class="main-beer-img">
                  <img src="/img/beer.jpg" alt="">
               </div>
               <div class="main-beer-list load-wrapper">

                  <div class="main-beer-list__item" id="name">
                     <div class="main-subtitle">Название:</div>
                     <div class="load" style="display: none;">
                        <div class="load__item">
                           <div class="load__title">
                              <div class="activity"></div>
                           </div>
                        </div>
                     </div>
                     <div class="main-text ">Celebrator Doppelbock </div>
                  </div>

                  <div class="main-beer-list__item" id="structure">
                     <div class="main-subtitle">Состав:</div>
                     <div class="load" style="display: none;">
                        <div class="load__item">
                           <div class="load__title">
                              <div class="activity"></div>
                           </div>
                        </div>
                     </div>
                     <div class="main-text ">TriplePearl , 2206 - Bavarian Lager, Roasted barley</div>
                  </div>

                  <div class="main-beer-list__item" id="blg">
                     <div class="main-subtitle">Плотность пива:</div>
                     <div class="load" style="display: none;">
                        <div class="load__item">
                           <div class="load__title">
                              <div class="activity"></div>
                           </div>
                        </div>
                     </div>
                     <div class="main-text ">12.7°Blg</div>
                  </div>

                  <div class="main-beer-list__item" id="ibu">
                     <div class="main-subtitle">Едениц горечи:</div>
                     <div class="load" style="display: none;">
                        <div class="load__item">
                           <div class="load__title">
                              <div class="activity"></div>
                           </div>
                        </div>
                     </div>
                     <div class="main-text ">81 IBU</div>
                  </div>

                  <div class="main-beer-list__item" id="alco">
                     <div class="main-subtitle">Алкоголь:</div>
                     <div class="load" style="display: none;">
                        <div class="load__item">
                           <div class="load__title">
                              <div class="activity"></div>
                           </div>
                        </div>
                     </div>
                     <div class="main-text ">9.4%</div>
                  </div>
                  <button type="submit" class="main-btn">Другое пиво</button>
               </div>
            </div>
         </div>
      </div>
   </section>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
   <script src="/js/script.js?<?= time() ?>"></script>
</body>

</html>