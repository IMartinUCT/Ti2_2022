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
var $fileName2 = 'Query2';
var $fileName3 = 'Query3';
$(document).ready( function () {
  var oTable = $('#tbldata').dataTable({
               "fixedHeader": true,
               "colReorder": true,
               "responsive": true,
               "sPaginationType": "full_numbers",
               "bLengthChange": true,
               "aLengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, , "All"]],
               "iDisplayLength": 5,
               "aaSorting": [1, 'asc'],
               "dom": 'Blfrtip',
               buttons: [
                   'copy',
                   {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                    extend: 'csv',
                    filename: $fileName1
                    },
                    {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                    extend: 'excel',
                    filename: $fileName1
                    },
                    {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                    extend: 'pdf',
                    filename: $fileName1
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
             search: {
                return: true,
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
} );
$(document).ready( function () {
    var oTable = $('#tbldata1').dataTable({
                 "fixedHeader": true,
                 "colReorder": true,
                 "responsive": true,
                 "sPaginationType": "full_numbers",
                 "bLengthChange": true,
                 "aLengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, , "All"]],
                 "iDisplayLength": 5,
                 "aaSorting": [1, 'asc'],
                 "dom": 'Blfrtip',
                 buttons: [
                    'copy',
                    {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                     extend: 'csv',
                     filename: $fileName2
                     },
                     {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                     extend: 'excel',
                     filename: $fileName2
                     },
                     {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                     extend: 'pdf',
                     filename: $fileName2
                     }, 'print',
                    {                     messageTop: '2022 Choripán con manjar Company, Inc' ,

                        text: 'JSON',
                        action: function (e, dt, button, config) {
                            var data = dt.buttons.exportData();
 
                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'DatosQuery2.json'
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
               search: {
                  return: true,
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
} );
var filename2 = 'DatosQuery2.json';

$(document).ready( function () {
    var oTable = $('#tbldata2').dataTable({
                 "fixedHeader": true,
                 "colReorder": true,
                 "responsive": true,
                 "sPaginationType": "full_numbers",
                 "bLengthChange": true,
                 "aLengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, , "All"]],
                 "iDisplayLength": 5,
                 "aaSorting": [1, 'asc'],
                 "dom": 'Blfrtip',
                 buttons: [
                    'copy',
                    
                    {
                     messageTop: '2022 Choripán con manjar Company, Inc' ,
                     extend: 'csv',
                     filename: $fileName3
                     },
                     {
                     messageTop: '2022 Choripán con manjar Company, Inc' ,
                     extend: 'excel',
                     filename: $fileName3
                     },
                     {
                     messageTop: '2022 Choripán con manjar Company, Inc' ,
                     extend: 'pdf',
                     filename: $fileName3
                     }, 'print',
                    {
                        text: 'JSON',
                        messageTop: '2022 Choripán con manjar Company, Inc' ,
                        action: function (e, dt, button, config) {
                            var data = dt.buttons.exportData();
 
                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'DatosQuery3.json'
                            );
                        }
                    }
                ],
                language: {
                    decimal: ',',
                    thousands: '.', 
                    url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
                },

               select: {
                  info: true,
                  style: 'multi',
                  selector: 'td'
               },
               search: {
                  return: true,
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
} );


var toggle_icon = document.getElementById('theme-toggle');
var body = document.getElementsByTagName('body')[0];
var sun_class = 'icon-sun';
var moon_class = 'icon-moon';
var dark_theme_class = 'dark-theme';

toggle_icon.addEventListener('click', function() {
    if (body.classList.contains(dark_theme_class)) {
        toggle_icon.classList.add(moon_class);
        toggle_icon.classList.remove(sun_class);

        body.classList.remove(dark_theme_class);

        setCookie('theme', 'light');
    }
    else {
        toggle_icon.classList.add(sun_class);
        toggle_icon.classList.remove(moon_class);

        body.classList.add(dark_theme_class);

        setCookie('theme', 'dark');
    }
});

function setCookie(name, value) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}






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



