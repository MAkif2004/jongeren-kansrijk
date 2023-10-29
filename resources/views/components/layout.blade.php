<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Jongeren Kansrijker</title>
</head>
<body>
<header>
    <div class="title">
        <div class="logo" id="logo">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" style="width: 120px; height: 120px;"/>
        </div>
        <h3 class="title-text">Jongeren Kansrijker</h3>
    </div>

    <nav id="nav">
        <a href="/activiteiten"><p class="button">Activiteiten</p></a>
        <a href="/medewerkers"><p class="button">Medewerkers</p></a>
        <a href="/jongeren"><p class="button">Jongeren</p></a>
        <a href="/instituten"><p class="button">Instituten</p></a>
        @auth
            <form method="POST" action="/logout">
                @csrf
                <button class="button">Log uit</button>
            </form>
        @endauth
    </nav>
</header>

    {{ $slot }}

</body>
</html>
