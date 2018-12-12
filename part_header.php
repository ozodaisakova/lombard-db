<!DOCTYPE html>
<html lang="kz" >
  <head>
    <meta charset="utf-8">
    <title>База данных ломбард</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="tables/datatables.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="tables/datatables.min.js"></script>
    <style media="screen">
      .navbar{
        box-shadow: 0px 0px 5px grey;
      }
    </style>
  </head>
  <body>
    <nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
    <img src="images/lombard.jpg" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item" href="/">
        <i class="fas fa-plus-square"></i>
         &#160;&#160;Прием клиента
      </a>
      <a class="navbar-item" href="back.php">
        <i class="fas fa-undo"></i>
         &#160;&#160;Возврат залога
      </a>
      <a class="navbar-item" href="contract_list.php">
        <i class="fas fa-handshake"></i>
         &#160;&#160;Договоры
      </a>
      <a class="navbar-item" href="product_list.php">
        <i class="fas fa-tags"></i>
         &#160;&#160;Предметы залога
      </a>
      <a class="navbar-item" href="client_list.php">
        <i class="fas fa-users"></i>
         &#160;&#160;Клиенты
      </a>
      <a href="">&#160;&#160;&#160;&#160;&#160;&#160;</a>
      <!-- <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
          <i class="fas fa-sort"></i>
           &#160;&#160;Сортировать
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">

             По имени&#160;&#160;
             <i class="fas fa-sort-alpha-up"></i>
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">

             По имени&#160;&#160;
             <i class="fas fa-sort-alpha-down"></i>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            По цене&#160;&#160;
            <i class="fas fa-sort-amount-down"></i>
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
            По цене&#160;&#160;
            <i class="fas fa-sort-amount-up"></i>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</nav>
