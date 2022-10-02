@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Soal KPSP  {{ auth()->user()->name }}
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        <form action="{{route('kpsp.store')}}" method="post">

            @csrf
            <table class="table table-responsive-sm table-bordered example2">


                <thead>
                    <tr>
                        <th>Pemeriksaan</th>
                        <th>Type</th>
                        <th>Ya</th>
                        <th>Tidak</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $valueYes = 0; $valueNo = 0 ;?>
                    @foreach($result  as $data)
                    <?php $valueYes++ ;$valueNo++;?>
                    <tr class = 'arrEmail'>


                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                          <td>
                            <select class="form-control" id="count[]" name="count[]">
                                <option value="1">Ya</option>
                                <option value="2" >Tidak</option>
                            </select>
                            {{-- <input  type="checkbox" id="value_yes[]" name="value_yes[]" value="{{$valueYes}}"> --}}

                        </td>

                        <td>
                            <input  type="checkbox" id="value_no[]" name="value_no[]" value="{{$valueNo}}"> 
                        </td>

                    </tr>
                    @endforeach

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

(function() {
    $("table").on("click", "input", function() {

      var row = $(this).closest("tr");
      var yes = row.find(".yes").val();
      var no = row.find(".no").val();

      if (yes) {
        if(yes == no){
         $(".no").prop("disabled", $(this).is(":checked"));
        }
        } else if (no) {
            if(no == yes){
            $(".yes").prop("disabled", $(this).is(":checked"));
        }
}
  })();
});
</script>
@endpush

