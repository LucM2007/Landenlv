<!-- resources/views/components/app-layout.blade.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mijn Applicatie' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800 text-white">
    <div class="min-h-screen">
        {{ $slot }}
    </div>
</body>
</html>
