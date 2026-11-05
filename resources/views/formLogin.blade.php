<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/forms.css'])
</head>
<body>
    
    <div class="container">
        <form action="{{ route('login') }}" method="POST" class="forms">
            @csrf
            <label for="">Informe seu email</label>
            <input 
                type="text"
                name="email"
                placeholder="Informe seu email"    
            >
    
            @error('email')
                <span>{{ $message }}</span>
            @enderror

            <label for="">Informe sua senha</label>
            <input 
                type="text"
                name="password"
                placeholder="infome sua senha"
            >
    
            @error('password')
                <span>{{ $message }}</span>
            @enderror

             <p>
                Voltar para pagina <a href="{{ route('index') }} ">inicial!</a>
            </p>

            <button type="submit">Fazer Login</button>

            @error('error')
                <span>{{ $message }}</span>
            @enderror

        
        </form>
    </div>
</body>
</html>