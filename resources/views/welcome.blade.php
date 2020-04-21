<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shihaab Rouine</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/ove6yqz.css">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    </head>
    <body>
        <div class="wrapper-a">
            <ul class="nav">
                <li>
                    <a href="">Curricula Vitae</a>
                </li>
                <li>
                    <a href="">Portfolio's</a>
                </li>
                <li>
                    <a href="">Projects</a>
                </li>
            </ul>
            <div class="landing-title"><p>Shihaab</p> <p class="b">Rouine</p></div>
        </div>
        <div class="wrapper-b">
            <!-- <div class="quoteme">
                <p>Something that describes me</p>
            </div> -->
            <p>Something that describes me</p>
        </div>
        <div class="wrapper-c">
            <!-- interactive media -->
            <div class="outcome">
                <a href="interactive-media" class="outcome-firstimage" id="interactive-media-firstimage"></a>
                <a href="interactive-media" id="interactive-media-header">
                    <h1>interactive media</h1>
                </a>
                <a href="interactive-media" class="outcome-secondimage" id="interactive-media-secondimage"></a>
            </div>
            <!-- development -->
            <!-- <div class="outcome">
                <a href="development" class="outcome-firstimage" id="development-firstimage"></a>
                <a href="development" id="development-header">
                    <h1>development</h1>
                </a>
                <a href="development" class="outcome-secondimage" id="development-secondimage"></a>
            </div> -->
        </div>
    </body>
</html>
