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
            <div class="col-md-12">
                <div class="row">
                    <input class="form-control" id="user_id" name="user_id" type="hidden" value={{auth()->user()->id}} >
                    <div class="col-sm-6 form-group">
                        <label for="title">Nama Lengkap Anak</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Masukan Nama Anak" value={{auth()->user()->child->name ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="description">Jenis Kelamin</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male" {{auth()->user()->child()->gender ?? "" == 'male' ? 'selected' : ''}}>Laki-Laki</option>
                            <option value="female" {{auth()->user()->child()->gender ?? "" == 'female' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input class="form-control" id="dob" name="dob" type="date" value={{ date('Y-m-d', strtotime(auth()->user()->child->dob ?? "")) }} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tanggal">Berat Lahir (Kg)</label>
                        <input class="form-control" id="birth_weight" name="birth_weight" type="number" value={{auth()->user()->child->birth_weight ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="end_time">Usia (Bulan)</label>
                        <input class="form-control" id="age" name="age" type="number" value={{auth()->user()->child->age ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="title">Keadaan Saat Lahir (cth:Caesar/Normal)</label>
                        <input class="form-control" id="operation" name="operation" type="text" placeholder="Masukan Jenis Operasi" value={{auth()->user()->child->operation ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="description">Penolong Lahiran (cth:Dokter/Bidan)</label>
                        <input class="form-control" id="helper" name="helper" type="text" value={{auth()->user()->child->helper ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tanggal">Tempat Lahir (cth:Rumah Sakit/Klinik)</label>
                        <input class="form-control" id="place_of_birth" name="place_of_birth" type="text" value={{auth()->user()->child->place_of_birth ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="end_time">Alamat Tempat Lahir (cth:concat,JIH)</label>
                        <input class="form-control" id="address_place" name="address_place" type="text" value={{auth()->user()->child->address_place ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="title">Nama Ayah Kandung</label>
                        <input class="form-control" id="father_name" name="father_name" type="text"  value={{auth()->user()->child->father_name ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="description">Usia Ayah</label>
                        <input class="form-control" id="father_age" name="father_age" type="number" placeholder="Masukan description" value={{auth()->user()->child->father_age ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tanggal">Nama Ibu Kandung</label>
                        <input class="form-control" id="mother_name" name="mother_name" type="text" value={{auth()->user()->child->mother_name ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="end_time">Usia Ibu Kandung</label>
                        <input class="form-control" id="mother_age" name="mother_age" type="number" value={{auth()->user()->child->mother_age ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="title">Alamat Lengkap</label>
                        <input class="form-control" id="address" name="address" type="text"  value={{auth()->user()->child->address ?? ""}} >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="description">Anak Ke (cth:Anak ke 1/2/3)</label>
                        <input class="form-control" id="number_child" name="number_child" type="number"  value={{auth()->user()->child->number_child ?? ""}} >
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

    function formatRows(id,name,main, prefer, common) {
                    return '<tr><td class="col-xs-3"><select name="product_id[]" class="custom-select form-control" readonly><option  value="' + id + '">' + name + '</option></select>' +
                    '<td class="col-xs-3"><input type="number" name="qty[]" value="' + prefer + '" class="form-control editable" /></td>' +
                    '<td class="col-xs-3"><input type="number" name="price[]" value="' + prefer + '" class="form-control editable" readonly/></td>' +
                    '<td class="col-xs-3"><input type="number" name="subtotal[]" value="' + prefer + '" class="form-control editable" readonly/></td>' +
                    '<td class="col-xs-1 text-center"><a href="#" onClick="deleteRow(this)">' +
                    '<i class="fa fa-trash" aria-hidden="true"></a></td></tr>';
                };

                function deleteRow(trash) {
                    $(trash).closest('tr').remove();
                };

                function addRow() {
                    var sel = document.getElementById('category_id');
                    var opt = sel.options[sel.selectedIndex];

                    var id = opt.value;
                    var name = opt.text;
                    var main = $('.addMain').val();
                    var preferred = $('.addPrefer').val();
                    var common = $('.addCommon').val();
                    $(formatRows(id,name,main, preferred, common)).insertAfter('#addRow');
                    $(input).val('');
                }

                $('.addBtn').click(function() {
                    addRow();
                });

</script>
@endpush

