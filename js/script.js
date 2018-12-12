$(document).ready(function () {
    $(".navbar-burger").click(function () {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });

    $('#contract_list').DataTable( {
        "scrollX": true,
        "lengthMenu": [[5, 10, 15], [5, 10, 15]],
        "language": {
          "paginate": {
            "previous": "Пред.",
            "next": "След.",
          },
          "search": "Поиск:",
          "emptyTable": "Нет данных",
          "sLengthMenu": "Показать _MENU_ записей",
          "info":"Показано от _START_  до  _END_ записей из _TOTAL_ существующих"
        }
    } );
});


function back(id, back){
  $.ajax({
    url: "db_query_product_back.php",
    type: "POST",
    data: {
      id: id,
      back: back
    },
    success: function(data){
      if(data==1){
        window.location.href = "/back.php";
      }else{
        alert("ERROR! BAD REQUEST!"+ data);
      }
    }
  });
}
