
@extends('layouts.master')

@section('content')




        <div class="container" style="margin-top: 80px;padding-top: 50px">
            <div class="row">
             @foreach($videos as $value)   
            <div class="col-md-6">
                <iframe width="100%" height="350px" src="{{$value->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
            <a class="btn btn-outline-white " style="margin:100px auto;" href="{{route('view.cartoon')}}"  role="button">See More Videos
                    <i class="fa fa-youtube ml-2"></i>
                </a>
            
            </div>
        </div>





@endsection