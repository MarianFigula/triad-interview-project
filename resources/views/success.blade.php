<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<section>
    <div class="section-content-wrapper bg-dark">
        <h2 class="mt-5 ms-3 text-green">
            Ďakujeme za zaslanie popisu tvojej práce.
        </h2>
        <p class="ms-3">
            <span class="fw-bold">
                Skutočný Wosa si ju čoskoro pozrie
            </span>
            a možno
            sa ti ozve. Držíme palce.
        </p>
    </div>
    <div class="section-content-wrapper bg-white">
        <div class="wosa-wrapper" style="justify-content: center">
            <div class="wosa-img">
                <img
                    src="{{asset('imgs/wosa.svg')}}"
                    alt="Wosa">
            </div>
        </div>
        <p class="mt-5 fw-bold" style="text-align: center">
            Chceš si feedback vypočuť neskôr?
            <a href=""
               class="ms-1 text-underline-offset-0-5 text-dark">
                Stiahni si ho
            </a>
        </p>
    </div>

</section>

</body>
</html>
