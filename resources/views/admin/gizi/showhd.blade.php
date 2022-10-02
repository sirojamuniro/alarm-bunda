@extends('admin.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-align-justify"></i>Check Lingkar Kepala Anak
        <div class="row">
          <div class="col-sm-3">
              <div class="input-group">
              </div>
          </div>
        </div>
  </div>
    <div class="card-body">
        @if ($messages = Session::get('status'))

            <div class="col-sm-12 form-group">
               <strong>Lingkar Kepala Normal Berkisar {{$messages}}</strong>
            </div>



        </h1>
        @endif
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush

