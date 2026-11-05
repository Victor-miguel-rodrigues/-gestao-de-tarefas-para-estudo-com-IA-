<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/global.css'])
</head>
<body>
    

    <header>
        <nav class="navbar">
            <ul>
                <li>mensage</li>
                <li>notificação</li>
                <li class="perfil"><a href="{{ route('view.id', Auth::id() )}}">perfil</a></li>
            </ul>
        </nav>
    </header>

    
</body>
</html>