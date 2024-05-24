<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/3061872539.js" crossorigin="anonymous"></script>

    <title>Laravel</title>
</head>
<body class="h-full bg-selago-50">
    <div class="flex">
        <div>
            <div class="fixed w-32 h-screen left-0 p-5">
                <x-sidebar></x-sidebar>
            </div>
            @if (request()->is('/'))
                <div class="fixed w-80 h-screen bg-white rounded-l-3xl right-0">
                    <x-sidebar-update></x-sidebar-update>
                </div>
            @endif
        </div>
        <div class="w-full p-10" style="padding-left: 10.5rem; {{ request()->is('/') ? 'padding-right: 23rem;' : '' }}">
            <div class="h-20">
                <x-header></x-header>
            </div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
