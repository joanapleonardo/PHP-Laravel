@extends('layouts.main_layout')

@section('title')
<title>Home</title>
@endsection

@section('content')

<div class="container">
   {{--  <h1>Olá, tá tudo?</h1> --}}

    <ul>
        <a href="{{route('show_all_users')}}">
            <li>Todos os utilizadores</li>
        </a>
    </ul>
    <ul>
        <a href="{{route('show_add_users')}}">
            <li>Aqui podes adicionar utilizadores</li>
        </a>
    </ul>
    <ul>
        <a href="{{route('show_all_tasks')}}">
            <li>Aqui podes ver todas as tarefas</li>
        </a>
    </ul>
    <ul>
        <a href="{{route('new_task')}}">
            <li>Aqui podes adicionar tarefas</li>
        </a>
    </ul>
</div>

{{-- <h1>Vamos testar as variáveis</h1> --}}
{{-- <h4>{{$aMinhaVariavel}}</h4> --}}

@endsection


@section('endcontent')
@endsection


</body>
<link rel="stylesheet" href="{}">
</html>
