<x-layout>
    <h1 id="medewerkers-title">Activiteit Toevoegen</h1>

    <style>
        .activiteiten {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="activiteit-add-container">
            <form action="/activiteiten/add" method="post">
                @csrf

                <label for="add-name">Naam:</label>
                <input name="name" type="text" id="add-name"/>
                <label for="add-description">Beschrijving:</label>
                <input name="description" type="text" id="add-description"/>
                <label for="add-startdate">Start Datum:</label>
                <input name="start_date" type="date" id="add-startdate"/>
                <label for="add-enddate">Eind Datum:</label>
                <input name="end_date" type="date" id="add-enddate"/>

                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
