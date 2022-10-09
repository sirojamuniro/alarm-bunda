@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Detail Imunisasi  {{ strtoupper(auth()->user()->name) }}
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        <form action="{{route('imunitation.store')}}" method="post">

            @csrf
            @foreach ($imunitation as $imun)
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <input class="form-control" id="user_id" name="user_id" type="hidden" value={{auth()->user()->id}} >
                    <div class="col-sm-6 form-group">
                        <label for="description">Jenis Imunisasi</label>
                        <select class="form-control" id="imunitation_id" name="imunitation_id" required>

                            <option value="{{$imun->id}}" >{{$imun->name}}</option>

                        </select>

                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="description">Gejala</label>
                    <select id="tags" class="form-control" name="sympton_id[]" multiple="multiple" style="width: 300px" required>

                        @foreach ($sympton as $symp)
                        <option value="{{$symp->id}}" >{{$symp->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tanggal">Tanggal Pemberian</label>
                        <input class="form-control" id="date" name="date" type="date" value="" required>
                    </div>
                   <div>

                   </div>
                <br/>
                    <div class="col-sm-12 form-group">
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
            @endforeach
    </div>
</div>
@endsection
@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#tags').select2({
      width: '100%',
      placeholder: "Select an Option",
      allowClear: true
    });
  </script>
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

