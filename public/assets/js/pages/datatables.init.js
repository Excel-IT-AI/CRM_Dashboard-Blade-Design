$(document).ready(function () {
    $("#datatable").DataTable(),
    $(".datatable-buttons-class").DataTable(
        {  bSort: false, 
           lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]       
    });
});
