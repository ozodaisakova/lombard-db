<?php include 'part_header.php'; ?>
<div class="box" style="margin: 15px;">
  <h1 class="title has-text-centered">
    <i class="fas fa-edit"></i>
    &#160;&#160;&#160;
    Прием клиента
  </h1>
  <hr class="navbar-divider">
<form method="POST" action="db_query_save.php">
  <div class="columns">
    <div class="column is-4 card">
      <h4 class="subtitle has-text-centered ">Анкета клиента</h4>
<div class="field">
  <label class="label">Имя</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text"  placeholder="" required  name="c_name">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>


<div class="field">
  <label class="label">Фамилия</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="c_surname" >
    <span class="icon is-small is-left">
      <i class="fas fa-user-alt"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Отечество</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="c_fathername" >
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>


<div class="field">
  <label class="label">Дата рождения</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded datebuy" type="date" placeholder="" required name="c_birthday" >
    <span class="icon is-small is-left">
      <i class="fas fa-calendar-alt"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Место жительства</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required  name="c_adress">
    <span class="icon is-small is-left">
      <i class="fas fa-address-card"></i>
    </span>
  </div>
</div>


<div class="field">
  <label class="label">Номер удостоворения</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="c_document">
    <span class="icon is-small is-left">
      <i class="fas fa-credit-card"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Телефон</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="c_phone">
    <span class="icon is-small is-left">
      <i class="fas fa-phone-square"></i>
    </span>
  </div>
</div>


<div class="field">
  <label class="label">Дата выдачи</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="date" placeholder="" required name="c_date">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>



    </div>
    <div class="column is-4  card">
      <h4 class="subtitle has-text-centered ">Описание предмета залога</h4>
  <div class="field">
  <label class="label">Наименование</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="p_name">
    <span class="icon is-small is-left">
      <i class="fas fa-briefcase"></i>
    </span>
  </div>
  </div>


  <div class="field">
    <label class="label">Категория</label>
  <div class="control has-icons-left">

    <div class="select is-fullwidth is-rounded is-small">
      <select required name="p_category">
        <option selected>Выберите категорию</option>
        <option>Ювелирные украшения</option>
        <option>Техники(смартфон, ноутбук, ТВ и т.д.)</option>
      </select>
    </div>
    <div class="icon is-small is-left">
      <i class="fas fa-globe"></i>
    </div>
  </div>
</div>

  <div class="field">
  <label class="label">Количество</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="p_number">
    <span class="icon is-small is-left">
      <i class="fas fa-sort-numeric-up"></i>
    </span>
  </div>
  </div>


  <div class="field">
    <label class="label">Единица измеренеия</label>
  <div class="control has-icons-left">

    <div class="select is-fullwidth is-rounded is-small">
      <select required name="p_ed">
        <option selected>Выберите </option>
        <option>Грамм </option>
        <option>Штук</option>
        <option>Карат</option>
      </select>
    </div>
    <div class="icon is-small is-left">
      <i class="fas fa-balance-scale"></i>
    </div>
  </div>
</div>


  <div class="field">
  <label class="label">Оценачная стоимость</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="p_price">
    <span class="icon is-small is-left">
      <i class="fas fa-money-bill-wave"></i>
    </span>
  </div>
  </div>

  <div class="field">
    <label class="label">Статус</label>
  <div class="control has-icons-left">

    <div class="select is-fullwidth is-rounded is-small">
      <select required name="p_status">
        <option selected>Выберите статус</option>
        <option>Принят (на склад)</option>
        <option>Возвращен (отдан клиенту)</option>
      </select>
    </div>
    <div class="icon is-small is-left">
      <i class="fas fa-globe"></i>
    </div>
  </div>
</div>


    <div class="field">
    <label class="label">Примечание</label>
    <div class="control  ">
      <textarea class="textarea is-small is-rounded" type="text" placeholder="Отремонтирован, сломан и т.д." name="comment"></textarea>

    </div>
    </div>





    </div>
    <div class="column is-4 card">
      <h4 class="subtitle has-text-centered ">Договор</h4>
  <div class="field">
  <label class="label">Минимальный
срок залога</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="d_min_srok">
    <span class="icon is-small is-left">
      <i class="fas fa-window-minimize"></i>
    </span>
  </div>
  </div>


  <div class="field">
  <label class="label">Максимальный
срок залога</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="d_max_srok">
    <span class="icon is-small is-left">
      <i class="fas fa-window-maximize"></i>
    </span>
  </div>
  </div>

  <div class="field">
  <label class="label">Процент
в день</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="d_percent_day">
    <span class="icon is-small is-left">
      <i class="fas fa-percent"></i>
    </span>
  </div>
  </div>


  <div class="field">
  <label class="label">Гарантированный
срок хранение</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded datebuy" type="date" placeholder="" required name="d_grant_srok">
    <span class="icon is-small is-left">
      <i class="fas fa-clock"></i>
    </span>
  </div>
  </div>

  <div class="field">
  <label class="label">Фактическая
дата выкупа</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="date" placeholder="" required name="d_fact_date">
    <span class="icon is-small is-left">
      <i class="fas fa-calendar"></i>
    </span>
  </div>
  </div>


  <div class="field">
  <label class="label">Фактическая
сумма выкупа</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="text" placeholder="" required name="d_fact_sum">
    <span class="icon is-small is-left">
      <i class="fas fa-money-bill-alt"></i>
    </span>
  </div>
  </div>

  <div class="field">
  <label class="label">Дата возврата</label>
  <div class="control  has-icons-left">
    <input class="input is-small is-rounded" type="date" placeholder="" name="d_back_date" >
    <span class="icon is-small is-left">
      <i class="fas fa-calendar-times"></i>
    </span>
  </div>
  </div>
  <label>&#160;</label>

  <button type="submit" name="save" class="button is-fullwidth is-success">СОХРАНИТЬ</button>
    </div>
  </div>
  <hr class="navbar-divider">
</form>
</div>

<?php include 'part_footer.php'; ?>
