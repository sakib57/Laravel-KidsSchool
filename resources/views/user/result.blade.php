@extends('layouts.master')

@section('content')
<div class="container" style="width: 60%; ">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: transparent;height: auto;width: 550px">
            <div class="table-responsive" style="width: 90%;height: auto;background-color: #ddd; margin:100px auto;padding: 50px;border-radius: 5px">

                
            	
                
                <table style="width: 100%;">
            		<h3 style="margin: auto">You got total numbers <span style="color: blue">{{$count}}</span> out of 10</h3>
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
                            a. {{$value->op_1_1}}

                        </td>
                        <td>
                            b. {{$value->op_1_2}}
                        </td>
                        <td>
                            c. {{$value->op_1_3}}
                        </td>
                        <td>
                            d. {{$value->op_1_4}}
                        </td>
                        <td>
                        	{{$res[0]}}
                        	<span ><?php if($res[0] != 'Correct') echo $op[1] ?> </span>
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
                        <td>
                        	<span>{{$res[1]}}</span>
                        	<span ><?php if($res[1] != 'Correct') echo $op[2] ?> </span>
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
                        <td>
                        	<span >{{$res[2]}}</span>
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
                        <td>
                        	<span >{{$res[3]}}</span>
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
                        <td>
                        	<span >{{$res[4]}}</span>
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
                        <td>
                        	<span >{{$res[5]}}</span>
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
                        <td>
                        	<span >{{$res[6]}}</span>
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
                        <td>
                        	<span >{{$res[7]}}</span>
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
                        <td>
                        	<span >{{$res[8]}}</span>
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
                        <td>
                        	<span >{{$res[9]}}</span>
                        </td>
                    </tr>
            		@endforeach
            	</table>
            </div>
        </div>
    </div>
</div>
@endsection


