<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea Nelson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-image: url('{{asset('imagen/background.jpg')}}');">
<nav class="navbar navbar-light" style="background-color: #16181c; color: white!important;">
    <div class="container d-flex justify-content-center">
        <div>
            <a class="navbar-brand text-white" href="#">
                Graffiti art
                <!--<img style="width: 300px" src="{{asset('imagen/failarmy.png')}}" alt="icon">-->
            </a>
        </div>
    </div>
</nav>
<section class="container mt-2 mb-4" style="background: #1E2126;border-radius: 7px; border: 1px solid #373b47;box-shadow: 0 0 2px black;">
    <div class="continer-fluid">
        <div class="row text-white mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center m-2">
                    <img src="{{asset('imagen/graffiti.jpg')}}" alt="graffiti">
                </div>
            </div>
            <div class="col-8 ">
                <h2>
                    Crear Contenido artistico <span class="btn btn-danger float-end"><a class="text-decoration-none text-white" href="{{route('artisticcontent.index')}}">Regresar</a></span>
                </h2>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('artisticcontent.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="title" class="form-label">Titulo</label>
                                <input type="text" class="form-control bg-black" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                            <button class="btn btn-success" type="submit">Crear Contenido</button>
                        </form>

                    </div>
                </div>

            </div>
            <div class="col-4">
                <h2>Redes Sociales</h2>
                <div class="row">
                    <div class="col-3">
                        <i style="color: #eba174;" class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="col-3">
                        <i style="color: #eba174;" class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="col-3">
                        <i style="color: #eba174;" class="fa-brands fa-twitch"></i>
                    </div>
                    <div class="col-3">
                        <i style="color: #eba174;" class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
