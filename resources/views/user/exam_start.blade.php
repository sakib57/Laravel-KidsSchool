@extends('layouts.master')

@section('content')
<div class="container" style="width: 60%; ">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: transparent;height: auto;width: 550px">
            <div class="table-responsive" style="width: 90%;height: auto;background-color: #ddd; margin:100px auto;padding: 50px;border-radius: 5px">

                <span>Form will automatically submit in <b id="remain">  </b> <b>seconds</b>.</span>
            	
                <form method="POST" action="{{route('exam.result')}}" name="form1">
                    @csrf
                <table style="width: 100%;">
            		
            		@foreach($q as $value)
                    <!-- Question 1-->
            		<tr>
            			<td colspan="4">
            				<h5 style="padding-top:10px "><strong>Q1: </strong>{{$value->q_1}}</h5>
                            <input type="hidden" name="id" value="{{$value->id}}">
            			</td>
            		</tr>
                    <tr style="margin-top: 10px">
                        <td>
                            <input type="radio" value="1" name="op_1">
                            {{$value->op_1_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_1">
                            {{$value->op_1_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_1">
                            {{$value->op_1_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_1">
                            {{$value->op_1_4}}
                        </td>
                    </tr>
                    <!-- Question 1-->
                    <tr style="margin-top: 20px">
                        <td colspan="4">
                            <h5 style="padding-top:10px "><strong>Q2: </strong>{{$value->q_2}}</h5>
                        </td>
                    </tr>
                    <tr style="margin-top: 10px">
                        <td>
                            <input type="radio" value="1" name="op_2">
                            {{$value->op_2_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_2">
                            {{$value->op_2_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_2">
                            {{$value->op_2_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_2">
                            {{$value->op_2_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q3: </strong>{{$value->q_3}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_3">
                            {{$value->op_3_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_3">
                            {{$value->op_3_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_3">
                            {{$value->op_3_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_3">
                            {{$value->op_3_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q4: </strong>{{$value->q_4}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_4">
                            {{$value->op_4_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_4">
                            {{$value->op_4_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_4">
                            {{$value->op_4_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_4">
                            {{$value->op_4_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q5: </strong>{{$value->q_5}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_5">
                            {{$value->op_5_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_5">
                            {{$value->op_5_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_5">
                            {{$value->op_5_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_5">
                            {{$value->op_5_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q6: </strong>{{$value->q_6}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_6">
                            {{$value->op_6_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_6">
                            {{$value->op_6_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_6">
                            {{$value->op_6_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_6">
                            {{$value->op_6_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q7: </strong>{{$value->q_7}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_7">
                            {{$value->op_7_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_7">
                            {{$value->op_7_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_7">
                            {{$value->op_7_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_7">
                            {{$value->op_7_4}}
                        </td>
                    </tr>

                    

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q8: </strong>{{$value->q_8}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_8">
                            {{$value->op_8_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_8">
                            {{$value->op_8_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_8">
                            {{$value->op_8_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_8">
                            {{$value->op_8_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q9: </strong>{{$value->q_9}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_9">
                            {{$value->op_9_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_9">
                            {{$value->op_9_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_9">
                            {{$value->op_9_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_9">
                            {{$value->op_9_4}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5 style="padding-top: 10px"><strong>Q10: </strong>{{$value->q_10}}</h5>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" value="1" name="op_10">
                            {{$value->op_10_1}}
                        </td>
                        <td>
                            <input type="radio" value="2" name="op_10">
                            {{$value->op_10_2}}
                        </td>
                        <td>
                            <input type="radio" value="3" name="op_10">
                            {{$value->op_10_3}}
                        </td>
                        <td>
                            <input type="radio" value="4" name="op_10">
                            {{$value->op_10_4}}
                        </td>
                    </tr>
            		@endforeach
            	</table>
                <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>

                               
                            </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
window.onload=counter;
var seconds = 240;
function counter()
{
countDown();
}   
function countDown()
{
document.getElementById("remain").innerHTML=seconds;
if(seconds>0)
{
seconds=seconds - 1;
setTimeout(countDown,1000);
}
if(seconds == 0)
{
document.form1.submit();
}

}
</script>
