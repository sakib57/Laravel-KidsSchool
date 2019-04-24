@extends('layouts.adminMaster')

@section('content')
<?php
$pathToFile=public_path('pdf_file/');
?>
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
                    <iframe src="<?php $pathToFile ?>{{$book->file}}"></iframe>
                  </div>
                  <!-- /.box -->
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
