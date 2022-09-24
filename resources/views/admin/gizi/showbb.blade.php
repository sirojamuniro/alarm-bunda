@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Check Berat Badan Anak
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
        @if($message == "sskb")
        <p>Anak diharuskan diberikan nutrisi yang lebih banyak serta dimaksimalkan dalam hal makanan</p>
        <strong>Anak dalam status Berat Badan "Sangat Kekurangan Gizi dan Kekurangan Berat Badan"</strong>
        @elseif($message == "skb")
            <p>Anak diharuskan diberikan nutrisi yang lebih baik dan diberikan makan yang lebih banyak</p>
            <strong>Anak dalam status Berat Badan "Kekurangan Gizi dan Berat Badan"</strong>
        @elseif($message == "kb")
        <p>Anak diberikan nutrisi yang cukup dan makanan yang cukup</p>
        <strong>Anak dalam status Berat Badan "Sedikit Kekurangan Berat Badan"</strong>

        @elseif($message == "n")
            <p>Anak sudah baik dan tetap dijaga nutrisi dan makanannya</p>
            <strong>Anak dalam status Berat Badan "Normal"</strong>

        @elseif($message == "kbb")
            <p>Anak diberikan nutrisi yang cukup dan makanan yang cukup</p>
            <strong>Anak dalam status Berat Badan "Sedikit Kelebihan Berat Badan"</strong>
        @elseif($message == "skbb")
        <p>Anak diharuskan mengurangi jumlah porsi makan</p>
        <strong>Anak dalam status Berat Badan "Kelebihan Berat Badan"</strong>

        @elseif($message == "sskbb")
            <p>Anak diharuskan mengurangi jumlah porsi makan dan mengurangi makanan mengandung kalori tinggi</p>
            <strong>Anak dalam status Berat Badan "Sangat Kelebihan Berat Badan"</strong>

        @endif



        </h1>
        @endif
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush

