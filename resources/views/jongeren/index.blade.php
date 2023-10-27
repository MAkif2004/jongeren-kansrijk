<x-layout>
    <h1 id="medewerkers-title">Jongeren Overzicht</h1>

    <section id="list-section">

        @foreach ($jongeren as $jongere)

            <div class="jongere">
                <p>{{$jongere->id}}</p>
                <p>{{$jongere->name}}</p>
                <p>{{$jongere->birthdate}}</p>
                <p>{{$jongere->gender}}</p>
                <p>{{$jongere->activiteit->name}}</p>
                <p>{{$jongere->instituut->naam}}</p>
                <p>{{$jongere->email}}</p>
                <a href="/jongeren/edit/{{$jongere->id}}">
                    <p><img class="medewerker-icon" src="images/edit-svgrepo-com.svg"/></p>
                </a>
                <form action="/jongeren/delete/{{$jongere->id}}" method="POST">
                    @csrf
                    <p><img onclick="submit()" class="medewerker-icon" src="images/recycle_bin.png"/></p>
                </form>


            </div>

        @endforeach

        {{ $jongeren->links() }}
    </section>
</x-layout>
