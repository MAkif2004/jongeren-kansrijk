<x-layout>
    <h1 id="medewerkers-title">Instituut Overzicht</h1>

    <style>
        .instituten {
            border: 2px solid red;
        }
         .activiteiten {
             border: 2px solid red;
         }

        #instituut-table thead {
            background: #00ffe7;
        }
        #instituut-table td {
            color: black;
        }
        body {
            background: #95f0ff;
        }
        #nav {
            background: #71e8d7;
        }
        #nav .button {
            background: #74b5bf;
        }
        .add-button {
            background: #47e5e5;
        }
    </style>

    <section id="list-section">

        <table id="instituut-table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>naam</td>
                </tr>
            </thead>
            <tbody>
            @foreach ($instituten as $instituut)

                <tr>
                    <td>{{$instituut->id}}</td>
                    <td>{{$instituut->naam}}</td>
                    <td>
                        <a href="/instituten/edit/{{$instituut->id}}">
                            <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                        </a>
                    </td>
                    <td>
                        <form action="/instituten/delete/{{$instituut->id}}" method="POST">
                            @csrf
                            <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="/instituten/add" class="add-button">Een Activiteit Toevoegen</a>
        {{ $instituten->links() }}
    </section>
</x-layout>
