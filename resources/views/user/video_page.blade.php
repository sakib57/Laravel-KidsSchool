
@extends('layouts.master')

@section('content')



        <div class="container"  >
            <div class="row" style="margin-top: 80px">
                <div class="col-md-6">
                    <!--Card-->
                <div class="card mb-4" >

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="img-fluid" src="../frontend/img/img/b.jpg" style="height: 235px; width: 400px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    


                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">@lang('home.cartoons')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text2')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="{{route('view.cartoon_limited')}}">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                </div>



                <div class="col-md-6">
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
                        <h4 class="card-title" href="#">@lang('home.educational_videos')</h4>

                        <!--Text-->
                        <p class="card-text" href="#">@lang('home.text3')</p>

                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a class="btn btn-warning btn-sm" href="{{route('view.v_edu_limited')}}">@lang('home.enter_menu')</a>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
                </div>
                

                
                <!--Card-->

                

            

            </div>
            

        </div> 
        <!--Card group-->

         






         <br><br><br>   

        

       





@endsection