<x-layout>
    <h1 id="medewerkers-title">Medewerker Toevoegen</h1>

    <style>
        .medewerkers {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="medewerker-add-container">
            <form action="/medewerkers/add" method="post">
                @csrf

                    <label for="add-name">Naam:</label>
                <input name="name" type="text" id="add-name"/>
                <label for="add-email">Email:</label>
                <input name="email" type="email" id="add-email"/>
                <label for="add-password">Wachtwoord:</label>
                <input name="password" type="password" id="add-password"/>
                <label for="add-password">Herhaal Wachtwoord:</label>
                <input name="retype-password" type="password" id="add-retype-password"/>

                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
