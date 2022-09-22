@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Detail Anak  {{ auth()->user()->name }}
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        <form action="{{route('child.store')}}" method="post">

            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <input class="form-control" id="user_id" name="user_id" type="hidden" value="{{auth()->user()->id}}" >
                    <div class="col-sm-12 form-group">
                        <label for="title">Nama Lengkap Anak</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Masukan Nama Anak" value="{{$result->child->name ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="description">Jenis Kelamin</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male" {{$result->child->gender ?? "" === 'male' ? 'selected' : ''}}>Lak-Laki</option>
                            <option value="female" {{$result->child->gender ?? "" === 'female' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input class="form-control" id="dob" name="dob" type="date" value="{{ date('Y-m-d', strtotime($result->child->dob ?? "")) }}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="tanggal">Berat Lahir</label>
                        <input class="form-control" id="birth_weight" name="birth_weight" type="number" value="{{$result->child->birth_weight ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="end_time">Usia</label>
                        <input class="form-control" id="age" name="age" type="number" value="{{$result->child->age ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="title">Keadaan Operasi Saat Lahiran Anak (cth:Sesar/Normal)</label>
                        <input class="form-control" id="operation" name="operation" type="text" placeholder="Masukan Jenis Operasi" value="{{$result->child->operation ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="description">Penolong Lahiran (cth:Dokter/Bidan)</label>
                        <input class="form-control" id="helper" name="helper" type="text" value="{{$result->child->helper ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="tanggal">Tempat Lahir (cth:Rumah Sakit/Klinik)</label>
                        <input class="form-control" id="place_of_birth" name="place_of_birth" type="text" value="{{$result->child->place_of_birth ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="end_time">Alamat Tempat Lahir</label>
                        <input class="form-control" id="address_place" name="address_place" type="text" value="{{$result->child->address_place ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="title">Nama Ayah Kandung</label>
                        <input class="form-control" id="father_name" name="father_name" type="text"  value="{{$result->child->father_name ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="description">Usia Ayah</label>
                        <input class="form-control" id="father_age" name="father_age" type="number" placeholder="Masukan description" value="{{$result->child->father_age ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="tanggal">Nama Ibu Kandung</label>
                        <input class="form-control" id="mother_name" name="mother_name" type="text" value="{{$result->child->mother_name ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="end_time">Usia Ibu Kandung</label>
                        <input class="form-control" id="mother_age" name="mother_age" type="number" value="{{$result->child->mother_age ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="title">Alamat Lengkap</label>
                        <input class="form-control" id="address" name="address" type="text"  value="{{$result->child->address ?? ""}}" >
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="description">Anak Ke (cth:Anak ke 1/2/3)</label>
                        <input class="form-control" id="number_child" name="number_child" type="number"  value="{{$result->child->number_child ?? ""}}" >
                    </div>
                    <table class="table table-responsive-sm table-bordered">

                        <thead>
                            <tr>
                                <th>Nama Saudara Kandung</th>
                                <th>Usia Saudara Kandung</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class = 'arrEmail'>
                                @isset($result->child->sibling)
                                @foreach($result->child->sibling  as $data)
                                <td> <input class="form-control price" id="name_sibling[]" name="name_sibling[]" type="text" value="{{ $data->name }}" required></td>
                                <td><input class="form-control price" id="age_sibling[]" name="age_sibling[]" type="number" value="{{ $data->age }}" required></td>
                                <td>
                                    <button class="btn btn-success add-button" type="button"><i class="fa fa-plus">Tambah Saudara</i></button>
                                </td>
                                @endforeach
                                @endisset
                                @empty($result->child->sibling)
                                <td> <input class="form-control price" id="name_sibling[]" name="name_sibling[]" type="text" value="" required></td>
                                <td><input class="form-control price" id="age_sibling[]" name="age_sibling[]" type="number" value="" required></td>
                                <td>
                                    <button class="btn btn-success add-button" type="button"><i class="fa fa-plus">Tambah Saudara</i></button>
                                </td>
                                @endempty
                            </tr>

                        </tbody>
                    </table>
                    {{-- <div class="col-md-12 form-group arrEmail">


                        <div class="col-sm-6 form-group testArr">
                            <label for="email">Nama Saudara Kandung</label>
                                <input type="text" name="name_sibling[]" class="form-control"  required>
                                <label for="email">Usia Saudara Kandung</label>
                                <input type="number" name="age_sibling[]" class="form-control" aria-describedby="add-button" required>
                                    <button class="btn btn-success add-button" type="button"><i class="fa fa-plus">Tambah Saudara</i></button>
                        </div>
                    </div> --}}
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

$(document).on('click', '.add-button', function() {
        let inputHtml = '<tr>';

        $(this).attr('class', 'btn btn-danger remove-button');
        $(this).html('<i class="fa fa-trash"></i>');

        inputHtml += '<td> <input class="form-control price" id="name_sibling[]" name="name_sibling[]" type="text" value="" required></td>';
        inputHtml += '<td><input class="form-control price" id="age_sibling[]" name="age_sibling[]" type="number" value="" required></td>';


        inputHtml += '<button class="btn btn-success add-button" type="button"><i class="fa fa-plus">Tambahkan Saudara</i></button>';

        inputHtml += '</tr>';

        $('.arrEmail').append(inputHtml);
    });

    $(document).on('click', '.remove-button', function() {
        $(this).parent().remove();
    });

</script>
@endpush

