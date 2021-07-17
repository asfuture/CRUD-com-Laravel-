<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">

        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}"/>

        <!--Biblioteca datatables -link-cdn-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

    </head>
    <body>
            @yield('content')
             <script src="{{url('assets/bootstrap/js/javascript.js')}}"></script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <!--Biblioteca datatables -link-cdn-->
                <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>

                <!--Alterar o idioma da tabela datatables-->
            <script>
                $(document).ready(function(){
                    $('#id_tabela_usuario').DataTable({
                        "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado",
                        "info": "Mostrar página _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro disponivel",
                        "infoFiltered": "(filtrado de _MAX_ registro total)"
                         }
                    });
                })
            </script>

        <footer class="bg-dark fixed-bottom ">
            <div class="container-fluid row">
			    <div class="text-center col-sm-4 col-md-6 ">
                    <h3 class="text-light">Rede Social</h3>
                    <a href="https://github.com/" target="_blank"><i class="fab fa-github text-light mt-2 p-2 " ></i></a>
                    <a href="https://www.linkedin.com/in/alexferreira-asfuture/" target="_blank"><i class="fab fa-linkedin text-primary ml-2 p-2"></i></a>
                    <a href="https://twitter.com/AsfutureA" target="_blank"><i class="fab fa-twitter text-primary ml-2 p-2"></i></a>
                    <a href="https://www.facebook.com/alex.santosferreira.733" target="_blank"><i class="fab fa-facebook-square text-primary  ml-2 p-2"></i></a>
                    <a href="https://www.instagram.com/asfuture.ferreira/?hl=pt-br" target="_blank"><i class="fab fa-instagram text-danger ml-2 p-2"></i></a>
                </div>

                <div class="col-sm-4 col-md-6 text-center " >
                    <h3 class="text-light mb-0">Contatos</h3>
                    <i class="far fa-envelope  mb-3 mr-2"></i> <a href="mailto:asfuture2019@gmail.com " class="email">asfuture2019@gmail.com</a><br>
                    <i class="fab fa-whatsapp text-success mb-3 mr-2"></i> <a href="https://web.whatsapp.com/" target="_blank"><span class="whatsapp">11 99542-1492</span></a><br>
                </div>
	        </div>

                <div class="text-center ">
                    <span class="text-light">Copyright&copy;2021&trade;- By <span class="text-danger">AS</span>FUTURE</a>. Todos os direitos reservados.</span>
                </div>
        </footer>
    </body>
</html>
