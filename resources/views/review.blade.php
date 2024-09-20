<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="green-frame">
    <header>
        <nav>
            <ul>
                <li>
                    <img
                        src="{{asset("imgs/TRIAD-Logo-v01-01.svg")}}"
                        alt="Triad Logo">
                </li>
                <li>
                    <a href="#"
                       class="text-green
                           text-underline-offset-0-5
                           fw-bold"
                    >Chcem feedback</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="bg-dark">
        <div class="section-content-wrapper">
            <h1 class="review-head">
                Review
            </h1>
            <h1 class="mt-5 ms-3 text-green">ktoré ťa posunie</h1>
        </div>
        <div class="section-content-wrapper">
            <h2>Vždy si túžil po feedbacku, ktorý ťa posunie?
                Tento ťa môže poslať na kávu s Wosom,
                <span class="text-green">
                    alebo až do Devína.
                </span></h2>
        </div>

    </section>
</div>

<section>
    <div class="section-content-wrapper bg-dark">
        <h2>
            Opíš nám svoju prácu,
            s ktorou si fakt spokojný 🙌
        </h2>
        <p>
                <span class="fw-bold">
                    Najskôr ti ju okomentuje naše AI vytrénované
                </span>
            na svetových prácach. A kým si urobíš čaj,
            môže prísť pozvanie na kávu od nás.
        </p>
    </div>
    <div class="section-content-wrapper bg-white">

        <div class="wosa-wrapper">
            <div class="wosa-img">
                <img
                    src="{{asset('imgs/wosa.svg')}}"
                    alt="Wosa">
            </div>
            <div>
                <h2>
                    <span class="text-green">Wosa</span>
                    ti dá feedback
                </h2>
                <p class="">
                        <span class="fw-bold">
                            Chief Creative and Strategy Officer
                        </span>
                    <br>
                    pre slovenský a český TRIAD.
                </p>
            </div>
        </div>
        <p>
            Držtieľ ocenenia Filip,
            majiteľ stoviek ocenení od slovenských grand prix,
            cez New York až po globálne ocenenia na Warc,
            Effie a Saber
        </p>
        <a href=""
           class="text-underline-offset-0-5 text-dark">
            Poď si po feedback od AI Wosu
        </a>
    </div>
</section>

<section class="bg-dark">
    <div class="form-section-content-wrapper">
        <div class="form-left">
            <h2 class="mb-3">1. Nahraj CV</h2>
            <label for="name">Napíš nám ako sa voláš</label>
            <input type="text" id="name" name="name"
                   placeholder="Meno a priezvisko"
                   required>

            <label for="email">Kontakt na teba</label>
            <input type="email" id="email" name="email"
                   placeholder="E-mail"
                   required>

            <label for="file" class="custom-file-upload">
                <a href=""
                   class="text-green
                text-underline-offset-0-5">
                    Nahraj svoje CV</a>
            </label>
            <input type="file" id="file" name="file">
        </div>

        <hr class="vertical-line"/>

        <div class="form-right">
            <h2>2. Opíš prácu</h2>
            <label for="description">Opis práce</label>
            <textarea
                id="description"
                name="description"
                rows="7"
                placeholder="Sem opíš svoju prácu, ktorú máš rád, alebo chceš vylepšiť"
                required></textarea>


            <label for="agree" class="fs-0-75">
                <input type="checkbox" id="agree" name="agree">
                Súhlasím so spracovaním
                <a href="" class="text-green">
                    osobných údajov
                </a>
            </label>
            <button type="submit">Odoslať</button>
        </div>
    </div>
</section>

</body>
</html>
