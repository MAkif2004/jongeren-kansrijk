<x-layout>

    <h1 id="medewerkers-title">Medewerkers</h1>

    <style>
        .medewerkers {
            border: 2px solid red;
        }
    </style>

    <section id="list-section">

        <table id="medewerker-table">
            <thead>
            <tr>
                <td>ID</td>
                <td>naam</td>
                <td>Email</td>

            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="/medewerkers/edit/{{$user->id}}">
                            <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                        </a>
                    </td>
                    <td>
                        <form action="/medewerkers/delete/{{$user->id}}" method="POST">
                            @csrf
                            <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <a href="/medewerkers/add" class="add-button">Medewerker Toevoegen</a>
        {{ $users->links() }}
    </section>
</x-layout>
