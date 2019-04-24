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
                          <th>Book Name</th>
                          <th>Author Name</th>
                          <th>Descrition</th>
                          <th>Category</th>
                           <th>File</th>
                          <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_book as $v)
                        <tr style="font-size: 15px">
                          <td>
                             {{$v->book_name}}
                           
                          </td>
                          <td>{{$v->author_name}}</td>
                          <td>{{$v->description}}</td>
                          <td>{{$v->category}}</td>
                          <td><a href="{{route('admin.view.pdf',$v->file)}}">{{$v->file}}</a></td>
                          
                          <td>
                              <button class="btn btn-default" style="color: green;font-size: 18px"><i class="fa fa-edit"></i></button>
                          </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Book Name</th>
                          <th>Author Name</th>
                          <th>Description</th>
                          <th>Category</th>
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
