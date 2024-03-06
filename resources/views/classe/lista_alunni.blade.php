<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- @dump($students)
@dump($class) -->
<body>
    <header>
        <a href="{{route('home')}}">Torna indietro</a>
    </header>
    
    <main>
        <h2>Alunni classe {{$class}}</h2>
        <ul>
            @foreach ($students as $student )
            <li>{{$student}}</li>                
            @endforeach            
        </ul>
    </main>
</body>

</html>