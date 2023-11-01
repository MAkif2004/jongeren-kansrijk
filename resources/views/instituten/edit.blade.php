<x-layout>
    <h1 id="medewerkers-title">Jongere Toevoegen</h1>

    <style>
        .instituten {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="instituut-add-container">
            <form action="/instituten/edit/{{$instituut->id}}" method="post">
                @csrf

                <label for="add-name">Naam:</label>
                <input value="{{$instituut->naam}}" name="name" type="text" id="add-name"/>


                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
