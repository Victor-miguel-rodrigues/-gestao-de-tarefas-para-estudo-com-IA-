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
        <form action="{{ route('registration.auth') }}" method="POST" class="forms">
            @csrf
            <label for="">Nome completo</label>
            <input  
                type="text" 
                name="nome_completo" 
                id=""
                placeholder="Informe seu nome nome completo"
            >
            @error('nome_completo')
                  <span>{{ $message }}</span>
            @enderror
            <label for="">Email</label>
            <input 
                type="text"
                name="email"
                placeholder="Informe seu endereço email"    
            >
            @error('email')
                   <span>{{ $message }}</span>
            @enderror
            <label for="">Senha</label>
            <input type="text"
                name="password"
                placeholder="informe sua senha"
            >
            @error('password')
                <span>{{ $message }}</span>
            @enderror
            <label for="">Repitir a senha</label>
            <input type="text"
                name="password_confirmation"
                placeholder="repita sua senha"
            >
            @error('password_confirmation')
                  <span>{{ $message }}</span>
            @enderror
            <label for="data_nascimento">Informe sua data de nascimento</label>
            <input type="date" name="data_nascimento" id="">
            @error('data_nascimento')
                  <span>{{ $message }}</span>
            @enderror
            <p>
                ja possui Conta? <a href="{{ route('login.auth') }}">fazer login</a>
            </p>
            <button type="submit">Cadastrar usuario</button>
            
        </form>
    </div>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>
</html>