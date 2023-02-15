@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center p-5">
    <div class="card col-sm-6 p-3">
<form action="{{ url('/cliente') }}" method="POST" class="d-inline" enctype="multipart/form-data">
    @csrf
    @include('cliente.form',['modo'=>'New'])
</form>
</div>
</section>
@endsection