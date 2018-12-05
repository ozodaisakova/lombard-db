<?php include 'part_header.php'; ?>
<div class="box" style="margin: 15px;">
  <h1 class="title has-text-weight-bold has-text-centered">Предметы залога</h1>
 <hr>

<table id="contract_list" class="display  ma-5" style="width:100%; font-size: 14px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Наименование</th>
                <th>Категория</th>
                <th>Количество</th>
                <th>Ед. измерение</th>
                <th>Оценачная стоимость</th>
                <th>Статус</th>
                <th>Примечание</th>
                <th>Код договора</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
          <?php
          require 'db_connect.php';
          $q = "SELECT * FROM products";
          $r = mysqli_query($db, $q) or die(mysqli_error($db));
          if(mysqli_num_rows($r)>0){
            while ($row = mysqli_fetch_array($r)) {
              ?>
              <tr>
                <td> <?php echo $row['id'];   ?>  </td>
                <td> <?php echo $row['name'];   ?> </td>
                <td> <?php echo $row['category'];   ?> </td>
                <td> <?php echo $row['number'];   ?>  </td>
                <td> <?php echo $row['ed'];   ?> </td>
                <td> <?php echo $row['summa'];   ?> </td>
                <td> <?php echo $row['status'];   ?> </td>
                <td> <?php echo $row['comment'];   ?> </td>
                <td>
                  <?php
                    echo $row['contract_id'];
                  ?>
                </td>
                <td>
                  <form action="db_query_delete_product.php" method="post">
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
