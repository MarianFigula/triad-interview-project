<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li>
                    <img src="" alt="Triad Logo">
                </li>
                <li>
                    <a href="#">Chcem feedback</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="bg-white">
        <div class="section-content-wrapper">
            <h1>Review</h1>
            <h1>ktoré ťa posunie</h1>
        </div>
        <div class="section-content-wrapper">
            <h1>Vždy si túžil po feedbacku, ktorý ťa posunie?
                Tento ťa môže poslať na kávu s Wosom,
                <span class="text-green">
                alebo až do Devína.
            </span></h1>
        </div>

    </section>
    </body>
</html>
