<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio showcasing my learning outcomes">
        <meta name="keywords" content="Portfolio, learning outcome, shihaab, rouine">
        <meta name="author" content="Shihaab Rouine">

        <title>Shihaab Rouine</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/ove6yqz.css">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    </head>
    <body>
        <div class="wrapper-a">
            <a href="#going-further" class="scroll-down">look further</a>
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
        <div class="wrapper-b" id="going-further">
            <!-- <div class="quoteme">
                <p>Something that describes me</p>
            </div> -->
            <p>Something that describes me.</p>
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
            <!-- professional-identity -->
            <div class="outcome">
                <a href="professional-identity" class="outcome-firstimage" id="professional-identity-firstimage"></a>
                <a href="professional-identity" id="professional-identity-header">
                    <h1>professional identity</h1>
                </a>
                <a href="professional-identity" class="outcome-secondimage" id="professional-identity-secondimage"></a>
            </div>
        </div>
        <span class="cursor"></span>
        <div class="footer">
            <div>the never ending cycle of learning</div>
        </div>
    </body>
</html>
