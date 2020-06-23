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
        <div class="head-outcome" id="design">
            <a href="/#outcome-4" class="goBack">Shihaab Rouine</a>
            <a href="/design" class="goPrev">&#8592;</a>  
            <a href="/communication" class="goNext">&#8594;</a>  
            <h1>research</h1>
        </div>

        <div class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Verkennend onderzoek</h1>
                <p>Ik heb een doelgroep onderzoek gedaan in het begin van het semester om een inzicht te krijgen wat voor mensen er naar IKAI zouden luisteren.</p>
            </div>
        </div>
        <div class="pdf-wrapper p-top">
            <div class="pdf-inner">
                <h1 class="pdf-text"><a class="link" target="_blank" href="/assets/files/Doelgroep%20Onderzoek%20IKAI.pdf">Doelgroep onderzoek IKAI</a></h1>
                <iframe style="height: 90vh;width:100%;" src="/assets/files/Doelgroep%20Onderzoek%20IKAI.pdf"></iframe>
            </div>
        </div>
        <div class="text-wrapper p-top">
            <div class="text-inner">
                <p>Voor de specialisatie branding heb ik een merkonderzoek gedaan over Call of Duty: Modern Warfare. Hiervoor heb ik een brand identity prism methode gebruikt.</p>
            </div>
        </div>
        <div class="scrolling-wrapper" id="wrapper-2">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                        <h1 class="pdf-text"><a class="link" target="_blank" href="/assets/files/Brand%20Research%20-%20Specialisatie%20Branding%20v1.pdf">Brand research Call of Duty: Modern Warfare v1</a></h1>
                        <iframe style="height: 100%;width:100%;" src="/assets/files/Brand%20Research%20-%20Specialisatie%20Branding%20v1.pdf"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <p style="max-width: 100vw;top:50vh;font-size: 2.5vw;text-align: left;" class="commentary-p">Ik heb deze feedback opgepakt en heb hiermee een nieuwe versie gemaakt.</p>
                        <div style="background-image: url({{ asset('assets/img/feedback_evert.png') }});width: 100%;height: 45vh;background-size: contain;background-repeat: no-repeat;" class="commentary-firstimage"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                        <h1 class="pdf-text"><a class="link" target="_blank" href="/assets/files/Brand%20Research%20-%20Specialisatie%20Branding%20v2.pdf">Brand research Call of Duty: Modern Warfare v2</a></h1>
                        <iframe style="height: 100%;width:100%;" src="/assets/files/Brand%20Research%20-%20Specialisatie%20Branding%20v2.pdf"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div style="overflow: hidden;" class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text" style="font-size: 10vw;top: 28vw;">Methoden</h2>
                        <div style="background-image: url({{ asset('assets/img/field-focus-group.png')}});background-size: contain;background-position: left;" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/work-sketching.png') }});" class="commentary-secondimage"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-wrapper">
            <div class="text-inner">
                <p>
                    Ik gebruik vaak library research als ik iets snel wil weten.
                    <br><br>Ik heb de A/B testing method gebruikt op pagina 14 in het <a class="link" target="_blank" href="/assets/files/Portfolio%20Proces%20Shihaab%20Rouine%20v3.pdf">portfolio proces document</a>.
                    <br><br>Tijdens het maken van dit proces heb ik gebruik gemaakt van de volgende methodes: <b class="stepping-stones">Inspiration Wall</b>, <b class="workshop">Prototyping</b>, <b class="workshop">Brainstorm</b>, <b class="workshop">Sketching</b>, <b class="workshop">Proof of Concept</b>, <b class="lab">A/B testing</b>, <b class="showroom">Peer Review</b> en <b class="library">Benchmark Creation</b>.
                </p>
            </div>
        </div>
        <div style="margin-bottom: 20vh;" class="text-wrapper p-top">
            <div class="text-inner">
                <h1>Nieuwsgierige en kritische houding</h1>
                <p>Als ik iets zie wat ik niet ken wil ik snel weten wat het is en hoe het werkt. Dit doe ik dan vaak door online op te zoeken (library research).</p>
            </div>
        </div>
        <div class="footer" style="background-image: url({{ asset('assets/img/IMG_0908.JPG') }});filter: url();">
            <div style="width: 35vw; left: 32.5vw;">a journey of discovery</div>
        </div>
    </body>
</html>
