<x-layout>
    <h1 id="medewerkers-title">Medewerker Toevoegen</h1>

    <Section id="medewerker-edit-section">
        <div id="medewerker-edit-container">
            <form action="/medewerkers/add" method="post">
                @csrf

                <label for="edit-name">Naam:</label>
                <input name="name" type="text" id="edit-name"/>
                <label for="edit-email">Email:</label>
                <input name="email" type="text" id="edit-email"/>

                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
