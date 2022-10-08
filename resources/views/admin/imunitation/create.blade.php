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
        <i class="fa fa-align-justify"></i>List Booking
    </div>
    <div class="card-body">
        <form action="{{route('imunitation.store')}}" method="post">
        <table class="table table-responsive-sm table-bordered data-table">
            <thead>
                <tr align="center">
                    <th rowspan="2"  >JENIS IMUNISASI</th>
                    <th colspan="4"  >KEJADIAN IKUTAN PASCA IMUNISASI (KIPI)</th>
                    <th rowspan="2" >Aksi</th>
                </tr>
                <tr align="center">
                    <td  >Demam</td>
                    <td >Bengkak/Kemerahan</td>
                    <td  >Mual/Muntah</td>
                    <td  >Nafas Cepat</td>
                </tr>
            </thead>

            <tbody>
                <?php $no = 0;?>
                @foreach($imunitation as $imun)
                <?php $no++ ;?>

                <tr >

                    <td>
                        <label for="title">{{$imun->name}}</label>
                        <input class="form-control" id="imunitations[]" name="imunitations[a]" type="checkbox" value={{$imun->id}} ></td>
                    {{-- <td hidden> <input class="form-control" id="imunitations[]" name="imunitations[]" type="hidden" value={{$imun->id}} ></td> --}}
                    {{-- <td  align="center">{{$imun->name}}</td> --}}
                    @foreach ( $imun->detailImunitation as $symp)
                    <td align="center"><input class="form-control"  id="symptoms[]" name="imunitations[test]" type="checkbox" value={{$symp->id}} ></td>
                    @endforeach
                    <td hidden> <input class="form-control" id="user" name="user" type="hidden" value={{auth()->user()->id}} ></td>
                    <td>
                        {{-- <form action="{{route('imunitation.update', $imun->id)}}" method="POST">
                            {{ csrf_field() }}
                        {{ method_field('PUT') }}

                            <button  type="submit" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-primary btn-sm  btn-success  deleteUser"><i class="fa fa-times"></i></a> &nbsp;
                        </form> --}}
                    </td>
                    {{-- <td align="center"><input  id="symptopms[]" name="symptoms[]" type="checkbox" value="1" ></td>
                    <td align="center"><input  id="symptopms[]" name="symptoms[]" type="checkbox" value="2" ></td>
                    <td align="center"><input  id="symptopms[]" name="symptoms[]" type="checkbox" value="3" ></td>
                    <td align="center"><input  id="symptopms[]" name="symptoms[]" type="checkbox" value="4" ></td> --}}

               </tr>
               @endforeach
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

