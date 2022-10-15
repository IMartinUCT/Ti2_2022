function colorChange(par){
  par.style.color='red';
}
$(function() {     
  $('.user-avatar').on('click', function(e) {
    e.preventDefault();
    $('.box').toggleClass('hide');
  });
});



// Language: javascript
function exportarAexcel(tableID, filename = ''){
  
  var downloadLink;
  var dataType = 'application/vnd.ms-excel';
  var tableSelect = document.getElementById(tableID);
  var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
  
  // Especial chars handling y nombre de la tabla
  filename = filename?filename+'.xls':'tabla_datos.xls';
  
  // Crear link de descarga
  downloadLink = document.createElement("a");
  
  document.body.appendChild(downloadLink);
  
  if(navigator.msSaveOrOpenBlob){
      var blob = new Blob(['\ufeff', tableHTML], {
          type: dataType
      });
      navigator.msSaveOrOpenBlob( blob, filename);
  }else{
      // Crear un link para descargar
      downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
  
      // Setear el nombre del archivo
      downloadLink.download = filename;
      
      // Hacer el trigger
      downloadLink.click();
}
}


$(function() {
  $("#xx").on('click', function() {
    var data = "";
    var tableData = [];
    var rows = $("table tr");
    rows.each(function(index, row) {
      var rowData = [];
      $(row).find("th, td").each(function(index, column) {
        rowData.push(column.innerText);
      });
      tableData.push(rowData.join(","));
    });
    data += tableData.join("\n");
    $(document.body).append('<a id="download-link" download="tabla_datos.csv" href=' + URL.createObjectURL(new Blob([data], {
      type: "text/csv"
    })) + '/>');
    $('#download-link')[0].click();
    $('#download-link').remove();
  });
});

$(document).ready(() =>{
  $('#exportar').hide();
  
  $('#Mostrar').click(function(){
    $('#exportar').show();
  });

  $('#Ocultar').click(function(){
    $('#exportar').hide();
  });
});

$(document).ready( function () {
  $('#tbldata').DataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json",
    columnDefs: [
      {
          targets: -1,
          className: 'dt-body-right'
      }
    ]
    
  }
  } );
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

$(document).ready( function () {
  $('#tbldata').DataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json",
    columnDefs: [
      {
          targets: -1,
          className: 'dt-body-right'
      }
    ]
    
  }
  } );
} );
