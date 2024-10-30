<!-- resources/views/landen/create.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-blue-400">Land Toevoegen</h1>

        <form action="{{ route('landen.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="Naam" class="block text-sm font-medium text-black">Naam</label>
                <input type="text" name="Naam" id="Naam" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('Naam') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="EersteTaal" class="block text-sm font-medium text-black">Eerste Taal</label>
                <input type="text" name="EersteTaal" id="EersteTaal" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('EersteTaal') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="AantalInwooners" class="block text-sm font-medium text-black">Aantal Inwoners</label>
                <input type="number" name="AantalInwooners" id="AantalInwooners" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('AantalInwooners') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="AantalInwoonersDatum" class="block text-sm font-medium text-black">Aantal Inwoners Datum</label>
                <input type="date" name="AantalInwoonersDatum" id="AantalInwoonersDatum" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('AantalInwoonersDatum') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="Hooftstad" class="block text-sm font-medium text-black">Hoofdstad</label>
                <input type="text" name="Hooftstad" id="Hooftstad" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('Hooftstad') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="TelefoonCode" class="block text-sm font-medium text-black">Telefooncode</label>
                <input type="number" name="TelefoonCode" id="TelefoonCode" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('TelefoonCode') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="Bnp" class="block text-sm font-medium text-black">BNP</label>
                <input type="number" step="0.01" name="Bnp" id="Bnp" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('Bnp') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="BnpDatum" class="block text-sm font-medium text-black">BNP Datum</label>
                <input type="date" name="BnpDatum" id="BnpDatum" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('BnpDatum') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="Gevonden" class="block text-sm font-medium text-black">Gevonden Datum</label>
                <input type="date" name="Gevonden" id="Gevonden" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-black" required>
                @error('Gevonden') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-200">Toevoegen</button>
        </form>
    </div>
</x-app-layout>
