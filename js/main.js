(function () {
  'use strict';

  var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function () {

    if (document.getElementById('mapa')) {
      var map = L.map('mapa').setView([-31.426612, -64.190497], 17);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([-31.426612, -64.190497]).addTo(map)
        .bindPopup('<b>GDLWebcamp</b><br> Boletos disponibles wachin')
        .openPopup();
    }

    console.log("listo");

    // campos datos de usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    // campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    // botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    // extras
    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');

    calcular.addEventListener('click', calcularMontos);

    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

    function validarCampos() {
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = 'Este campo es obligatorio';
        this.style.border = '1px solid red';
        errorDiv.style.border = '1px solid red';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }


    function validarMail() {
      if (this.value.indexOf('@') > -1) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      } else {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = 'Debe tener al menos un "@"';
        this.style.border = '1px solid red';
        errorDiv.style.border = '1px solid red';
      }
    }


    function calcularMontos(event) {
      event.preventDefault();
      if (regalo.value === '') {
        alert('Debes elegir un regalo');
        regalo.focus();
      } else {

        var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
          boletoCompleto = parseInt(pase_completo.value, 10) || 0,
          cantidadCamisas = parseInt(camisas.value, 10) || 0,
          cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar = (boletosDia * 30) + (boletosDosDias * 45) + (boletoCompleto * 50) + ((cantidadCamisas * 10) * .93) + (cantidadEtiquetas * 2);

        var listadoProductos = [];

        if (boletosDia >= 1) {
          listadoProductos.push(boletosDia + ' pases por día');
        }

        if (boletosDosDias >= 1) {
          listadoProductos.push(boletosDosDias + ' pases por dos días');
        }

        if (boletoCompleto >= 1) {
          listadoProductos.push(boletoCompleto + ' pases completos');
        }

        if (cantidadCamisas >= 1) {
          listadoProductos.push(cantidadCamisas + ' camisetas');
        }

        if (cantidadEtiquetas >= 1) {
          listadoProductos.push(cantidadEtiquetas + ' etiquetas');
        }

        lista_productos.style.display = 'block';
        lista_productos.innerHTML = '';

        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '<br/>';
        }

        suma.innerHTML = '$ ' + totalPagar.toFixed(2);

      }
    }

    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
        boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
        boletoCompleto = parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];

      if (boletosDia > 0) {
        diasElegidos.push('viernes');
      }

      if (boleto2Dias > 0) {
        diasElegidos.push('viernes', 'sabado');
      }

      if (boletoCompleto > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }

      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = 'block';
      }

    };



  }); // DOM CONTENT LOADED
})();

$(function () {

  // Lettering

  $('.nombre-sitio').lettering();

  // Menu fijo

  var windowHeight = $(window).height();
  var barraHeigth = $('.barra').innerHeight();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > windowHeight) {
      $('.barra').addClass('fixed');
      $('body').css('margin-top', barraHeigth + 'px');
    } else {
      $('.barra').removeClass('fixed');
      $('body').css('margin-top', '0px');
    }
  });

  // Menu movil

  $('.menu-movil').on('click', function () {
    $('.navegacion-principal').slideToggle();
  });

  //Programa de conferencia

  $('div.ocultar').hide();
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click', function () {
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
    return false;
  });

  // Animaciones para los numeros

  var resumenLista = $('.resumen-evento');

  if (resumenLista.length > 0) {
    $('.resumen-evento').waypoint(function () {
      $('.resumen-evento li:nth-child(1) p').animateNumber({
        number: 6
      }, 1200);
      $('.resumen-evento li:nth-child(2) p').animateNumber({
        number: 15
      }, 1200);
      $('.resumen-evento li:nth-child(3) p').animateNumber({
        number: 3
      }, 1200);
      $('.resumen-evento li:nth-child(4) p').animateNumber({
        number: 9
      }, 1200);
    }, {
      offset: '60%'
    });
  };

  //Cuenta regresiva

  $('.cuenta-regresiva').countdown('2019/12/10 09:00:00', function (event) {
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

});
