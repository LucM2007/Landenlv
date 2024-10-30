<!-- resources/views/landen/edit.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Land Bewerken</h1>

        <form action="{{ route('landen.update', $landen->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="Naam" class="block text-sm font-medium text-black">Naam</label>
                <input type="text" name="Naam" id="Naam" value="{{ $landen->Naam }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="EersteTaal" class="block text-sm font-medium text-black">Eerste Taal</label>
                <input type="text" name="EersteTaal" id="EersteTaal" value="{{ $landen->EersteTaal }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="AantalInwooners" class="block text-sm font-medium text-black">Aantal Inwooners</label>
                <input type="number" name="AantalInwooners" id="AantalInwooners" value="{{ $landen->AantalInwooners }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="AantalInwoonersDatum" class="block text-sm font-medium text-black">Datum Aantal Inwooners</label>
                <input type="date" name="AantalInwoonersDatum" id="AantalInwoonersDatum" value="{{ $landen->AantalInwoonersDatum ? $landen->AantalInwoonersDatum->format('Y-m-d') : '' }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="Hooftstad" class="block text-sm font-medium text-black">Hooftstad</label>
                <input type="text" name="Hooftstad" id="Hooftstad" value="{{ $landen->Hooftstad }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="TelefoonCode" class="block text-sm font-medium text-black">Telefoon Code</label>
                <input type="text" name="TelefoonCode" id="TelefoonCode" value="{{ $landen->TelefoonCode }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="Bnp" class="block text-sm font-medium text-black">Bnp</label>
                <input type="text" name="Bnp" id="Bnp" value="{{ $landen->Bnp }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <div>
                <label for="BnpDatum" class="block text-sm font-medium text-black">Datum Bnp</label>
                <input type="date" name="BnpDatum" id="BnpDatum" value="{{ $landen->BnpDatum ? $landen->BnpDatum->format('Y-m-d') : '' }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-200">Bijwerken</button>
        </form>
    </div>
</x-app-layout>
