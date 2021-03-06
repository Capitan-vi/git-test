<?php include_once __DIR__ . '/templates/_header.php' ?>

<header>
  <div class="container clearfix">
    <!-- логотип -->
    <a href="index.html" class="logo">Yellow Duck</a>
    <!-- меню -->
    <nav>
      <ul>
        <li><a href="">О Компании</a></li>
        <li><a href="">Каталог</a></li>
        <li><a href="">Доставка и оплата</a></li>
        <li><a href="">Контакты</a></li>
      </ul>
    </nav>
  </div>
</header>
<section>
<div class="container">
  <div class="row clearfix">
      <!-- боковое меню -->
    <aside class="column column3">
      <h2>Каталог</h2>
      <ul>
        <li><a href="#">Маленькие уточки</a></li>
        <li><a href="">Утки с моторчиком</a></li>
        <li><a href="">Подводные уточки</a></li>
        <li><a href="">Уточки ручной работы</a></li>
        <li><a href="">Говорящие уточки</a></li>
      </ul>
    </aside>
    <div class="column column9">
      <div class="catalog">
        <!-- хлебные крошки -->
        <div class="breadcrumbs">
          <a href="index.html">Магазин</a>
          <p>Мини - утки</p>
        </div>
        <div class="row clearfix">
          <!-- элементы каталога -->
          <?php
            for ($i = 0; $i < 18; $i++):
              include '/templates/_shop-element.php';
            endfor;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<footer>
  <div class="container">
    <p> © Epic Skills</p>
  </div>
</footer>
