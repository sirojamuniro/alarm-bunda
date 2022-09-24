@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Check Tinggi Badan Anak
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
        @if($message == "sp")
        <p>Anak diharuskan diberikan nutrisi yang tepat</p>
        <strong>Anak dalam status Tinggi Badan "Sangat Pendek"</strong>
        @elseif($message == "p")
            <p>Anak diharuskan diberikan nutrisi yang tepat</p>
            <strong>Anak dalam status Tinggi Badan "Pendek"</strong>
        @elseif($message == "n")
        <p>Anak baik dan tetap dijaga pertumbuhannya</p>
        <strong>Anak dalam status Tinggi Badan "Normal"</strong>

        @elseif($message == "t")
            <p>Anak sudah melebihi tinggi badan anak diusianya</p>
            <strong>Anak dalam status Tinggi Badan "Tinggi"</strong>

        @endif



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

