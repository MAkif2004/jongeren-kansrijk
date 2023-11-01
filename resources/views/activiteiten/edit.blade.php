<x-layout>
    <h1 id="medewerkers-title">Jongere Toevoegen</h1>

    <style>
        .activiteiten {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="jongere-add-container">
            <form action="/activiteiten/edit/{{$activiteit->id}}" method="post">
                @csrf

                <label for="add-name">Naam:</label>
                <input value="{{$activiteit->name}}" name="name" type="text" id="add-name"/>
                <label for="add-description">Beschrijving:</label>
                <input value="{{$activiteit->description}}" name="description" type="text" id="add-description"/>
                <label for="add-startdate">Start Datum:</label>
                <input value="{{$activiteit->start_date}}" name="start_date" type="date" id="add-startdate"/>
                <label for="add-enddate">Eind Datum:</label>
                <input value="{{$activiteit->end_date}}" name="end_date" type="date" id="add-enddate"/>


                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
