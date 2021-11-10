window.onload = function() {



//бургер
const header__burger = document.querySelector('.header__burger');
const menu__nav = document.querySelector('.menu__nav');
const menu__link = document.querySelectorAll('.menu__link');
header__burger.addEventListener('click', (event) => { 
  header__burger.classList.toggle('active');
  menu__nav.classList.toggle('active');
})
for (i = 0; i < menu__link.length; i++) {
  menu__link[i].addEventListener('click', (event) => { 
  header__burger.classList.toggle('active');
  menu__nav.classList.toggle('active');
})
}

//затемнение при прокрутке
window.addEventListener('scroll', function(e) {
const scro = document.querySelector('.menu');
if(pageYOffset > 100){
  scro.style.transition = '0.5s';
  scro.style.backgroundColor = '#000000';
}else{
  scro.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
}
});


function ibg(){
let ibg=document.querySelectorAll(".ibg");
for (var i = 0; i < ibg.length; i++) {
if(ibg[i].querySelector('img')){
ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
}
}
}
ibg();





if(window.location.pathname.indexOf('portfolio') === -1 && window.location.pathname.indexOf('calc') === -1){
 console.log('страничка index')

       //плавный скрол
      document.querySelectorAll('._slow_scroll').forEach(link => {
          link.addEventListener('click', function(e) {
              e.preventDefault();
              let arr= this.getAttribute('href').split('#');//достаем ссылку делим ее по #  
              let href = arr[arr.length - 1];//достаем последний элимент массива это и будет название нужного нам блока
              const scrollTarget = document.getElementById(href);
               const topOffset = document.querySelector('.menu').offsetHeight;
             // const topOffset = 0; // если не нужен отступ сверху 
              const elementPosition = scrollTarget.getBoundingClientRect().top;//возвращает размер элемента и его позицию относительно viewport (часть страницы, показанная на экране, и которую мы видим).
              const offsetPosition = elementPosition - topOffset;
              window.scrollBy({
                  top: offsetPosition,
                  behavior: 'smooth'
              });
          });
      });


      //ленивая загрузка
      const lazy = document.querySelectorAll('img[data-src], iframe[data-src_vid]');
      const windowHeight = document.documentElement.clientHeight;//общая высота

      let lazyPosition = [];//массив с позициями элементов которые надо будет подгрузить

      if(lazy.length>0){//если есть хоть один элимент
        lazy.forEach(item => {//проходимся по всему масиву
          if(item.dataset.src || item.dataset.src_vid){//проверяем есть ли какие либо данные
            //Element.getBoundingClientRect() возвращает размер элемента и его позицию относительно viewport (часть страницы, показанная на экране, и которую мы видим).
            lazyPosition.push(item.getBoundingClientRect().top + pageYOffset )//pageYOffset  возвращает количество пикселей, на которое прокручен документ по вертикали
          lazyScrollCheck()
            
          }
        });
      }

      window.addEventListener("scroll", lazyScroll)

      function lazyScroll(){
        if(document.querySelectorAll('img[data-src], iframe[data-src_vid]').length>0)//эта проверка сдесь так как после каждого загруженного элемента мы убираем его из массива
        lazyScrollCheck()
      }

      function lazyScrollCheck(){
        //findIndex() возвращает индекс в массиве, если элемент удовлетворяет условию проверяющей функции. В противном случае возвращается -1.
        //item - позиция какогото из элементов который надо подгрузить
        // в момент когда в на нижней границе экрана появится элимент, сработает условие в нутри findeIndex и на вернется индек того элемента который надо подгружать
        let elemIndex = lazyPosition.findIndex(
           item =>  pageYOffset > item - windowHeight
          );
        if(elemIndex >= 0){//если нашолся то 
          if(lazy[elemIndex].dataset.src){
            lazy[elemIndex].src = lazy[elemIndex].dataset.src;//засовываем в src нужный петь
            lazy[elemIndex].removeAttribute('data-src');//удаляем ненужный атрибут
          }else if(lazy[elemIndex].dataset.src_vid){
            lazy[elemIndex].src = lazy[elemIndex].parentElement.dataset.vid;//src берем у родителя так как dataset у iframe не прописывается
            lazy[elemIndex].removeAttribute('data-src_vid');
          }
          delete lazyPosition[elemIndex];
        }
      }






         //дрон
        const p = document.querySelector('.main_drone_img'),
            fluigeart = window.matchMedia("(min-width: 726px)");//ширина экрана
            wrapper.addEventListener('mousemove', function(e) {
             if(fluigeart.matches){
                p.style.transform = `translate(${e.clientX/14}px, ${e.clientY/14}px)`;
               }
               
            });



      


      


      //форма
      const form = document.getElementById('form');
       var URL = form.getAttribute("action");
      const kontakt = document.getElementById('kontakt');
      const message = document.getElementById('message');
       let formReq = document.querySelectorAll('._req');
      form.addEventListener('submit', formSend); 




     async function formSend(e){
        e.preventDefault();
        let error = formValidate(form);// проверяем своим валидатором


        //если нет ошибок
         if(error === 0){
        let formData = new FormData(form);
         
            kontakt.classList.add('_sending');//когда убедились что ошибок нет, делаем так что бы посетитель понял что почта отправляется


            let response = await fetch(URL, {
              method: 'POST',
              body: formData
            });
            if(response.ok){//проверка пришол ли вообще ответ от сервера
              let result = await response.json();//получаем ответ
              if(result.success){//проверка валидатора который находится на сервере
               console.log(result)
                   form.reset();
                   kontakt.classList.remove('_sending');
                   //выыодим сообщение об успехе
                  message.className = 'message';//оставляем только класс message(на случай если посетитель уже совершал ошибку то там будет еще и _error, нам такое не недо)
                message.classList.add('_success');
                   message.innerHTML = 'List wysłany';
                    for(let index = 0; index < formReq.length; index++){//удоляем все плейсхолдеры если в них были сообщения об ошибках
                      const input = formReq[index];
                        input.placeholder = '';
                    }
              }else{//проверка валидатора который находится на сервере
                form.reset();
                   kontakt.classList.remove('_sending');
                    for(let index = 0; index < formReq.length; index++){//удоляем все плейсхолдеры если в них были сообщения об ошибках
                      const input = formReq[index];
                        input.placeholder = '';
                    }
                    message.classList.add('_false');
                     message.innerHTML = 'Wypełnij poprawnie wymagane pola';
              }
             
            }else{////проверка пришол ли вообще ответ от сервера
              form.reset();
                   kontakt.classList.remove('_sending');
                    for(let index = 0; index < formReq.length; index++){//удоляем все плейсхолдеры если в них были сообщения об ошибках
                      const input = formReq[index];
                        input.placeholder = '';
                    }
                     message.classList.add('_false');
                     message.innerHTML = 'Wystąpił błąd';
            }
     
     }else{//проверка нашего валидатора js
       message.classList.add('_false');
      message.innerHTML = 'Wypełnij poprawnie wymagane pola';
             }

        }

      function formValidate(form){
        let error = 0;
       
        for(let index = 0; index < formReq.length; index++){
          const input = formReq[index];
          formRemoveError(input);

          if(input.classList.contains('_email')){

            if(input.value === ''){
              input.placeholder = 'To pole jest wymagane';
               formAddError(input);
               error++;
            }
            if(input.value != '' && !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value)){
              input.value = '';
               input.placeholder = 'Proszę wpisać poprawnie adres e-mail';
              formAddError(input);
              error++;
            }
          } else if(input.classList.contains('_text')){
              if(input.value === ''){
                input.placeholder = 'To pole jest wymagane';
                 formAddError(input);
                 error++;
              }
              if(input.value != '' && input.value.length < 2){
                input.value = '';
                input.placeholder = 'minimalna liczba znaków 2';
                 formAddError(input);
                 error++;
              }
              if(input.value != '' && input.value.length > 100){
                input.value = '';
                input.placeholder = 'maksymalna liczba znaków 100';
                 formAddError(input);
                 error++;
              }
            }  
      }
      return error;
      }

      function formAddError(input){
        
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
      }

      function formRemoveError(input){
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
      }
}else if(window.location.pathname.indexOf('calc') === -1){
  console.log('страничка portfolio')
   var swiper = new Swiper('.foto_swiper', {
 effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
    });

  var swiper = new Swiper('.video_swiper', {
 effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
    });

//если мы на страничке потфолио то запустыться и остальные скрипты

function videoPopup(){
const video_popup_img = document.querySelectorAll('.video_popup')//все Контейнеры с фотками внутри, они засунуты бекграундом с  ibg()
const modal_video_body = document.querySelector('.modal_video_body')
const modalvideo = document.querySelector('.modalvideo')
const modal_for_video = document.querySelector('.modal_for_video')
const vid = document.getElementById("myVideo");
const video_pauses = document.getElementById("video_pauses");

//console.log(video)
console.log(vid)

if(video_popup_img && modal_for_video && modal_video_body){
  for (i = 0; i < video_popup_img.length; i++) {
video_popup_img[i].addEventListener('click', (event) => { 
    src = event.target.dataset.src;
    modalvideo.src = this.src;
     modal_for_video.classList.add("active");
     modal_video_body.classList.add("active");
      
   })
}

}

video_pauses.addEventListener('click', (event) => {
  vid.pause();
  modal_for_video.classList.remove("active");
modal_video_body.classList.remove("active");

})

}

videoPopup()
}

