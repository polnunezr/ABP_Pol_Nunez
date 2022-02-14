<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="https://politecnics.barcelona/wp-content/uploads/favicon-politecnics.png" type="image/x-icon">
    <title>@yield('titol')</title>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top  navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/ABP_Pol_Nunez/public/"><img src="{{ asset('img/logo.jpg') }}" alt="tag" height="75" width="175">
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dades mestres
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/ABP_Pol_Nunez/public/cursos">Cursos</a>
                <a class="dropdown-item" href=" {{ url ('/cicles')}} ">Cicles</a>

              </div>
            </li>

          </ul>

        </div>
      </nav>
      <div class="container">
            @yield('name')
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/606a75912f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
