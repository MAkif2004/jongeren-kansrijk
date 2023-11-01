<x-layout>
    <h1 id="medewerkers-title">Medewerker bijwerken</h1>

    <style>
        .medewerkers {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="medewerker-edit-container">
            <form action="/medewerkers/edit/{{$medewerker->id}}" method="post">
                @csrf

                <label for="edit-name">Naam:</label>
                <input name="name" type="text" value="{{$medewerker->name}}" id="edit-name"/>
                <label for="edit-email">Email:</label>
                <input name="email" type="text" value="{{$medewerker->email}}" id="edit-email"/>

                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
