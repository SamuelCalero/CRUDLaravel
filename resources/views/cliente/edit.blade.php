@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center p-5">
    <div class="card col-sm-6 p-3">
<form action="{{ url('/cliente/'.$cliente->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('cliente.form',['modo'=>'Edition'])
</form>
</div>
</section>
@endsection
