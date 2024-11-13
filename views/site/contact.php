<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>
  <style>
    /* Общие стили для страницы */
    .contact-container {
      padding: 40px;
      text-align: center;
    }

    .main-title {
      font-size: 3rem;
      color: #2C3E50;
      margin-bottom: 20px;
    }

    .contact-info {
      font-size: 1.2rem;
      color: #34495E;
      margin-bottom: 20px;
    }

    .contact-info a {
      color: #3498db;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    /* Стили для секции с должностными лицами */
    .section-title {
      font-size: 2rem;
      color: #2C3E50;
      margin-top: 40px;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }

    .team-member {
      width: 220px;
      text-align: center;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .team-member-image {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .team-member-name {
      font-size: 1.2rem;
      font-weight: bold;
      color: #2C3E50;
    }

    .team-member-position {
      font-size: 1rem;
      color: #7f8c8d;
    }

    /* Стили для карты */
    .map-container {
      margin-top: 40px;
    }

    iframe {
      border: 0;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <div class="contact-container">
    <h1 class="main-title">Контакты</h1>
    <p class="contact-info">
      Свяжитесь с нами по электронной почте: <a href="mailto:example@example.com">example@example.com</a>
    </p>
    <p class="contact-info">
      Адрес: ул. Примерная, 123, г. Москва, Россия
    </p>
    <p class="contact-info">
      Телефон: <a href="tel:+7-800-555-35-35">+7-800-555-35-35</a>
    </p>

    <!-- Должностные лица -->
    <h2 class="section-title">Наши специалисты</h2>
    <div class="team-container">
      <!-- Член команды 1 -->
      <div class="team-member">
        <img src="https://static.tildacdn.com/tild3030-6366-4366-a338-363535653437/1.jpg" alt="Иван Иванов" class="team-member-image" />
        <h3 class="team-member-name">Иван Иванов</h3>
        <p class="team-member-position">Директор</p>
      </div>

      <!-- Член команды 2 -->
      <div class="team-member">
        <img src="https://png.pngtree.com/png-vector/20240627/ourlarge/pngtree-business-woman-with-her-colleagues-job-beautiful-togetherness-png-image_12871819.png" alt="Анна Петрова" class="team-member-image" />
        <h3 class="team-member-name">Анна Петрова</h3>
        <p class="team-member-position">Заместитель директора</p>
      </div>

      <!-- Член команды 3 -->
      <div class="team-member">
        <img src="https://citrusfoto.ru/sites/default/files/uslugi/delovoy-portret.jpg" alt="Сергей Смирнов" class="team-member-image" />
        <h3 class="team-member-name">Сергей Смирнов</h3>
        <p class="team-member-position">Преподаватель</p>
      </div>

      <!-- Член команды 4 -->
      <div class="team-member">
        <img src="https://png.pngtree.com/png-vector/20231201/ourlarge/pngtree-business-woman-portraitcrossed-arms-lady-png-image_10801334.png" alt="Мария Кузнецова" class="team-member-image" />
        <h3 class="team-member-name">Мария Кузнецова</h3>
        <p class="team-member-position">Менеджер по учебному процессу</p>
      </div>

      <!-- Член команды 5 -->
      <div class="team-member">
        <img src="https://avdeychev-photo.ru/images/biznes-portret/avdeychev-photo-14.jpg" alt="Алексей Дмитриев" class="team-member-image" />
        <h3 class="team-member-name">Алексей Дмитриев</h3>
        <p class="team-member-position">Главный бухгалтер</p>
      </div>

      <!-- Член команды 6 -->
      <div class="team-member">
        <img src="https://i.pinimg.com/736x/43/5a/19/435a19a61a46a262e3092e6f3b6dde1d.jpg" alt="Елена Васильева" class="team-member-image" />
        <h3 class="team-member-name">Елена Васильева</h3>
        <p class="team-member-position">Координатор по связям с общественностью</p>
      </div>
    </div>

    <!-- Карта -->
    <h2 class="section-title">Как нас найти</h2>
    <div class="map-container">
      <iframe
        width="100%"
        height="400"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.7312578968385!2d13.400997215664423!3d48.57669577926087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774587a033afe85%3A0x131e242839dd6ec5!2sBaumannstra%C3%9Fe%2023%2C%2094036%20Passau!5e0!3m2!1sde!2sde!4v1622749876688!5m2!1sde!2sde"
      ></iframe>
    </div>
  </div>


</div>
