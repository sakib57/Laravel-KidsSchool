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

                    


                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped" style="font-size: 15px">
                        <thead>
                        <tr>
                          <th>SL</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        

                        @foreach($all_user as $data)
                        <tr style="font-size: 15px">
                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->phone}}</td>
                          <td>
                            <a href="{{route('user.delete',$data->id)}}">
                              <button class="btn btn-default" style="color: red;font-size: 18px"><i class="fa fa-trash"></i></button></a>
                          </td>
                        </tr>
                        @endforeach
                        



                        </tbody>
                        <tfoot>
                        <tr>
                         <th>SL</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
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
