<x-layout>
    <h1 id="medewerkers-title">Jongeren Overzicht</h1>

    <style>
        .jongeren {
            border: 2px solid red;
        }
        #jongere-table thead {
            background: #82ff8a;
        }
        .add-button {
            background: #06a511;
        }
        #nav {
            background: #209428;
        }
        #nav .button {
            background: #08b514;
        }
        body {
            background: #2fca6b;
        }
    </style>

    <section id="list-section">

        <table id="jongere-table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>naam</td>
                    <td>geboortejaar</td>
                    <td>geslacht</td>
                    <td>activiteit</td>
                    <td>instituut</td>

                </tr>
            </thead>
            <tbody>
            @foreach ($jongeren as $jongere)

                <tr>
                    <td>{{$jongere->id}}</td>
                    <td>{{$jongere->name}}</td>
                    <td>{{$jongere->birthdate}}</td>
                    <td>{{$jongere->gender}}</td>
                    <td>{{empty($jongere->activiteit->name) ? 'geen' : $jongere->activiteit->name}}</td>
                    <td>{{empty($jongere->instituut->naam) ? 'geen' : $jongere->instituut->naam}}</td>
                    <td>
                        <a href="/jongeren/edit/{{$jongere->id}}">
                            <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                        </a>
                    </td>
                    <td>
                        <form action="/jongeren/delete/{{$jongere->id}}" method="POST">
                            @csrf
                            <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="/jongeren/add" class="add-button">Een Jongere Toevoegen</a>
        {{ $jongeren->links() }}
    </section>
</x-layout>
