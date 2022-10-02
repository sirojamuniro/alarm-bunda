@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Halaman KIPI
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
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
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush

