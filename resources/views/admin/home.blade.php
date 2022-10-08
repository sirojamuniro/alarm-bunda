@extends('admin.adminlte')
@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @foreach($result as $data)
        <div class="row ">
            <div class="col-md-12" align="center">
                <div class="row" align="center">
                    <div class="col-sm-12 form-group">
                <label for="title">{{$data->title}}</label>
            </div>
            <div class="col-sm-12 form-group">
                <label for="description">{{$data->description}}</label>
            </div>
            <div class="col-sm-12 form-group">
            <img style="width:100%;max-width:500px"  src="image/{{$data->image}}" />
            <br>
            <a href="image/{{$data->image}}" style="color: blue">Detail Gambar</a>
        </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
