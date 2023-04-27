@extends('layouts.main_layout')

@section('title')
    <title>All Users</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Utilizadores</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Password</th>
                <th scope="col">eMail</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($allUsers as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->password}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="{{ route('show_user', $item->id)}}"> <button class="btn btn-info">Ver</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

{{-- <div class="container">
    <h2>Olá, aqui estão todos os utilizadores</h2>
</div> --}}

{{-- <h2>Info cesae</h2> --}}


{{-- <h5>{{$cesaeInfo['name']}}
    {{$cesaeInfo['address']}}
    {{$cesaeInfo['email']}}</h5> --}}


<a href="{{route('home')}}"><li>Voltar</li></a>

@endsection
