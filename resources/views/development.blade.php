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
        <div class="head-outcome" id="development">
            <a href="/#outcome-2" class="goBack">Shihaab Rouine</a>    
            <h1>development</h1>
        </div>

        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Proof of concept</h1>
                <p>
                    Voor mijn portfolio wil ik een zij menu op de landingpage, zodat je een overzicht hebt van waar je bent op de pagina. Alle leeruitkomsten moeten hierop staan en het moet mee scrollen zodat je weet waar je bent.
                    <br>Ik heb er een kleine proof of concept van gemaakt. Dit heb ik uiteindelijk gebruikt voor dit portfolio.
                </p>
            </div>
        </div>
        <div style="overflow:hidden;" class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                            <iframe style="width: 100%; height: 100%;" scrolling="no" title="Scroll menu" src="https://codepen.io/shihaab/embed/JjYNEEj?height=300&theme-id=39076&default-tab=js,result" frameborder="no" allowtransparency="true" allowfullscreen="true" loading="lazy">
                            See the Pen <a href='https://codepen.io/shihaab/pen/JjYNEEj'>Scroll menu</a> by Shihaab Rouinw
                            (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>MyBrogrammers</h1>
                <p>
                    Een van de functionaliteiten in de MyBrogrammers applicatie is het exporteren van alle gewerkte uren van een werknemer. In Laravel Nova heb je custom cards die je kan genereren en toevoegen aan je pagina’s. Deze cards zijn gemaakt in Vue.js, hier had ik eerder mee gewerkt. Iedere werknemer moet volgens het detacheringsbureau zijn/haar gewerkte uren invullen in MyBrogrammers. De opdrachtgever/werkgever moet alle uren van een werknemer bij een uitgezonden bedrijf en van een geselecteerde periode kunnen exporteren. Dit zijn twee periodes in elke maand. De eerste dag tot de 15de en de 16de tot de laatste dag in de maand. Hieronder een Codepen waarin de code staat van deze functionaliteit, het is alleen de inhoud van de Laravel Nova Card in Vue.js en de HomeController functie in PHP.
                </p>
            </div>
        </div>
        <div class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                        <iframe style="width: 100%; height: 100%;" scrolling="no" title="[Vue] Export To PDF" src="https://codepen.io/shihaab/embed/jOWWxJM?height=300&theme-id=39076&default-tab=js" frameborder="no" allowtransparency="true" allowfullscreen="true">
                        See the Pen <a href='https://codepen.io/shihaab/pen/jOWWxJM'>[Vue] Export To PDF</a> by Shihaab Rouine
                        (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                        <iframe style="width: 100%; height: 100%;" scrolling="no" title="HomeController.php" src="https://codepen.io/shihaab/embed/XWXXBLd?height=300&theme-id=39076&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true">
                        See the Pen <a href='https://codepen.io/shihaab/pen/XWXXBLd'>HomeController.php</a> by Shihaab Rouine
                        (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="overflow:hidden;" class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <p style="max-width: 100%;font-size:4vw;font-weight:normal;" class="commentary-text-side">Om deze functie wat makkelijker uit te leggen heb ik een korte schermopname van hoe de beheerder hierdoorheen loopt.</p>
                        <div class="commentary-small-video">
                            <iframe style="width: 100%;height:100%" src="https://www.youtube.com/embed/VuoiiDO76wU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <p>
                    De MyBrogrammers applicatie heb ik helemaal zelf gemaakt, dit is van het eerste gesprek met de opdrachtgever tot en met het beheren van de applicatie. Ik kreeg een A4'tje met een paar kopjes van functionaliteiten en dat heb ik uitgewerkt tot een complete wireframe. De applicatie staat nu online en wordt gebruikt door de werknemers bij MyBrogrammers. <a class="link" target="_blank" href="https://youtu.be/4Px8nctEeLM">Video van webapp als gebruiker</a>.
                </p>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Automatisch scrollen</h1>
                <p>
                Ook heb ik een kort script gemaakt dat automatisch scrolt wanneer de gebruiker langs het proces scherm komt. Dit werkte maar niet echt handig voor de gebruiker, de bedoeling was dat op die manier duidelijk was dat er gescrold kon worden. Want dat was eerst niet duidelijk.
                </p>
            </div>
        </div>
        <div class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <p style="max-width: 100%;font-size:3.67vw;;font-weight:normal;" class="commentary-text-side">Ik heb de functie opgenomen en op YouTube gezet. En had hier wat andere oplossingen voor geprobeerd en had hier pens van gemaakt.</p>
                        <div class="commentary-small-video">
                        <iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/IT_YY09DYHM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                        <iframe style="width: 100%; height: 100%;" scrolling="no" title="Scroll in container - V1.2" src="https://codepen.io/shihaab/embed/vYNeeKd?height=399&theme-id=39076&default-tab=js,result" frameborder="no" allowtransparency="true" allowfullscreen="true">
                        See the Pen <a href='https://codepen.io/shihaab/pen/vYNeeKd'>Scroll in container - V1.2</a> by Shihaab Rouine
                        (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                        <iframe style="width: 100%; height: 100%;" scrolling="no" title="Scroll in container - V1.3" src="https://codepen.io/shihaab/embed/gOaGGKZ?height=300&theme-id=39076&default-tab=js,result" frameborder="no" allowtransparency="true" allowfullscreen="true">
                        See the Pen <a href='https://codepen.io/shihaab/pen/gOaGGKZ'>Scroll in container - V1.3</a> by Shihaab Rouine
                        (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="commentary-wrapper">
            <div class="commentary">
            <h2>Github versie beheer</h2>
            <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://github.com/shihaab/MyPortfolio" data-iframely-url="//cdn.iframe.ly/QfBZ3lp"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="footer" style="background-image: url({{ asset('assets/img/IMG_0966.JPG') }});filter: url();background-position-y: center;">
            <div style="width: 35vw; left: 32.5vw;">a journey of discovery</div>
        </div>
    </body>
</html>
