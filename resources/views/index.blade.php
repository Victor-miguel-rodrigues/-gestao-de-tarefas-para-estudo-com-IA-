<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/style.css'])
</head>
<body>
    
    <header>
        <nav class="navbar">
            <div class="log">
                    
            </div>
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">Sobre nois</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="main">
            <div class="container">
                <h1>Gerencie Suas <strong class="importante"> Tarefas e trabalhos </strong> com mecanismo inteligente de estudo e organização</h1>
                <p>
                    Organize seu progresso, gerencie suas tarefas e gere conteúdos  personalizados para revisão. Aqui, suas metas se tornam claras e seu planejamento é ajustado com o auxílio da inteligência artificial. Suas dificuldades e dúvidas são utilizadas para personalizar o aprendizado, criando atividades, exercícios e materiais em PDF que ajudam a fortalecer seu conhecimento e melhorar sua compreensão.
                </p>
                <a href="{{ route('register.auth') }}" class="link-login">Começar agora</a>
            </div>
             <img src="{{ asset('images/img.png') }}" alt="Imagem" width="720">
        </section>


        <section class="cards">
            <div class="card">
                <div class="title">
                    <h1>organização inteligente</h1>
                    <p></p>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    <h1>acompanha seu progresso</h1>
                    <p></p>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    <h1>Foco nos seus objetivos</h1>
                    <p></p>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    <h1>Assuma de qualquer lugar</h1>
                    <p></p>
                </div>
            </div>
        </section>

    </main>
</body>
</html>