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
  function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;
  
    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});
  
    // Download link
    downloadLink = document.createElement("a");
  
    // File name
    downloadLink.download = filename;
  
    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);
  
    // Hide download link
    downloadLink.style.display = "none";
  
    // Add the link to DOM
    document.body.appendChild(downloadLink);
  
    // Click download link
    downloadLink.click();
  }
  
  function CSV1(filename) {
    var csv = [];
    var rows = document.querySelectorAll("#tbldata tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }
  
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
  }
  function CSV2(filename) {
    var csv = [];
    var rows = document.querySelectorAll("#tbldata1 tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }
  
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
  }
  function CSV3(filename) {
    var csv = [];
    var rows = document.querySelectorAll("#tbldata2 tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }
  
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
  }
  
  $(document).ready(() =>{
    $('#exportar').hide();
    
    $('#Mostrar').click(function(){
      $('#exportar').show();
    });
  
    $('#Ocultar').click(function(){
      $('#ocultar').hide();
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
  
  $(document).ready( function () {
    $('#tbldata1').DataTable( {
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
  
  $(document).ready( function () {
    $('#tbldata2').DataTable( {
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
  
  
  
  
  function Ocultar(){
  
    let button = document.querySelectorAll('.menu button');
    let content_inside = document.querySelectorAll('.content_inside');
  
    Array.from(button).forEach(function(buttonArray, i) {
    buttonArray.addEventListener('click', function() {
  
        Array.from(button).forEach(buttonAll => buttonAll.classList.remove('button_active'));
        myFunction
        Array.from(content_inside).forEach(content_insideAll => content_insideAll.classList.remove('content_inside_active'));
        
        button[i].classList.add('button_active'); 
        
        content_inside[i].classList.add('content_inside_active');  
      });
    });
  }
  
  function Exportar() {
    document.getElementById('exportar1').style.display = "block";
    document.getElementById('exportar2').style.display = "none";
    document.getElementById('exportar3').style.display = "none";
    document.getElementById('Mostrar2').style.display = "none";
    document.getElementById('Mostrar3').style.display = "none";
  }
  function Exportar2() {
    document.getElementById('exportar1').style.display = "none";
    document.getElementById('exportar2').style.display = "block";
    document.getElementById('exportar3').style.display = "none";
    document.getElementById('Mostrar').style.display = "none";
    document.getElementById('Mostrar3').style.display = "none";
  }
  function Exportar3() {
    document.getElementById('exportar1').style.display = "none";
    document.getElementById('exportar2').style.display = "none";
    document.getElementById('exportar3').style.display = "block";
    document.getElementById('Mostrar').style.display = "none";
    document.getElementById('Mostrar2').style.display = "none";
    
  }
  function hacerocultacion() {
  
    var btn = document.getElementById("boton");
  
    if (btn.value == "Exportar") {
        btn.value = "Cerrar";
        btn.innerHTML = "Cerrar";
    }
    else {
        btn.value = "Exportar";
        btn.innerHTML = "Exportar";
    }
  
  }
  function hacerocultacion2() {
  
    var btn = document.getElementById("boton2");
  
    if (btn.value == "Exportar") {
        btn.value = "Cerrar";
        btn.innerHTML = "Cerrar";
    }
    else {
        btn.value = "Exportar";
        btn.innerHTML = "Exportar";
    }
  
  }
  function hacerocultacion3() {
  
    var btn = document.getElementById("boton3");
  
    if (btn.value == "Exportar") {
        btn.value = "Cerrar";
        btn.innerHTML = "Cerrar";
    }
    else {
        btn.value = "Exportar";
        btn.innerHTML = "Exportar";
    }
  
  }
  
  function OcultarMostrar() {
    var x = document.getElementById("Mostrar");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function OcultarMostrar2() {
    var x = document.getElementById("Mostrar2");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function OcultarMostrar3() {
    var x = document.getElementById("Mostrar3");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  