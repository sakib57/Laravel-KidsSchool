
@extends('layouts.master')

@section('content')




        <main class="mt-5 pt-5">
                <div class="container">
                    <!--Section: Carousel-->
                    <section class="mb-4">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner">
                        <div class="carousel-item active">
                         <img class="d-block w-100" src="../frontend/img/img/c1.jpg">
                            </div>
                            
                            
                        </div>
                    </div>
                                <!--/.Carousel Wrapper-->
                                <br><br>
                    </section>
                </div>


        </main>



      





         
       

        <div class="container">
            <div class="card-deck">

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/b.jpg" style="height: 235px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        
                         <h4 class="card-title" href="#">@lang('home.board_book')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text1')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="#">@lang('home.enter_menu')</a>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/sbb.png" style="height: 235px;  width: 375px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->


                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title" href="#">@lang('home.story_book')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text2')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="#">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/mina.gif" style="height: 231px; width: 375px" >
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title" href="#">@lang('home.videos')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text3')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="{{route('view.video.page')}}">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>

        </div> 
        <!--Card group-->

         <div class="container">
            <div class="card-deck">

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/game.gif" style="height: 235px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title" href="#">@lang('home.games')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text4')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="#">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/dw.gif" style="height: 235px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->


                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title" href="#">@lang('home.drawing')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text5')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="#">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/em.gif" style="height: 231px; width: 375px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                    
                        <h4 class="card-title" href="#">@lang('home.exam/quiz')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text6')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="{{route('user.exam')}}">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>

        </div> 


            <hr>






         <br><br><br>   

           <!-- Card -->
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

            <!-- Content -->
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h5 class="pink-text"><i class="fa fa-pie-chart"></i>ABOUT US</h5>
                    <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!.</p>
                    <a class="btn btn-pink"><i class="fa fa-clone left"></i>Read More</a>
                </div>
            </div>
            <!-- Content -->
        </div>
        <!-- Card -->

       





@endsection