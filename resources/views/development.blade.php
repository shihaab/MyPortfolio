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
            <h1>development</h1>
        </div>

        <div class="scrolling-wrapper" id="wrapper-1">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">Proofs of concepts</h2>
                        <div style="background-image: url({{ asset('assets/img/compressed/IMG_2203.JPG') }});" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/compressed/IMG_0581.JPG') }});" class="commentary-secondimage"></div>
                    </div>
                </div>
            </div>
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
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                            <iframe style="width: 100%; height: 100%;" scrolling="no" title="Portfolio POC: inverted text" src="https://codepen.io/shihaab/embed/gOaaezg?height=521&theme-id=39076&default-tab=css,result" frameborder="no" allowtransparency="true" allowfullscreen="true" loading="lazy">
                            See the Pen <a href='https://codepen.io/shihaab/pen/gOaaezg'>Portfolio POC: inverted text</a> by Shihaab Rouinw
                            (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="commentary-wrapper">
            <div class="commentary">
            <h2>Github version control</h2>
                <div class="commentary-inner">
                    <div style="background-image: url({{ asset('assets/img/old_commits.png') }}); background-size: contain; background-repeat: no-repeat" class="commentary-singleimage"></div>
                    <!-- <h2 class="commentary-singelimage-text">Last commits</h2> -->
                </div>
            </div>
        </div>
        <div class="footer" style="background-image: url({{ asset('assets/img/IMG_0966.JPG') }});filter: url();background-position-y: center;">
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
