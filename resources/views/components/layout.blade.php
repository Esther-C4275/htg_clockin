<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


<style>
    #page-preloader {
            position: fixed;
            inset: 0; 
            width: 100%;
            height: 100vh;
            background-color: #ffffff; 
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        
        .spinner {
            width: 42px;
            height: 42px;
            border: 4px solid #e5e7eb;
            border-top: 4px solid #2563eb; 
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        
        #page-preloader.loaded {
            opacity: 0;
            visibility: hidden;
        }
</style>

</head>


<body>

    <div id="page-preloader">
        <div class="spinner"></div>
    </div>

    <main>
        @if(session('success'))
            <x-alert type="success" message="{{ session('success') }}" />
        @endif
        @if(session('error'))
            <x-alert type="error" message="{{ session('error') }}" />
        @endif
        {{ $slot }}
    </main>


    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('page-preloader');
            if (preloader) {
                preloader.classList.add('loaded');
            }
        });
    </script>

</body>

</html>