<?php
if(isset($_POST['delete'])){
  $id=$_POST[id];
  require 'db_connect.php';
  mysqli_query($db, "DELETE FROM contracts WHERE id='$id'") or die(mysqli_error($db));
}
echo "<script>
        window.location.href='contract_list.php';
      </script>";
?>
