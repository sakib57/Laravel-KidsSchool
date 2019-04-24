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
        <!-- left column -->
        <div class="col-md-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <?php if(Session::get('msg')) {?>
                    <div class="alert alert-success">
                      <?php echo Session::get('msg') ?>
                    </div>
                    <?php }?>

                    


                    <div class="table-responsive box-body">
                      <table id="example1" class="table table-bordered table-striped" style="font-size: 15px">
                        <thead>
                        <tr>
                          
                           <th style="width: 120px">Q 1</th>
                           <th style="width: 120px">Q 1 op 1</th>
                           <th style="width: 120px">Q 1 op 2</th>
                           <th style="width: 120px">Q 1 op 3</th>
                           <th style="width: 120px">Q 1 op 4</th>

                           <th>Q 2</th>
                           <th>q 2 op 1</th>
                           <th>q 2 op 2</th>
                           <th>q 2 op 3</th>
                           <th>q 2 op 4</th>

                           <th>Q 3</th>
                           <th>q 3 op 1</th>
                           <th>q 3 op 2</th>
                           <th>q 3 op 3</th>
                           <th>q 3 op 4</th>

                           <th>Q 4</th>
                           <th>q 4 op 1</th>
                           <th>q 4 op 2</th>
                           <th>q 4 op 3</th>
                           <th>q 4 op 4</th>

                           <th>Q 5</th>
                           <th>q 5 op 1</th>
                           <th>q 5 op 2</th>
                           <th>q 5 op 3</th>
                           <th>q 5 op 4</th>

                           <th>Q 6</th>
                           <th>q 6 op 1</th>
                           <th>q 6 op 2</th>
                           <th>q 6 op 3</th>
                           <th>q 6 op 4</th>

                           <th>Q 7</th>
                           <th>q 7 op 1</th>
                           <th>q 7 op 2</th>
                           <th>q 7 op 3</th>
                           <th>q 7 op 4</th>

                           <th>Q 8</th>
                           <th>q 8 op 1</th>
                           <th>q 8 op 2</th>
                           <th>q 8 op 3</th>
                           <th>q 8 op 4</th>

                           <th>Q 9</th>
                           <th>q 9 op 1</th>
                           <th>q 9 op 2</th>
                           <th>q 9 op 3</th>
                           <th>q 9 op 4</th>

                           <th>Q 10</th>
                           <th>q 10 op 1</th>
                           <th>q 10 op 2</th>
                           <th>q 10 op 3</th>
                           <th>q 10 op 4</th>
                          

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_question as $v)
                        <tr style="font-size: 15px">
                          <td style="width: 120px">{{$v->q_1}}</td>
                            <td style="width: 120px">{{$v->op_1_1}}</td>
                            <td style="width: 120px">{{$v->op_1_2}}</td>
                            <td style="width: 120px">{{$v->op_1_3}}</td>
                            <td style="width: 120px">{{$v->op_1_4}}</td>
                          <td>{{$v->q_2}}</td>
                            <td>{{$v->op_2_1}}</td>
                            <td>{{$v->op_2_2}}</td>
                            <td>{{$v->op_2_3}}</td>
                            <td>{{$v->op_2_4}}</td>
                          <td>{{$v->q_3}}</td>

                            <td>{{$v->op_3_1}}</td>
                            <td>{{$v->op_3_2}}</td>
                            <td>{{$v->op_3_3}}</td>
                            <td>{{$v->op_3_4}}</td>
                          <td>{{$v->q_4}}</td>
                            <td>{{$v->op_4_1}}</td>
                            <td>{{$v->op_4_2}}</td>
                            <td>{{$v->op_4_3}}</td>
                            <td>{{$v->op_4_4}}</td>
                          <td>{{$v->q_5}}</td>
                            <td>{{$v->op_5_1}}</td>
                            <td>{{$v->op_5_2}}</td>
                            <td>{{$v->op_5_3}}</td>
                            <td>{{$v->op_5_4}}</td>
                          <td>{{$v->q_6}}</td>
                            <td>{{$v->op_6_1}}</td>
                            <td>{{$v->op_6_2}}</td>
                            <td>{{$v->op_6_3}}</td>
                            <td>{{$v->op_6_4}}</td>
                          <td>{{$v->q_7}}</td>
                            <td>{{$v->op_7_1}}</td>
                            <td>{{$v->op_7_2}}</td>
                            <td>{{$v->op_7_3}}</td>
                            <td>{{$v->op_7_4}}</td>
                          <td>{{$v->q_8}}</td>
                            <td>{{$v->op_8_1}}</td>
                            <td>{{$v->op_8_2}}</td>
                            <td>{{$v->op_8_3}}</td>
                            <td>{{$v->op_8_4}}</td>
                          <td>{{$v->q_9}}</td>
                            <td>{{$v->op_9_1}}</td>
                            <td>{{$v->op_9_2}}</td>
                            <td>{{$v->op_9_3}}</td>
                            <td>{{$v->op_9_4}}</td>
                          <td>{{$v->q_10}}</td>
                            <td>{{$v->op_10_1}}</td>
                            <td>{{$v->op_10_2}}</td>
                            <td>{{$v->op_10_3}}</td>
                            <td>{{$v->op_10_4}}</td>
                     
                         
                          
                          <td>
                              <a href="{{route('question.delete',$v->id)}}"><button class="btn btn-default" style="color: red;font-size: 18px"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                        <tr>
                          
                          <th>Category</th>
                          
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
