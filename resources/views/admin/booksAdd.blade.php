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
            
            <form class="form-horizontal" method="post" action="{{route('admin.book.store')}}" enctype="multipart/form-data">
               @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Book Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="book_name">
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="category">
                    <option value="">--- Select Category ---</option>
                    <option class="" value="bangla">Bangla</option>
                    <option class="" value="english">English</option>
                  </select>
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="class">
                    <option value="">--- Select Class ---</option>
                    <option class="" value="one">One</option>
                    <option class="" value="two">Two</option>
                    <option class="" value="three">Three</option>
                    <option class="" value="four">Four</option>
                    <option class="" value="five">Five</option>

                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Author Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="author_name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea cols="120" rows="5" placeholder="Description" name="description">
                    	
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">File</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputEmail3" name="file">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Add Book</button>
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
