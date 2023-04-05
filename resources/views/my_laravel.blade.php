<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blade</title>

    <?php

        $myVar = 'variável de php simples';
        echo $myVar;
    ?>

    @php
    
    $myVarLaravel = 'variável de php simples';

    $myEmptyVar = null;

    if(!empty($myEmptyVar)){
        echo $myEmptyVar;
    }else{
        echo $myVarLaravel;
    }

    if($myEmptyVar != null){
        echo $myEmptyVar;
    }else{
        echo $myVarLaravel;
    }




    @endphp


</head>
<body>
    <h1>Laravel Blade</h1>

    <h1>{{$myVar}}</h1>


    @if (!@empty($myEmptyVar))
    <h1>hello</h1>
        {{$myEmptyVar}}
    @else
        {{$myVarLaravel}}        
    @endif
    
    <br>
    {{var_dump($myNumber)}}
    
</body>
</html>