else{
  console.log('колькулятор')
//колькулятор цен
      let vol = document.getElementById('vol');// куда выводим сумму
      let formSelect_rodzaj = document.getElementById('formSelect_rodzaj');
      let formSelect_montag = document.getElementById('formSelect_montag');
      let formSelect_muzyka = document.getElementById('formSelect_muzyka');

      let range = document.getElementById('formRange');
      let range_value_div = document.getElementById('range_value_div');//где будем показывать минуты
      let range_price = Number(range.dataset.price);//достаем стоимость одной минуты
      range_value_div.innerHTML = range.value;//показываем изночальное количество минут


      let checkbox_input_lektor = document.getElementById('checkbox_input_lektor');
      let checkbox_input_chrom = document.getElementById('checkbox_input_chrom');
      let checkbox_input_promowanie = document.getElementById('checkbox_input_promowanie');

      let lektor_price = Number(checkbox_input_lektor.dataset.price);
      let chrom_price = Number(checkbox_input_chrom.dataset.price);
      let promowanie_price = Number(checkbox_input_promowanie.dataset.price);


      let inputs = document.getElementsByClassName('input');
      for (i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('input', () => {//любое изменение в инпутах
        let res = 0;//обнуляем каждый раз
        vol.innerHTML = res;
        if (checkbox_input_lektor.checked){ 
                res = res + lektor_price;
            }
         if (checkbox_input_chrom.checked){ 
            res = res + chrom_price;
        }
          if (checkbox_input_promowanie.checked){ 
            res = res + promowanie_price;
        }

        //достаем цену выбранного пункта из data-price пункта option 
        let select_rodzaj_sum = Number(formSelect_rodzaj.options[formSelect_rodzaj.selectedIndex].getAttribute('data-price'));
        let select_montag_sum = Number(formSelect_montag.options[formSelect_montag.selectedIndex].getAttribute('data-price'));
        let select_muzyka_sum = Number(formSelect_muzyka.options[formSelect_muzyka.selectedIndex].getAttribute('data-price'));

        // умножаем минуты на стоимость 1 минуты
        let range_sum = range.value * range_price;
        range_value_div.innerHTML = range.value;//показываем количество минут

        res = res + range_sum + select_rodzaj_sum + select_montag_sum + select_muzyka_sum;
        vol.innerHTML = res;

        });
      }

}



}










