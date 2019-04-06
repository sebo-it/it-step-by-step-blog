<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('endOfHeadTag')
    </head>
    
    <body style="background-color: #f8f9fa">
<!--        HEADER: zdjęcie i na nim logo-->
        <header>
            <div class="container-fluid" style="background:#f8f9fa url('{{asset('images/header.jpg')}}') no-repeat center center">
                <div class="row">
                    <a style="color: black; text-decoration: none" href="{{route('blogPosts.index')}}" role="button"><p class="h2 ml-5 p-4 pt-5 my-0">it-step-by-step-blog</p></a>
                </div>
            </div> 
        </header>
        
<!--        menu-->
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: orange;">   
            <div class="container-fluid justify-content-center">
                <div class="row justify-content-center">
        <!--            Menu zwiniete do przycisku-->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        <!--Pełne menu powyzej danej rozdz-->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center">

        <!--                Aktywny element listy zależy od obecnie wyswietlanej strony. Rozni sie od reszty clasą nav-item active-->
        <!--              <li class="nav-item active">-->

                        <li class="nav-item">
                          <a class="nav-link" href="{{route('blogPosts.index')}}">Blog</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategorie
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: orange;">

                              @foreach($categoryNames as $categoryName)
                                  <a class="dropdown-item" href="{{route('categories.posts',$categoryName->id)}}"> {{ $categoryName->name }} </a> 
                              @endforeach

                              <?php if(Auth::check()){ ?>                                             
                                    <div class="dropdown-divider"></div>
                                    <a class='dropdown-item' href={{route('categories.index')}}>Opcje</a>                            
                              <?php } ?>

                          </div>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="{{route('contact.index')}}">Kontakt</a>
                        </li>

                        <?php if(!Auth::check()){ ?>  
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Zaloguj</a>               
                          </li>
                        <?php } ?>

                        <?php if(Auth::check()){ ?>  
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Wyloguj
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        <?php } ?>

                    </ul>
                  </div>
                </div>
            </div>
        </nav>

<!--        Koniec menu-->
        
<!--        CONTENT-->
        <div class="container mt-4">
            @yield('content')
        </div>
<!--Koniec contentu-->

<!--STOPKA-->
<footer class="mt-4">
            <div class="container-fluid" style="background-color: lightblue">

                <div class="row py-3">
                    <div class="col text-center">
                        <p class="h4">Subskrypcja</p>
                    </div>
                </div>

                <form class="form-inline justify-content-center">
                  <div class="row pb-4">
                    <div class="col">
                      <input type="email" class="form-control" id="newSubscriberEmail" placeholder="Wpisz e-mail">                        
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-primary">Zapisz mnie</button>
                    </div>
                  </div>
                </form>

            </div>
        </footer>
<!--KONIEC STOPKI-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>
