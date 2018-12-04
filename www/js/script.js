$(document).ready(function () {
    $(".navbar-burger").click(function () {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });

    $('#example').DataTable( {
        "scrollX": true,
        "language": {
          "paginate": {
            "previous": "Пред.",
            "next": "След.",
          },
          "search": "Поиск:",
          "emptyTable": "Нет данных",
          "sLengthMenu": "Показать _MENU_ записей",
          "info":"Показано от _START_ до _END_ записей из _TOTAL_ существующих"
        }
    } );


    $(".datebuy").flatpickr(optional_config);
});
