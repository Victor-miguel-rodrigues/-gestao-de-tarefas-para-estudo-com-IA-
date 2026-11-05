<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perfil</title>
</head>
<body>
     
     
      <header>
         <nav>
             <ul>
                <li><a href="{{ route('home') }}">Voltar</a></li>
                <li></li>
                <li></li>
                <li></li>
             </ul>
         </nav>
      </header>

    <form action="{{ route('logout.auth') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
</body>
</html>