<?php include 'part_header.php'; ?>
<div class="box" style="margin: 15px;">
  <h1 class="title has-text-weight-bold has-text-centered">Возврат залога</h1>
 <hr>

<table id="contract_list" class="display  ma-5" style="width:100%; font-size: 14px;">
        <thead>
            <tr>
                <th>№</th>
                <th>Код договора</th>
                <th>Наименование</th>
                <th>Категория</th>
                <th>Возврат товара</th>
            </tr>
        </thead>
        <tbody>
          <?php
          require 'db_connect.php';
          $q = "SELECT * FROM products ORDER  BY back DESC;";
          $r = mysqli_query($db, $q) or die(mysqli_error($db));
          if(mysqli_num_rows($r)>0){
            while ($row = mysqli_fetch_array($r)) {
              ?>
              <tr>
                <td> <?php echo ++$i;   ?>  </td>
                <td> <?php echo $row['contract_id'];   ?>  </td>
                <td> <?php echo $row['name'];   ?> </td>
                <td> <?php echo $row['category'];   ?> </td>
                <td>
                    <input type="checkbox" name="id"  onclick="back(<?php echo $row['id'];?>, <?php echo $row['back'];?>)" <?php
                    if($row['back']!=0){
                      echo "checked";
                    }

                     ?>>
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
