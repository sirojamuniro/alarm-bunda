@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Check KPSP Anak
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        <form action="{{route('kpsp.question')}}" method="post">

            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <input class="form-control" id="user_id" name="user_id" type="hidden" value="{{auth()->user()->id}}" >
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

