@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Check Lingkar Kepala Anak
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        <form action="{{route('gizi.store')}}" method="post">

            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <input class="form-control" id="user_id" name="user_id" type="hidden" value="{{auth()->user()->id}}" >
                    <input class="form-control" id="type" name="type" type="hidden" value="hd" >
                    <div class="col-sm-12 form-group">
                        <label for="title">Usia Anak (Bulan) max 24 bulan</label>
                        <select class="form-control" id="month_id" name="month_id">
                            @foreach( $month as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="">
                        <button class="btn btn-sm btn-primary" id="save" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Simpan</button>
                        <button class="btn btn-sm btn-danger" id="reset" type="reset">
                        <i class="fa fa-ban"></i> Reset</button>
                        <button type="button" class="btn btn-primary" id="loadingbutton" disabled>  <span class="spinner-border spinner-border-sm"></span>Loading</button>
                      </div>
                        </br>
                    </form>

                </div>
            </div>
            </div>

    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">


$('#loadingbutton').hide();
$(function(){
    $('form').submit(function(e){
        e.preventDefault();
        $('#loadingbutton').show();
        $('#save').hide();
        $('#reset').hide();
        e.currentTarget.submit();
    })
});

</script>
@endpush

