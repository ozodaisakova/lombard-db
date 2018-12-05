<?php include 'part_header.php'; ?>
<div class="box" style="margin: 15px;">
  <h1 class="title has-text-weight-bold has-text-centered">Клиенты</h1>
  <hr>
<table id="contract_list" class="display  ma-5" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отечество</th>
                <th>Дата рождения</th>
                <th>Место жительства</th>
                <th>Номер удостоворения</th>
                <th>Телефон</th>
                <th>Дата выдачи</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
          <?php
          require 'db_connect.php';
          $q = "SELECT * FROM clients";
          $r = mysqli_query($db, $q) or die(mysqli_error($db));
          if(mysqli_num_rows($r)>0){
            while ($row = mysqli_fetch_array($r)) {
              ?>
              <tr>
                <td> <?php echo $row['id'];   ?>  </td>
                <td> <?php echo $row['name'];   ?> </td>
                <td> <?php echo $row['surname'];   ?> </td>
                <td> <?php echo $row['fathername'];   ?>  </td>
                <td> <?php echo $row['birthday'];   ?> </td>
                <td> <?php echo $row['adress'];   ?> </td>
                <td> <?php echo $row['document'];   ?> </td>
                <td> <?php echo $row['phone'];   ?> </td>
                <td> <?php echo $row['date_keep'];   ?> </td>
                <td>
                  <form action="db_query_delete_client.php" method="post">
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
