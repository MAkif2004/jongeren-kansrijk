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
        Jongeren Kansrijker
        <nav>
            {{-- <a href="student"><p>STUDENT</p></a>
            <a href="instituut"><p>instituut</p></a>
            <a href="activiteit"><p>activiteit</p></a> --}}
        </nav>
    </header>
    <main>
        <a href="medewerkers"><p class="button">Medewerkers</p></a>
        <a href="activiteiten"><p class="button">Activiteiten</p></a>
        <a href="jongeren"><p class="button">Jongeren</p></a>
        <a href="instituten"><p class="button">Instituten</p></a>
        @auth
            <form method="POST" action="/logout">
                @csrf
                <button class="button">Log uit</button>
            </form>
        @endauth
    </main>
</body>
</html>
