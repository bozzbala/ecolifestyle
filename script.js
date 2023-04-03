var options = {
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
    x0: 10,
    x1: 60,
    y1: 50,
    x2: 60,
    y2: 45,
    x3: 15
  }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
  flkty.slides.forEach(function (slide, i) {
    var image = slides[i];
    var x = (slide.target + flkty.x) * -1/3;
    image.style.backgroundPosition = x + 'px';
  });
});

window.onscroll = () => {hideHeader()};

const hideHeader = () => {
  if (document.documentElement.scrollTop > 720) {
    document.getElementsByTagName("header")[0].style.display = "none";
  }
  else{
    document.getElementsByTagName("header")[0].style.display = "flex";
  }
}


const aboutBox = document.getElementsByClassName('about__box');

window.addEventListener('scroll', () => {
  const scrolled = document.documentElement.scrollTop;
  let elementPosition = [aboutBox[0].offsetTop, aboutBox[1].offsetTop, aboutBox[2].offsetTop, aboutBox[3].offsetTop];
  let images = document.getElementsByClassName("about__image");
  let texts = document.getElementsByClassName("about__text");
  let mobile = document.getElementsByClassName("about__text_mobile");
  for(let i = 0; i < elementPosition.length; i++){
      console.log(Math.round(scrolled) + "--------------" + elementPosition[i]);
      if(Math.round(scrolled) >= elementPosition[i]-600){
          if(i%2==0){
              images[i].className = "about__image slide-left";
              texts[i].className = "about__text slide-right";
              mobile[i].className = "about__text_mobile slide-right";
          }
          else{
              images[i].className = "about__image slide-right";
              texts[i].className = "about__text slide-left";
              mobile[i].className = "about__text_mobile slide-left";
          }
      }
      else if(scrolled < elementPosition[i]-600){
          if(i%2==0){
              images[i].className = "about__image";
              texts[i].className = "about__text";
              mobile[i].className = "about__text_mobile";
          }
          else{
              images[i].className = "about__image";
              texts[i].className = "about__text";
              mobile[i].className = "about__text_mobile";
          }
      }

  }
})






//calc


// Получаем необходимые элементы со страницы
const inputBox = document.querySelector('.inputBox input');
const select = document.querySelector('.inputBox__select select');
const button = document.querySelector('.calculator__button');
const res1 = document.getElementById('res1');
const res2 = document.getElementById('res2');
const res3 = document.getElementById('res3');

// Создаем функцию для расчетов
function calculate() {
  const value = parseFloat(inputBox.value);
  const option = select.value;
  
  let total, average, comparison;
  switch (option) {
    case 'E':
      total = value * 1000;
      average = 110000;
      avg = total / 30;
      if (total > average) {
        comparison = `Ваше потребление ${value} кВт-ч в месяц превышает на ${(total / average - 1) * 100}% среднего значения`;
      } else {
        comparison = `Ваше потребление ${value} кВт-ч в месяц меньше на ${(1 - total / average) * 100}% среднего значения`;
      }
      break;
    case 'W':
      total = value * 0.001;
      average = 6.935;
      avg = value / 30;
      if (total > average) {
        comparison = `Ваше потребление ${value} куб. м воды в месяц превышает на ${(total / average - 1) * 100}% среднего значения`;
      } else {
        comparison = `Ваше потребление ${value} куб. м воды в месяц меньше на ${(1 - total / average) * 100}% среднего значения`;
      }
      break;
    case 'G':
      total = value * 0.001;
      average = 6.49;
      avg = value / 30;
      if (total > average) {
        comparison = `Ваше потребление ${value} куб. м газа в месяц превышает на ${(total / average - 1) * 100}% среднего значения`;
      } else {
        comparison = `Ваше потребление ${value} куб. м газа в месяц меньше на ${(1 - total / average) * 100}% среднего значения`;
      }
      break;
    default:
      alert('Выберите тип ресурса!');
      return;
  }
  
  res1.textContent = `${total.toFixed(2)} ${option === 'E' ? 'Ватт' : 'куб. м'}`;
  res2.textContent = `${avg.toFixed(2)} ${option === 'E' ? 'Ватт' : 'л.'} в день`;
  res3.textContent = comparison;
}


// Добавляем обработчик события на кнопку "Рассчитать"
button.addEventListener('click', calculate);
