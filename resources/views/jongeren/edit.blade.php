<x-layout>
    <h1 id="medewerkers-title">Jongere bijwerken</h1>

    <Section id="jongere-edit-section">
        <div id="jongere-edit-container">
            <form action="/jongeren/edit/{{$jongere->id}}" method="post">
                @csrf

                <label for="edit-name">Naam:</label>
                <input name="name" type="text" value="{{$jongere->name}}" id="edit-name"/>
                <label for="edit-birthdate">Geboortejaar:</label>
                <input name="birthdate" type="date" value="{{$jongere->birthdate}}" id="edit-birthdate"/>
                <label for="edit-gender">Geslacht:</label>
                <input name="gender" type="text" value="{{$jongere->gender}}" id="edit-gender"/>
                <select for="edit-activiteit-id">Activiteit:</select>
                @foreach ($jongere->activiteit)
                <option name=""></option>


                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
