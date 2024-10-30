<!-- resources/views/landen/index.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-blue-400">Landen Overzicht</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('landen.create') }}" class="text-white bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">Nieuw Land Toevoegen</a>

        <div class="mt-4">
            <div class="hidden lg:block"> 
                <table class="min-w-full bg-gray-700 border border-blue-300">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-2 px-4 border-b text-left">Naam</th>
                            <th class="py-2 px-4 border-b text-left">Eerste Taal</th>
                            <th class="py-2 px-4 border-b text-left">Aantal Inwoners</th>
                            <th class="py-2 px-4 border-b text-left">Aantal Inwoners Datum</th>
                            <th class="py-2 px-4 border-b text-left">Hoofdstad</th>
                            <th class="py-2 px-4 border-b text-left">Telefooncode</th>
                            <th class="py-2 px-4 border-b text-left">BNP</th>
                            <th class="py-2 px-4 border-b text-left">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($landen as $land)
                            <tr class="text-white">
                                <td class="py-2 px-4 border-b">{{ $land->Naam }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->EersteTaal }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->AantalInwooners }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->AantalInwoonersDatum ? $land->AantalInwoonersDatum->format('Y-m-d') : 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->Hooftstad }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->TelefoonCode }}</td>
                                <td class="py-2 px-4 border-b">{{ $land->Bnp }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('landen.edit', ['landen' => $land->id]) }}" class="text-blue-300 hover:underline">Bewerk</a> |
                                    <form action="{{ route('landen.destroy', ['landen' => $land->id]) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:underline" onclick="return confirm('Weet je zeker dat je dit land wilt verwijderen?')">Verwijder</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="lg:hidden"> 
                @foreach ($landen as $land)
                    <div class="bg-gray-700 text-white p-4 rounded-lg mb-4">
                        <h2 class="text-lg font-bold">{{ $land->Naam }}</h2>
                        <p><strong>Eerste Taal:</strong> {{ $land->EersteTaal }}</p>
                        <p><strong>Aantal Inwoners:</strong> {{ $land->AantalInwooners }}</p>
                        <p><strong>Aantal Inwoners Datum:</strong> {{ $land->AantalInwoonersDatum ? $land->AantalInwoonersDatum->format('Y-m-d') : 'N/A' }}</p>
                        <p><strong>Hoofdstad:</strong> {{ $land->Hooftstad }}</p>
                        <p><strong>Telefooncode:</strong> {{ $land->TelefoonCode }}</p>
                        <p><strong>BNP:</strong> {{ $land->Bnp }}</p>
                        <div class="mt-2">
                            <a href="{{ route('landen.edit', ['landen' => $land->id]) }}" class="text-blue-300 hover:underline">Bewerk</a>
                            |
                            <form action="{{ route('landen.destroy', ['landen' => $land->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:underline" onclick="return confirm('Weet je zeker dat je dit land wilt verwijderen?')">Verwijder</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
