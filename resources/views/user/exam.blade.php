@extends('layouts.master')

@section('content')
<div class="container" style="width: 60%; ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="margin-top: 120px; background-color: #91d89b;height: 350px;">
                

                <br>
                <p style="margin-top: 50px" class="h3 text-center mb-4">{{ __('Seat for an Exam..!!') }}</p>

                <div class="card-body" style="margin-top: 10px">
                    <form method="POST" action="{{route('exam.class')}}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-md-6 offset-md-3">
                                <select class="form-control" name="class">
                                	<option value="">-- Select Class --</option>
                                	<option value="one"> One</option>
                                	<option value="two"> Two</option>
                                	<option value="three"> Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enter') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
