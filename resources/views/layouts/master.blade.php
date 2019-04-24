
<!DOCTYPE html>
    <html lang="{{app()->getLocale()}}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>kids</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="../frontend/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../frontend/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../frontend/css/style.min.css" rel="stylesheet">

        <style type="text/css">
            
            .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
        </style>
    </head>

    <body>
        <div style="background: url('../frontend/img/img/11.gif') ;  background-attachment: fixed; background-size: cover">

            <!--Main Navigation-->
            <header>

                <!-- Navbar -->
                <nav class="navbar fixed-top navbar-expand-lg navbar-light pink scrolling-navbar">
                    <div class="container">



                        <!-- Brand -->
                        <a class="navbar-brand waves-effect" href="{{route('base')}}" >
                        <img src="../frontend/img/img/m4.png" height="50px" width="100px">
                    </a>

                        <!-- Collapse -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                        <!-- Links -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <!-- Left -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link waves-effect" href="{{route('base')}}"><strong>@lang('home.home_menu')</strong>
                                    <span class="sr-only">(current)</span>
                                </a>
                                </li>

                            </ul>
                            



                            <ul class="navbar-nav nav-flex-icons">
                            @guest



                            <li  class="nav-item"  style="margin-right: 8px">
                                <?php if(Session::get('locale')=='en' || Session::get('locale')==''){?>
                                    <a class="nav-link border border-light rounded waves-effect" href="locale/bn">বাংলা</a>
                                <?php } else if(Session::get('locale')=='bn') {?>
                                    <a class="nav-link border border-light rounded waves-effect" href="locale/en">English</a>


                                <?php }?>
                            </li>



                            <li class="nav-item" style="margin-right: 8px">
                                <a class="nav-link border border-light rounded waves-effect" href="{{ route('login') }}">@lang('home.login_menu')</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link border border-light rounded waves-effect" href="{{ route('register') }}">@lang('home.register_menu')</a>
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

                    </div>
                </nav>
                <!-- Navbar -->

            </header>
            <!--Main Navigation-->



            @yield('content')


            
            <!--Footer-->
            <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

                <!--Call to action-->
                <div class="pt-4">
                    <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">
                    <i class="fa fa-download ml-2"></i>
                </a>
                    
                </div>
                <!--/.Call to action-->

                <hr class="my-4">

                <!-- Social icons -->
                <div class="pb-4">
                    <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                    <i class="fa fa-facebook mr-3"></i>
                </a>

                    <a href="https://twitter.com/MDBootstrap" target="_blank">
                    <i class="fa fa-twitter mr-3"></i>
                </a>

                    <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                    <i class="fa fa-youtube mr-3"></i>
                </a>

                    <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                    <i class="fa fa-google-plus mr-3"></i>
                </a>

                    <a href="https://dribbble.com/mdbootstrap" target="_blank">
                    <i class="fa fa-dribbble mr-3"></i>
                </a>

                    <a href="https://pinterest.com/mdbootstrap" target="_blank">
                    <i class="fa fa-pinterest mr-3"></i>
                </a>

                    <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                    <i class="fa fa-github mr-3"></i>
                </a>

                    <a href="http://codepen.io/mdbootstrap/" target="_blank">
                    <i class="fa fa-codepen mr-3"></i>
                </a>
                </div>
                <!-- Social icons -->

                <!--Copyright-->
                <div class="footer-copyright py-3">
                    © 2018 Copyright:
                    <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> kids.project.com </a>
                </div>
                <!--/.Copyright-->

            </footer>
            <!--/.Footer-->




            <!-- SCRIPTS -->
            <!-- JQuery -->
            <script type="text/javascript" src="../frontend/js/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="../frontend/js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="../frontend/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="../frontend/js/mdb.min.js"></script>
            <!-- Initializations -->
            <script type="text/javascript">
                // Animations initialization
                new WOW().init();

            </script>

        </div>
    </body>

    </html>
