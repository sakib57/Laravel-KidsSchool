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
        <div class="<?php if(Session::get('adminRole')==1) echo('col-md-8'); else echo('col-md-12') ?>">
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
                          <th>Role</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <?php if(Session::get('adminRole')==1){?>
                          <th>Action</th>
                          <?php }?>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($all_admin as $data)
                        <tr style="font-size: 15px">
                          <td>
                              @if($data->role_name == 'Super Admin')
                              <span class="badge" style="background-color: red;font-size: 13px">{{$data->role_name}}</span>
                              @elseif($data->role_name == 'Admin')
                              <span class="badge" style="background-color: green;font-size: 13px">{{$data->role_name}}</span>
                              @elseif($data->role_name == 'Moderator')
                              <span class="badge" style="background-color: blue;font-size: 13px">{{$data->role_name}}</span>
                              @else
                              <span class="badge" style="background-color: silver;font-size: 13px">{{$data->role_name}}</span>
                              @endif


                          </td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->phone}}</td>
                          <?php if(Session::get('adminRole')==1){?>
                          <td>
                              <button class="btn btn-default" style="color: green;font-size: 18px"><i class="fa fa-edit"></i></button>
                              @if($data->role_name == 'Super Admin')
                              
                              @else
                                <button  class="btn btn-default" style="color: red;font-size: 18px"><i class="fa fa-trash"></i></button>
                              @endif
                          </td>
                        <?php }?>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Role</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <?php if(Session::get('adminRole')==1){?>
                          <th>Action</th>
                        <?php }?>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
        </div>
        <!--/.col (left) -->
        @if(Session::get('adminRole')==1)
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" method="post" action="{{route('admin.store')}}">
               @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name">
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                  <div class="col-sm-10">


                    <select class="form-control" name="role_id">

                    <option value="">--- Select Role ---</option>
                    
                    @foreach($all_role as $value)
                    <option class="<?php if($value->role_name == 'Super Admin') echo 'hide'?>" value="{{$value->id}}">{{$value->role_name}}</option>
                    @endforeach
                  </select>


                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" value="123456" class="form-control" id="inputEmail3" placeholder="Password" name="password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Phone" name="phone">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
        @endif
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
