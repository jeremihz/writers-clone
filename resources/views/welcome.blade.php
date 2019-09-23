<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Assignments Experts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            <header>
                <nav class="navbar navbar-expand-md fixed-top font">
                    <a class="navbar-brand text-light" href="#">My Assignments Experts</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-light" href="/howitworks">How it Works <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/about">About Us</a>
                        </li>
                      </ul>

                      <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="/login" class="nav-link">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                            <a class="nav-link" href="/register">Sign Up</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                              </div>
                          @endif
                      </div>
                      {{-- <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        @auth
                                            <a class="nav-link text-light" href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                                    </li class="nav-item">
                                    <li>
                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </li>
                                </ul>  
                              </div>
                          @endif
                      </div> --}}
                    </div>
                  </nav>
            </header>
            <!---------------- banner section ----------------------> 

             <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/images/img1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>We Will Help You Do Your Assignments </h1>
               <h2> From initial topic to finished paper</h2>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Make an order</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="/images/img2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>My Assignment Experts</h1>
                
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign Up</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="/images/img3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>My Assignment Experts</h1>
                
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

<br><br>
      <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img5.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Online Writer Chat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img4.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Have the Bargaing Power</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img6.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Plagiarism Free Papers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    
    
            <!-- START THE FEATURETTES -->
               <div class="clearfix"></div>
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img8.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/images/img9.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img7.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <!-- /END THE FEATURETTES -->
    
          </div><!-- /.container -->
             
             @include('includes.footer')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
