<!-- resources/views/landen/edit.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Land Bewerken</h1>

        <form action="{{ route('landen.update', $landen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="Naam" value="{{ $landen->Naam }}" required>
            <input type="text" name="EersteTaal" value="{{ $landen->EersteTaal }}">
            <input type="number" name="AantalInwooners" value="{{ $landen->AantalInwooners }}">
            <input type="text" name="Hooftstad" value="{{ $landen->Hooftstad }}">
            <input type="text" name="TelefoonCode" value="{{ $landen->TelefoonCode }}">
            <button type="submit">Bijwerken</button>
        </form>
    </div>
</x-app-layout>
