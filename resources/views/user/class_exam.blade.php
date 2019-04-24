@extends('layouts.master')

@section('content')
<div class="container" style="width: 60%; ">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: transparent;height: 600px;width: 550px">
            <div class="table-responsive" style="width: 90%;height: 350px;background-color: #ddd; margin:100px auto;padding: 50px;border-radius: 5px">
            	<table style="width: 100%;">
            		<tr>
            			<th><strong>Subject Name</strong></th>
            			<th> <strong>Action</strong></th>
            		</tr>
            		@foreach($question as $value)
            		<tr>
            			<td>
            				{{$value->title}}
            			</td>
            			<td>
            				<a href="{{route('exam.start',$value->id)}}">Start</a>
            			</td>
            		</tr>
            		@endforeach
            	</table>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
	
</script>
