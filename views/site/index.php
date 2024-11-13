<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="site-index">

  <div class="home-container">
    <h1 class="main-title">Добро пожаловать в наш техникум!</h1>
    <p class="sub-title">Учись у лучших, создавай будущее!</p>

    <div class="slider">
      <div class="slide">
        <img src="https://i.vuzopedia.ru/storage/app/uploads/public/637/a28/973/637a28973f8a7772195553.jpg" alt="Изображение 1" class="slider-image" />
      </div>
      <div class="slide">
        <img src="https://allcollege.ru/images/aptangarsk.jpg" alt="Изображение 2" class="slider-image" />
      </div>
      <div class="slide">
        <img src="https://www.informio.ru/imgs/fotos/Angarskii_politehnicheskii_teh._.jpg" alt="Изображение 3" class="slider-image" />
      </div>
    </div>

    <div class="description">
      <p>
        Наш техникум предлагает разнообразные курсы и программы, направленные на подготовку высококвалифицированных специалистов в разных областях. Мы гордимся нашим современным оборудованием и высококлассными преподавателями. Присоединяйтесь к нам и получите шанс на успешное будущее!
      </p>
    </div>
  </div>

  <script>
    // Инициализация слайдера
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    // Функция для показа слайда
    function showSlide(index) {
      // Скрываем все слайды
      slides.forEach(slide => {
        slide.style.display = 'none';
      });

      // Показываем текущий слайд
      slides[index].style.display = 'block';
    }

    // Функция для перехода к следующему слайду
    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides; // Переход к следующему слайду
      showSlide(currentSlide);
    }

    // Показываем первый слайд при загрузке страницы
    showSlide(currentSlide);

    // Автоматическое переключение слайдов каждые 3 секунды
    setInterval(nextSlide, 3000);
  </script>
</div>
