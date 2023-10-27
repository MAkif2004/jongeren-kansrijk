<x-layout>

    <h1 id="medewerkers-title">Medewerkers</h1>


    <section id="medewerkers-list">

        @foreach ($users as $user)

            <div class="medewerker">
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>
                <p><img class="medewerker-icon" src="images/recycle_bin.png" /></p>
                <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg" /></p>
            </div>

        @endforeach

        {{ $users->links() }}
    </section>
</x-layout>
