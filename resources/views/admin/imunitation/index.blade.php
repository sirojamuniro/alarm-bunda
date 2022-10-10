@extends('admin.adminlte')
@section('content')@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  Please check the form below for errors
</div>
@endif
<div class="card">
    <form action="{{route('imunitation.store')}}" method="post">

    @csrf
    <div class="card-header" style="background-color: rgb(81, 217, 241) !important;">
        <i class="fa fa-align-justify"></i>Detail Imunisasi {{strtoupper(auth()->user()->name)}}
    </div>
    <div class="card-body">
        <form action="{{route('imunitation.store')}}" method="post">
        <table class="table table-responsive-sm table-bordered data-table">
            <thead>
                <tr align="center">
                    <th rowspan="2"  >JENIS IMUNISASI</th>
                    <th rowspan="2"  >TANGGAL PEMBERIAN</th>
                    <th colspan="4"  >KEJADIAN IKUTAN PASCA IMUNISASI (KIPI)</th>
                </tr>
                <tr align="center">
                    <td  >Demam</td>
                    <td >Bengkak/Kemerahan</td>
                    <td  >Mual/Muntah</td>
                    <td  >Nafas Cepat</td>
                </tr>
            </thead>

            <tbody>


                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v1" type="hidden" value="1" ></td>

                    <td>
                        <label for="title">Hepatitis B</label>
                        {{-- <input class="form-control" id="" name="imunitation_v1[0][imunitation_id]" type="checkbox" value="1" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v1" type="date" value="{{$date_v1 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v1[]" type="checkbox" value="1"   {{$v11 ? 'checked' : ''  }} ></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v1[]" type="checkbox" value="2"  {{$v12 ? 'checked' : ''  }} ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v1[]" type="checkbox" value="3" {{$v13 ? 'checked' : ''  }} ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v1[]" type="checkbox" value="4" {{$v14 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v2" type="hidden" value="2" ></td>
                    <td>
                        <label for="title">Polio</label>
                        {{-- <input class="form-control" id="" name="imunitation_v2[0][imunitation_id]" type="checkbox" value="2" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v2" type="date" value="{{$date_v2 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v2[]" type="checkbox" value="1" {{$v21 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v2[]" type="checkbox" value="2"{{$v22 ? 'checked' : ''  }} ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v2[]" type="checkbox" value="3" {{$v23 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v2[]" type="checkbox" value="4" {{$v24 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v3" type="hidden" value="3" ></td>
                    <td>
                        <label for="title">BCG</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="3" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v3" type="date" value="{{$date_v3 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v3[]" type="checkbox" value="1" {{$v31 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v3[]" type="checkbox" value="2" {{$v32 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v3[]" type="checkbox" value="3" {{$v33 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v3[]" type="checkbox" value="4" {{$v34 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v4" type="hidden" value="4" ></td>
                    <td>
                        <label for="title">DPT</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="4" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v4" type="date" value="{{$date_v4 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v4[]" type="checkbox" value="1" {{$v41 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v4[]" type="checkbox" value="2" {{$v42 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v4[]" type="checkbox" value="3" {{$v43 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v4[]" type="checkbox" value="4" {{$v44 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v5" type="hidden" value="5" ></td>
                    <td>
                        <label for="title">Hib</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="5" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v5" type="date" value="{{$date_v5 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v5[]" type="checkbox" value="1" {{$v51 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v5[]" type="checkbox" value="2" {{$v52 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v5[]" type="checkbox" value="3" {{$v53 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v5[]" type="checkbox" value="4" {{$v53 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v6" type="hidden" value="6" ></td>
                    <td>
                        <label for="title">PCV</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="6" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v6" type="date" value="{{$date_v6 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v6[]" type="checkbox" value="1" {{$v61 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v6[]" type="checkbox" value="2" {{$v62 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v6[]" type="checkbox" value="3" {{$v63 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v6[]" type="checkbox" value="4" {{$v64 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v7" type="hidden" value="7" ></td>
                    <td>
                        <label for="title">Rotavirus</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="7" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v7" type="date" value="{{$date_v7 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v7[]" type="checkbox" value="1" {{$v71 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v7[]" type="checkbox" value="2" {{$v72 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v7[]" type="checkbox" value="3" {{$v73 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v7[]" type="checkbox" value="4" {{$v74 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v8" type="hidden" value="8" ></td>
                    <td>
                        <label for="title">Influenza</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="8" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v8" type="date" value="{{$date_v8 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v8[]" type="checkbox" value="1" {{$v81 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v8[]" type="checkbox" value="2" {{$v82 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v8[]" type="checkbox" value="3" {{$v83 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v8[]" type="checkbox" value="4" {{$v84 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v9" type="hidden" value="9" ></td>
                    <td>
                        <label for="title">MR/MMR</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="9" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v9" type="date" value="{{$date_v9 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v9[]" type="checkbox" value="1" {{$v91 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v9[]" type="checkbox" value="2" {{$v92 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v9[]" type="checkbox" value="3" {{$v93 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v9[]" type="checkbox" value="4" {{$v94 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v10" type="hidden" value="10" ></td>
                    <td>
                        <label for="title">JE</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="10" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v10" type="date" value="{{$date_v10 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v10[]" type="checkbox" value="1" {{$v101 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v10[]" type="checkbox" value="2" {{$v102 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v10[]" type="checkbox" value="3" {{$v103 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v10[]" type="checkbox" value="4" {{$v104 ? 'checked' : ''  }}></td>
                </tr>
                <tr>

                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v11" type="hidden" value="11" ></td>
                    <td>
                        <label for="title">Varisela</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="11" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v11" type="date" value="{{$date_v11 ?? ""}}" ></td>
                    <td ><input  class="form-control" id="symptopms[]" name="symptopms_v11[]" type="checkbox" value="1" {{$v111 ? 'checked' : ''  }}></td>
                    <td><input  class="form-control" id="symptopms[]" name="symptopms_v11[]" type="checkbox" value="2" {{$v112 ? 'checked' : ''  }}></td>
                    <td ><input  class="form-control" id="symptopms[]" name="symptopms_v11[]" type="checkbox" value="3" {{$v113 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v11[]" type="checkbox" value="4" {{$v114 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v12" type="hidden" value="12" ></td>
                    <td>
                        <label for="title">Hepatitis A</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="12" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v12" type="date" value="{{$date_v12 ?? ""}}" ></td>
                    <td ><input class="form-control"  id="symptopms[]" name="symptopms_v12[]" type="checkbox" value="1" {{$v121 ? 'checked' : ''  }}></td>
                    <td><input class="form-control" id="symptopms[]" name="symptopms_v12[]" type="checkbox" value="2" {{$v122 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v12[]" type="checkbox" value="3" {{$v123 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v12[]" type="checkbox" value="4" {{$v124 ? 'checked' : ''  }}></td>
                </tr>
                <tr>
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td hidden>  <input class="form-control" id="" name="imunitation_v13" type="hidden" value="13" ></td>
                    <td>
                        <label for="title">Tifoid</label>
                        {{-- <input class="form-control" id="" name="imunitations[0][imunitation_id]" type="checkbox" value="13" > --}}
                    </td>
                    <td>  <input class="form-control" id="" name="date_v13" type="date" value="{{$date_v13 ?? ""}}" ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v13[]" type="checkbox" value="1" {{$v131 ? 'checked' : ''  }}></td>
                    <td><input  class="form-control" id="symptopms[]" name="symptopms_v13[]" type="checkbox" value="2" {{$v132 ? 'checked' : ''  }} ></td>
                    <td ><input class="form-control" id="symptopms[]" name="symptopms_v13[]" type="checkbox" value="3" {{$v133 ? 'checked' : ''  }}></td>
                    <td ><input class="form-control"  id="symptopms[]" name="symptopms_v13[]" type="checkbox" value="4" {{$v134 ? 'checked' : ''  }}></td>
                </tr>

            </tbody>
        </table>
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
        <br/>
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

