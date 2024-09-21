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
        <p>
            <span>Skutočný Wosa si ju čoskoro pozrie</span> a možno
            sa ti ozve. Držíme palce.
        </p>
    </div>
    <div class="section-content-wrapper bg-white">
        <div class="wosa-wrapper">
            <div class="wosa-img">
                <img
                    src="{{asset('imgs/wosa.svg')}}"
                    alt="Wosa">
            </div>
        </div>
    </div>

</section>

</body>
</html>
