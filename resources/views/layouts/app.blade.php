<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Examples</title>
    @vite('resources/css/main.css')
    @livewireStyles
</head>

<body>
    <main class="container mx-auto">
        @yield('content')
    </main>
    @livewireScripts
</body>

</html>
