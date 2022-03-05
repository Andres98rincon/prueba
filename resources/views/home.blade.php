@extends('layouts.template')

@section('content')
<div class="container card p-5">
    @include('productos.create')
    @include('productos.table')

</div>
@endsection