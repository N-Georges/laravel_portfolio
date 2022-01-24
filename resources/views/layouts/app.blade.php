<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
</head>

<body>
    <div>
        {{-- nav top Search --}}
        <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
            @include('admin.components.nav-search')
        </nav>

        <div class="flex overflow-hidden bg-white pt-16">
            {{-- nav aside --}}
            @include('admin.components.nav-aside')
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            {{-- main --}}
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="p-6 px-4">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>




    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
