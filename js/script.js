document.addEventListener("DOMContentLoaded", () => {
   const menuBtn = document.querySelector('.header-menu__name'),
      menu = document.querySelector('.header-menu-list'),
      tabParent = document.querySelector('.tab-list'),
      tab = tabParent.querySelectorAll('.tab-list__item'),
      lkItems = document.querySelector('.main-content'),
      form = document.querySelector('.main-header-change-form'),
      beerItems = document.querySelector('.load-wrapper'),
      beerItem = beerItems.querySelectorAll('.main-text'),
      beerLoad = beerItems.querySelectorAll('.load'),
      mainTabs = document.querySelectorAll('.main'),
      changeUser = document.querySelector('.header-menu-list__item.change'),
      openPass = document.querySelector('.header-menu-list__item.pass'),
      loadItem = lkItems.querySelectorAll('.load'),
      lkItem = lkItems.querySelectorAll('.main-text');

   let uid = document.getElementById('uid'),
      username = document.getElementById('username'),
      firstName = document.getElementById('firstname'),
      lastName = document.getElementById('lastname'),
      email = document.getElementById('email'),
      gender = document.getElementById('gender'),
      birth = document.getElementById('birth'),
      address = document.getElementById('address'),
      job = document.getElementById('job'),
      phone = document.getElementById('phone'),
      card = document.getElementById('card'),
      strah = document.getElementById('strah'),
      subscribe = document.getElementById('subscribe'),
      brand = document.getElementById('brand'),
      style = document.getElementById('style'),
      name = document.getElementById('name'),
      structure = document.getElementById('structure'),
      blg = document.getElementById('blg'),
      ibu = document.getElementById('ibu'),
      alco = document.getElementById('alco'),
      pass = '',
      passCrypto = '';

   function closeLoadItem() {
      loadItem.forEach((elem) => {
         elem.style.display = 'none';
      })
      lkItem.forEach((elem) => {
         elem.style.display = 'block';
      })
   }

   function loadWindow() {
      loadItem.forEach((elem) => {
         elem.style.display = 'block';
      })
      lkItem.forEach((elem) => {
         elem.style.display = 'none';
      })
   }

   function closeLoadItemBeer() {
      beerLoad.forEach((elem) => {
         elem.style.display = 'none';
      })
      beerItem.forEach((elem) => {
         elem.style.display = 'block';
      })
   }

   function loadWindowBeer() {
      beerLoad.forEach((elem) => {
         elem.style.display = 'block';
      })
      beerItem.forEach((elem) => {
         elem.style.display = 'none';
      })
   }

   menuBtn.addEventListener('click', e => {
      e.stopPropagation();
      menu.classList.toggle('active');
   });

   tabParent.addEventListener('click', (event) => {
      let target = event.target;
      if (target.classList.contains('tab-list__item')) {
         let page = target.id;
         mainTabs.forEach((e) => {
            e.classList.remove('active')
         })
         document.querySelector(`[data-id=${page}]`).classList.add('active');
         for (let i = 0; i < tab.length; i++) {
            tab[i].classList.remove('active');
         }
         target.classList.add('active');
      }
   });

   changeUser.addEventListener('click', () => {
      loadWindow()
      getUser()
      menu.classList.remove('active');
   })

   document.addEventListener('click', e => {
      let target = e.target;
      let its_menu = target == menu || menu.contains(target);
      let its_menuBtn = target == menuBtn;
      let menu_is_active = menu.classList.contains('active');

      if (!its_menu && !its_menuBtn && menu_is_active) {
         menu.classList.toggle('active');
      }
   })

   lkItems.querySelector('.main-btn').addEventListener('click', function () {
      loadWindow()
      getUser()
   })

   beerItems.querySelector('.main-btn').addEventListener('click', function () {
      loadWindowBeer()
      getBeer()
   })

   form.querySelector('button').addEventListener('click', e => {
      e.preventDefault()
      let password = form.querySelector('#pass').value,
         rePassword = form.querySelector('#re-pass').value;
      if (password === pass && password.length > 3 && rePassword.length > 3) {
         pass = rePassword;
         alert('Пароль успешно изменен. Новый пароль: ' + pass)
      } else {
         alert('Старый пароль должен совпадать с введенным. \nНовый пароль должен иметь более 3-х символов.\nПосмотрите текущий пароль в меню пользователя.')
      }
   })

   openPass.addEventListener('click', () => {
      alert('Ваш пароль: ' + pass)
   })

   const getUser = () => {
      async function getResponse() {
         let response = await fetch('https://random-data-api.com/api/users/random_user');
         let content = await response.json();
         pass = content.password;
         username.lastElementChild.textContent = content.username;
         uid.lastElementChild.textContent = content.uid;
         firstName.lastElementChild.textContent = content.first_name;
         lastName.lastElementChild.textContent = content.last_name;
         email.lastElementChild.textContent = content.email;
         gender.lastElementChild.textContent = content.gender;
         birth.lastElementChild.textContent = content.date_of_birth;
         address.querySelectorAll('.main-text')[0].textContent = content.address.street_address + ' ' + content.address.street_name;
         address.querySelectorAll('.main-text')[1].textContent = content.address.city + ' ' + content.address.state + ' ' + content.address.zip_code;
         job.lastElementChild.textContent = content.employment.title + ' (' + content.employment.key_skill + ')';
         phone.lastElementChild.textContent = content.phone_number;
         card.lastElementChild.textContent = content.credit_card.cc_number;
         strah.lastElementChild.textContent = content.social_insurance_number;
         subscribe.querySelectorAll('.main-text')[0].textContent = 'План: ' + content.subscription.plan;
         subscribe.querySelectorAll('.main-text')[1].textContent = 'Статус: ' + content.subscription.status;
         subscribe.querySelectorAll('.main-text')[2].textContent = 'Статус: ' + content.subscription.payment_method;
         subscribe.querySelectorAll('.main-text')[3].textContent = 'Статус: ' + content.subscription.term;
         closeLoadItem()
      }
      getResponse()
   };

   const getBeer = () => {
      async function getResponse() {
         let response = await fetch('https://random-data-api.com/api/beer/random_beer');
         let content = await response.json();
         name.lastElementChild.textContent = content.name;
         brand.textContent = content.brand;
         style.textContent = content.style;
         structure.lastElementChild.textContent = content.malts + ', ' + content.yeast;
         blg.lastElementChild.textContent = content.blg;
         ibu.lastElementChild.textContent = content.ibu;
         alco.lastElementChild.textContent = content.alcohol;
         closeLoadItemBeer()
      }
      getResponse()
   };


   loadWindow()
   loadWindowBeer()
   getUser()
   getBeer()

});