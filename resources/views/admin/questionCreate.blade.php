@extends('layouts.adminMaster')

@section('content')
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" method="post" action="{{route('admin.question.store')}}" >
               @csrf
              <div class="box-body">
                  <table>
                    <tr>
                      <td>
                        <strong>Class</strong>
                        <select class="form-control" name="class">
                          <option value=""> --Select Class--</option>
                          <option value="one"> One</option>
                          <option value="two"> Two</option>
                          <option value="three">Three</option>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Title</strong>
                        <input class="form-control" type="text" name="title">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Question 1:</strong>
                      </td>
                    </tr>
                    <tr>
                      
                      <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_1"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_1" value="1">
                        <input type="text" name="op_1_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_1" value="2">
                        <input type="text" name="op_1_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_1" value="3">
                        <input type="text" name="op_1_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_1" value="4">
                        <input type="text" name="op_1_4" class="form-control">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <strong>Question 2:</strong>
                      </td>
                    </tr>

                    
                    <tr>
                      
                      <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_2"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_2" value="1">
                        <input type="text" name="op_2_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_2" value="2">
                        <input type="text" name="op_2_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_2" value="3">
                        <input type="text" name="op_2_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_2" value="4">
                        <input type="text" name="op_2_4" class="form-control">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <strong>Question 3:</strong>
                      </td>
                    </tr>

                    
                    <tr>
                      
                      <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_3"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_3" value="1">
                        <input type="text" name="op_3_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_3" value="2">
                        <input type="text" name="op_3_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_3" value="3">
                        <input type="text" name="op_3_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_3" value="4">
                        <input type="text" name="op_3_4" class="form-control">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <strong>Question 4:</strong>
                      </td>
                    </tr>

                    <tr>
                      
                      <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_4"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_4" value="1">
                        <input type="text" name="op_4_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_4" value="2">
                        <input type="text" name="op_4_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_4" value="3">
                        <input type="text" name="op_4_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_4" value="4">
                        <input type="text" name="op_4_4" class="form-control">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <strong>Question 5:</strong>
                      </td>
                    </tr>

                    <tr>
                      
                      <td colspan="4">
                        
                        <textarea cols="150" rows="5" name="q_5"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_5" value="1">
                        <input type="text" name="op_5_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_5" value="2">
                        <input type="text" name="op_5_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_5" value="3">
                        <input type="text" name="op_5_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_5" value="4">
                        <input type="text" name="op_5_4" class="form-control">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <strong>Question 6:</strong>
                      </td>
                    </tr>
                     <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_6"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_6" value="1">
                        <input type="text" name="op_6_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_6" value="2">
                        <input type="text" name="op_6_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_6" value="3">
                        <input type="text" name="op_6_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_6" value="4">
                        <input type="text" name="op_6_4" class="form-control">
                      </td>
                      
                    </tr>
                     <td>
                        <strong>Question 7:</strong>
                      </td>
                    </tr>
                     <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_7"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_7" value="1">
                        <input type="text" name="op_7_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_7" value="2">
                        <input type="text" name="op_7_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_7" value="3">
                        <input type="text" name="op_7_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_7" value="4">
                        <input type="text" name="op_7_4" class="form-control">
                      </td>
                      
                    </tr>
                     <td>
                        <strong>Question 8:</strong>
                      </td>
                    </tr>
                     <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_8"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_8" value="1">
                        <input type="text" name="op_8_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_8" value="2">
                        <input type="text" name="op_8_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_8" value="3">
                        <input type="text" name="op_8_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_8" value="4">
                        <input type="text" name="op_8_4" class="form-control">
                      </td>
                      
                    </tr>
                     <td>
                        <strong>Question 9:</strong>
                      </td>
                    </tr>
                     <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_9"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_9" value="1">
                        <input type="text" name="op_9_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_9" value="2">
                        <input type="text" name="op_9_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_9" value="3">
                        <input type="text" name="op_9_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_9" value="4">
                        <input type="text" name="op_9_4" class="form-control">
                      </td>
                      
                    </tr>
                     <td>
                        <strong>Question 10:</strong>
                      </td>
                    </tr>
                     <td colspan="4">
                        
                        
                        <textarea cols="150" rows="5" name="q_10"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding:3px ">
                        <label>Option1</label>
                        <input type="radio" name="ans_10" value="1">
                        <input type="text" name="op_10_1" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option2</label>
                        <input type="radio" name="ans_10" value="2">
                        <input type="text" name="op_10_2" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option3</label>
                        <input type="radio" name="ans_10" value="3">
                        <input type="text" name="op_10_3" class="form-control">
                      </td>
                      <td style="padding:3px ">
                        <label>Option4</label>
                        <input type="radio" name="ans_10" value="4">
                        <input type="text" name="op_10_4" class="form-control">
                      </td>
                      
                    </tr>

                  </table>
                

                

                

                

                

                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Add Question</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
