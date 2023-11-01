<x-layout>
    <h1 id="medewerkers-title">Jongere Toevoegen</h1>

    <style>
        .jongeren {
            border: 2px solid red;
        }
    </style>

    <Section id="medewerker-edit-section">
        <div id="jongere-add-container">
            <form action="/jongeren/edit/{{$jongere->id}}" method="post">
                @csrf

                <label for="add-name">Naam:</label>
                <input value="{{$jongere->name}}" name="name" type="text" id="add-name"/>
                <label for="add-birthdate">Geboortejaar:</label>
                <input value="{{$jongere->birthdate}}" name="birthdate" type="date" id="add-birthate"/>
                <label for="add-gender">Geslacht:</label>
                <input value="{{$jongere->gender}}" name="gender" type="text" id="add-gender"/>
                <label for="add-activity">Kies een activiteit</label>
                <select name="activity" id="add-activity">
                    <option value="0">Geen</option>
                    @foreach($activiteiten as $activiteit)
                        <option value="{{$activiteit->id}}">{{$activiteit->name}}</option>
                    @endforeach
                </select>
                <label for="add-institute">Kies een Instituut</label>
                <select name="institute" id="add-institute">
                    <option value="0">Geen</option>
                    @foreach($instituten as $instituut)
                        <option value="{{$instituut->id}}">{{$instituut->name}}</option>
                    @endforeach
                </select>

                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </Section>
</x-layout>
