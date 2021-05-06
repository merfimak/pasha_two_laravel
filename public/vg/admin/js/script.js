window.onload = function() {
function ibg(){
let ibg=document.querySelectorAll(".ibg");
for (var i = 0; i < ibg.length; i++) {
if(ibg[i].querySelector('img')){
ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
}
}
}
ibg();



//исчезновение плашки об успехе
setTimeout(function(){
success.style.display = "none";},3000);


if(window.location.pathname.indexOf('main') !== -1){
  console.log(window.location.pathname)
 console.log('страничка index')
//ленивая загрузка
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

}





















}










