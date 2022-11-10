function colorChange(par){
  par.style.color='red';
}
$(function() {     
  $('.user-avatar').on('click', function(e) {
    e.preventDefault();
    $('.box').toggleClass('hide');
  });
});

$(document).ready(() =>{
  $('#Ocultar').click(function(){
    $('#ocultar').hide();
  });
});

var $fileName1 = 'Query1';

$(document).ready( function () {
  $('#tbldata').DataTable({
        fixedHeader: true,
        colReorder: true,
        responsive: true,
        sPaginationType: 'full_numbers',
        bLengthChange: true,
        aLengthMenu: [[5, 10, 15, 20, -1], [5, 10, 15, 20, , "All"]],
        iDisplayLength: 5,
        aaSorting: [1, 'asc'],
        dom: 'QBlfrtip',
        buttons: [
            {
                extend: 'colvis',
            },
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                extend: 'csv',
                filename: $fileName1,
                exportOptions: {
                    columns: ':visible'
                }
            },
            {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                extend: 'excel',
                filename: $fileName1,
                exportOptions: {
                    columns: ':visible'
                }
            },
            {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                extend: 'pdf',
                filename: $fileName1,
                exportOptions: {
                    columns: ':visible'
                }
            }, 'print',
            {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                text: 'JSON',
                action: function (e, dt, button, config) {
                    var data = dt.buttons.exportData();

                    $.fn.dataTable.fileSave(
                        new Blob([JSON.stringify(data)]),
                        'DatosQuery1.json'
                    );
                }
            }
        ],
        
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
    }, select: {
        info: true,
        style: 'multi',
        selector: 'td'
        },
        searching: {
        return: true
    }, 
        //{ dom: 'Bfrtip', buttons: ['colvis', 'excel', 'print'] }
        //  "bJQueryUI": true
        // "sDom": 'l<"H"Rf>t<"F"ip>'
    });
  $(document).contextmenu({
               delegate: ".dataTable td",
               menu: [
                   { title: "Filter", cmd: "filter", uiIcon: "ui-icon-volume-off ui-icon-filter" },
                   { title: "Remove filter", cmd: "nofilter", uiIcon: "ui-icon-volume-off ui-icon-filter" },
                   { title: "Cut", cmd: "Cut", uiIcon: "ui-icon-volume-off ui-icon-filter" },
                   { title: "Pest", cmd: "Pest", uiIcon: "ui-icon-volume-off ui-icon-filter" },
                   { title: "Exclude", cmd: "Exclude", uiIcon: "ui-icon-volume-off ui-icon-filter" }
               ],
               select: function (event, ui) {
                   var coltext = ui.target.text().trim();
                   var colvindex = ui.target.parent().children().index(ui.target);
                   var colindex = $('table thead tr th:eq(' + colvindex + ')').data('column-index');
                   switch (ui.cmd) {
                       case "filter":
                           oTable.fnFilter(coltext.trim(), colindex, true);
                           break;
                       case "nofilter":
                           oTable.fnFilter('');
                           break;
                       case "Cut":

                           alert('Column index 0 is ' +
                               (employeeTable.column(0).visible() === true ? 'visible' : 'not visible')
                           );
                           break;
                       case "Exclude":
                           //
                           oTable.fnSetColumnVis(columnIndex, false);
                           //var oSettings = // you can find all sorts of goodies in the Settings
                           // var col_id = oSettings.colindex;
                           //alert('Clicked on cell in visible column: ' + col_id);
                           // index = oTable.dataTable().api().cell($(e.target).closest('td')).index().column;
                           // alert(index);
                           //  oTable.fnSetColumnVis(colvindex, false);

                           break;
                   }
               },
               beforeOpen: function (event, ui) {
                   var $menu = ui.menu,
                       $target = ui.target,
                       extraData = ui.extraData;
                   ui.menu.zIndex(9999);
               }
           });
});

function Ocultar(){

  let button = document.querySelectorAll('.menu button');
  let content_inside = document.querySelectorAll('.content_inside');

  Array.from(button).forEach(function(buttonArray, i) {
  buttonArray.addEventListener('click', function() {

      Array.from(button).forEach(buttonAll => buttonAll.classList.remove('button_active'));
      
      Array.from(content_inside).forEach(content_insideAll => content_insideAll.classList.remove('content_inside_active'));
      
      button[i].classList.add('button_active'); 
      
      content_inside[i].classList.add('content_inside_active');  
    });
  });
}
