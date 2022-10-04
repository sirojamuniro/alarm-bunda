@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Hasil KPSP
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        @if ($message = Session::get('status'))

        <h1>
        <strong>{{$message}}</strong>
        <p>Saran:{{Session::get('saran')}}</p>
        </h1>
        @endif
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

