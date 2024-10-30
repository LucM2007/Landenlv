<!-- resources/views/landen/create.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-6 bg-blue-100"> <!-- Lichte blauwe achtergrond -->
        <h1 class="text-2xl font-bold mb-4 text-black">Land Toevoegen</h1> <!-- Zwarte tekst -->

        <form action="{{ route('landen.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="Naam" class="block text-sm font-medium text-black">Naam</label> <!-- Zwarte tekst -->
                <input type="text" name="Naam" id="Naam" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('Naam') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="EersteTaal" class="block text-sm font-medium text-black">Eerste Taal</label>
                <input type="text" name="EersteTaal" id="EersteTaal" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('EersteTaal') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="AantalInwooners" class="block text-sm font-medium text-black">Aantal Inwoners</label>
                <input type="number" name="AantalInwooners" id="AantalInwooners" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('AantalInwooners') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="AantalInwoonersDatum" class="block text-sm font-medium text-black">Aantal Inwoners Datum</label>
                <input type="date" name="AantalInwoonersDatum" id="AantalInwoonersDatum" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('AantalInwoonersDatum') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="Hooftstad" class="block text-sm font-medium text-black">Hoofdstad</label>
                <input type="text" name="Hooftstad" id="Hooftstad" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('Hooftstad') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="TelefoonCode" class="block text-sm font-medium text-black">Telefooncode</label>
                <input type="number" name="TelefoonCode" id="TelefoonCode" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('TelefoonCode') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="Bnp" class="block text-sm font-medium text-black">BNP</label>
                <input type="number" step="0.01" name="Bnp" id="Bnp" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('Bnp') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="BnpDatum" class="block text-sm font-medium text-black">BNP Datum</label>
                <input type="date" name="BnpDatum" id="BnpDatum" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('BnpDatum') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="Gevonden" class="block text-sm font-medium text-black">Gevonden Datum</label>
                <input type="date" name="Gevonden" id="Gevonden" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 text-black" required> <!-- Zwarte tekst in invoerveld -->
                @error('Gevonden') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Toevoegen</button>
        </form>
    </div>
</x-app-layout>
