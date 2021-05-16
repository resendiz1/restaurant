<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  </head>
  <body>


    @yield('contenido')



  </body>

 
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('slick/slick.js')}}"></script>
  <script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    $('.single-item').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplayspeed: 1000
    });



    $('.single-item').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplayspeed: 1000
    });

    $('.js-example-basic-multiple').select2({
        placeholder: 'Selecciona tus ingredientes'
    });

     
    $('.ingrediente').click(function(){
  
      swal({
      title: "¿Borrar ingrediente?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $(this).remove()

//Renombra el NAME  de los inputs para que no haya pedo al mandarlo a PHP
alert('hla')
    const $inputs = document.getElementsByClassName('input-pedido');
    for(i=0; $inputs.length ; i++){
      $inputs[i].name = 'ingrediente'+i
    }
//Renombra el NAME  de los inputs para que no haya pedo al mandarlo a PHP

    swal("Ingrediente borrado", {
      icon: "success",
    });
  } else {
    swal("No se borro nada",{
      icon: "warning"
    })
    
  }
});
    })








  </script>
</html>
