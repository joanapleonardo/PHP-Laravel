@php
use App\Models\User;
@endphp

@extends('layouts.main_layout')

@section('title')
<title>Dashboard</title>
@endsection

@section('content')
<div class="container">
    <h1>Dashboard</h1>

<h4>Olá, {{ Auth::user()->name }}</h4>

@if(Auth::user()->user_type == User::userAdmin)
<div class="alert alert-secondary" role="alert">
Conta de administrador
</div>
@endif
@endsection

</div>
@section('endcontent')
<a href="{{route('home')}}"><li>Voltar</li></a>
@endsection


</body>
<link rel="stylesheet" href="{}">
</html>
