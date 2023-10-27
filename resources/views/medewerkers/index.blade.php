<x-layout>

    <h1 id="medewerkers-title">Medewerkers</h1>


    <section id="list-section">

        @foreach ($users as $user)

            <div class="medewerker">
                <p>{{$user->id}}</p>
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>
                <a href="/medewerkers/edit/{{$user->id}}">
                    <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                </a>
                <form action="/medewerkers/delete/{{$user->id}}" method="POST">
                    @csrf
                    <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                </form>


            </div>

        @endforeach

        {{ $users->links() }}
    </section>
</x-layout>
