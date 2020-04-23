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
        <div class="head-outcome" id="interactive-media">
            <h1>interactive media</h1>
        </div>

        <div class="scrolling-wrapper">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">Prototypes of interactive media</h2>
                        <div style="background-image: url({{ asset('assets/img/Character_running_still.jpg') }});" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/S_Forest.00_00_00_16.Still002.jpg') }});" class="commentary-secondimage"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                        <iframe style="width: 100%" height="100%" src="https://www.youtube-nocookie.com/embed/fvDJyErXOkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">Fourth - fictional game trailer</h2>
                        <p class="commentary-p">Some sort of explanation why I made the choices I made... And some other context that explains the visuals you saw before</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                            <iframe style="width: 100%" height="100%" src="https://www.youtube.com/embed/Jz5CyegPanA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrolling-wrapper">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-small-video">
                            <iframe style="width: 100%" height="100%" src="https://www.youtube.com/embed/I0WH2fulQlk?rel=0&controls=0&autoplay=1&loop=1&mute=1&playlist=I0WH2fulQlk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="commentary-p">Some sort of explanation why I made the choices I made... And some other context that can explain the visuals you are seeing</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div style="background-image: url({{ asset('assets/img/iteraties_fourth.png') }});" class="commentary-singleimage"></div>
                        <h2 class="commentary-singelimage-text">Iterations of the Fourth logo</h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                            <iframe style="width: 100%" height="100%" src="https://www.youtube.com/embed/qF-vTw27VHw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
