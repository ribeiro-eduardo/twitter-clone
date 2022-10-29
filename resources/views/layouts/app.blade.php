<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if (Session::has('success'))
                    @livewire('util-components.success', ['message' => Session::get('success')])
                @endif

                @if (Session::has('error'))
                    @livewire('util-components.error', ['message' => Session::get('error')])
                @endif

                @if (Session::has('warning'))
                    @livewire('util-components.warning', ['message' => Session::get('warning')])
                @endif

                {{ $slot }}

                <script>

                    window.addEventListener('modalTemplate', event => {
                        window.util.modalTemplate(event.detail.template, event.detail.model , event.detail.id, event.detail.tamanho);
                    })

                   </script>
            </main>
        </div>
        @livewireScripts
    </body>
</html>
