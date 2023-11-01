<x-layout>
    <h1 id="medewerkers-title">Jongeren Overzicht</h1>

    <style>
        .activiteiten {
            border: 2px solid red;
        }

        #activiteit-table thead {
            background: #ffbf00;
        }
        body {
            background: #ffd65b;
        }
        #nav {
            background: #ecb50f;
        }
        #nav .button {
            background: #be9210;
        }
        .add-button {
            background: #f1b400;
        }
    </style>

    <section id="list-section">

        <table id="activiteit-table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>naam</td>
                    <td>beschrijving</td>
                    <td>start datum</td>
                    <td>eind datum</td>

                </tr>
            </thead>
            <tbody>
            @foreach ($activiteiten as $activiteit)

                <tr>
                    <td>{{$activiteit->id}}</td>
                    <td>{{$activiteit->name}}</td>
                    <td>{{$activiteit->description}}</td>
                    <td>{{$activiteit->start_date}}</td>
                    <td>{{$activiteit->end_date}}</td>
                    <td>
                        <a href="/activiteiten/edit/{{$activiteit->id}}">
                            <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                        </a>
                    </td>
                    <td>
                        <form action="/activiteiten/delete/{{$activiteit->id}}" method="POST">
                            @csrf
                            <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="/activiteiten/add" class="add-button">Een Activiteit Toevoegen</a>
        {{ $activiteiten->links() }}
    </section>
</x-layout>
