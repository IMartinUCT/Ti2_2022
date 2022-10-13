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
    $(document.body).append('<a id="download-link" download="data.csv" href=' + URL.createObjectURL(new Blob([data], {
      type: "text/csv"
    })) + '/>');


    $('#download-link')[0].click();
    $('#download-link').remove();
  });
});