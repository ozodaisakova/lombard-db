<?php
require 'part_header.php';
if(isset($_POST['save'])){
  require 'db_connect.php';
  $c_name         = mysqli_real_escape_string($db, trim($_POST['c_name']));
  $c_surname      = mysqli_real_escape_string($db, trim($_POST['c_surname']));
  $c_fathername   = mysqli_real_escape_string($db, trim($_POST['c_fathername']));
  $c_birthday     = mysqli_real_escape_string($db, trim($_POST['c_birthday']));
  $c_birthday     = date('Y-m-d', $c_birthday);
  $c_adress       = mysqli_real_escape_string($db, trim($_POST['c_adress']));
  $c_document     = mysqli_real_escape_string($db, trim($_POST['c_document']));
  $c_phone        = mysqli_real_escape_string($db, trim($_POST['c_phone']));
  $c_date         = mysqli_real_escape_string($db, trim($_POST['c_date']));

  $p_name         = mysqli_real_escape_string($db, trim($_POST['p_name']));
  $p_category     = mysqli_real_escape_string($db, trim($_POST['p_category']));
  $p_number       = mysqli_real_escape_string($db, trim($_POST['p_number']));
  $p_ed           = mysqli_real_escape_string($db, trim($_POST['p_ed']));
  $p_price        = mysqli_real_escape_string($db, trim($_POST['p_price']));
  $p_status       = mysqli_real_escape_string($db, trim($_POST['p_status']));
  $p_comment      = mysqli_real_escape_string($db, trim($_POST['p_comment']));

  $d_min_srok     = mysqli_real_escape_string($db, trim($_POST['d_min_srok']));
  $d_max_srok     = mysqli_real_escape_string($db, trim($_POST['d_max_srok']));
  $d_percent_day  = mysqli_real_escape_string($db, trim($_POST['d_percent_day']));
  $d_grant_srok   = mysqli_real_escape_string($db, trim($_POST['d_grant_srok']));
  $d_fact_date    = mysqli_real_escape_string($db, trim($_POST['d_fact_date']));
  $d_fact_sum     = mysqli_real_escape_string($db, trim($_POST['d_fact_sum']));
  $d_back_date    = mysqli_real_escape_string($db, trim($_POST['d_back_date']));

  mysqli_query($db , "INSERT INTO clients  (name, surname, fathername, birthday, adress, document, phone, date_keep)  VALUES  ('$c_name', '$c_surname', '$c_fathername', '$c_birthday', '$c_adress', '$c_document', '$c_phone', '$c_date')") or die(mysqli_error($db));
  $c_id = mysqli_query($db, "SELECT MAX(id) FROM clients") or die(mysqli_error($db));
  $c_id = mysqli_fetch_array($c_id);
  $c_id = $c_id[0];
  mysqli_query($db, "INSERT INTO contracts  (min_srok, max_srok, percent_day, grant_srok, fact_date, fact_summa, back_date, client_id)  VALUES   ('$d_min_srok',  '$d_max_srok', '$d_percent_day', '$d_grant_srok', '$d_fact_date', '$d_fact_sum', '$d_back_date', '$c_id')") or die(mysqli_error($db));
  $d_id = mysqli_query($db, "SELECT MAX(id) FROM contracts") or die(mysqli_error($db));
  $d_id = mysqli_fetch_array($d_id);
  $d_id = $d_id[0];
  mysqli_query($db, "INSERT INTO products (name, category, number, ed, summa, status, comment, contract_id) VALUES ('$p_name', '$p_category', '$p_number', '$p_ed', '$p_price', '$p_status', '$p_comment', '$d_id')") or die(mysqli_error($db));
?>
<div class="card" style="width: 400px; margin: auto; margin-top: 50px;">
  <article class="message is-success">
  <div class="message-header">
    <p>Статус</p>
    <!-- <button class="delete" aria-label="delete"></button> -->
  </div>
  <div class="message-body">
    <h1 class="subtitle has-text-success has-text-centered"><i class="fas fa-info-circle"></i> Данные успешно сохранены</h1>
  </div>
  </article>
</div>

<?php

}
require 'part_footer.php';

?>
