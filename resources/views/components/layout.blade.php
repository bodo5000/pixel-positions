<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blacks text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b py-4 border-white/10">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Carrers</a>
                <a href="">Salarys</a>
                <a href="">Companies</a>
            </div>

            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
