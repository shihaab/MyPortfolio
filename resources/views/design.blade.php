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
            <a href="/" class="goBack">Shihaab Rouine</a>
            <h1>design</h1>
        </div>

        <div class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text" style="font-size: 7vw;">Visual designs</h2>
                        <div style="background-image: url({{ asset('assets/img/compressed/IMG_0522.JPG') }});" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/compressed/IMG_0487.JPG') }});" class="commentary-secondimage"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">MyBrogrammers - internal project at my secondment agency</h2>
                        <p class="commentary-p">The following page is a clickable wireframe meant for the stakeholders of this project</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-video">
                            <iframe style="width: 100%; height: 100%;" src="https://xd.adobe.com/embed/f1b96907-bb8b-4afa-4801-f71cf58459ce-8788/" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrolling-wrapper" id="wrapper-2">
        <span style="
        position: absolute;
        bottom: 91px;
        left: 120px;
        font-size: 2em;
        font-weight: bold;
        font-family: monospace;
        z-index: 1;
        transform: scale(1.5);
        opacity: .5;
        "><kbd style="
        color: white;
        background-color: black;
        border-radius: 5px;
        padding: 5px 7px;
        ">Shift</kbd> + <kbd style="
        color: white;
        background-color: black;
        border-radius: 5px;
        padding: 5px 7px;
        ">Scroll</kbd></span>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">Borderline - digital strategy game</h2>
                        <div style="background-image: url({{ asset('assets/img/dansman3.png') }});" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/dansman2.png') }});" class="commentary-secondimage"></div>
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
        <div class="footer" style="background-image: url({{ asset('assets/img/IMG_0908.JPG') }});filter: url();">
            <div style="width: 35vw; left: 32.5vw;">a journey of discovery</div>
        </div>
        <script>   
            window.addEventListener("scroll",
                function (event) {
                    wrapper1();
                    wrapper2();
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
            var vWrapper2 = false;
            function wrapper2() {
                var element = document.getElementById("wrapper-2");
                if(!vWrapper2){
                    let scrollTop = window.scrollY,
                    elementOffset = element.offsetTop,
                    distance = (elementOffset - scrollTop);
                    // console.log(distance);
                    if(distance < 100) {
                        vWrapper2 = true;
                        scrollTo('wrapper-2', '500', '1500')
                    }
                }
                else if(element.scrollLeft <= 0) {
                    vWrapper2 = false;
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
