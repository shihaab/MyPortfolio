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
        <div class="head-outcome" id="professional-identity">
            <a href="/#outcome-6" class="goBack">Shihaab Rouine</a>
            <h1>professional identity</h1>
        </div>

        <div style="overflow-x: hidden;" class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner" style="height: 80vh">
                        <h2 style="position:unset;" class="commentary-text-side">Shihaab, a closer look</h2>
                        <p style="font-family: futura-pt, sans-serif;font-weight: 500;font-style: normal;font-size: 3vw;text-align: right;white-space: normal;max-width: 31vw;bottom: 0;position: absolute;">
                            Mijn persoonlijke en professionele groei gedurende dit semester
                        </p>
                        <div style="background-image: url({{ asset('assets/img/compressed/slide.gif') }});" class="commentary-image-side"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Professionele identiteit</h1>
                <p>
                Mijn huidige kennis tot nu toe: Ik heb 3 jaar een mbo-opleiding gevolgd (applicatie- en mediaontwikkeling). Daar heb ik 3 stages gevolg en de laatste in Spanje voor 6 maanden. Hierdoor heb ik veel kennis van de praktijk als webdeveloper. Op het mbo leerden we over het ontwerpen van een website en het ontwikkelen, het nadenken/onderzoeken over keuzes werd niet echt behandeld. Dit was iets waar ik wel op wilde letten en miste ik op het mbo. 
                <br><br>Tijdens de buitenlandse stage was communicatie erg belangrijk en ook toen heb ik daar veel van geleerd. Ik vond het leuk om terug te kijken naar het begin en hoe erg ik was veranderd in maar 6 maanden. Ik vond het leuk om mezelf uit mijn comfort zone te zetten en me open te testellen voor nieuwe technieken. Dit past dan ook goed bij wie ik wil worden, iemand die verder gaat en het onbekende van zichzelf wil ontdekken.

                </p>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Portfolio</h1>
                <p>
                Hier verwijs ik weer naar het <a class="link" target="_blank" href="/assets/files/Portfolio%20Proces%20Shihaab%20Rouine%20v3.pdf">portfolio proces document</a>, hierin staat beschreven waarom ik keuzes heb gemaakt en waar dit design vandaan komt. Ik heb al het werk in dit portfolio zelf gemaakt in de afgelopen 6 maanden. Dit is verdeeld onder opdrachten aangeboden door school en een detacheringsbureau waar ik sinds januari 2020 werk. In het portfolio staan reflecties en onderbouwing van bepaalde keuzes. Ook heb ik gebruik gemaakt van peer-to-peer feedback en feedback van mensen om mij heen.
                </p>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Groei</h1>
                <p>
                In de afgelopen 6 maanden ben ik enorm gegroeid, niet alleen in mijn professionele houding maar ook persoonlijk. Ik merk dat ik een mind-set heb aangenomen om te reflecteren wanneer er iets niet helemaal gebeurt zoals ik had gewild. Hier ben ik blij om omdat ik wel wist dat ik dit wilde doen maar het kwam er niet van. Nu reflecteer ik en bedenk ik wat ik beter kan doen de volgende keer. De volgende stap is het ook daadwerkelijk beter doen de volgende keer. “The definition of insanity is doing the same thing over and over again, but expecting different results.”.
                <br><br>Zoals ik bij de leeruitkomst communication heb beschreven, was communicatie niet mijn beste vak. Dat is in dit semester echt vooruitgegaan.
                </p>
            </div>
        </div>
        <div class="scrolling-wrapper" id="wrapper-2">
            <div class="card">
                <div class="commentary" style="padding-top: 0;">
                    <div class="commentary-inner">
                        <div class="commentary-video" style="background-image: url({{ asset('assets/img/communicatie_feedback_bernd_jan.png') }});background-size: contain;background-repeat: no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <p style="top:0;left:0;text-align:left;max-width:100vw;" class="commentary-p"><span class="quote">Je komt communicatief sterk en vaardig over in persoon, en in videogesprekken. De visuele presentatie van je werk komt ook sterk over, de structurele presentatie en inhoudelijke toelichting nu nog niet.</span> – Bernd-Jan Witkamp
                        <br>Ik heb Bernd-Jan gevraagd om feedback te geven op mijn communicatie met hem dit semester.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" style="background-image: url({{ asset('assets/img/IMG_1073.JPG') }});filter: url();background-position-y: center;">
            <div style="width: 35vw; left: 32.5vw;">a journey of discovery</div>
        </div>
        <script>
            window.addEventListener("scroll",
                function (event) {
                    wrapper1();
                    // console.log(document.getElementById("wrapper-1").scrollLeft);
                },
                false
            );

            var vWrapper1 = false;
            function wrapper1() {
                var element = document.getElementById("wrapper-1");
                if(!vWrapper1){
                    let scrollTop = window.scrollY,
                    elementOffset = element.offsetTop,
                    distance = (elementOffset - scrollTop);
                    // console.log(distance);
                    if(distance < 100) {
                        vWrapper1 = true;
                        scrollTo('wrapper-1', '500', '1500')
                    }
                }
                else if(element.scrollLeft <= 0) {
                    vWrapper1 = false;
                }
            }

            function scrollTo(elementId, to, duration) {
                let element = document.getElementById(elementId);
                let start = element.scrollLeft,
                change = to - start,
                currentTime = 0,
                increment = 20;

                let animateScroll = function(){        
                    currentTime += increment;
                    let val = Math.easeInOutQuad(currentTime, start, change, duration);
                    element.scrollLeft = val;
                    if(currentTime < duration) {
                        setTimeout(animateScroll, increment);
                    }
                };
                animateScroll();
            }

            //t = current time
            //b = start value
            //c = change in value
            //d = duration
            Math.easeInOutQuad = function (t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t + b;
                    t--;
                return -c/2 * (t*(t-2) - 1) + b;
            };
        </script>
    </body>
</html>
