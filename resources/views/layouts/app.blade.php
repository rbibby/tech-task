<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Homeowner Data Converter</title>
</head>
<body class="bg-slate-100">
    <div class="bg-sky-800 text-white py-4 mb-6">
        <div class="container mx-auto">
            <h1 class="text-xl">Homeowner Data Converter</h1>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
