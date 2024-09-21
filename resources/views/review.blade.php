<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="green-frame bg-dark">
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

    <section class="">
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
        <div class="arrow-wrapper mt-5">
            <img src="{{asset('imgs/arrow.svg')}}" alt="arrow">
        </div>
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
    <form action="" method="POST" class="form-section-content-wrapper">

        <div class="form-left">
            <h2 class="">
                <img src="{{asset('imgs/number-one-in-circle.svg')}}"
                     alt="one">
                Nahraj CV
            </h2>
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
            <h2 class="">
                <img src="{{asset('imgs/number-two-in-circle.svg')}}"
                     alt="two">
                Opíš prácu</h2>
            <label for="description">Opis práce</label>
            <textarea
                id="description"
                name="description"
                rows="15"
                placeholder="Sem opíš svoju prácu, ktorú máš rád, alebo chceš vylepšiť"
                required></textarea>

            <div class="agreement-wrapper">
                <div class="agreement">
                    <label for="agree"></label>
                    <input type="checkbox" id="agree" name="agree">
                    Súhlasím so spracovaním
                    <a href="" class="text-green">
                        osobných údajov
                    </a>
                </div>
                <button type="submit" class="fw-bold">Odošli a vyhodnoť</button>
            </div>
        </div>
    </form>
</section>

<section class="bg-white">
    <div class="section-content-wrapper">
        <h1>Toto sme my, <span class="text-green">TRIAD</span></h1>
        <p>
            <span class="fw-bold">Už takmer dekádu sme
                špička slovenskej reklamy.
            Sme trojnásobná agentúra roka
            </span> a pracujeme pre klientov, ako sú:
            O2, VÚB, Fun Rádio, Rádio Vlna, LIDL, Martinus,
            Slido, Corwin či mnohí ďalší.
        </p>
        <p>
            Baví nás robiť svetovú prácu ale popri tom si ulietať
            aj na humore na hrane či láskavej šikane.
            V TRIADe žijeme reklamou priamo pri hrade v malebnom
            Devíne ale čochvíľa team, kam hľadáme ideamakra, bude užívať
            nie len krásy domčeka,
            ale časť týždna aj nové moderné priestory v Eurovea2.
        </p>
    </div>
    <div class="section-content-wrapper">
        <div class="triad-group">
            <img src="{{asset('imgs/footer-img.png')}}" alt="triad-group">
        </div>
    </div>
</section>

<footer class="bg-white">
    <div class="logo-wrapper">
        <img src="{{asset('imgs/TRIAD-Logo-v01-01.svg')}}" alt="triad-logo">
    </div>

    <div class="member-wrapper text-green">
        <p class="">
            Triad is a member of
            <a href="#" class="text-green">DevinBand
                <img src="{{asset('imgs/arrow-link.svg')}}" alt="arrow-link">
            </a>
        </p>
        <p>
            We use
            <a href="#" class="text-green">Allfred
                <img src="{{asset('imgs/arrow-link.svg')}}" alt="arrow-link">
            </a>
        </p>
        <p>
            for agency management
        </p>
    </div>

    <div class="link-wrapper">
        <p>
            Try our super useful newsletter!
        </p>
        <p class="text-dark">
            <a href="" class="text-dark">Home</a>,
            <a href="" class="text-dark">About</a>,
            <a href="" class="text-dark">Work</a>,
            <a href="" class="text-dark">Services</a>,
            <a href="" class="text-dark">Contact</a>,
            <a href="" class="text-dark">Kariéra</a>,
            <a href="" class="text-dark">Blog</a>,
            <a href="" class="text-dark">Privacy policy</a>
        </p>
    </div>
    <div class="link-wrapper">
        <p>
            your@email.here
            <a href="" class="text-green ms-1 decoration-underline">Sign me up</a>
        </p>
        <p class="text-green">
            <a href="" class="text-green">Instagram</a>,
            <a href="" class="text-green">Facebook</a>,
            <a href="" class="text-green">YouTube</a>,
            <a href="" class="text-green">Spotify</a>,
            <a href="" class="text-green">LinkedIn</a>,
            <a href="" class="text-green">TikTok</a>,
        </p>
    </div>
</footer>

</body>
</html>
