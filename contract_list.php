<?php include 'part_header.php'; ?>
<div class="box" style="margin: 15px;">
  <h1 class="title has-text-weight-bold has-text-centered">Договоры</h1>
  <hr>
  <table id="contract_list" class="display nowrap ma-5" style="width:100%; font-size: 14px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Минимальный<br>срок залога</th>
                <th>Максимальный<br>срок залога</th>
                <th>Процент<br>в день</th>
                <th>Гарантированный<br>срок хранение</th>
                <th>Фактическая<br>дата выкупа</th>
                <th>Фактическая<br>сумма выкупа</th>
                <th>Дата возврата</th>
                <th>Клиент</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
          <?php
          require 'db_connect.php';
          $q = "SELECT * FROM contracts";
          $r = mysqli_query($db, $q) or die(mysqli_error($db));
          if(mysqli_num_rows($r)>0){
            while ($row = mysqli_fetch_array($r)) {
              ?>
              <tr>
                <td> <?php echo $row['id'];   ?>  </td>
                <td> <?php echo $row['min_srok'];   ?> дней</td>
                <td> <?php echo $row['max_srok'];   ?> дней</td>
                <td> <?php echo $row['percent_day'];   ?>  %</td>
                <td> <?php echo $row['grant_srok'];   ?> </td>
                <td> <?php echo $row['fact_day'];   ?> </td>
                <td> <?php echo $row['fact_summa'];   ?> тг</td>
                <td> <?php echo $row['back_date'];   ?> </td>
                <td>
                  <?php
                    $c_id = $row['client_id'];
                    $c_q = "SELECT * FROM clients WHERE id='$c_id'"  ;
                    $c_r = mysqli_query($db, $c_q) or die(mysqli_error($db));
                    $c_row =  mysqli_fetch_array($c_r);
                    echo $c_row['name']."&#160;".$c_row['surname']."<br>".$c_row['fathername'];
                  ?>
                </td>
                <td>
                  <form action="db_query_delete_contract.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'];   ?>">
                    <button type="submit" class="button is-small is-danger is-outlined" name="delete">
                      <span class="icon is-small ">
                        <i class="fas fa-trash"></i>
                      </span>
                    </button>
                  </form>
                </td>
              </tr>
              <?php
            }
          }else{
            ?>
            <tr>
              <td colspan="10">
                <div class="notification is-danger" >
                  <h1 class="has-text-centered ">Нет данных</h1>
                </div>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
    </table>
</div>
<?php include 'part_footer.php'; ?>
